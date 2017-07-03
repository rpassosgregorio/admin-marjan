// JavaScript Document

var resp_social = {
	
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
		
		
		/*var $video_campaign_01 = $("video.video-resp-social-campaign-01");
		var $video_campaign_02 = $("video.video-resp-social-campaign-02");
		var $video_campaign_03 = $("video.video-resp-social-campaign-03");
		var $video_campaign_04 = $("video.video-resp-social-campaign-04");
		
		if(!$video_campaign_01.length){
			$(".resp-social-vd-bg-wrapper-01").css({
			 "position" : "relative",				
			 "height" : "100%"
			});
		}
		
		if(!$video_campaign_02.length){
			$(".resp-social-vd-bg-wrapper-02").css({
			 "position" : "relative",				
			 "height" : "100%"
			});
		}
		
		if(!$video_campaign_03.length){
			$(".resp-social-vd-bg-wrapper-03").css({
			 "position" : "relative",				
			 "height" : "100%"
			});
		}
		
		if(!$video_campaign_04.length){
			$(".resp-social-vd-bg-wrapper-04").css({
			 "position" : "relative",				
			 "height" : "100%"
			});
		}*/
		
		this.sideRespSocialClmnWidth = (screen.width * 18/100) - 50;
		$(".resp-social-col01-wrapper").css({
			"min-width" : this.sideRespSocialClmnWidth + "px",			
		});
		var wdt = $(".fixed-menu.menu").width() - $(".resp-social-col01-wrapper").width();
		$(".resp-social-col02-wrapper, .resp-social-video-wrapper, .video-resp-social-campaigns").css("width", wdt);
		$(".resp-social-site-redirect").css("width", wdt);
		$(".resp-social-social-footer").css("width", wdt);
		
		if(Application.config.isAndroidTablet || Application.config.isIPad || Application.config.isMobile){
			$(".resp-social-bg-wrapper").css({
				"position" : "relative",				
				"height" : "100%"
			})
		}		
	},
	
	ResizeImgs: function(){
		//commonFns.ResizeBackgroundImageById("first_section_wrapper");		
		$( window ).resize((function(){		
			if(!Application.config.isMobile && !Application.config.isIPad){
				var wdt = $(".fixed-menu.menu").width() - $(".resp-social-col01-wrapper").width();
				$(".resp-social-col02-wrapper, .resp-social-video-wrapper, .video-resp-social-campaigns").css("width", wdt);
				$(".resp-social-site-redirect").css("width", wdt);
				$(".resp-social-social-footer").css("width", wdt);
			}		
		}).bind(this));
		
		setInterval(function(){
			if(Application.config.isAndroidTablet || Application.config.isIPad){
				$(".resp-social-col01-wrapper").width($(".fixed-menu.menu").width() * 33 / 100);
				var wdt = $(".fixed-menu.menu").width() - $(".resp-social-col01-wrapper").width();
				$(".resp-social-col02-wrapper, .resp-social-video-wrapper, .video-resp-social-campaigns").css("width", wdt);
				$(".resp-social-site-redirect").css("width", wdt);
				$(".resp-social-social-footer").css("width", wdt);
			}	
		}, 150);
		
		
	},
	
	LoadEvents: function(){		
	
		$(".btn-resp-social-know-more.campaign-01").on("click", (function(){
			TweenMax.to(".resp-social-description-campaign-01", this.sliderSpeed, {css:{marginLeft: "0%"}});
			var vid = document.querySelectorAll("video.video-resp-social-campaign-01"); 
			if(!Application.config.isMobile && !Application.config.isIPad && vid.length){
				vid[0].pause();
			}
		}).bind(this));
		
		$(".close-description-campaign-01").on("click", (function(){
			TweenMax.to(".resp-social-description-campaign-01", this.sliderSpeed, {css:{marginLeft: "-100%"}});
			var vid = document.querySelectorAll("video.video-resp-social-campaign-01"); 
			if(!Application.config.isMobile && !Application.config.isIPad && vid.length){
				vid[0].play();
			}
		}).bind(this));	
		
		$(".btn-resp-social-know-more.campaign-02").on("click", (function(){
			TweenMax.to(".resp-social-description-campaign-02", this.sliderSpeed, {css:{marginLeft: "0%"}});
			var vid = document.querySelectorAll("video.video-resp-social-campaign-02"); 
			if(!Application.config.isMobile && !Application.config.isIPad && vid.length){
				vid[0].pause();
			}
		}).bind(this));
		
		$(".close-description-campaign-02").on("click", (function(){
			TweenMax.to(".resp-social-description-campaign-02", this.sliderSpeed, {css:{marginLeft: "100%"}});
			var vid = document.querySelectorAll("video.video-resp-social-campaign-02"); 
			if(!Application.config.isMobile && !Application.config.isIPad && vid.length){
				vid[0].play();
			}
		}).bind(this));	
		
		$(".btn-resp-social-know-more.campaign-03").on("click", (function(){
			TweenMax.to(".resp-social-description-campaign-03", this.sliderSpeed, {css:{marginLeft: "0%"}});
			var vid = document.querySelectorAll("video.video-resp-social-campaign-03"); 
			if(!Application.config.isMobile && !Application.config.isIPad && vid.length){
				vid[0].pause();
			}
		}).bind(this));
		
		$(".close-description-campaign-03").on("click", (function(){
			TweenMax.to(".resp-social-description-campaign-03", this.sliderSpeed, {css:{marginLeft: "-100%"}});
			var vid = document.querySelectorAll("video.video-resp-social-campaign-03"); 
			if(!Application.config.isMobile && !Application.config.isIPad && vid.length){
				vid[0].play();
			}
		}).bind(this));	
		
		$(".btn-resp-social-know-more.campaign-04").on("click", (function(){
			TweenMax.to(".resp-social-description-campaign-04", this.sliderSpeed, {css:{marginLeft: "0%"}});
			var vid = document.querySelectorAll("video.video-resp-social-campaign-04"); 
			if(!Application.config.isMobile && !Application.config.isIPad && vid.length){
				vid[0].pause();
			}
		}).bind(this));
		
		$(".close-description-campaign-04").on("click", (function(){
			TweenMax.to(".resp-social-description-campaign-04", this.sliderSpeed, {css:{marginLeft: "100%"}});
			var vid = document.querySelectorAll("video.video-resp-social-campaign-04"); 
			if(!Application.config.isMobile && !Application.config.isIPad && vid.length){
				vid[0].play();
			}
		}).bind(this));	
	},
}