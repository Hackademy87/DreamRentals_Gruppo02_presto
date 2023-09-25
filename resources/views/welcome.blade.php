<x-layout>
    <x-slot name="title"> Best Movie Blog </x-slot>
    <video class="video-bg " src="case.mp4" autoplay muted loop></video>
    <x-header/>

  <div class="container-fluid contenitore my-5">
    <div class="row ">
      <h2 class="text-center border-bottom pt-2">{{__('ui.ultimeAggiunte')}}</h2>
    </div>

    <div class="row my-5  justify-content-around ">

      @foreach($products as $product)

        <div class="col-12 col-md-6 col-lg-3 pb-5 ">

        <x-card :Product='$product'></x-card>

        </div>

      @endforeach

    </div>

  </div>



<!-- PRESENTAZIONE -->

<div class="panel1">
  <div class="container-Presentazione">
    <div class="row ">
      <div class="col-12">
        <p class="watch intro fade-in" >We Are</p>
        <h1 class="dream" style="color:orange" class="watch fade-in title-bg">Dream Rentals</h1>
        <p class="watch intro fade-in" >Luxury real estate site</p>

        <div class="h-text">
          <div class="h-animate">
            <span class="text first-text">We Are&nbsp;</span>
            <span class="text sec-text"></span>
          </div>
        </div>


        <img src="/casa.gif" alt="" class="gif-image fade-inImg watch">

      </div>
    </div>
  </div>
</div>


</x-layout>




