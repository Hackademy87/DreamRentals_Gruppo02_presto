<x-layout>
    <x-slot name="title"> Best Movie Blog </x-slot>
    <h1>Cose a caso</h1>
    <!-- Impostare video -->



    <div class="container">
        <div class="row">
            <h2>ULTIME AGGIUNTE</h2>
        </div>

        <div class="row">

            @foreach($products as $product)

            <div class="col-12 col-md-3">

            <x-card :Product='$product'></x-card>

            </div>

            @endforeach

        </div>

    </div>

    <a class="btn btn-success" href="{{route('product.create')}}">Aggiungi annuncio</a>
</x-layout>




