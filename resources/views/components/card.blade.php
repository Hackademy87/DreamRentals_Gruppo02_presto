



<!-- <section class="container mt-5" >
    <div class="row" >
        <div class="col-12 col-md-3 bordi">
            <div class="card" style="width: 15rem;height: 38rem;">
                <img class="px-2 py-2" style="height:270px; width:200px;" src="{{ Storage::url($product->img)}}" alt="">
                <div class="card-body text-center">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <a href="{{ route('product.bycategory', $product->category) }}">
                    @if($product->category)
                        <p>{{ $product->category->name }}</p>
                    @else
                        <p>Senza Categoria</p></a>
                    @endif
                    <p class="card-text">{!!$product->description!!}</p>
                    <p class="card-text">{{$product->price}}€</p>
                    <div>
                        <p class="card-text">Creato da : {{$product->user->name}}</p>
                        <p class="card-text">Creato il : {{$product->created_at}}</p>
                    </div>
                </div>
                    <a href="{{route('product.show' , $product)}}" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
</section> -->


<div class="card">
  <div class="card-inner">
        <div class="card-front " style="background-image: url('{{ Storage::url($product->img)}}')">
            <!-- <img class="object-fit-cover "  src="{{ Storage::url($product->img)}}" alt=""> -->
        </div>
        <div class="card-back">
            <h3 class="card-title">{{$product->name}}</h3>
            @if($product->category)
                <a href="{{ route('product.bycategory', $product->category) }}">
                    <p>{{ $product->category->name }}</p>
                </a>
            @else
                <p>Senza Categoria</p>
            @endif
            <p class="card-text">Descrizione : {!!$product->description!!}</p>
            
            <p class="card-text">Creato da : {{$product->user->name}}</p>
            <p class="card-text">Creato il : {{$product->created_at}}</p>
            
            
            <div class="card-footer rounded">
                <p class="card-text">Prezzo : {{$product->price}}€/mese</p>
            </div>
            <a href="{{route('product.show' , $product)}}" class="btn btn-primary">Go somewhere</a>
        </div>
  </div>
</div>






<!-- vertical -->



