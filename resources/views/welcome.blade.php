<x-layout>
    <x-slot name="title"> Best Movie Blog </x-slot>





    <div class="container my-5">
        <div class="row">
            <h2>ULTIME AGGIUNTE</h2>
        </div>

        <div class="row my-5">

            @foreach($products as $product)

            <div class="col-12 col-md-3">

            <x-card :Product='$product'></x-card>

            </div>

            @endforeach

        </div>

    </div>

    {{-- <a class="btn btn-success" href="{{route('product.create')}}">Aggiungi annuncio</a> --}}
</x-layout>




