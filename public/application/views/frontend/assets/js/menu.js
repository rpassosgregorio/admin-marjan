// JavaScript Document

var menu_fns = {
	
	$searchInputClass: "",
	$searchInputElem: "",
	isHome: false,
		
	Initialize: function(isHome){
		this.isHome = isHome;
		this.$searchInputClass = ".input-search-products";
		this.$searchInputElem = $(this.$searchInputClass);		
		
		this.LoadEvents();
	},
	
	LoadEvents: function(){
		this.LoadUserEvents();
	},
	
	LoadUserEvents: function(){
		$(this.$searchInputClass).on("keypress", (function(event){
			if(event.keyCode == 13 || event.key.toLowerCase() == "enter"){
				if(this.isHome){
					window.location.href = "sections/produtos/list.html?query=" + $(this.$searchInputClass).val();
				} else {
					window.location.href = "../produtos/list.html?query=" + $(this.$searchInputClass).val();
				}
			}
		}).bind(this));
		
		$(".submenu-desc-input input").on("click", function(){
			$(".submenu-desc-input input").attr("placeholder", "");
		});		
		
		$(".submenu-desc-input input").on("focusout", function(){
			if($(".submenu-desc-input input").val() == ""){
				$(".submenu-desc-input input").attr("placeholder", Application.langTranslate.inputs.search);
			}
		});
		
		$("#navbar-search-btn").on("click", function(){
			
			if($(".search-input-wrp") && $(".search-input-wrp").length){
				
				TweenMax.to(".search-input-wrp", 0.1, {"width" : 0, "margin-left": 5, onComplete: function(){
					$("li.search-input").remove();	
				}, onStart: function(){
					    $("#navbar-search-btn img").css("filter", "contrast(100%)");
				}});
				
				//$(".search-input-wrp").css("width", 0);
				//$(".search-input-wrp").css("margin-left", 0);
				//$("#navbar-search-btn img").css("filter", "contrast(100%)");
				$(".search-input-wrp input").off("focusout");
				$(".search-input-wrp input").off("click");
			} else {	
				
				var min_wdt = 250; 
				$(".primary-navbar-wrapper .navbar.col-two-thirdy>nav>ul").prepend("<li class='search-input'><div class='search-input-wrp'><input placeholder=''/></div></li>");
				$(".search-input-wrp").css("margin-left", $("#navbar-search-btn").width() + 10 );
				TweenMax.to(".search-input-wrp", 0.5, {"width" : (min_wdt + $("#navbar-search-btn").width() + 10), "margin-left": -(min_wdt), onComplete: function(){
					$(".search-input-wrp input").attr("placeholder", "Procure nossos produtos");
				}, onStart: function(){
					    $("#navbar-search-btn img").css("filter", "contrast(60%)");
				}});
				//$(".search-input-wrp").css("width",min_wdt + $("#navbar-search-btn").width() + 10)
				$(".search-input-wrp input").focus();
				$(".search-input-wrp input").on("click", function(){
					
				});

				$(".search-input-wrp input").on("focusout", function(){
					if($(".search-input-wrp input").val() == ""){
						
					}
				});
				
				$(".search-input-wrp input").on("keypress", (function(event){
					if(event.keyCode == 13 || event.key.toLowerCase() == "enter"){
						if(Application.isHomePage){
							window.location.href = "sections/produtos/list.html?query=" + $(".search-input-wrp input").val();
						} else {
							window.location.href = "../produtos/list.html?query=" + $(".search-input-wrp input").val();
						}
					}
				}).bind(this));
			}
		});
	},
}