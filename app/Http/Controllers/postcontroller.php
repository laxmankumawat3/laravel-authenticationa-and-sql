<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\posts;
use Illuminate\Support\Facades\DB;

class postcontroller extends Controller
{
    
    public function index()
{
        // Query to join users and posts tables
        // this is inner join it find both table user.id match thats row only get if no table is find then 
        $posts = DB::table('posts')
            ->join('users', 'users.id', '=', 'posts.user_id') // Join users and posts tables on user_id
            ->select('posts.*', 'users.name as author_name', 'users.email') // Select columns from both tables
            ->get(); // Retrieve the results

            echo "<pre>";
            print_r($posts->toArray());
        // Iterate through the results
        foreach ($posts as $post) {
            echo "Post ID: {$post->id}, Title: {$post->title}, Author: {$post->author_name}\n";
        }
}


// new outer join this is three part of this join let see what are the part of outer join 
// 1. left join , 2. Right Join , 3. full Join 

// Outer Join And it's Part

// 1. left join,  you are indeed performing a leftJoin from the "employees" table (e) to the "course" table (c). The leftJoin operation ensures that all rows from the "Employees" table are included in the result set, regardless of whether there is a matching row in the "course" table.left table is 'employees' and right table is 'course' 

   public function leftJoin(){
    $result = DB::table('employees as e')
    ->leftJoin('course as c', 'e.employees', '=', 'c.course_Id')
    ->select('e.*', 'c.*')
    ->orderBy('c.course_Id', 'asc')
    ->get();
    echo "<pre>";
    print_r($result->toArray());
   }

//  2.  rigthJoin , you are indeed performing a rightJoin from the "employees" table (e) to the "course" table (c). The rightJoin operation ensures that all rows from the "course" table are included in the result set, regardless of whether there is a matching row in the "employees" table.


   public function rigthJoin(){
    $result = DB::table('employees as e')
    ->rightJoin('course as c', 'c.course_Id', '=', 'e.employees')
    ->select('c.*', 'e.*')
    ->orderBy('c.course_Id', 'asc')
    ->get();
   echo '<pre>';
   print_r($result->toArray());
   }

//    3. full join 
public function fullJoin(){
    // $result = DB::table('employees as e')
    // ->join('course as c',  'c.course_Id' , '=' , 'e.employees', 'full outer' )
    // ->select( 'c.*','e.*')
    // ->get();
    $result = DB::table('employees as e')
    ->leftJoin('course as c', 'c.course_Id', '=', 'e.employees')
    ->select('c.*', 'e.*')
    ->unionAll(DB::table('course as c')
        ->rightJoin('employees as e', 'c.course_Id', '=', 'e.employees')
        ->select('c.*', 'e.*')
    )
    ->get();
     echo '<pre>';
     print_r($result->toArray());
}


// 4. Left Exclusive Join  in this join that row not include that is match in right table ;
  public function leftExclusiveJoin(){
    $result = DB::table('employees as e')
    ->leftJoin('course as c', 'c.course_Id', '=', 'e.employees')
    ->select('e.*')
    ->whereNull('c.course_Id') // Filters out rows where there is a match
    ->get();
    echo '<pre>';
    print_r($result->toArray());
  }
// 4. Right Exclusive Join  in this join that row not include that is match in left table ;
  public function rightExclusiveJoin(){
    $result = DB::table('employees as e')
    ->rightJoin('course as c', 'c.course_Id', '=', 'e.employees')
    ->select('c.*')
    ->whereNull('e.employees') // Filters out rows where there is a match
    ->get();
    echo '<pre>';
    print_r($result->toArray());
  }


//   5 self join It is a regular join but the table is joined with itself.


// 6  Union 

public function Union(){
    // First query
$query1 = DB::table('employees as e')
->rightJoin('course as c', 'c.course_Id', '=', 'e.employees')
->select('c.*', 'e.*');

// Second query
// $query2 = DB::table('another_table')
// ->where('condition', 'value')
// ->select('columns');
$query2 = DB::table('employees as a')
    ->rightJoin('course as c', 'c.course_Id', '=', 'a.employees')
    ->select('c.*', 'a.*');

// Union
$combinedQuery = $query1->union($query2);

// Execute the combined query
$result = $combinedQuery->orderBy('course_Id', 'asc')->get();
echo '<pre>';
print_r($result->toArray());

}

public function findaboveAvgmarkStd(){
echo    $averageMark = DB::table('class')->avg('mark');
echo '<br>';

$studentsAboveAverage = DB::table('class')
    ->select('name')
    ->where('mark', '>', $averageMark)
    ->get();

foreach ($studentsAboveAverage as $student) {
    echo $student->name . "\n";
}
}

// find those students that's rollno is even 
public function evenRollNoStd(){

    $studentevenrollNO = DB::table('class')
    ->select('name')
    ->whereRaw('rollno % 2 = 0')
    ->get();

    foreach ($studentevenrollNO as $student) {
        echo $student->name . " roll no  is even\n";
        echo '<br>';
    }
}
public function maxMarkStudent(){

    $studentsWithMaxMark = DB::table('class')
    ->select('name')
    ->where('mark', (DB::table('class')->max('mark')))
    ->whereRaw('rollno % 2 = 0') // Filter only even roll numbers
    ->get();

foreach ($studentsWithMaxMark as $student) {
    echo $student->name . "\n";
}
}



}
