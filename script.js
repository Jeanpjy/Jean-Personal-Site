function toggleDropdown() {
    var dropdown = document.getElementById("myDropdown");
    dropdown.classList.toggle("show");
    document.addEventListener("click", hideDropdown);
  }
  
  function hideDropdown(event) {
    
   
  var dropdown = document.getElementById("myDropdown");
    if (!event.target.matches('.dropbtn')) {
      dropdown.classList.remove("show");
  
      // Remove event listener from document
      document.removeEventListener("click", hideDropdown);
    }
  }
