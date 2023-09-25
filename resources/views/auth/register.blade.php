<x-layout>


    <video class="video-bg " src="pittura.mp4" autoplay muted loop></video>
  <div class="container my-5">
    <div class="row justify-content-center">


      @if($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
              <p>{{$error}}</p>
            </div>
        @endforeach
      @endif

      <form class="form-container" action="{{route('register')}}" method="POST">
        @csrf
        <div class="logo-container">
          Welcome!
        </div>


        <div class="line"></div>
          <form class="form">
            <div class="form-group">
              <label for="email">Nome</label>
              <input required="" placeholder="Enter your name" name="name" id="email" type="text" >
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input required="" placeholder="Enter your email" name="email" id="email" type="email">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input required="" name="password" placeholder="Enter your password" id="password" type="password" >
            </div>
            <div class="form-group">
              <label for="password">Conferma password</label>
              <input name="password_confirmation" placeholder="Confirm your password" id="password" type="password">
            </div>

            <button type="submit" class="form-submit-btn">Sign In</button>
          </form>


        </div>
      </form>
    </div>
  </div>





</x-layout>
