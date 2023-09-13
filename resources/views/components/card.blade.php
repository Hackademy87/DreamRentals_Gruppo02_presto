<div class="card" style="width: 18rem;">
  <img src="{{Storage::url($product->img)}}" class="card-img-top" alt="{{$product->name}}">
  <div class="card-body">
    <h5 class="card-title">{{$product->name}}</h5>
    <p class="card-text">{!!$product->description!!}</p>

    @if($product->category) 
      <a href="{{route('product.bycategory' , $product->category)}}"><p>{{ $product->category->name }}</p>  </a>
    @else 
      <p>Senza Categoria</p> 
    @endif

    <a href="{{route('product.show' , $product)}}" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer">
    <p>{{$product->price}}</p>
  </div>

</div>
