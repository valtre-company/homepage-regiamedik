import Typed from 'typed.js';
import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel/dist/assets/owl.theme.default.css';
import 'owl.carousel';

(async () => {
   if ("loading" in HTMLImageElement.prototype) {
      const images = document.querySelectorAll("img.lazyload");
      images.forEach((img) => {
         img.src = img.dataset.src;
      });
   } else {
      const lazySizes = await import("lazysizes");
      lazySizes.init();
   }
})();  


// Function on DOM Content Loading execute function eventListeners
document.addEventListener("DOMContentLoaded", eventListeners );

// Function to create event listeners
$(window).on('load', () => {
   $('.owl-carousel').owlCarousel({
      margin: 10,
      loop: true,
      autoplay: true,
      autoplayHoverPause: true,
      navText: ["<div class='nav-btn prev-slide'></div>", "<div class='nav-btn next-slide'></div>"],
      responsive: {
         0: {
            items: 1,
         },
         600: {
            items: 2
         },
         1000: {
            items: 3
         }
      },
      nav: true,
      dots: false,
   });
});

function eventListeners () {   
   addTypedJS();
   if (document.querySelector("#ubications")){      
      document.querySelector("#ubications").addEventListener("click", (e) => {         
         if (e.target.classList.contains("btn-map")) {
            e.preventDefault();
            const ubication = e.target.dataset.ubication;
            const place = e.target.dataset.place;
            const lat = e.target.dataset.lat;
            const lng = e.target.dataset.lng;
            openModalMap(ubication,place);
         }
      });   
   }
   
   // Event Listener for click close modal and reset html map
   if (document.querySelector(".modal")) {
      document.querySelector(".modal").addEventListener("click", (e) => {      
         if(e.target.classList.contains("btn-close-modal")) {
            $("#modal-map").modal("hide");
            cleanHTML(document.querySelector("#map"));
         }
      });   
   }
}

// Function to open modal map on click and set iframe on modal
function openModalMap (ubication,place) {
   // Clean html map container
   cleanHTML(document.querySelector("#map"));   
   // Create iframe
   const iframe = document.createElement("iframe");
   iframe.classList.add("iframe");
   // const url = `https://maps.google.com/maps?q=${lat},${lng}&=15&output=embed`;   
   const url = getUrlMap(ubication,place);
   iframe.src = url;
   iframe.setAttribute("allowfullscreen","true")
   iframe.setAttribute("frameborder", "0");
   iframe.style.border = "0";
   // Append the iframe to the modal window and Open modal window
   document.querySelector("#map").appendChild(iframe);
   $(".modal").modal("show");
}

// Get the url iframe by data location in the html page
function getUrlMap(ubication, place) {       
   // First go to google maps and search the place and after click on the button share and go to the tab named insert a map 
   // Copy the iframe and paste in the code after that only get the src url and paste in the code below
   if (ubication.toUpperCase() === "LAB") {      
      switch (place) {
         case "juarez":                     
            return "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14383.707156309405!2d-100.4958685!3d25.6737215!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662c38dd663da83%3A0x1b52a03650698dd7!2sLaboratorio%20Clinico%20Regia%20Medi-K!5e0!3m2!1ses!2smx!4v1635281230966!5m2!1ses!2smx";               
         case "mty":                 
            return "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d115079.76864593283!2d-100.2990896!3d25.6632459!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x866295f8082c9bc5%3A0x6f85a0340266d77e!2sRegia%20Medi-k!5e0!3m2!1ses!2smx!4v1635281152219!5m2!1ses!2smx";         
         case "apodaca":
            return "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.952852003855!2d-100.19532478554135!3d25.772120814460287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662eb8b4d960691%3A0xec6ea5c9c4193799!2sPlaza%20El%20Molino!5e0!3m2!1ses!2smx!4v1635279337739!5m2!1ses!2smx";                     
         default:            
            return "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3596.5510577043055!2d-100.11368878554386!3d25.653021519352414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662c38dd663da83%3A0x1b52a03650698dd7!2sLaboratorio%20Clinico%20Regia%20Medi-K!5e0!3m2!1ses!2smx!4v1635278817852!5m2!1ses!2smx";         
      }      
   } else if (ubication.toUpperCase() === "UM") {      
      switch (place) {
         case "juarez":          
            return "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3596.691387267656!2d-100.11411298554391!3d25.648366219543345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662c3bf07b86947%3A0xfb9bb2105207f8ed!2sPaseo%20Juarez!5e0!3m2!1ses!2smx!4v1635279230250!5m2!1ses!2smx";                  
         case "apodaca":
            return "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.952852003855!2d-100.19532478554135!3d25.772120814460287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662eb8b4d960691%3A0xec6ea5c9c4193799!2sPlaza%20El%20Molino!5e0!3m2!1ses!2smx!4v1635279337739!5m2!1ses!2smx";                     
         default:
            return "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3596.691387267656!2d-100.11411298554391!3d25.648366219543345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662c3bf07b86947%3A0xfb9bb2105207f8ed!2sPaseo%20Juarez!5e0!3m2!1ses!2smx!4v1635279230250!5m2!1ses!2smx";         
      }
   } else {
      return "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3596.5510577043055!2d-100.11368878554386!3d25.653021519352414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662c38dd663da83%3A0x1b52a03650698dd7!2sLaboratorio%20Clinico%20Regia%20Medi-K!5e0!3m2!1ses!2smx!4v1635278817852!5m2!1ses!2smx";         
   }
}
// Function to cleanHTML in parameters get a container html
function cleanHTML (container) {   
   if (container) {
      while (container.firstChild) {
         container.removeChild(container.firstChild);
      }	
   }
}

function addTypedJS () {
   var options = {
      strings: [
         "Nuestra amplia gama de servicios integrales para la salud.", 
         "Nuestra amplia gama de servicios de an??lisis cl??nicos.", 
         "Nuestra amplia gama de servicios y medicamentos.",          
         "Nuestra amplia gama de servicios y pruebas toxicol??gicas.",          
         "Nuestra amplia gama de servicios y pruebas COVID.",          
      ],
      typeSpeed: 60,      
      loop: true,      
      cursorChar: '|',
   };

   if(document.getElementById("typed")){
      var typed = new Typed('#typed', options);
   }
}