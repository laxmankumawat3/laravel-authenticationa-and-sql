@extends('frontend.layouts.main')
@section('main-section')
<h4 class="text-center mt-4">signUp</h4>
<form method="POST" action="{{ route('register') }} " class="m-4 p-3">
    @csrf

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>

    <div class="form-group">
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary mt-2 text-center">Register</button>
</form>

@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
@endforeach

</ul>
</div>
@endif

@if (session()->has('user'))
<div class="alert alert-success ">
@php
$user = session()->get('user')
@endphp
{{$user}}

</div>
@endif
@endsection