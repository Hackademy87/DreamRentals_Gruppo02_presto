<x-layout>




    <section class="container my-5 dettagli position-relavtive">
        <h1>{{__('ui.dettagli')}} : {{$product->name}}</h1>
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




            <!-- <table class="product-details mt-3 " >
                <tr>
                    <td>{{__('ui.nome')}}:</td>
                    <td class="text-start">{{$product->name}}</td>
                </tr>
                <tr>
                    <td>{{__('ui.categoria')}}:</td>
                    <td class="text-start" > @if($product->category)
                        {{ $product->category->name }}
                        @else
                        <h2>Senza Categoria</h2>
                        @endif
                    </td>
                </tr>

                <tr>
                    <td>{{__('ui.regione')}}:</td>
                    <td class="text-start" > @if($product->place)
                        {{ $product->place->name }}
                        @else
                        <h2>Senza Luogo</h2>
                        @endif
                    </td>
                </tr>

                <tr>
                    <td>{{__('ui.descrizione')}}:</td>
                    <td class="text-start">{{$product->description}}</td>
                </tr>
                <tr>
                    <td>{{__('ui.prezzo')}}:</td>
                    <td class="text-start">{{$product->price}}</td>
                </tr>
            </table> -->

            <div class="col-12 col-md-4 col-lg-8">
                <table class="table table-striped product-details mt-3 col-6">
                    <thead>
                        <tr>
                            <th scope="col">{{__('ui.nome')}}:</th>
                            <th scope="col">{{__('ui.categoria')}}:</th>
                            <th scope="col">{{__('ui.regione')}}:</th>
                            <th scope="col">{{__('ui.prezzo')}}:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{$product->name}}</th>
                            <td>@if($product->category)
                                {{ $product->category->name }}
                                @else
                                <h2>Senza Categoria</h2>
                                @endif
                            </td>
                            <td>@if($product->place)
                                {{ $product->place->name }}
                                @else
                                <h2>Senza Luogo</h2>
                                @endif
                            </td>
                            <td>{{$product->price}}</td>
                        </tr>
                    </tbody>
                </table>

                <br>
                <div class="product-text mt-4">

                    <h4 class="text-center"> {{__('ui.descrizione')}}:</h4>
                    <p class=" text-center">{{$product->description}}</p>
                </div>
            </div>
        </div>
    </section>


</x-layout >
