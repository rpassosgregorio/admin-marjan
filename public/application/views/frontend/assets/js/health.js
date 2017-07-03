// JavaScript Document

var healthFns = {
	
	//Slider Settings & Controllers
	currSlide: 1,
	sliderSpeed: 1.5, //in seconds
	blockChangeSlide: false,
	ExpandImgUntil: 102, //value in percentage - Ex.: 104 will expand image in 4% more than original size
	ExpandImgSpeed: 3, //in seconds
	ShowSldTextSpeed: 1,
	
	Initialize: function(){
		this.LoadEvents();
		this.ResizeImgs();
		
		
		this.sideRespSocialClmnWidth = (screen.width * 18/100) - 50;
		$(".health-col01-wrapper").css({
			"min-width" : this.sideRespSocialClmnWidth + "px",			
		});
		
		var wdt = $(".fixed-menu.menu").width() - $(".health-col01-wrapper").width();
		$(".health-col02-wrapper").css("width", wdt);
		$(".health-site-redirect").css("width", wdt);
		$(".health-social-footer").css("width", wdt);
		//slider.Initialize(false, this.sliderSpeed, this.ExpandImgSpeed, this.ExpandImgUntil, this.ShowSldTextSpeed, false);
	},
	
	ResizeImgs: function(){
		//commonFns.ResizeBackgroundImageById("first_section_wrapper");		
		$( window ).resize((function(){
			if(!Application.config.isMobile && !Application.config.isIPad){
				var wdt = $(window).width() - $(".health-col01-wrapper").width();
				$(".health-col02-wrapper").css("width", wdt);
				$(".health-site-redirect").css("width", wdt);
				$(".health-social-footer").css("width", wdt);
			}
		}).bind(this));
		
		setInterval(function(){
			if(Application.config.isAndroidTablet || Application.config.isIPad){
				$(".health-col01-wrapper").width($(".fixed-menu.menu").width() * 33 / 100);
				var wdt = $(window).width() - $(".health-col01-wrapper").width();
				$(".health-col02-wrapper").css("width", wdt);
				$(".health-site-redirect").css("width", wdt);
				$(".health-social-footer").css("width", wdt);				
			}	
		}, 150);
		
	},
	
	LoadEvents: function(){		
	
		$(".btn-health-know-more.campaign-01").on("click", (function(){
			TweenMax.to(".health-description-campaign-01", this.sliderSpeed, {css:{marginLeft: "0%"}});
		}).bind(this));
		
		$(".close-description-campaign-01").on("click", (function(){
			TweenMax.to(".health-description-campaign-01", this.sliderSpeed, {css:{marginLeft: "-100%"}});
		}).bind(this));	
		
		$(".btn-health-know-more.campaign-02").on("click", (function(){
			TweenMax.to(".health-description-campaign-02", this.sliderSpeed, {css:{marginLeft: "0%"}});
		}).bind(this));
		
		$(".close-description-campaign-02").on("click", (function(){
			TweenMax.to(".health-description-campaign-02", this.sliderSpeed, {css:{marginLeft: "100%"}});
		}).bind(this));	
		
		$(".btn-health-know-more.campaign-03").on("click", (function(){
			TweenMax.to(".health-description-campaign-03", this.sliderSpeed, {css:{marginLeft: "0%"}});
		}).bind(this));
		
		$(".close-description-campaign-03").on("click", (function(){
			TweenMax.to(".health-description-campaign-03", this.sliderSpeed, {css:{marginLeft: "-100%"}});
		}).bind(this));	
	},
}