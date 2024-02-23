@extends('layout')
@section('title', 'Registration')
@section('content')
    <div class= "container">
      
        <form action="{{route('registration.post')}}" method ="POST"class="ms-auto me-auto mt-3 "style="width: 500px">
        @csrf    
        <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" name= "name"required>
    </div>
  <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" name ="email"required >
  </div>
  
  <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required>
  </div>


  <a class="btn btn-primary" href="/login" role="button">Submit</a>
  <a class="btn btn-primary" href="/welcome" role="button">Back To Home Page</a>

</form> 
    </div>
@endsection