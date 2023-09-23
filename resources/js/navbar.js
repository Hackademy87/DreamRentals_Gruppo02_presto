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


  if (scrollTop > 1700) {
    navbar.style.height = '200px';
    navbar.style.backgroundColor = 'rgba(127, 255, 212, 0)';

    navbarLinks.forEach(link => {
      link.style.color = 'rgba(0, 126, 167, 0.829)';
      link.style.fontSize = '30px';
      link.addEventListener('mouseover', () => {
        link.style.color = 'white'
        link.style.textDecoration = 'underline';
        link.addEventListener('mouseout', () => {
          link.style.textDecoration = 'none';
          link.style.color = 'rgba(0, 126, 167, 0.829)'
        });
      });
    });

  }

  else {
    navbar.style.height = '100px';
    navbar.style.backgroundColor = '';

    navbarLinks.forEach(link => {
      link.style.color = ''; //
      link.style.fontSize = '';
      link.removeEventListener('mouseover', null);
      link.removeEventListener('mouseout', null);
    });

  }
});












