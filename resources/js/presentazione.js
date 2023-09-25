    //? PRESENTAZIONE

    const text = document.querySelector(".sec-text");
    const textLoad = () => {
      setTimeout(() => {
        lollo.textContent = "The Difference";
      }, 0);
      setTimeout(() => {
        lollo.textContent = "Your Future";
      }, 4000);
      setTimeout(() => {
        lollo.textContent = "Your Destination";
      }, 8000);
    }

    textLoad();
    setInterval(textLoad, 4000);
