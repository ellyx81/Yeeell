const toggler = () => {
  const header = document.querySelector(".js-header") as HTMLElement;
  const html = document.querySelector(".js-html") as HTMLElement;

  if (header) {
    const toggle = header.querySelector(".js-toggler");

    if (toggle) {
      toggle.addEventListener("click", () => {
        
        if (header.classList.contains("is-active")) {
          header.classList.remove("is-active");
          html.style.overflowY = 'visible';
        } else {
          header.classList.add("is-active");
          html.style.overflowY = 'hidden';
        }
      });
      
      header.addEventListener("mouseleave", () => {
        header.classList.remove("is-active");
        html.style.overflowY = 'visible';
      });
    }
  }
  
}

export default toggler
  
  
  