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

            <div class="col-12 col-md-3 pb-5 ">

                <x-card :Product='$product'></x-card>

            </div>

            @endforeach

        </div>

    </div>



<!-- PRESENTAZIONE -->

<div class="panel1">
    <div class="container">
      <p class="watch intro fade-in" >We Are</p>
      <h1 class="dream" style="color:orange" class="watch fade-in title-bg">Dream Rentals</h1>
      <p class="watch intro fade-in" >Luxury real estate site</p>

      <div class="h-text">
        <div class="h-animate">
          <span class="text first-text">We Are&nbsp;</span>
          <span class="text sec-text"></span>
        </div>
      </div>


      <img src="https://pixabay.com/gifs/get/gd543b70210dc4c0dff801f346a25ace021b8c74c7cb0c2993387825be05d4d03228ca24571363d1b8fdc042c436147f4.gif" alt="" class="gif-image fade-inImg watch">
    </div>
    </div>



    <style>
        /* PRESENTAZIONE */
.container{
width: 100%;max-width: 1000px;padding: 10% 10% 0% 10%;
}

.panel1{
height: auto;
width: 100%;
background: #ffffff;;
position: relative;
z-index: 2;
color: #000;
display: flex;
justify-content: center;
align-items: center;

}


.intro{
font-size: 20px;font-weight: bold;

}

.title-bg{
font-size: 4rem;
}

.fade-in{
opacity: 0;
transform: translateY(20vh);
transition: all 1s cubic-bezier(.215, .61, .355, 1);
}

.fade-in.in-page{
opacity: 1;
transform: translateY(0vh);
}



/* PRIMO TESTO ANIMATO */


.h-text{
padding-top: 50px;
margin-left: 60px;
}

.h-animate .text{
  position: relative;
  color: #00C9F3;
  font-size: 30px;
  font-weight: 600;
}
.h-animate .text.first-text{
  color: #000000;
}



.text.sec-text:before{
content: "";
position: absolute;
top: 0;
left: 0;
height: 100%;
width: 100%;
background-color: #ffffff;
border-left: 2px solid #00C9F3;
animation: lollo 4s steps(12) infinite;
}
@keyframes lollo{
40%, 60%{
    left: calc(100% + 4px);
}
100%{
    left: 0%;
}
}


/*GIF */

.fade-inImg{
  opacity: 0;
  transform: translateX(-20vh);
  transition: all 1s cubic-bezier(.215, .61, .355, 1);
}

.fade-inImg.in-page{
  opacity: 1;
  transform: translateX(0vh);
}
.gif-image {
    width: 40vw;
    position: relative;
    right: -10vw;
    display: block;
  }

    </style>

<script>
    //? PRESENTAZIONE

const text = document.querySelector(".sec-text");
  const textLoad = () => {
    setTimeout(() => {
      text.textContent = "The Difference";
    }, 0);
    setTimeout(() => {
      text.textContent = "Your Future";
    }, 4000);
    setTimeout(() => {
      text.textContent = "Your Destination";
    }, 8000);

  }

  textLoad();
  setInterval(textLoad, 4000);






</script>



</x-layout>




