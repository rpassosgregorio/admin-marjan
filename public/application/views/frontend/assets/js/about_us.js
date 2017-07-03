// JavaScript Document

// JavaScript Document

var about_us_fns = {
	
	//Slider Settings & Controllers
	currSlide: 1,
	sliderSpeed: 1.5, //in seconds
	blockChangeSlide: false,
	ExpandImgUntil: 102, //value in percentage - Ex.: 104 will expand image in 4% more than original size
	ExpandImgSpeed: 3, //in seconds
	ShowSldTextSpeed: 1,
	scrollOffset: 800,
	indicatorsAlreadyAnimated: false,
	slideInfoAlreadyAnimated: false,
	reservedHeigth: 0,
	counter01: 0,
	counter02: 0,
	counter03: 0,
	counter04: 0,
	autoRotateSlider: false,
	
	Initialize: function(){
				
		$(".third-section-wrapper").css("height", $(".third-section-text-wrapper").outerHeight() + $(".au-indicators-wrapper").outerHeight());
		
		this.LoadUserEvents();
		this.ResizeImgs();
				
		var $elem = $(".slider-about-us .info-container");		
		var $elem1 = ".slide-info-container._0" + this.currSlide;	
		var $indicators = $(".au-indicators-wrapper");
		
		if($(window).scrollTop() > $elem.offset().top - this.scrollOffset){
			TweenMax.to($elem1, this.ShowSldTextSpeed, {opacity: 1});
		}
		
		if($(window).scrollTop() > $indicators.offset().top - this.scrollOffset && !this.elemAlreadyAnimated){
			this.showIndicators();
		}		
		
		this.counter01 = parseInt($("#counter01").html());
		this.counter02 = parseInt($("#counter02").html());
		this.counter03 = parseInt($("#counter03").html());
		this.counter04 = parseInt($("#counter04").html());
	},
	
	showIndicators: function(){
		
		var $indicators = $(".au-indicators-wrapper");
		var $indicator_itens = $(".au-indicator-wrapper-itens");
		
		this.elemAlreadyAnimated = true;
		
		TweenMax.fromTo($indicator_itens, this.ShowSldTextSpeed, {css: {marginTop: "-160px", opacity: 0}}, {css:{marginTop: "0px", opacity: 1}, onStart: (function(){
			var $elem01 = "#counter01";
			var $elem02 = "#counter02";
			var $elem03 = "#counter03";
			var $elem04 = "#counter04";

			var counter01 = this.counter01;
			var counter02 = this.counter02;
			var counter03 = this.counter03;
			var counter04 = this.counter04;

			var counter001 = { var: 0 };
			var counter002 = { var: 0 };
			var counter003 = { var: 0 };
			var counter004 = { var: 0 };

			function milhar(n){
				var n = ''+n, t = n.length -1, novo = '';

				for( var i = t, a = 1; i >=0; i--, a++ ){
					var ponto = a % 3 == 0 && i > 0 ? '.' : '';
					novo = ponto + n.charAt(i) + novo;
				}
				return novo;
			}

			 TweenMax.to(counter001, 1.5, {
				  var: counter01, 
				  onUpdate: function () {
					  //console.log(Math.ceil(counter001.var));
					  $($elem01).html(milhar(Math.ceil(counter001.var)));
				  },
				  ease:Circ.easeOut
			  });
			  TweenMax.to(counter002, 1.5, {
				  var: counter02, 
				  onUpdate: function () {
					  //console.log(Math.ceil(counter002.var));
					  $($elem02).html(milhar(Math.ceil(counter002.var)));
				  },
				  ease:Circ.easeOut
			  });
			  TweenMax.to(counter003, 1.5, {
				  var: counter03, 
				  onUpdate: function () {
					  //console.log(Math.ceil(counter003.var));
					  $($elem03).html(milhar(Math.ceil(counter003.var)));
				  },
				  ease:Circ.easeOut
			  });
			  TweenMax.to(counter004, 1.5, {
				  var: counter04, 
				  onUpdate: function () {
					  //console.log(Math.ceil(counter004.var));
					  $($elem04).html(milhar(Math.ceil(counter004.var)));
				  },
				  ease:Circ.easeOut
			  });
		}).bind(this)});	
	},
	
	LoadUserEvents: function(){
		this.StartSlider();		
		this.ScrollEvents();
		this.ResizeEvents();
		this.UserEvents();
	},
	
	UserEvents: function(){
		$(".about-us.slider-controller li.slider-controller-1").addClass("active");
		/*$(".about-us.slider-controller li").on("click", function(event){
			$(".about-us.slider-controller li").removeClass("active");
			$("." + event.currentTarget.className).addClass("active");
		});	*/
	},
	
	StartSlider: function(){
		slider.Initialize(false, this.sliderSpeed, this.ExpandImgSpeed, this.ExpandImgUntil, this.ShowSldTextSpeed, false, this.autoRotateSlider);		
	},
	
	ScrollEvents: function(){		
		//alert("here" + $(window).scrollTop() + " - elem: " + $elem.offset().top);
		$(window).scroll((function() {			
			var $elem = $(".slider-about-us .info-container");
			var $indicators = $(".au-indicators-wrapper");
			var $indicator_itens = $(".au-indicator-wrapper-itens");
			var $elem1 = ".slide-info-container._0" + this.currSlide;		
			this.currSlide = slider.getCurrSlide();
			
			if($(window).scrollTop() > $elem.offset().top - this.scrollOffset && $(window).scrollTop() < $elem.offset().top + $elem.height() -50 && !this.slideInfoAlreadyAnimated){
				this.slideInfoAlreadyAnimated = true;
				TweenMax.to($elem1, this.ShowSldTextSpeed, {opacity: 1});
			} else if($(window).scrollTop() > $elem.offset().top + $elem.height() && this.slideInfoAlreadyAnimated){
				this.slideInfoAlreadyAnimated = false;
				TweenMax.to($elem1, this.ShowSldTextSpeed, {opacity: 0});
			} else if($(window).scrollTop() < $elem.offset().top - this.scrollOffset && this.slideInfoAlreadyAnimated){
				this.slideInfoAlreadyAnimated = false;
				TweenMax.to($elem1, this.ShowSldTextSpeed, {opacity: 0});
			}
			
			if($(window).scrollTop() > $indicators.offset().top - this.scrollOffset && !this.indicatorsAlreadyAnimated){
				this.indicatorsAlreadyAnimated = true;
				this.showIndicators();
			} else if($(window).scrollTop() > $indicators.offset().top + $indicators.height() && this.indicatorsAlreadyAnimated){	
				this.indicatorsAlreadyAnimated = false;
				TweenMax.to($indicator_itens, 0.01, {css:{opacity: 0}});
			} else if($(window).scrollTop() < $indicators.offset().top - this.scrollOffset && this.indicatorsAlreadyAnimated){
				this.indicatorsAlreadyAnimated = false;
				TweenMax.to($indicator_itens, 0.01, {css:{opacity: 0}});
			}
			
		}).bind(this));
	},	
	
	ResizeImgs: function(){
		/*commonFns.ResizeBackgroundImageByClass("slide-item-container");
		commonFns.ResizeBackgroundImageById("first_section_wrapper");*/
	},
	
	ResizeEvents: function(){
		$( window ).resize((function(){					
			//this.ResizeImgs();
			//$(".third-section-wrapper").css("min-height", $(".au-indicators-wrapper").height());
			//$(".third-section-wrapper").css("min-height", $(".third-section-wrapper").height());
			if(!Application.config.isMobile && !Application.config.isIPad){
				$(".third-section-wrapper").css("height", $(".third-section-text-wrapper").outerHeight() + $(".au-indicators-wrapper").outerHeight());
			}
		}).bind(this));
	},
}
