document.querySelectorAll('.heart-btn').forEach(button => {
  button.addEventListener('click', function(event) {
    event.preventDefault();
    event.stopPropagation();
      this.classList.toggle('clicked');
  });
});


$(document).ready(function() {

// FAQ tab js open   
  $('ul.tabs li').on('click', function(){
    // get the data attribute
    var tab_id = $(this).attr('data-tab');
    // remove the default classes
    $('ul.tabs li').removeClass('current');
    $('.tab-content').removeClass('current');
    // add new classes on mouse click
    $(this).addClass('current');
    $('#'+tab_id).addClass('current');
  });
// FAQ tab js close 
    
// FAQ tab js mobile open   
  $('#select-box').on('change', function(){
    // get the data attribute
    var tab_id = $(this).find(":selected").val();
    // remove the default classes
    $('.tab-content').removeClass('current');
    // add new classes on mouse click
    $(this).addClass('current');
    $('#'+tab_id).addClass('current');
  });
// FAQ tab js mobile close    
 
// banner slider js open 
$('.banr').slick({
  dots:true,
  infinite: true,
  autoplay: true,
  speed: 1000,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true
        
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]    
 
});    
// banner slider js close   

// Adv Manufacturing slider open
    
$('.multiple-items').slick({
  infinite: true,
  dots: true,
  arrows : false,    
  slidesToShow: 3,
  slidesToScroll: 3,
    
    responsive: [
    
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true
        
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
    
// Adv Manufacturing slider close        
    
// FAQ slider open    
    
$('.faq_fade_effct').slick({
  dots: true,
  arrows : false,
  infinite: true,
  speed: 500,
  autoplay: true,
  fade: true,
  cssEase: 'linear'
});    
    
// FAQ slider close
 
// case studies slider open    
    
$('.case-studies-item').slick({
  dots: true,
  arrows : true,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
    
  responsive: [
    
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true   
        
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]    
});    
    
// case studies slider close

//client slide open
$(document).ready(function(){
  $('.client-slider').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 0,
      speed: 3000, 
      arrows: false,
      dots: false,
      cssEase: 'linear', 
      pauseOnHover: true,
      pauseOnFocus:true,
      infinite: true,
      responsive: [
          {
              breakpoint: 1024,
              settings: {
                  slidesToShow: 5
              }
          },
          {
              breakpoint: 768,
              settings: {
                  slidesToShow: 3
              }
          },
          {
              breakpoint: 480,
              settings: {
                  slidesToShow: 3
              }
          }
      ]
  });
});
//client slide close

$('.experience-fade-efct').slick({
  dots: true,
  arrows : true,
  infinite: true,
  speed: 500,
  autoplay: true,
  fade: true,
  cssEase: 'linear'
});    
    

// case studies slider open
    
$(document).ready(function(){
  $('.acc-head').click(function(){
    $(this).next().slideToggle(500);
    $(this).toggleClass('active');
  })
})   
    
// case studies slider close    
    
    
$('[data-fancybox="gallery"]').fancybox({
  
});   
$('[data-fancybox]').fancybox({
  
});  

$('.project-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 4000,
  speed: 2000, 
  arrows: true,
  dots: false,
  cssEase: 'linear', 
  pauseOnHover: true,
  pauseOnFocus:true,
  infinite: false,
     
});

$('.marvels-slider').slick({
  dots: true,
  arrows : true,
  infinite: true,
  speed: 500,
  autoplay: false,
  fade: false,
  cssEase: 'linear'
});  

$('.marvel-image-slider').slick({
  dots: false,
  arrows : false,
  infinite: true,
  speed: 500,
  autoplay: true,
  fade: true,
  cssEase: 'linear'
});   

 $('.app-video-slider').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 0,
  centerMode: true, 
  speed: 3000, 
  arrows: true,
  dots: false,
  cssEase: 'linear', 
  pauseOnHover: true,
  pauseOnFocus:true,
  infinite: true,

}); 
    
    
    
});