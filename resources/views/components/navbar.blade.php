


{{-- <form class="d-flex" role="search" action="" method="GET">
        <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        @if(Auth::user() == null)
          <li class="nav-item">
            <a class="btn btn-primary" href="{{route('login')}}">Login</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-secondary mx-2" href="{{route('register')}}">Registrati</a>
          </li>
        @else
          <li class="nav-item">
            {{ Auth::user()->name }}
          </li>
          <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button class="btn btn-secondary mx-2" >Logout</button>
            </form>
          </li>
        @endif
      </ul> --}}





<!-- NAVBAR IMPORTED -->
{{-- <nav class="navbar">
  <div id="trapezoid" >
    <a class="home" href="{{route('home')}}">Home</a>
    <a href="#About" class="expandHome">Lavora con noi</a>
     <div class="subnav">
     <button class="subnavbtn">Categorie<i class="fa fa-caret-down"></i></button>
       <div class="subnav-content">
        <div id="subnav-trapezoid" class="d-flex">
          @foreach($productCategories as $category)
            <a class="dropdown-item" href="{{route('product.bycategory',compact('category'))}}">{{$category->name}}</a>
          @endforeach
        </div>
       </div>
    </div>

    <div class="subnav">
     <button class="subnavbtn">Servizi<i class="fa fa-caret-down"></i></button>
      <div class="subnav-content">
        <div class="subnav-trapezoid">
          @auth
            <a class="nav-link" href="{{route('product.create')}}">Crea Prodotti</a>
          @endauth
          <a href="#Services">Web Design</a>
          <a href="#Services">Mobile App Development</a>
         </div>
      </div>
    </div>

  </div>
</nav> --}}




<nav class="navbar navbar-expand-sm navbar-light" id="neubar">
    <div class="container">
      <a class="navbar-brand" href=""><img src="" height="60"/>



    </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="nav-link mx-2 active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="{{route('product.create')}}">Aggiungi Prodotti</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Categorie
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                @foreach($productCategories as $category)
                <a class="dropdown-item" href="{{route('product.bycategory',compact('category'))}}">{{$category->name}}</a>
              @endforeach
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>



