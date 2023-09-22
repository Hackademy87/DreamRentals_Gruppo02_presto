<nav  id="navbar" class="navbar navbar-expand-lg bg-primary-dark ">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}"> <img id="logo" src="/logopng.png" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link home" aria-current="page" href="{{route('home')}}">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('product.index')}}">{{__('ui.tutti')}}</a>
        </li>
        @auth
          @if (Auth::user()->is_revisor)
            <li class="pt-2 px-2">
              <a class=" pt-2 position-relative text-decoration-none" href="{{route('revisor.index')}}">{{__('ui.zonaRevisore')}}
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{App\Models\Product::toBeRevisionedCount()}}
                <span class="visually-hidden">Messaggi non letti</span>
                </span>
              </a>
            </li>
          @endif
          <li class="nav-item dropdown">
            <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{__('ui.servizi')}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li class="nav-item">
                <a class="dropdown-item" href="{{route('product.create')}}">{{__('ui.addProdotti')}}</a>
              </li>
              <li class="nav-item">
                <a class="dropdown-item" href="{{route('contatti')}}">{{__('ui.lavora')}}</a>
              </li>
            </ul>
          </li>
        @endauth
        <li class="nav-item dropdown">
          <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{__('ui.categorie')}}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            @foreach($productCategories as $category)
              <a class="dropdown-item" href="{{route('product.bycategory',compact('category'))}}">{{__("ui.$category->name")}}</a>
            @endforeach
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="material-symbols-outlined">
              translate
            </span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><span><x-_locale Lang="it" nation="it"/></span></li>
            <li><span><x-_locale Lang="en" nation="gb"/></span></li>
            <li><span><x-_locale Lang="es" nation="es"/></span></li>
          </ul>
        </li>
      </ul>

@guest
<div class="navitem1">

    <label class="hamburger" for="toggleMenu">
        <input type="checkbox" id="toggleMenu">
        <svg viewBox="0 0 32 32">
            <path class="line line-top-bottom"
                d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22"></path>
            <path class="line" d="M7 16 27 16"></path>
        </svg>
    </label>
    @if(Auth::user() == null)
      <ul class="dropdown-menu " id="loginRegisterDropdown">

          <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
          <li class="separator"></li>
          <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
      </ul>
    @endif
</div>
@endguest

        @if(Auth::user() !== null)
            <p class="me-2 pt-2">{{ Auth::user()->name }}<p>

            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="hamburger nav-item" for="toggleMenu">
              <i class="fa-solid fa-x close"></i>

            </button>
            </form>

        @endif

      <div class="ms-5">
        <form action="{{ route('products.search') }}" method='GET' class="d-flex ricerca">
          <div class="InputContainer">
              <input placeholder="Search.." id="input" class="input" name="searched" type="search">
          </div>
        </form>
      </div>

    </div>
  </div>
</nav>



