/*
*	############################################################################
*	
*	Repute - Responsive Multipurpose Bootstrap Theme
*	---------------------------------------------------------------------
*
*	Version		1.2.1
*	Author		The Develovers
*	Copyright	Copyright 2015 The Develovers
*
*	############################################################################
*/

$(document).ready( function() {

	/*----------------------------/
	/* TOP BAR COUNTRY-SELECTION
	/*---------------------------*/

	//comment code below if you want to treat the selector as link
	if($('.country-selector').length > 0) {
		$('.country-selector a').click( function(e) {
			$flagImg = $(this).clone();

			$btnToggle = $(this).parents('ul').siblings('.dropdown-toggle');
			$btnToggle.html('').append($flagImg).append(' <span class="caret"></span>');
		});
	}


	/*----------------------------/
	/* HERO UNIT
	/*---------------------------*/

	if($('#carousel-hero-animated').length > 0) {

		var animatedCarousel = $('#carousel-hero-animated');

		animatedCarousel.carousel({
			interval: 4000
		});

		function doAnimations(elems) {
			var animEndEv = 'webkitAnimationEnd animationend';

			elems.each( function() {
				var thisElem = $(this),
					animationType = thisElem.data('animation');

				thisElem.addClass(animationType).one(animEndEv, function() {
					thisElem.removeClass(animationType);
				});
			});
		}

		var firstAnimatingElems = animatedCarousel.find('.item:first')
								.find('[data-animation ^= "animated"]');

		doAnimations(firstAnimatingElems);

		animatedCarousel.on( 'slide.bs.carousel', function(e) {
			var animatingElems = $(e.relatedTarget).find('[data-animation ^= "animated"]');
			doAnimations(animatingElems);
		});

		// for skipped slide, before animation has ended
		$('.carousel-control, .carousel-indicators li').on('click', function() {
			var animatedItems = animatedCarousel.find('.item')
								.find('[data-animation ^= "animated"]');

			animatedItems.each( function() {
				var animationType = $(this).data('animation');
				$(this).removeClass(animationType);
			})
		});

		// adjust slide min-height
		var items = animatedCarousel.find('.item');
		var itemMaxHeight = 0;

		items.each( function() {
			if( itemMaxHeight < $(this).height() )
				itemMaxHeight = $(this).height();
		})

		items.css( 'min-height', itemMaxHeight );
	}

	// scrolling down for fullscreen hero unit
	if($('.scroll-down').length > 0) {
		$('.scroll-down').localScroll({
			duration: 1000,
			easing: 'easeInOutExpo'
		});
	}

	// fullscreen slider
	if($('.hero-unit-fullscreen-slider .slides').length > 0) {
		$('.hero-unit-fullscreen-slider .slides').maximage({
			cycleOptions: {
				fx: 'fade',
				prev: '#fullslider-arrow_left',
				next: '#fullslider-arrow_right',
				pager: '#fullslider-pager',
			}
		});
	}


	/*----------------------------/
	/* NAVBAR
	/*---------------------------*/

	if($('.navbar-fixed-top.shrinkable').length > 0) {
		$('.wrapper').css('padding-top', 97);

		$(window).scroll(function() {
			if($(document).scrollTop() > 300) {
				$('.navbar-fixed-top').addClass('shrink-active');
			}else {
				$('.navbar-fixed-top').removeClass('shrink-active');
			}
		});
	}

	/* fixed navbar for fullscreen slider (transparent navbar) */
	if($('.navbar-transparent.navbar-fixed-top').length > 0) {
		$(window).on('scroll', function(){
			if( $(window).width() > 1024 ) {
				// switch navigation class and logo image
				if( $(document).scrollTop() > 50 ) {
					$('.navbar').removeClass('navbar-transparent');
					$('.navbar-logo img').attr('src', 'assets/img/logo/repute-logo-nav.png');
				}else {
					$('.navbar').addClass('navbar-transparent');
					$('.navbar-logo img').attr('src', 'assets/img/logo/repute-logo-light.png');
				}
			}
		});
	}

	/* auto hiding navbar for fullscreen slider (transparent navbar) */
	if($('.navbar-auto-hiding').length > 0) {
		$('.navbar-auto-hiding').autoHidingNavbar();
	}

	/*----------------------------/
	/* CAROUSEL
	/*---------------------------*/

	if($('.slick-carousel').length > 0) {
		$('.recent-works.slick-carousel .portfolio-container').slick({
			dots: true,
			slidesToShow: 3,
			cssEase: 'ease-in',
			prevArrow: '<button type="button" data-role="none" class="btn slick-prev">Previous</button>',
			nextArrow: '<button type="button" data-role="none" class="btn slick-next">Next</button>',
			responsive: [
				{
					breakpoint: 993,
					settings: {
						slidesToShow: 2
					}
				},
				{
					breakpoint: 481,
					settings: {
						slidesToShow: 1
					}
				}
			]
		});

		$('.testimonial.slick-carousel .testimonial-container').slick({
			speed: 500,
			fade: true,
			prevArrow: '<button type="button" data-role="none" class="btn slick-prev">Previous</button>',
			nextArrow: '<button type="button" data-role="none" class="btn slick-next">Next</button>',
		});

		$('#carousel-hero .carousel-inner').slick({
			
			speed: 800,
			dots: true,
			fade: true,
			autoplay: true,
			autoplaySpeed: 2500,
			prevArrow: '<button type="button" data-role="none" class="carousel-control left slick-prev">Previous</button>',
			nextArrow: '<button type="button" data-role="none" class="carousel-control right slick-next">Next</button>',
		});
	}
	

	/*----------------------------/
	/* PARALLAX
	/*---------------------------*/

	if($('.parallax').length > 0) {
		$('.parallax').stellar();
	}


	/*----------------------------/
	/* PORTFOLIO ISOTOPE INIT
	/*---------------------------*/

	if($('.portfolio-isotope').length > 0) {
		$(window).load(function() {
			$container = $('.portfolio-isotope');

			var $isoObj = $container.isotope({
				itemSelector: '.portfolio-item',
				layoutMode: 'fitRows'
			});

			$container.parent().height($container.height());

			$('.portfolio-item-filters a').click( function(e) {
				e.preventDefault();

				var selector = $(this).attr('data-filter');
				$container.isotope({
					filter: selector
				});

				$container.parent().height($container.height());

				$('.portfolio-item-filters a').removeClass('active');
				$(this).addClass('active');
			});
		});
	}

	if($('.media-carousel').length > 0) {
		$('.media-carousel').slick({
			dots: true,
			prevArrow: '<button type="button" data-role="none" class="btn slick-prev">Previous</button>',
			nextArrow: '<button type="button" data-role="none" class="btn slick-next">Next</button>'
		});
	}


	/*----------------------------/
	/* BLOG
	/*---------------------------*/

	if($('.featured-video').length > 0) {
		$('.featured-video').fitVids();
	}


	/*----------------------------/
	/* BOOTSTRAP MULTISELECT
	/*---------------------------*/

	if($('.multiselect').length > 0) {
		$('.multiselect').multiselect();
	}


	/*--------------------------------/
	/* AJAX CALL FOR STATEFUL BUTTON
	/*-------------------------------*/

	if( $('#loading-example-btn').length > 0 ) {
		$('#loading-example-btn').click( function() {
			var btn = $(this);

			$.ajax({
				url: 'php/ajax-response.php',
				type: 'POST',
				dataType: 'json',
				cache: false,
				beforeSend: function(){
					btn.button('loading');
				},
				success: function(  data, textStatus, XMLHttpRequest  ) {
					// dummy delay for demo purpose only
					setTimeout( function() {
						$('#server-message').text(data['msg']).addClass('green-font');
						btn.button('reset');
					}, 1000 );
				},
				error: function( XMLHttpRequest, textStatus, errorThrown ) {
					console.log("AJAX ERROR: \n" + errorThrown);
				}
			});

			
		});
	}


	/*--------------------------------/
	/* SIDEBAR NAVIGATION TOGGLE
	/*-------------------------------*/

	$('.submenu-toggle').click( function() {
		if(!$(this).parent().hasClass('active')) {
			$(this).parent().addClass('active');
		} else {
			$(this).parent().removeClass('active');
		}
	});

	$('.sidebar-nav a').click( function() {
		$('.sidebar-nav a').removeClass('current');
		$(this).addClass('current');
	});


	/*--------------------------------/
	/* BOOTSTRAP TOOLTIP
	/*-------------------------------*/

	if($('[data-toggle="tooltip"]').length > 0) {
		$('[data-toggle="tooltip"]').tooltip({
			container: "body"
		});
	}


	/*--------------------------------/
	/* BOOTSTRAP POPOVER
	/*-------------------------------*/

	if($('.btn-popover').length > 0) {
		$('.btn-popover').popover();
	}

	if($('.demo-popover').length > 0) {
		$('.demo-popover #popover-title').popover({
			html: true,
			title: '<i class="fa fa-info-circle"></i> Contacte-nos',
			content: 'This popover has title and support HTML content. Quickly implement process-centric networks rather than compelling potentialities. Objectively reinvent competitive technologies after high standards in process improvements. Phosfluorescently cultivate 24/365.'
		});

		$('.demo-popover #popover-hover').popover({
			html: true,
			title: '<i class="fa fa-info-circle"></i> Popover Title',
			trigger: 'hover',
			content: 'Activate the popover on hover. Objectively enable optimal opportunities without market positioning expertise. Assertively optimize multidisciplinary benefits rather than holistic experiences. Credibly underwhelm real-time paradigms with.'
		});
	}


	/*--------------------------------/
	/* MASKED INPUT
	/*-------------------------------*/

	if($('#masked-input-demo').length > 0) {
		$('#phone').mask('(999) 999-9999');
		$('#phone-ex').mask('(999) 999-9999? x99999');
		$('#tax-id').mask('99-9999999');
		$('#ssn').mask('999-99-9999');
		$('#product-key').mask('a*-999-a999');
	}

	
	/*--------------------------------/
	/* DATE PICKER
	/*-------------------------------*/

	if($('#date-picker-demo').length > 0) {
		var dtp = $('#datepicker').datepicker()
			.on('changeDate', function(e) { dtp.datepicker('hide'); });

		$('#daterangepicker').daterangepicker({
			timePicker: true,
			timePickerIncrement: 10,
			format: 'MM/DD/YYYY h:mm A',
			applyClass: "btn-primary"
		});
	}


	/*--------------------------------/
	/* TEXTAREA WITH COUNTER
	/*-------------------------------*/

	if($('#textarea-demo').length > 0) {
		var textMax = 99;
		
		$('.js-textarea-help span').html(textMax + ' characters remaining');

		$('.textarea-counting').keyup(function() {
			var textLength = $('.textarea-counting').val().length;
			var textRemaining = textMax - textLength;

			$('.js-textarea-help span').html(textRemaining + ' characters remaining');
		});
	}


	/*--------------------------------/
	/* PIE CHART
	/*-------------------------------*/

	if($('.pie-chart').length > 0) {
		$('.pie-chart').easyPieChart({
			size: 180,
			barColor: '#406DA4',
			trackColor: '#eaeaea',
			scaleColor: false,
			lineWidth: 2,
			lineCap: "square",
			animate: 2000
		});
	}


	/*-----------------------------------/
	/* AJAX CALL FOR NEWSLETTER FUNCTION
	/*----------------------------------*/

	$newsletter = $('.newsletter-form');
	$newsletter.find('.btn').click( function() {
		$url = 'php/mailchimp.php';

		$attr = $newsletter.attr('action');
		if (typeof $attr !== typeof undefined && $attr !== false) {
			if($newsletter.attr('action') != '') $url = $newsletter.attr('action');
		}

		subscribe($newsletter, $url);
	});

	function subscribe(newsletter, formUrl) {
		$btn = newsletter.find('.btn');

		$.ajax({

			url: formUrl,
			type: 'POST',
			dataType: 'json',
			cache: false,
			data: {
				email: newsletter.find('input[name="email"]').val(),
			},
			beforeSend: function(){
				$btn.addClass('loading');
				$btn.attr('disabled', 'disabled');
			},
			success: function( data, textStatus, XMLHttpRequest ){
				
				var className = '';

				if( data.result == true ){
					className = 'alert-success';
				}else {
					className = 'alert-danger';
				}

				newsletter.find('.alert').html( data.message )
				.removeClass( 'alert-danger alert-success' )
				.addClass( 'alert active ' + className )
				.slideDown(300);

				$btn.removeClass('loading');
				$btn.removeAttr('disabled');
			},
			error: function( XMLHttpRequest, textStatus, errorThrown ){
				console.log("AJAX ERROR: \n" + XMLHttpRequest.responseText + "\n" + textStatus);
			}
			
		});
	}


	/*-----------------------------------/
	/* AJAX CONTACT FORM
	/*----------------------------------*/

	if($('#contact-form').length > 0) {
		$('#contact-form').parsley();

		$('.contact-form-wrapper form').submit( function(e) {
			e.preventDefault();
			

			if( !$(this).parsley('isValid') )
				return;

			$theForm = $(this);
			$btn = $(this).find('#submit-button');
			$btnText = $btn.text();
			$(this).parent().append('<div class="alert"></div>');
			$alert = $(this).parent().find('.alert');

			$btn.find('.loading-icon').addClass('fa-spinner fa-spin ');
			$btn.prop('disabled', true).find('span').text("Sending...");

			$url = "php/contact.php";

			$attr = $(this).attr('action');
			if (typeof $attr !== typeof undefined && $attr !== false) {
				if($(this).attr('action') != '') $url = $(this).attr('action');
			}

			$.post($url, $(this).serialize(), function(data){
				
				$message = data.message;
				
				if( data.result == true ){
					$theForm.slideUp('medium', function() {
						$alert.removeClass('alert-danger');
						$alert.addClass('alert-success').html($message).slideDown('medium');
					});
				}else {
					$alert.addClass('alert-danger').html($message).slideDown('medium');
				}

				$btn.find('.loading-icon').removeClass('fa-spinner fa-spin ');
				$btn.prop('disabled', false).find('span').text($btnText);

			})
			.fail(function() { console.log('AJAX Error'); });
		});
	}


	/*-----------------------------------/
	/* MISC
	/*----------------------------------*/

	// fix portfolio item
	$('.portfolio-item').on('click', function() {
		// do nothing, somehow this triggering portfolio overlay on mobile Safari
	});

	// indicate mobile browser
	var ua = navigator.userAgent,
	isMobileWebkit = /WebKit/.test(ua) && /Mobile/.test(ua);

	if (isMobileWebkit) {
		$('html').addClass('mobile');
	}

	/*-----------------------------------/
	/* LAZYSIZES
	/*----------------------------------*/
	window.lazySizesConfig = {
		addClasses: true
	};

	/*-----------------------------------/
	/* Sidebar-nav Catalogo tab fix
	/*----------------------------------*/
	$("#sidebar-nav a[role='tab']").click(function () {
		//alert("sucess");
		$("#sidebar-nav li[role='presentation']").each(function(i,obj){
			if($(this).hasClass('active')) $(this).removeClass('active');
		});
	});

	/*-----------------------------------/
	/* AJAX LOAD ARTIGOS
	/*----------------------------------*/
	/*checkURL();
	$('ul li a').click(function (e){

			checkURL(this.hash);

	});
	
	//filling in the default content
	//default_content = $('#pageContent').html();
		
	setInterval("checkURL()",250);

	var lasturl="";

	function checkURL(hash)
	{
		if(!hash) hash=window.location.hash;
		
		if(hash != lasturl)
		{
			lasturl=hash;
			
			// FIX - if we've used the history buttons to return to the homepage,
			// fill the pageContent with the default_content
			
			//if(hash=="")
			//$('#pageContent').html(default_content);
			
			//else
			loadPage(hash);
		}
	}


	function loadPage(url)
	{
		url=url.replace('#page','');
	
		$('#loading').css('visibility','visible');
		
		$.ajax({
			type: "POST",
			url: "php/load_page.php",
			data: 'page='+url,
			dataType: "html",
			success: function(msg){
				
				if(parseInt(msg)!=0)
				{
					$('#pageContent').html(msg);
					$('#loading').css('visibility','hidden');
				}
			}
			
		});
				
		
		$.ajax({
			url: url
		}).done(function(data){
			$('.page-content').html(data);
			$('#loading').css('visibility','hidden');
		});
		
	}*/

	/*Catalogo.php - Set default active vaules*/
	var page = getUrlParameter('gm');
	switch(page){
		case 'cp':
			$("#furo-red").addClass('in active');
			$("#furo-red_crumb").addClass('active');
			$("#cp_crumb").addClass('active');
			$("#cp").addClass('active');
			$("#cp2").addClass('active');
			$("#Chapa-perfurada").addClass('in');
			break;
		case 'fix':
		default:
			$("#anilhas").addClass('in active');
			$("#anilhas_crumb").addClass('active');
			$("#fix_crumb").addClass('active');
			$("#fix").addClass('active');
			$("#fix2").addClass('active');
			$("#Fixacao").addClass('in');
			break;
	}

	//var norma = getUrlParameter('gm');
});

