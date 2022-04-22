// home slider

var swiper = new Swiper(".home-slider .mySwiper", {
    loop:true,
    pagination: {
      el: ".home-slider .swiper-pagination",
      clickable:true,
    },
  });


  // faq
  var swiper = new Swiper(".q-slider .mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop:true,
    freeMode: true,
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      1200:{
        slidesPerView: 4,
        spaceBetween: 40,
      }
    },
  });


  // reviews
  var swiper = new Swiper(".reviews-slider .mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop:true,
    freeMode: true,
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
     
    },
  });

  // lightbox

  $(".gallery-img").on('click',function(){
    let src=$(this).find('img').attr('src'),
    alt=$(this).find('img').attr('src')

    $('.lightbox').fadeIn(500)
    $('.lightbox img').attr("src",src)
    $('.lightbox img').attr("alt",alt)
    $('body').css('overflow','hidden')
  })

  // close lightbox

  $('.lightbox .close').on('click',function(){
    $('.lightbox').fadeOut(500)
    $('body').css('overflow','auto')
  })

// show password
$('.show-passowrd').on('mousedown',function(){
  $(this).parent().find('input').attr('type','text')
}).bind('mouseup mouseleave touchend',function(){
  $(this).parent().find('input').attr('type','password')
})