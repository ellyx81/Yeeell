const toggler = () => {
  const header = document.querySelector(".js-header") as HTMLElement;
  const html = document.querySelector(".js-html") as HTMLElement;

  if (header) {
    const toggle = header.querySelector(".js-toggler");

    if (toggle) {
      toggle.addEventListener("click", () => {
        header.classList.toggle("is-active");
        html.style.overflowY = 'visible';
      });
      
      header.addEventListener("mouseleave", () => {
        header.classList.remove("is-active");
        html.style.overflowY = 'visible';
      });
    }
  }
  
}

export default toggler
  
  
  