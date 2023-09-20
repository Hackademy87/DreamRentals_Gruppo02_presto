<x-layout>




    <section class="container my-5 dettagli position-relavtive">
        <h1>DETTAGLI IMMOBILE : {{$product->name}}</h1>
        <div class="row my-5">
            <div class="col-12 col-md-8 col-lg-4">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    @if(count($product->images)>0)
                    <div class="carousel-inner">
                        @foreach ($product->images as $image)

                        <div class="carousel-item @if($loop->first)active @endif">
                            <img src="{{!$image->get()->isEmpty() ? $image->getUrl(390 , 490) : '/public/default.jpg'}}" class="d-block w-100" alt="...">
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
            {{-- <div class="col-12 col-lg-5 ms-auto pe-5">
                <div class="row">
                    <div class="col-6">
                        <h2>nome :</h2>
                    </div>

                    <div class="col-6">
                        <h2>{{$product->name}}</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <h2>prezzo :</h2>
                    </div>

                    <div class="col-6">
                        <h2>{{$product->price}}€</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <h2>Descrizione :</h2>
                    </div>

                    <div class="col-6">
                        <h2>{{$product->description}}</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <h2>Categoria :</h2>
                    </div>

                    <div class="col-6">

                        @if($product->category)
                        <h2>{{ $product->category->name }}</h2>
                        @else
                        <h2>Senza Categoria</h2>
                        @endif
                    </div>
                </div>
            </div> --}}




            <table class="product-details ">
                <tr>
                    <td>Nome:</td>
                    <td>{{$product->name}}</td>
                </tr>
                <tr>
                    <td>Categoria:</td>
                    <td> @if($product->category)
                        {{ $product->category->name }}
                        @else
                        <h2>Senza Categoria</h2>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Descrizione:</td>
                    <td>{{$product->description}}</td>
                </tr>
                <tr>
                    <td>Prezzo:</td>
                    <td>{{$product->price}}</td>
                </tr>
            </table>





        </div>
    </section>





</x-layout >
