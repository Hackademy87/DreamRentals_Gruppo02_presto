
<!-- <nav class="navbar navbar-expand-sm navbar-light " id="neubar">
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
            <a class="nav-link mx-2 active" aria-current="page" href="{{route('product.index')}}">Tutti Gli Immobili</a>
          </li>

          @auth
          @if (Auth::user()->is_revisor)
          <li>
              <a class="position-relative" href="{{route('revisor.index')}}">Zona Revisore
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{App\Models\Product::toBeRevisionedCount()}}
                  <span class="visually-hidden">Messaggi non letti</span>
                  </span>
              </a>
            @endif

            <li class="nav-item">
            <a class="nav-link mx-2 active" aria-current="page" href="{{route('contatti')}}">Lavora con noi</a>
            </li>

          <li class="nav-item">
            <a class="nav-link mx-2" href="{{route('product.create')}}">Aggiungi Prodotti</a>
          </li>
          @endauth
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
            @if(Auth::user() == null)
              <li class="nav-item">

                <a href="{{route('login')}}"><button> Login
                </button></a>
              </li>
              <li class="nav-item">
                <a href="{{route('register')}}"><button> Registrati
                </button></a>
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

            <form action="{{route('products.search')}}" method='GET' class="d-flex ricerca">

                <input name="searched" class="form-control me-2" placeholder="Search..." type="search">

                <button class="btn btn-outline-success" type="submit">Ricerca</button>

                </form>

        </ul>
      </div>
    </div>
  </nav> -->



   <nav  id="navbar"    class="navbar navbar-expand-lg bg-primary-dark ">
    <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img id="logo" src="/logopng.png" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
      
        <li class="nav-item">
        <a class="nav-link" href="{{route('product.index')}}">Tutti gli immobili</a>
        </li>
        @auth
              @if (Auth::user()->is_revisor)
              <li>
                  <a class="position-relative text-decoration-none" href="{{route('revisor.index')}}">Zona Revisore
                      <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{App\Models\Product::toBeRevisionedCount()}}
                      <span class="visually-hidden">Messaggi non letti</span>
                      </span>
                  </a>
                @endif
        <li class="nav-item">
          <a class="nav-link" href="{{route('product.create')}}">AGGIUNGI PRODOTTI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contatti')}}">LAVORA CON NOI</a>
            </li>
            @endauth
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
      
              @if(Auth::user() == null)
          <a href="{{route('login')}}"><button class="btn btn-outline-success btn-login" type="submit">Login</button></a>
          <a href="{{route('register')}}"><button class="btn btn-outline-success btn-register" type="submit">Register</button></a>
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
        </div>
          <form action="{{route('products.search')}}" method='GET' class="d-flex ricerca">
              
            <div class="InputContainer">
                
              <input placeholder="Search.." id="input" class="input" name="searched" type="search">
            </div>
          </form>
        </div>
      </ul>
    </div>
    </div>
    </nav>