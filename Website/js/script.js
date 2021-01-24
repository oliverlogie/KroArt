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

};

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
};



$('.carousel').carousel({
  interval: 4000
});


// $(document)
//     .on('click','#read-more',function() { 
//         $(this).removeAttr('id', 'read-more').attr('id', 'show-less').html('SHOW LESS')
//         $('.hideSHOW').addClass('description').removeClass('ellipsis'); 
//     })

//     .on('click','#show-less',function() { 
//         $(this).removeAttr('id', 'show-less').attr('id', 'read-more').html('READ MORE')
//         $('.hideSHOW').removeClass('description').addClass('ellipsis'); 

//     })
// ;

$('.read-more').on('click', function(){
  $(this).prev('div').removeClass('textBox');
});

$(document)
.on('click','.read-more',function() { 
  $(this).removeClass('read-more').addClass('show-less').html('Show Less')
})
.on('click','.show-less',function() { 
  $(this).removeClass('show-less').addClass('read-more').html('Read More')
  $(this).prev('div').addClass('textBox');

})

jQuery(function($) {
  var path = window.location.href;
  $('li a').each(function() {
   if (this.href === path) {
    $(this).addClass('active');
   }
  });
 });

 