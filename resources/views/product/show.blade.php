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





            <table class="product-details mt-3">
                <tr>
                    <td>Nome:</td>
                    <td class="text-start">{{$product->name}}</td>
                </tr>
                <tr>
                    <td>Categoria:</td>
                    <td class="text-start" > @if($product->category)
                        {{ $product->category->name }}
                        @else
                        <h2>Senza Categoria</h2>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Descrizione:</td>
                    <td class="text-start">{{$product->description}}</td>
                </tr>
                <tr>
                    <td>Prezzo:</td>
                    <td class="text-start">{{$product->price}}</td>
                </tr>
            </table>













        </div>
    </section>





</x-layout >
