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









