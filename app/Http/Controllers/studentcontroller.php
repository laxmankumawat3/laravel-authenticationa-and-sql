<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;
use DB;

class studentcontroller extends Controller
{
    public function index(){
        // $student = students::where('roll_no', '>' ,2)->where('mark' , '>=',80)->get();
        // $student = students::where('roll_no', '>' ,2)->orWhere('mark' , '>=',100)->get();
        // $student = students::orderBy('mark' , 'asc')->get();
        // $student = students::orderBy('mark' , 'desc')->get();
        // $student = students::whereNot('mark' ,'<=' ,80)->get();
        // $student = students::whereIn('roll_no' , [1,2,4])->get();
        // $student = students::whereBetween('mark' , [90,100])->get();
        // $student = students::select('mark' , 'roll_no')->get();
        // $student = students::select('mark' , 'roll_no')->take(2)->get();

//         Aggregare functions perform a calculation on a set of values, and return a single value.
// 
// COUNT( )
$count = students::count();
$count = students::where('roll_no', '>', 1)->count();
$count = DB::table('students')->where('roll_no', '=', 4)->count();

echo "Total number of students: $count";
// MAX( )
$max = students::max('mark');
echo "<br>";
echo "max mark of students: $max";
// MIN( )
// SUM( )
// AVG( )

//Groups rows that have the same values into summary rows.
// It collects data from multiple records and groups the result by one or more column, In Laravel, you can use the groupBy() method to group your query results by one or more columns. Grouping data is useful when you want to apply aggregate functions (such as SUM, AVG, COUNT, etc.) to different groups of data within a query.

// Assuming you have a model class called YourModel that represents the table
echo "<br>";
$groupedData = students::select('class')
    ->selectRaw('AVG(mark) as average_mark') // Calculate the average mark
    ->groupBy('class') // Group by the 'class' column
    ->get();
echo "<pre>";
print_r($groupedData->toArray());
// Display the results
// foreach ($groupedData as $data) {
//     echo "Class: {$data->class}, Average Mark: {$data->average_mark}\n";
// }


        // echo '<pre>';
        // print_r($student->toArray());


        // Similar to Where i.e. applies some condition on rows.Used when we want to apply any condition after grouping use Haveing


        echo "<br>";
$groupedData = students::select('class')
    ->selectRaw('AVG(mark) as average_mark') // Calculate the average mark
    ->groupBy('class') // Group by the 'class' column
    ->having('average_mark' , '>' ,85.0000)
    ->get();
echo "<pre>";
print_r($groupedData->toArray());



// *************************** join in tabel *******************************
// Join is used to combine rows from two or more tables, based on a related column between them.

    }
}
