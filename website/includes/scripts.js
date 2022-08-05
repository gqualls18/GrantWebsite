function myOpen(x) {
    x.classList.toggle("change");
    var x = document.getElementById("menuLinks");
      if (x.style.display === "block") {
          x.style.display = "none";
      } else {
          x.style.display = "block";
      }
      if (window.innerWidth > 860)
      {
          x.style.display = "none";
      }

  }