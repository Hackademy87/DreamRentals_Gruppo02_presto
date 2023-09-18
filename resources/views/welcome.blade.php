<x-layout>
    <x-slot name="title"> Best Movie Blog </x-slot>
    <video class="video-bg " src="case.mp4" autoplay muted loop></video>
    <x-header/>

    <div class="container-fluid my-5">
        <div class="row">
            <h2>ULTIME AGGIUNTE</h2>
        </div>
        
        <div class="row my-5 contenitore">
        
            @foreach($products as $product)

            <div class="col-12 col-md-3">

            <x-card :Product='$product'></x-card>

            </div>

            @endforeach

        </div>

    </div>


    {{-- <a class="btn btn-success" href="{{route('product.create')}}">Aggiungi annuncio</a> --}}
</x-layout>




