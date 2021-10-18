// Function on DOM Content Loading execute function eventListeners
document.addEventListener("DOMContentLoaded", eventListeners );

// Function to create event listeners
function eventListeners () {
   if (document.querySelector("#acerca-de")){
      document.querySelector("#acerca-de").addEventListener("click", (e) => {
         if (e.target.classList.contains("btn-map")) {
            e.preventDefault();
            const lat = e.target.dataset.lat;
            const lng = e.target.dataset.lng;
            openModalMap(lat,lng);
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
function openModalMap (lat,lng) {
   // Clean html map container
   cleanHTML(document.querySelector("#map"));   
   // Create iframe
   const iframe = document.createElement("iframe");
   iframe.classList.add("iframe");
   const url = `https://maps.google.com/maps?q=${lat},${lng}&=15&output=embed`;
   iframe.src = url;
   iframe.setAttribute("allowfullscreen","true")
   iframe.setAttribute("frameborder", "0");
   iframe.style.border = "0";
   // Append the iframe to the modal window and Open modal window
   document.querySelector("#map").appendChild(iframe);
   $(".modal").modal("show");
}

// Function to cleanHTML in parameters get a container html
function cleanHTML (container) {   
   if (container) {
      while (container.firstChild) {
         container.removeChild(container.firstChild);
      }	
   }
}
