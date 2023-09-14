var angle = 0;
function galleryspin(sign) { 
 let spinner = document.querySelector("#spinner");
if (!sign) { angle = angle + 45; } else { angle = angle - 45; }
spinner.setAttribute("style","-webkit-transform: rotateY("+ angle +"deg); -moz-transform: rotateY("+ angle +"deg); transform: rotateY("+ angle +"deg);");
}

let arrowright = document.querySelector("#arrow-right");
arrowright.addEventListener('click', ()=>{
    galleryspin('')
})

let arrowleft = document.querySelector("#arrow-left");
arrowleft.addEventListener('click', ()=>{
    galleryspin('-')
})