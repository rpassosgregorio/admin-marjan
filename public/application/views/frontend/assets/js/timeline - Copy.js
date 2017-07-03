// JavaScript Document

var timeline_fns = {
	
	currYear: 1,
	totalYears: 0,
	fetchedYears: "",
	yearsJSON_URL: "../../sections/sobre-nos/timeline.json",
	yearImgPath: "",
	switchBg: 1,
	lockMoveTimeline: false,
	windowRefWidth: 0,
	lastUlYearsLeft: 0,
	lastAllYearsWidth: 0,
	
	
	documentReady: function(){
		this.windowRefWidth = $("body").width();
		this.ArrangeTimelinePositionPart1();
		this.lastAllYearsWidth = $(".all-years").outerWidth();
	},
	
	Initialize: function(){		
		this.fetchYears();
	},
	
	fetchYears: function(){
		this.fetchedYears = $.parseJSON(
			$.ajax({
				url: this.yearsJSON_URL,
				async: false
			}).responseText);
		var a = setInterval((function(){
			if(Application.fetchedYears != ""){	
				this.totalYears = this.fetchedYears.years.length;
				this.fetchedYears.years.sort(function(a,b) {
					
					var x = a.year;
					var y = b.year;
					
					return (x > y) ? 1 : ((y > x) ? -1 : 0);
				});
				
				this.yearImgPath = this.fetchedYears.settings.img_path;
				this.loadYearsInDOM();
				clearInterval(a);
			}
		}).bind(this), 250);
	},
		
	loadYearsInDOM: function(){
		for(i = 0; i < this.fetchedYears.years.length; i++){
			if( i != this.fetchedYears.years.length - 1){
				var liSeparator = "<li class='li-tl-separator'></li>";
			} else {
				var liSeparator = "";
			}
			$(".ul-years").append("<li class='li-years y" + this.fetchedYears.years[i].seq + "' data-seqYear='" + this.fetchedYears.years[i].seq + "'><span><h4>" + this.fetchedYears.years[i].year +"</h4></span></li>" + liSeparator);
		}
		this.ArrangeTimelinePositionPart2();
		$(".curr-year-text h3, .curr-year-text h5, .curr-year-img.bg1, .curr-year-img.bg2").css("opacity", 0);
		$(".curr-year-text h3").html(this.fetchedYears.years[this.currYear-1].year + "<br><br>");
		$(".curr-year-text h5").html(this.fetchedYears.years[this.currYear-1].release);
		
		$(".curr-year-img.bg1").css({
			"background-image" : "url(" + this.yearImgPath + this.fetchedYears.years[this.currYear-1].img + ")",
		});		
		TweenMax.to(".curr-year-text h3, .curr-year-text h5, .curr-year-img.bg1", 1, {opacity: 1});
		
		$(".ul-years li").each(function(index, elem){
			if(index <= 1){
				elem.style.opacity = 1;
			} else {
				elem.style.opacity = 0.4;
			}
		});
		
		this.LoadUserEvents();
		this.LoadResizeEvents();
	},
	
	ArrangeTimelinePositionPart1: function(){		
		$(".years-img img").css("margin-left", ((this.windowRefWidth /2 - $(".years-img img").width()/2)*100 / this.windowRefWidth) + "%");
		$(".years-img img").css("opacity", 1);
		$(".year-info").css("opacity", 1);
		$(".our-history-timeline").css("width", $(".know-more-about-mj-items").width() + "px");
		$(".our-history-timeline").css("left", this.windowRefWidth /2 - $(".year-info").width()/2);
	},
	
	ArrangeTimelinePositionPart2: function(){		
		var allYrsWrpprWdt = $(".all-years").width();
		var allYrsWrpprLeft = $(".all-years")[0].offsetLeft;
		var yearsImgYrsWrpprLeft = $(".years-img img")[0].offsetLeft;
		
		var yearsImgYrsWrpprWidth = $(".years-img img").width();
		var yearsFirstLiWidth = $(".ul-years li:first-child").width();
		var $ulYearsWrpprLeft = yearsImgYrsWrpprLeft +  yearsImgYrsWrpprWidth/2 - yearsFirstLiWidth/2 - allYrsWrpprLeft;
		
		$(".ul-years").css("margin-left", ($ulYearsWrpprLeft + 2) + "px");
		this.lastUlYearsLeft = $ulYearsWrpprLeft;
	},
	
	LoadUserEvents: function(){
		$(".ul-years li").on("click", (function(event){
			this.MoveTimeline(Number(event.currentTarget.dataset.seqyear));
		}).bind(this));
		
		$(".tl-left-arrow").on("click", (function(event){
			this.MoveTimeline(this.currYear - 1);
		}).bind(this));
		
		$(".tl-left-arrow-2x").on("click", (function(event){
			this.MoveTimeline(1);
		}).bind(this));
		
		$(".tl-right-arrow").on("click", (function(event){
			this.MoveTimeline(this.currYear + 1);
		}).bind(this));
		
		$(".tl-right-arrow-2x").on("click", (function(event){
			this.MoveTimeline(this.totalYears);
		}).bind(this));
	},
	
	MoveTimeline: function(_currClickedYear){
		if(this.lockMoveTimeline){
			return;
		}
		
		var currClickedYear = _currClickedYear;

		var multiplier = 1;

		if(currClickedYear === this.currYear)
			return;

		if(currClickedYear > this.currYear){
			multiplier = currClickedYear - this.currYear;
		} else {
			multiplier = currClickedYear - this.currYear;
		}

		if(currClickedYear > this.totalYears || currClickedYear < 1)
			return;
		
		this.lockMoveTimeline = true;

		this.currYear = currClickedYear;
		
		TweenMax.to(".curr-year-text p", 1, {opacity: 0});

		if(this.switchBg === 1){
			var $bgHide = ".curr-year-img.bg" + this.switchBg;
			var $bgShow = ".curr-year-img.bg" + (this.switchBg + 1);
			TweenMax.to($bgHide, 2, {opacity: 0});
			$($bgShow).css({
				"background-image" : "url(" + this.yearImgPath + this.fetchedYears.years[this.currYear-1].img + ")",
			});				
			TweenMax.to($bgShow, 2, {opacity: 1});
			this.switchBg = 2;
		} else {
			var $bgHide = ".curr-year-img.bg" + this.switchBg;
			var $bgShow = ".curr-year-img.bg" + (this.switchBg - 1);
			TweenMax.to($bgHide, 2, {opacity: 0});
			$($bgShow).css({
				"background-image" : "url(" + this.yearImgPath + this.fetchedYears.years[this.currYear-1].img + ")",
			});				
			TweenMax.to($bgShow, 2, {opacity: 1});				
			this.switchBg = 1;
		}

		//$(".li-years.y" + this.currYear).addClass("active");

		$(".ul-years li.li-years").each((function(index, elem){
			var elemClass= "." + elem.className.replace(" ", ".");
			if(this.currYear > 1 && this.currYear < this.totalYears){
				if(index + 1 == this.currYear - 1 || index + 1 == this.currYear || index + 1 == this.currYear + 1){
					TweenMax.to(elemClass, 0.5, {opacity: 1});
				} else {
					TweenMax.to(elemClass, 0.5, {opacity: 0.4});
				}
			} else if(this.currYear == 1){
				if(index + 1 == this.currYear || index + 1 == this.currYear + 1){
					TweenMax.to(elemClass, 0.5, {opacity: 1});
				} else {
					TweenMax.to(elemClass, 0.5, {opacity: 0.4});
				}
			} else if(this.currYear == this.totalYears){
				if(index + 1 == this.currYear - 1 || index + 1 == this.currYear){
					TweenMax.to(elemClass, 0.5, {opacity: 1});
				} else {
					TweenMax.to(elemClass, 0.5, {opacity: 0.4});
				}
			}
		}).bind(this));			

		var liYearWidth = $(".li-years.y" + this.currYear).outerWidth();
		var currLeft = $(".ul-years")[0].offsetLeft;
		var yearElemWidthMultp = (40 + liYearWidth) * multiplier;
		var newMultipliedLeft = currLeft - yearElemWidthMultp;

		TweenMax.to(".ul-years", 1, {css:{marginLeft: newMultipliedLeft}, onComplete: (function(){
			$(".curr-year-text h3").html(this.fetchedYears.years[this.currYear-1].year + "<br><br>");
			$(".curr-year-text h5").html(this.fetchedYears.years[this.currYear-1].release);
			TweenMax.to(".curr-year-text h3", 1, {opacity: 1});
			TweenMax.to(".curr-year-text h5", 1, {opacity: 1});
			this.lockMoveTimeline = false;				
			this.lastUlYearsLeft = newMultipliedLeft;			
			this.lastAllYearsWidth = $(".all-years").outerWidth();
		}).bind(this)});
		//$(".ul-years").css("margin-left", );
	},
	
	LoadResizeEvents: function(){
		$(window).on("resize", (function(){			
			
			$(".our-history-timeline").css("width", $(".know-more-about-mj-items").width() + "px");
		    $(".our-history-timeline").css("left", $(".know-more-about-mj-items")[0].offsetLeft);
			this.windowRefWidth = $("body").width();
			
			var disc = $(".years-img").width() * 20 / 100;			
			var yearsImgYrsWrpprLeft = Number($(".years-img img").css("margin-left").replace("px", ""));
			var liYearWidth = $(".li-years.y" + this.currYear).outerWidth();
			var yearsImgYrsWrpprWidth = $(".years-img img").width();
			
			if(this.currYear == 1){
				var disc2 = liYearWidth / 2;
			} else {
				var disc2 = (40 + liYearWidth) * (this.currYear - 1);
				disc2 = disc2 + liYearWidth / 2;
			}
			
			var $ulYearsWrpprLeft = yearsImgYrsWrpprLeft +  yearsImgYrsWrpprWidth/2 - disc - disc2;			
			TweenMax.to(".ul-years", 0.1, {css:{marginLeft: $ulYearsWrpprLeft}});
			this.lastUlYearsLeft = $ulYearsWrpprLeft;
			this.lastAllYearsWidth = $(".all-years").outerWidth();
			
		}).bind(this));
	},
};