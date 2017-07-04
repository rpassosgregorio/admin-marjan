// JavaScript Document

var home_fns = {
	
	//Slider Settings & Controllers
	currSlide: 1,
	sliderSpeed: 1.5, //in seconds
	blockChangeSlide: false,
	ExpandImgUntil: 106, //value in percentage - Ex.: 104 will expand image in 4% more than original size
	ExpandImgSpeed: 7, //in seconds
	autoRotateSlider: true,
	
	//Footer Settings & Controllers
	isFooterExpanded: false,
	footerShowSpeed: 0.25, //in seconds
	
	Initialize: function(){
		this.ArrangeDOMElements();
		this.ExpandFirstSlide();
		this.LoadUserEvents();
		this.footerSocialStream();
	},
	
	footerSocialStream: function(){
		getTwtScript.init();
		loadSocialWallFilters.init();
		
		$('#social-stream-1').dcSocialStream({
			feeds: {	
				/*twitter: {
					id: '/9927875,#designchemical,designchemical',
					thumb: true
				},*/
				facebook: {
					id: '129416393925043',
					intro: 'Postado',
					//out: 'intro,thumb,title,text,user,share',
					out: 'intro,text',
					text: 'content',
					comments: 0,
					image_width: 3, //3 = 600 4 = 480 5 = 320 6 = 180,
					url: Application.config.baseURL + Application.config.frontendViewURL + Application.config.assetsURLExtension + 'social_stream_includes/facebook.php',
					feed: 'feed',
					icon: 'facebook.png'
				}/*,
				instagram:{
					id: "!4055636042"
				}*/
			},
			rotate: {
				delay: 0
			},			
			//twitterId: 'designchemical',
			control: true,
			filter: false,
			wall: false,
			cache: false,
			max: 'limit',
			limit: 3/*,
			iconPath: 'images/dcsns-dark/',
			imagePath: 'images/dcsns-dark/'*/
		});
		
		$('#social-stream-2').dcSocialStream({
			feeds: {	
				/*twitter: {
					id: '/9927875,#designchemical,designchemical',
					thumb: true
				},*/
				facebook: {
					id: '129416393925043',
					intro: 'Postado',
					out: 'intro,thumb,title,text,user,share',
					//out: 'intro,text, thumb, title',
					text: 'content',
					comments: 0,
					image_width: 3, //3 = 600 4 = 480 5 = 320 6 = 180,
					url: Application.config.baseURL + Application.config.frontendViewURL + Application.config.assetsURLExtension + 'social_stream_includes/facebook.php',
					feed: 'feed',
					icon: 'facebook.png'
				}/*,
				instagram:{
					id: "!4055636042"
				}*/
			},
			rotate: {
				delay: 0
			},			
			//twitterId: 'designchemical',
			control: true,
			filter: false,
			wall: false,
			cache: false,
			max: 'limit',
			limit: 1/*,
			iconPath: 'images/dcsns-dark/',
			imagePath: 'images/dcsns-dark/'*/
		});
	},
	
	ArrangeDOMElements: function(){	
		
		var fictControlsHeight = 618;
		
		var interv = setInterval(function(){
			if($("#slider_controller") && $("#slider_controller").height()){
				fictControlsHeight = $("#slider_controller").height();
				// 30 = header /2 - footer /2 Ex.: header 100 / 2 - 40 /2 = 30
				$("#slider_controller").css("top", (($( window ).height()/2 - fictControlsHeight/2)+30) + "px");
				$("#slider_controller").show();
				clearInterval(interv);
			}	
		}, 50);
		
		var interv2 = setInterval(function(){
			if($("#social-stream-1 .stream li, #social-stream-2 .stream li") && $("#social-stream-1 .stream li").height() && $("#social-stream-2 .stream li").height()){
				$(".stream li").addClass("stream-home");
				$(".stream li .section-text").addClass("line-clamp");
				$(".stream li .section-text").addClass("line-clamp-1");
				clearInterval(interv2);
			}	
		}, 50);	
		
		
		TweenMax.to("#slider_controller", 2, {opacity: 1, onComplete: (function(){
			$(".slider-controller img").removeClass("active");
			$(".slider-controller li").removeClass("active");
			$(".slider-controller-1").addClass("active");
			$(".slider-controller-1 img").addClass("active");
			
			slider.Initialize(true, this.sliderSpeed, this.ExpandImgSpeed, this.ExpandImgUntil, 0, true, this.autoRotateSlider);		
		}).bind(this)});
		
		$(".slider-container video").css({
			"min-height" : "100%",
			"width" : "auto",
			"min-width" : "100%",
			"margin-left" : $(".slider-container video").width() / 2 - $(window).width() / 2
		});
			
		
	},
	
	ExpandFirstSlide: function(){		
		var _interval = setInterval((function(){
			var $elem = $("#slide_item_container-" + this.currSlide);
			if( $elem.length && $elem){
				TweenMax.to($elem, this.ExpandImgSpeed, {css:{minWidth: this.ExpandImgUntil + "%", minHeight: this.ExpandImgUntil + "%"}, onComplete: (function(){
					slider.setSlide(this.currSlide, this.currSlide + 1);
				}).bind(this)});
				clearInterval(_interval);
			}
		}).bind(this), 100);
		
	},
	
	LoadUserEvents: function(){				
		this.FooterEvents();
		this.ResizeEvents();
	},

	FooterEvents: function(){
		
		if(Application.config.isAndroidTablet || Application.config.isIPad || Application.config.isMobile){
			$("#footer_home").on("click", (function(){
				if(!this.isFooterExpanded){
					this.isFooterExpanded = true;
					TweenMax.to("#footer_home", this.footerShowSpeed, {bottom: +350});
				} else {
					this.isFooterExpanded = false;
					TweenMax.to("#footer_home", this.footerShowSpeed, {bottom: 0});
				}				
			}).bind(this));			
		} else {
			$("#footer_home").on("mouseover", (function(){
				if(!this.isFooterExpanded){
					this.isFooterExpanded = true;
					TweenMax.to("#footer_home", this.footerShowSpeed, {bottom: +350});
				}				
			}).bind(this));

			$("#footer_home").on("mouseleave", (function(){
				if(this.isFooterExpanded){
					this.isFooterExpanded = false;
					TweenMax.to("#footer_home", this.footerShowSpeed, {bottom: 0});
				}
			}).bind(this));
		}
	},
	
	ResizeEvents: function(){
		$( window ).resize((function(){
			if(!Application.config.isMobile && !Application.config.isIPad){
				$("#slider_controller").css("top", ($( window ).height()/2 - $("#slider_controller").height()/2) + "px");			
				//commonFns.ResizeBackgroundImageByClass("slide-item-container");
			}
			
			$(".slider-container video").css({
				"min-height" : "100%",
				"width" : "auto",
				"min-width" : "100%",
				"margin-left" : $(window).width() / 2 - $(".slider-container video").width() / 2
			});
		}).bind(this));
	},
}
