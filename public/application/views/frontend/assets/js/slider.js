// JavaScript Document

var slider = {
	
	currSlide: 1,
	blockChangeSlide: false,
	expandSlideAfterShow: false,
	sliderSpeed: 1,
	expandImgSpeed: 1,
	expandImgUntil: 100,
	showSldTextSpeed: 1,
	expandBackground: false, //0 - img, 1 - bg
	autoRotate: false,
	numberOfSlides: 5, //fixed
	
	Initialize: function(_expandSlideAfterShow, _sliderSpeed, _expandImgSpeed, _expandImgUntil, _showSldTextSpeed, _expandBackground, _autoRotate){
		
		this.expandSlideAfterShow = _expandSlideAfterShow;
		this.sliderSpeed = _sliderSpeed;
		this.expandImgSpeed = _expandImgSpeed;
		this.expandImgUntil = _expandImgUntil;
		this.showSldTextSpeed = _showSldTextSpeed;
		this.expandBackground = _expandBackground;
		this.autoRotate = _autoRotate;
	
		this.SlidesEvents();
	},
	
	SlidesEvents: function(){
		$(".slider-controller-1").on("click", (function(event){
			this.autoRotate = false;
			if(this.currSlide !=1 && !this.blockChangeSlide){
				this.setSlide(this.currSlide, 1, event);
			}
		}).bind(this));
		
		$(".slider-controller-2").on("click", (function(event){
			this.autoRotate = false;
			if(this.currSlide !=2 && !this.blockChangeSlide){
				this.setSlide(this.currSlide, 2, event);
			}
		}).bind(this));
		
		$(".slider-controller-3").on("click", (function(event){
			this.autoRotate = false;
			if(this.currSlide !=3 && !this.blockChangeSlide){
				this.setSlide(this.currSlide, 3, event);
			}
		}).bind(this));
		
		$(".slider-controller-4").on("click", (function(event){
			this.autoRotate = false;
			if(this.currSlide !=4 && !this.blockChangeSlide){
				this.setSlide(this.currSlide, 4, event);
			}
		}).bind(this));
		
		$(".slider-controller-5").on("click", (function(event){
			this.autoRotate = false;
			if(this.currSlide !=5 && !this.blockChangeSlide){
				this.setSlide(this.currSlide, 5, event);
			}
		}).bind(this));		
	},
	
	getCurrSlide: function(){
		return this.currSlide;	
	},
	
	setSlide: function(currSlide, slideNbr, elem){		
		$(".slider-controller li").removeClass("active");
		$(".slider-controller img").removeClass("active");
		$(".slider-controller-" + slideNbr).addClass("active");
		$(".slider-controller-" + slideNbr + " img").addClass("active");
		/*$(".info-container._0" + this.currSlide).css("opacity", 0);
		$(".info-container._0" + this.slideNbr).css("opacity", 0);*/
		$(".slide-info-container").css("opacity", 0);
		TweenMax.to("#slide_item_container-" + this.currSlide, 0.1, {css:{marginLeft: "0%"}});
		
		this.blockChangeSlide = true;
		TweenMax.to("#slider_items_" + slideNbr, this.sliderSpeed, {left: 0});
		TweenMax.to("#slider_items_" + this.currSlide, this.sliderSpeed, {left: -($( "#slider_container" ).width()), onComplete: (function(){
			$("#slider_items_" + this.currSlide).hide();
			$("#slider_items_" + this.currSlide).css("left", "100%");
			$("#slider_items_" + this.currSlide).show();			
			
			if(this.expandSlideAfterShow){
				var $elem;
				if(!this.expandBackground){
					//Expand Image
					$elem = "#slider_items_" + this.currSlide + " img";
					TweenMax.to($elem, 0.1, {width: '100%'});
				} else {
					//Expand Background
					$elem = "#slide_item_container-" + this.currSlide;				
					TweenMax.to($elem, 0.1, {css:{minWidth:"100%", minHeight: "100%"}});
				}
			}
			
			this.currSlide = slideNbr;
			
			if(this.expandSlideAfterShow){
				if(!this.expandBackground){
					$elem = "#slider_items_" + this.currSlide + " img";
					TweenMax.to($elem, this.expandImgSpeed, {width: this.expandImgUntil + '%'});
				} else {
					$elem = "#slide_item_container-" + this.currSlide;
					var _marginLeft = "0%";
					var a = $($elem).data("halign");
					if($($elem).data("halign") && $($elem).data("halign") == "right"){
						_marginLeft = (100-this.expandImgUntil) + "%";
					}						
					TweenMax.to($elem, this.expandImgSpeed, {css:{minWidth: this.expandImgUntil + "%", minHeight: this.expandImgUntil + "%", marginLeft: _marginLeft}, 
					onComplete: (function(){
						if(this.autoRotate){
							if(this.currSlide == this.numberOfSlides){				
								this.setSlide(this.currSlide, 1);
							} else {
								this.setSlide(this.currSlide, this.currSlide + 1);
							}
						}
					}).bind(this), 
					onStart: (function(){
						/*var a = $($elem).data("halign");
						if($($elem).data("halign")){
							if($($elem).data("halign") == "right"){
								TweenMax.to($elem, this.expandImgSpeed, {css:{marginLeft: 100-(this.expandImgUntil) + "%"}});
							}
						}	*/
					}).bind(this)});
				}
			}
			
			this.blockChangeSlide = false;
			TweenMax.to(".slide-info-container._0" + this.currSlide, this.showSldTextSpeed, {opacity: 1});			
		}).bind(this), onStart: (function(){
			if(elem){
				$("." + elem.currentTarget.className).addClass("active");
			}
		}).bind(this)});		
	},
}