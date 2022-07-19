(function($){	

$('.carousel').carousel();

$(window).scroll(function(){
    if ($(window).scrollTop() >= 0) {
        $('header').addClass('fixed-header');
    }
    else {
        $('header').removeClass('fixed-header');
    }
});

$(document).ready(function(){

	$('button.navbar-toggler').on('click', function (e) {
		console.log(0);
		e.preventDefault();
		e.stopPropagation();
		$('.mobile-nav-overlay').fadeIn(400);
		$('.navbar-wrap').addClass('active');
		setTimeout(() => {
			$('.navbar .navbar-close').fadeIn(400);
		}, 500);
	});
	$('.navbar .navbar-close').on('click', function (e) {
		console.log(1);

		$('.mobile-nav-overlay').fadeOut(600);
		$('.navbar-wrap').removeClass('active');
		$('.navbar .navbar-close').fadeOut(400);
	});
	$('.navbar-nav .nav-link.dropdown-toggle').on('click', function (e) {		
		

		var href=$(this).attr("href");
		console.log(href);
    	location.href = href;
		//e.preventDefault();
		//e.stopPropagation();
		//$(this).next().slideToggle();

	});
	
	var galleryTop = new Swiper('.our-facility .slider', {
		spaceBetween: 10,
		loop: true,
		loopedSlides: 3, //looped slides should be the same
		navigation: {
			nextEl: '.our-facility #snext',
			prevEl: '.our-facility #sprev',
		},
		pagination: {
			el: '.our-facility .slider .swiper-pagination',
			clickable: true,
		},
	});
	
	var galleryThumbs = new Swiper('#gallery-thumbs1', {
	  spaceBetween: 10,
	  slidesPerView: 4,
	  loop: true,
	  freeMode: true,
	  loopedSlides: 5, //looped slides should be the same
	  watchSlidesVisibility: true,
	  watchSlidesProgress: true,
	});
	
	var galleryTop = new Swiper('#gallery-top1', {
	  spaceBetween: 10,
	  loop: true,
	  loopedSlides: 5, //looped slides should be the same
	  navigation: {
		nextEl: '#snext1',
		prevEl: '#sprev1',
	  },
	  thumbs: {
		swiper: galleryThumbs,
	  },
	});
	
	var galleryThumbs = new Swiper('#gallery-thumbs2', {
	  spaceBetween: 10,
	  slidesPerView: 4,
	  loop: true,
	  freeMode: true,
	  loopedSlides: 5, //looped slides should be the same
	  watchSlidesVisibility: true,
	  watchSlidesProgress: true,
	});
	
	var galleryTop = new Swiper('#gallery-top2', {
	  spaceBetween: 10,
	  loop: true,
	  loopedSlides: 5, //looped slides should be the same
	  navigation: {
		nextEl: '#snext2',
		prevEl: '#sprev2',
	  },
	  thumbs: {
		swiper: galleryThumbs,
	  },
	});
	
	var galleryThumbs = new Swiper('#gallery-thumbs3', {
	  spaceBetween: 10,
	  slidesPerView: 4,
	  loop: true,
	  freeMode: true,
	  loopedSlides: 5, //looped slides should be the same
	  watchSlidesVisibility: true,
	  watchSlidesProgress: true,
	});
	
	var galleryTop = new Swiper('#gallery-top3', {
	  spaceBetween: 10,
	  loop: true,
	  loopedSlides: 5, //looped slides should be the same
	  navigation: {
		nextEl: '#snext3',
		prevEl: '#sprev3',
	  },
	  thumbs: {
		swiper: galleryThumbs,
	  },
	});
	
	var galleryThumbs = new Swiper('#gallery-thumbs4', {
	  spaceBetween: 10,
	  slidesPerView: 4,
	  loop: true,
	  freeMode: true,
	  loopedSlides: 5, //looped slides should be the same
	  watchSlidesVisibility: true,
	  watchSlidesProgress: true,
	});
	
	var galleryTop = new Swiper('#gallery-top4', {
	  spaceBetween: 10,
	  loop: true,
	  loopedSlides: 5, //looped slides should be the same
	  navigation: {
		nextEl: '#snext4',
		prevEl: '#sprev4',
	  },
	  thumbs: {
		swiper: galleryThumbs,
	  },
	});


	$('.box-accordion div:first-child .accordion').addClass('active').next('.panel').height('100%');
	$('.box-accordion div:first-child .accordion').find('.fas').removeClass('fa-plus').addClass('fa-minus');
	$('.section-a4 .accordion').on('click', function(e) {

		$('.box-accordion .fa-minus').removeClass('fa-minus').addClass('fa-plus');
		
		if ( !$(this).hasClass('active') ) {
			$('.section-a4 .accordion').removeClass('active');
			$(this).addClass('active');
			
			$('.section-a4 .panel').css('height', 0);
			var h = $(this).next().find('.text').outerHeight();
			$(this).next().css('height', h);

			$(this).find('.fas').removeClass('fa-plus').addClass('fa-minus');
		}else{
			$(this).removeClass('active');
			$(this).next().css('height', 0);
			$(this).find('.fas').removeClass('fa-minus').addClass('fa-plus');
		}		
	});
	
	const $dropdown = $(".dropdown");
	const $dropdownToggle = $(".dropdown-toggle");
	const $dropdownMenu = $(".dropdown-menu");
	const showClass = "show";


	 
	$(window).on("load resize", function() {
	  if (this.matchMedia("(min-width: 768px)").matches) {
		$dropdown.hover(
		  function() {
			const $this = $(this);
			$this.addClass(showClass).find('a:first').attr("aria-expanded", "true").next($dropdownMenu).addClass(showClass);
		  },
		  function() {
			const $this = $(this);
			$this.removeClass(showClass);
			$this.find($dropdownToggle).attr("aria-expanded", "false");
			$this.find($dropdownMenu).removeClass(showClass);
		  }
		);
	  } else {
		$dropdown.off("mouseenter mouseleave");
	  }
	});  	
  
});


jQuery(document).ready(function($){

	// Add smooth scrolling on all links inside the navbar
	$(".page-anchors a").on('click', function(event) {
		// Make sure this.hash has a value before overriding default behavior
		if (this.hash !== "") {
		  // Prevent default anchor click behavior
		  event.preventDefault();

		  // Store hash
		  var hash = this.hash;
		  var headerHeight = jQuery('body > header').outerHeight();

		  // Using jQuery's animate() method to add smooth page scroll
		  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		  $('html, body').animate({
		    scrollTop: $(hash).offset().top - (headerHeight-50)
		  }, 800, 'swing', function(){

		    // Add hash (#) to URL when done scrolling (default click behavior)
		    history.pushState({}, "", hash);
		  });
		}  // End if
	});

	var hash_id = window.location.hash;
	var menu_height = jQuery('body > header').outerHeight();
	if ( hash_id !== "" ) { 
	  
	    $('html,body').stop().animate({
	      scrollTop: $( hash_id ).offset().top - (menu_height-50)
	    },800 ,'swing');

	}

});

})(jQuery);

function toggle(id){
	var e=document.getElementById(id);
	if (e.style.display == '') 
	   {
		   e.style.display = 'none'; 
	   } 
	else {
		e.style.display = '';
		 }
	}