/*GET VALUES FROM URL WITH JS*/
var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

$(document).on("click", ".catitem", function () {

	
	 /*Get Catalogo values*/
     var gama = $(this).data('gm');
	 var grupo = $(this).data('gr');
	 var norma = $(this).data('norma');
	 var equi = $(this).data('equi');
	 var desc = $(this).data('desc');

	 $("#artigo_box .artigo_norma").html( norma );
	 $("#artigo_box .catitemeq").html( equi );
	 $("#artigo_box #artigo_desc").html( desc );
	 //alert(gama+grupo+norma+equi+desc);
	 
	 /*Get Table AJAX url value*/
	 var ajax_url = "php/your.php?nm=" + norma;
	 //$("#gridTable").attr("data-url", ajax_url);
	 $('#gridTable').bootstrapTable('refresh', {
			url: ajax_url
	});
	  //alert( $('#gridTable').data('url'));
	 /*Get Image values*/
	 var img_name = $(this).data('img');
	 var url_img = "assets/img/normas/" + img_name;
	 var img = document.createElement('img');
	 img.src= url_img;  
	 
	 $("#artigo_box .artigo_img").attr("href", url_img);
	 
	 $("#artigo_box .artigo_img").attr("data-size",img.width + 'x' + img.height);
	 
	 $("#artigo_box .artigo_img img").attr("src", url_img);
	 $("#artigo_box .artigo_img img").attr("alt", norma);
	 $("#artigo_box .artigo_figcaption").html(norma + '-' + desc);
	 //alert(url_img+img.width+'x'+img.height); 
	 
});

