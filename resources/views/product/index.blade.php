<x-layout>


    <br><br><br><br>


    <div class="container-fluid mt-5">
        <div class="row">
            <h2 class="text-center">{{__('ui.tutti')}}</h2>
        </div>
        <div class="row">


            @forelse($products as $product)

            <div class="col-12 col-md-3 my-5">

            <a href="{{route('product.show',$product)}}"><x-card :Product='$product'></x-card></a>

            </div>

            @empty
            <h4 class="text-center">La ricerca non ha dato risultati</h4>

        @endforelse
           {{$products->links()}}
        </div>
    </div>



<!-- INIZIO GRID -->

<header style="position: relative; z-index:99;" class='contenitore my-5'>
    <div class="galleria">
      <figure class="galleria__elemento galleria__elemento--1">
      </figure>

      <figure class="galleria__elemento galleria__elemento--2">
      </figure>

      <figure class="galleria__elemento galleria__elemento--3">
      </figure>

      <figure class="galleria__elemento galleria__elemento--4">
      </figure>

      <figure class="galleria__elemento galleria__elemento--5">
      </figure>

      <figure class="galleria__elemento galleria__elemento--6">
      </figure>

    </div>

  </div>

  </header>


  <!-- FINE GRID -->






<style>



    /* MOSAICO IMMAGINI */

.galleria {
    display: grid;
    grid-template-columns: repeat(8, 1fr);
    grid-template-rows: repeat(8, 5vw);
    grid-gap: 15px;
}

.galleria__immagine {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.contenitore {
    width: 60%;
    margin: 2rem auto;
  }

  @media screen and (max-width: 500px){

    .contenitore{
    width: 100%;
    height: 100%;
}
}

  .galleria {
    display: grid;
    grid-template-columns: repeat(8, 1fr);
    grid-template-rows: repeat(8, 5vw);
    grid-gap: 1.5rem;
  }



  .galleria__elemento--1 {
    background-image: url('https://aerospacecue.it/wp-content/uploads/2023/06/1_perche-il-cielo-e-blu.jpg');
    background-size: auto;
    grid-column-start: 1;
    grid-column-end: 3;
    grid-row-start: 1;
    grid-row-end: 3;
}
.galleria__elemento--2 {
    background-image: url('https://img.freepik.com/premium-photo/sun-blue-sky_33836-20.jpg');
    background-size: auto;
    grid-column-start: 3;
    grid-column-end: 5;
    grid-row-start: 1;
    grid-row-end: 3;

}
.galleria__elemento--3 {
    background-image: url('https://media.gqitalia.it/photos/62bebc8053339891195f603b/16:9/w_1280,c_limit/Tinos%20Luxury%20Estate.jpg');
    background-size: auto;
    grid-column-start: 5;
    grid-column-end: 9;
    grid-row-start: 1;
    grid-row-end: 6;

    animation-name: movimento;
    animation-iteration-count:infinite ;
    animation-duration: 10s;
    animation-direction: alternate;
    animation-timing-function: linear;
}

.galleria__elemento--4 {
    background-image: url('https://marcigaglia.it/wp-content/uploads/2021/02/AdobeStock_65729840-800x450-1.jpeg');
    background-size: cover;
    grid-column-start: 1;
    grid-column-end: 5;
    grid-row-start: 3;
    grid-row-end: 6;
}
.galleria__elemento--5 {
    background-image: url('https://www.avantgardeconstruct.it/wp-content/uploads/2018/04/render01_View010000-copia-6.png');
    background-size: cover;
    grid-column-start: 1;
    grid-column-end: 5;
    grid-row-start: 6;
    grid-row-end: 9;
}
.galleria__elemento--6 {
    background-image: url('https://www.caseinpaglia.it/wp-content/uploads/2019/12/case-in-paglia-lusso.jpg');
    background-size:cover;
    background-repeat: no-repeat;
    grid-column-start: 5;
    grid-column-end: 9;
    grid-row-start: 6;
    grid-row-end: 9;
}


    @keyframes movimento {
        0% {background-position: left;};
        100%{background-position: right;}

    }
</style>


</x-layout>
