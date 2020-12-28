function openNav() {
  document.getElementById("myNav").style.width = "100%";
  

  var x = document.getElementById("carousel-indicators");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
    
  var x = document.getElementById("courusel-btn-1");
  if (x.style.display === "none") {
      x.style.display = "flex";
    } else {
      x.style.display = "none";
    }
  
  var x = document.getElementById("courusel-btn-2");
  if (x.style.display === "none") {
      x.style.display = "flex";
    } else {
      x.style.display = "none";
    }

}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
  
  var x = document.getElementById("carousel-indicators");
  if (x.style.display === "flex") {
    x.style.display = "none";
  } else {
    x.style.display = "flex";
  }
  var x = document.getElementById("courusel-btn-1");
  if (x.style.display === "none") {
      x.style.display = "flex";
    } else {
      x.style.display = "none";
    }
  
  var x = document.getElementById("courusel-btn-2");
  if (x.style.display === "none") {
      x.style.display = "flex";
    } else {
      x.style.display = "none";
    }
}



$('.carousel').carousel({
  interval: 4000
})

