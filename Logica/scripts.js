const body = document.querySelector("body"),
      sidebar = body.querySelector(".sidebar"),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".canviar-mode"),
      modeText = body.querySelector(".mode-text");

      toggle.addEventListener("click", () =>{
        sidebar.classList.toggle("tancar");
      });

      modeSwitch.addEventListener("click", () =>{
        body.classList.toggle("fosc");

        if(body.classList.contains("fosc")){
          modeText.innerText = "Mode clar"
        }else{
          modeText.innerText = "Mode fosc"
        }
      });

//Barra navegació      

document.addEventListener("DOMContentLoaded", function() {
  // Selecciona el camp de cerca i els elements de navegació
  const searchInput = document.getElementById("searchInput");
  const navLinks = document.querySelectorAll(".nav-link");
    
  // Afegeix un esdeveniment d'entrada al camp de cerca
  searchInput.addEventListener("input", () => {
    const searchText = searchInput.value.toLowerCase(); // Obté el text ingressat i el converteix a minúscules
            
    // Itera sobre els elements de navegació
    navLinks.forEach(navLink => {
    const navText = navLink.querySelector(".nav-text").textContent.toLowerCase(); // Obté el text de l'element de navegació
                
    // Compara el text de l'element de navegació amb el text de cerca
    if (navText.includes(searchText)) {
        navLink.style.display = "block"; // Mostra l'element de navegació si coincideix
        } else {
          navLink.style.display = "none"; // Oculta l'element de navegació si no coincideix
        }
        });
    });
});
    