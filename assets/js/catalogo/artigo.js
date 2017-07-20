$(document).ready(function(){

	//Add Inactive Class To All Accordion Headers
	$('.accordion-header').toggleClass('inactive-header');

	//Set The Accordion Content Width
	var contentwidth = $('.accordion-header').width();
	$('.accordion-content').css({'width' : contentwidth });

	var headerwidth;

	function explode(){
		$('#side-produto').removeClass('width-five');
		$('#main-produto').removeClass('width-ninety');
		$('#side-produto').removeClass('col-md-1');
		$('#main-produto').removeClass('col-md-11');
		$('#side-produto').addClass('col-md-8');
		$('#main-produto').addClass('col-md-4');
	}

	function implode(){
		$('#side-produto').addClass('width-five');
		$('#main-produto').addClass('width-ninety'); 
		$('#side-produto').removeClass('col-md-8');
		$('#main-produto').removeClass('col-md-4');
		$('#side-produto').addClass('col-md-1');
		$('#main-produto').addClass('col-md-11');
	}
	function implode_title(){
		$('.titulo-catalogo').hide(); 
	}
	function explode_title(){
		$('.titulo-catalogo').show();
	}

	function explode_content(){
		$('.active-header').next().slideToggle().toggleClass('open-content');
	}

	

	var clickNumber = 0,
    clicksAllowed = true;


	// Optimalisation: Store the references outside the event handler:
	var $window = $(window);
	//var $pane = $('#pane1');

	function checkWidth() {
	    var windowsize = $window.width();
	    headerwidth = $('.accordion-header').width();
	    //alert(headerwidth);
	    if (windowsize > 991 ) {
	    	if(headerwidth < 100){
       			$('#side-produto').addClass('width-five anime');
				$('#main-produto').addClass('width-ninety anime');
				$('.titulo-catalogo').hide();
			}
			$('#side-produto').removeClass('tablet');
			$('#main-produto').removeClass('tablet');
	    }
	    if(windowsize < 992){
	    	$('#side-produto').removeClass('width-five anime');
			$('#main-produto').removeClass('width-ninety anime');
			$('#side-produto').addClass('tablet');
			$('#main-produto').addClass('tablet');
			$('.titulo-catalogo').show();
	    }
	}
	// Execute on load
	checkWidth();
	// Bind event listener
	$(window).resize(checkWidth);

	
	

	// The Accordion Effect
	$('.accordion-header').click(function () {
		if($(window).width()>991){
			if(clicksAllowed){
				clicksAllowed = false;//Disbale Click for 0.8sec
				headerwidth = $('.accordion-header').width();

				if(headerwidth < 100){
					$('html, body').animate({scrollTop: $('.accordion-header').offset().top - 54}, 200);
					explode();
					if($(this).is('.inactive-header')) {
						$('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
						$(this).toggleClass('active-header').toggleClass('inactive-header');
						setTimeout(explode_title,200);
						setTimeout(explode_content,200);
					}
				}else{
					if($(this).is('.inactive-header')) {
						$('html, body').animate({scrollTop: $('.accordion-header').offset().top - 54}, 200);
						$('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
						$(this).toggleClass('active-header').toggleClass('inactive-header');
						$(this).next().slideToggle().toggleClass('open-content');
						$('.titulo-catalogo').show();
					}
					else {
						$('html, body').animate({scrollTop: $('.accordion-header').offset().top - 180}, 1000);
						setTimeout(implode_title,200);
						setTimeout(implode, 200);
						$(this).toggleClass('active-header').toggleClass('inactive-header');
						$(this).next().slideToggle().toggleClass('open-content');			
					}
				}
				setTimeout(function() {
	                clicksAllowed = true; //Enable click after 0.8sec
	    		}, 350);
				
			}
		}else{
			$('html, body').animate({scrollTop: $('.accordion-header').offset().top}, 0);
			if($(this).is('.inactive-header')) {
				$('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
				$(this).toggleClass('active-header').toggleClass('inactive-header');
				$(this).next().slideToggle().toggleClass('open-content');
			}
			else {
				$(this).toggleClass('active-header').toggleClass('inactive-header');
				$(this).next().slideToggle().toggleClass('open-content');			
			}
		}
	});

	return false;
});


	
	
 


 	




	


