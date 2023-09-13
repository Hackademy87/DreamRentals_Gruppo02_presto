<x-layout>

    <section class="container dettagli position-relavtive mt-5">
        <div class="row">
            <div class="col-12 col-md-5">
                <img class="img-fluid" src="{{ Storage::url($product->img)}}" alt="">
            </div>

            <div class="col-12 col-lg-5 ms-auto pe-5">
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
            </div>
        </div>
    </section>


    <!--first carosel -->
    <base href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/wanaka-tree.jpg">
    <div id="carousel">
    <figure id="spinner">
        <img src="wanaka-tree.jpg" alt>
        <img src="still-lake.jpg" alt>
        <img src="" alt>
        <img src="paradise.jpg" alt>
        <img src="morekai.jpg" alt>
        <img src="milky-blue-lagoon.jpg" alt>
        <img src="lake-tekapo.jpg" alt>
        <img src="milford-sound.jpg" alt>
    </figure>
    </div>
    <span style="float:left" class="ss-icon" id="arrow-left">&lt;</span>
    <span style="float:right" class="ss-icon" id="arrow-right">&gt;</span>
    <!--Second carousel-->

</x-layout >
