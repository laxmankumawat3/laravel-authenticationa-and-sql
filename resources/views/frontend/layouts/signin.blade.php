@extends('frontend.layouts.main')
@section('main-section')
<div class="container mb-2">
    <div class="text-center border border-gray mt-2  rounded-2  p-4 
    ">
        <span>Don't Have Any Account? <a class="custome-btn-color " href="{{url('/signup')}}">Register Here</a>

           <div> Easy To Checkout As A Guest?</div></span>
    </div>


    <form method="POST" action="{{url('/login')}}">
        @csrf
      <h2 class="text-center mb-4">Sign In</h2>
      <div class="form-group">
        <label for="inputEmail">Email address</label>
        <input type="email" name = 'email' id="inputEmail" class="form-control" placeholder="Enter email" required autofocus>
        <span class="text-danger">
            @error('email')
                {{$message}}
            @enderror
        </span>
      </div>
      <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" name = 'password' id="inputPassword" class="form-control" placeholder="Password" required>
      </div>
      <span class="text-danger">
        @error('password')
            {{$message}}
        @enderror
    </span>
      <div class="d-flex">

          <button class="btn btn-lg custome-btn-color btn-block col-3 m-auto " type="submit">Sign in</button>
          <a class="btn btn-lg btn-block col-4 " href="{{route('password.request')}}"><button class=" custome-btn-color" type="button">forgot your password</button></a>
      </div>
    </form>



  </div>
@endsection