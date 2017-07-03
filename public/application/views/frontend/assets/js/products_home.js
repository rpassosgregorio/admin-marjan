// JavaScript Document

var products_home = {
	
	//Slider Settings & Controllers
	currSlide: 1,
	sliderSpeed: 1.5, //in seconds
	blockChangeSlide: false,
	ExpandImgUntil: 102, //value in percentage - Ex.: 104 will expand image in 4% more than original size
	ExpandImgSpeed: 3, //in seconds
	ShowSldTextSpeed: 1,
	sliderPropWH: 4.06,
	sliderWidthRef: 0,
	sliderInitialWidth: 0,
	sliderInitialHeight: 0,
	screenWidth: 0,
	propWindowWidth: 0,
	autoRotateSlider: false,
	
	Initialize: function(){
		this.LoadEvents();
		this.ResizeImgs();		
		slider.Initialize(false, this.sliderSpeed, this.ExpandImgSpeed, this.ExpandImgUntil, this.ShowSldTextSpeed, false, this.autoRotateSlider);
		var _height = $(".slider-container").width() / this.sliderPropWH;
		$(".slide-products").css("height", _height);
		$(".slider-container").css("height", _height);
		$(".slide-products .slider-items").css("height", _height);	
		this.translateText();
	},
	
	translateText: function(){
		$("#search-helper").html(Application.langTranslate.menus.name + " e/ou " + Application.langTranslate.menus.activePrinciple);	
		$("#call-to-health-doctors").html(Application.langTranslate.menus.healthDoctors.toUpperCase());
		$("#call-to-list-under-presc").html(Application.langTranslate.menus.products.toUpperCase() + " " + Application.langTranslate.menus.underPrescription.toUpperCase());
		$("#call-to-list-exempt-presc").html(Application.langTranslate.menus.products.toUpperCase() + " " + Application.langTranslate.menus.exemptPrescription.toUpperCase());
		$("#call-to-list-foods").html(Application.langTranslate.menus.foods.toUpperCase());
	},
	
	ResizeImgs: function(){
		
		
		/*commonFns.ResizeBackgroundImageById("first_section_wrapper");
		commonFns.ResizeBackgroundImageById("fourth-section-col-02");
		commonFns.ResizeBackgroundImageById("fifth-section-col-01");*/
		
	},
	
	LoadEvents: function(){
		
		$( window ).resize((function(){		
			if(!Application.config.isMobile && !Application.config.isIPad){
				var _height = $(".slider-container").width() / this.sliderPropWH;
				$(".slide-products").css("height", _height);
				$(".slider-container").css("height", _height);
				$(".slide-products .slider-items").css("height", _height);
			}
		}).bind(this));
		
		$(".first-filter-wrapper input").on("keypress", (function(event){			
			if(event.keyCode == 13 || event.key.toLowerCase() == "enter"){
				window.location.href = "../produtos/list.html?query=" + $(".first-filter-wrapper input").val();
			}
		}).bind(this));
		
		$(".first-filter-wrapper input").on("click", function(){
			$(".first-filter-wrapper input").attr("placeholder", "");
		});		
		
		$(".first-filter-wrapper input").on("focusout", function(){
			if($(".first-filter-wrapper input").val() == ""){
				$(".first-filter-wrapper input").attr("placeholder", Application.langTranslate.inputs.search);
			}
		});
		
		$(".slide-products .controllers-container").on("mouseover", function(){
			TweenMax.to(".last-releases-info", 1 ,{"opacity": "1"});
		});
		
		$(".slide-products .controllers-container").on("mouseleave", function(){
			TweenMax.to(".last-releases-info", 1 ,{"opacity": "1"});
		});
	},
}