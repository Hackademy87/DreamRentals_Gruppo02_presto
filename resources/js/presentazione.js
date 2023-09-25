    //? PRESENTAZIONE

  const text = document.querySelector(".sec-text");
  if (text){

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
  }