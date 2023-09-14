<x-layout>



    <div class="container">

        <div class="row">

            @foreach($products as $product)

            <div class="col-12 col-md-3">

            <a href="{{route('product.show',$product)}}"><x-card :Product='$product'></x-card></a>

            </div>

            @endforeach

        </div>

    </div>



</x-layout>
