<x-layout>



<div class="container my-5">
    <div class="row justify-content-center align-items-center">






<form class="form-container" action="{{route('login')}}" method="POST">
  @csrf
      <div class="logo-container">
        Welcome Back!
      </div>


      <div class="line"></div>
      <form class="form">
        <div class="form-group">
          <label for="email">Email</label>
          <input required="" placeholder="Enter your email" name="email" id="email" type="email" value="{{old('email')}}">
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input required="" name="password" placeholder="Enter your password" id="password" type="password" value="{{old('password')}}">
        </div>

        <button type="submit" class="form-submit-btn">Sign In</button>
      <p class="signup-link">
        Don't have an account?
        <a class="signup-link link" href="{{route('register')}}"> Sign up now</a>
      </p>
</form>
  


</div>
</div>

<!-- Login importato -->
















</x-layout>
