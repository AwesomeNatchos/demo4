// //side bar opening
// function openSidebar() {
//     document.getElementsByClassName("sidebar")[0].style.width = "250px";
//   }

// //side bar closing with clicks
//   document.addEventListener("click", function(event) {
//     if (!event.target.closest(".sidebar")) {
//       // Close the sidebar
//     }
//   });
function openSidebar() {
    document.getElementsByClassName("sidebar")[0].style.width = "250px";
  }
  
  $(document).click(function(event) {
    if (!$(event.target).closest('.sidebar').length) {
      document.getElementsByClassName("sidebar")[0].style.width = "0";
    }
  });
  
  $(document).ready(function() {
    $('.navbar-toggler').click(function() {
      $('.navbar-collapse').toggle();
    });
  });
  
  