/* ---------------------------------------------------------------------- */
/*  PhotoSwipper
/* ---------------------------------------------------------------------- */
 /*   (function($) {
    var $pswp = $('.pswp')[0];
    var image = [];

    $('.picture').each( function() {
        var $pic     = $(this),
            getItems = function() {
                var items = [];
                $pic.find('a').each(function() {
                    var $href   = $(this).attr('href'),
                        $size   = $(this).data('size').split('x'),
                        $width  = $size[0],
                        $height = $size[1];

                    var item = {
                        src : $href,
                        w   : $width,
                        h   : $height
                    }

                    items.push(item);
                });
                return items;
            }

        var items = getItems();

        $.each(items, function(index, value) {
            image[index]     = new Image();
            image[index].src = value['src'];
        });

        $pic.on('click', 'figure', function(event) {
            event.preventDefault();
            
            var $index = $(this).index();
            var options = {
                index: $index,
                bgOpacity: 0.9,
                showHideOpacity: true
            }

            var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
            lightBox.init();
        });
    });
})(jQuery);*/
/*
var initPhotoSwipeFromDOM = function(gallerySelector) {

    // parse slide data (url, title, size ...) from DOM elements 
    // (children of gallerySelector)
    var parseThumbnailElements = function(el) {
        var thumbElements = el.childNodes,
            numNodes = thumbElements.length,
            items = [],
            figureEl,
            linkEl,
            size,
            item;

        for(var i = 0; i < numNodes; i++) {

            figureEl = thumbElements[i]; // <figure> element

            // include only element nodes 
            if(figureEl.nodeType !== 1) {
                continue;
            }

            linkEl = figureEl.children[0]; // <a> element

            size = linkEl.getAttribute('data-size').split('x');

            // create slide object
            item = {
                src: linkEl.getAttribute('href'),
                w: parseInt(size[0], 10),
                h: parseInt(size[1], 10)
            };



            if(figureEl.children.length > 1) {
                // <figcaption> content
                item.title = figureEl.children[1].innerHTML; 
            }

            if(linkEl.children.length > 0) {
                // <img> thumbnail element, retrieving thumbnail url
                item.msrc = linkEl.children[0].getAttribute('src');
            } 

            item.el = figureEl; // save link to element for getThumbBoundsFn
            items.push(item);
        }

        return items;
    };

    // find nearest parent element
    var closest = function closest(el, fn) {
        return el && ( fn(el) ? el : closest(el.parentNode, fn) );
    };

    // triggers when user clicks on thumbnail
    var onThumbnailsClick = function(e) {
        e = e || window.event;
        e.preventDefault ? e.preventDefault() : e.returnValue = false;

        var eTarget = e.target || e.srcElement;

        // find root element of slide
        var clickedListItem = closest(eTarget, function(el) {
            return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
        });

        if(!clickedListItem) {
            return;
        }

        // find index of clicked item by looping through all child nodes
        // alternatively, you may define index via data- attribute
        var clickedGallery = clickedListItem.parentNode,
            childNodes = clickedListItem.parentNode.childNodes,
            numChildNodes = childNodes.length,
            nodeIndex = 0,
            index;

        for (var i = 0; i < numChildNodes; i++) {
            if(childNodes[i].nodeType !== 1) { 
                continue; 
            }

            if(childNodes[i] === clickedListItem) {
                index = nodeIndex;
                break;
            }
            nodeIndex++;
        }



        if(index >= 0) {
            // open PhotoSwipe if valid index found
            openPhotoSwipe( index, clickedGallery );
        }
        return false;
    };

    // parse picture index and gallery index from URL (#&pid=1&gid=2)
    var photoswipeParseHash = function() {
        var hash = window.location.hash.substring(1),
        params = {};

        if(hash.length < 5) {
            return params;
        }

        var vars = hash.split('&');
        for (var i = 0; i < vars.length; i++) {
            if(!vars[i]) {
                continue;
            }
            var pair = vars[i].split('=');  
            if(pair.length < 2) {
                continue;
            }           
            params[pair[0]] = pair[1];
        }

        if(params.gid) {
            params.gid = parseInt(params.gid, 10);
        }

        return params;
    };

    var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
        var pswpElement = document.querySelectorAll('.pswp')[0],
            gallery,
            options,
            items;

        items = parseThumbnailElements(galleryElement);

        // define options (if needed)
        options = {

            // define gallery index (for URL)
            galleryUID: galleryElement.getAttribute('data-pswp-uid'),

            getThumbBoundsFn: function(index) {
                // See Options -> getThumbBoundsFn section of documentation for more info
                var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                    pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                    rect = thumbnail.getBoundingClientRect(); 

                return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
            }

        };

        // PhotoSwipe opened from URL
        if(fromURL) {
            if(options.galleryPIDs) {
                // parse real index when custom PIDs are used 
                // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                for(var j = 0; j < items.length; j++) {
                    if(items[j].pid == index) {
                        options.index = j;
                        break;
                    }
                }
            } else {
                // in URL indexes start from 1
                options.index = parseInt(index, 10) - 1;
            }
        } else {
            options.index = parseInt(index, 10);
        }

        // exit if index not found
        if( isNaN(options.index) ) {
            return;
        }

        if(disableAnimation) {
            options.showAnimationDuration = 0;
        }

        // Pass data to PhotoSwipe and initialize it
        gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.init();
    };

    // loop through all gallery elements and bind events
    var galleryElements = document.querySelectorAll( gallerySelector );

    for(var i = 0, l = galleryElements.length; i < l; i++) {
        galleryElements[i].setAttribute('data-pswp-uid', i+1);
        galleryElements[i].onclick = onThumbnailsClick;
    }

    // Parse URL and open gallery if it contains #&pid=3&gid=1
    var hashData = photoswipeParseHash();
    if(hashData.pid && hashData.gid) {
        openPhotoSwipe( hashData.pid ,  galleryElements[ hashData.gid - 1 ], true, true );
    }
};

// execute above function
initPhotoSwipeFromDOM('.my-gallery');*/