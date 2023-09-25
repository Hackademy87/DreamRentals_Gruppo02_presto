document.addEventListener("DOMContentLoaded", function () {
    const toggleMenu = document.getElementById("toggleMenu");
    const loginRegisterDropdown = document.getElementById("loginRegisterDropdown");

    toggleMenu.addEventListener("change", function () {
      if (toggleMenu.checked) {
        loginRegisterDropdown.style.display = "block";
      } else {
        loginRegisterDropdown.style.display = "none";
      }
    });
  });




//SCROLL NAVBAR
window.addEventListener('scroll', () => {
  const navbar = document.getElementById('navbar');
  const navbarLinks = document.querySelectorAll('.navbar-nav a.nav-link');
  const scrollTop = window.scrollY;
  const video = document.querySelector('.video-bg');


  if (scrollTop > 2000) {

    navbar.style.backgroundColor = 'white';
  }

  else {

    navbar.style.backgroundColor = '';


  }
console.log(scrollTop);
if (scrollTop > 1800){
video.style.opacity = 0;

}
else{
    video.style.opacity = 0.8;
}


});















