






<div class="card">
  <div class="card-inner">
        <div class="card-front " style="background-image: url('{{ Storage::url($product->img)}}')">
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



