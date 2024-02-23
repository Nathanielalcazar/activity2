@extends('layout')
@section('title', 'Login')
@section('content')
    <div class= "container">
        <form action="{{route('login')}}" method ="POST"class="ms-auto me-auto mt-3 "style="width: 500px">
        @csrf
        
  <div class="mb-3">
          <label class="form-label">Email Address</label>
          <input type="email" class="form-control" name ="email" >
  </div>
  
  <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" >
  </div>


  <a class="btn btn-primary" href="/pinaka" role="button">Login</a>
  <a class="btn btn-primary" href="/welcome" role="button">Back To Home Page</a>
</form> 
    </div>
@endsection