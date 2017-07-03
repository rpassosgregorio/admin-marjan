// JavaScript Document

// JavaScript Document

var Application = {
	
	currSection: "",
	langURL: "",
	langTranslate: "",
	currWindowWidth: 0,	
	isHomePage: true,
	updateView: false,
	windowInitialWidth: 0,
	screenWidth: 0,
	productsJSONUrl: "../produtos/products.json",	
	isPortrait: false,
	
	config: {
		defaultLang: "pt", // pt, en or es
		langURLPrefix: "",
		langEN: "lang/langEN.json",
    	langPT: "lang/langPT.json",
    	langES: "lang/langES.json",
		isNative        : !!window.cordova,
        isIPad          : !!navigator.userAgent.match(/iPad/i),
        isIPhone        : !!navigator.userAgent.match(/iPhone/i),
        isIPod          : !!navigator.userAgent.match(/iPod/i),
        isAndroid       : !!navigator.userAgent.match(/Android/i),
        isAndroidTablet : !!navigator.userAgent.match(/Android/i) && !navigator.userAgent.match(/Mobile/i),
        isAndroidPhone  : !!navigator.userAgent.match(/Android/i) && !!navigator.userAgent.match(/Mobile/i),
        /* Not tablet */
        isMobile        : !!navigator.userAgent.match(/iPhone/i) || !!navigator.userAgent.match(/iPod/i) || (!!navigator.userAgent.match(/Android/i) && !!navigator.userAgent.match(/Mobile/i))
	},
	
	documentReady: function(){
		
		if(Application.config.isMobile){
			window.location.href = "../portal/embreve.html";
		}
		
		if(Application.config.isMobile || Application.config.isAndroidTablet || Application.config.isIPad){
			$("video").hide();	
			$(".secondary-navbar-wrapper .navbar-resp-social a").html("RESPONSABILIDADE<br>SOCIAL");
			$(".secondary-navbar-wrapper .navbar-health a").html("SAÚDE E<br>BEM-ESTAR");
			$(".secondary-navbar-wrapper .navbar-health-doctors a").html("PROFISSIONAIS<br>DA SAÚDE");
			$(".secondary-navbar-wrapper .navbar-item a").css("line-height", "100%");		
			$(".secondary-navbar-wrapper .navbar-link-container").css("display", "inline-flex");
		}
		
		this.windowInitialWidth = $(window).width();
		this.screenWidth = screen.width;
		
		/*if($(document).height() < $(document).width()){
		    Application.isPortrait = false;
	    } else {
		    Application.isPortrait = true;
		}*/
		
		/*if(screen.height < screen.width){
		    Application.isPortrait = false;
	    } else {
		    Application.isPortrait = true;
		}*/
		
		$("body").append("<div class='screen-ref' style='position: fixed; width: 100%; height: 100%; top: 0; left: 0; display: none;'></div>");
		
		Application.deviceVisibleScreenHgt = $('.screen-ref').height();
		Application.deviceVisibleScreenWdt = $('.screen-ref').width();
		
		if(Application.deviceVisibleScreenHgt < Application.deviceVisibleScreenWdt){
		    Application.isPortrait = false;			
	    } else {
		    Application.isPortrait = true;
		}		
		
		if(Application.config.isIPad || Application.config.isMobile){
			$(".body-mj").css("width", $(document).width());
			
			setInterval(function(){			
				
				if(screen.height < screen.width && Application.isPortrait){
					Application.isPortrait = false;
				} else {
					Application.isPortrait = true;
				}
				
				/*if($(document).height() < $(document).width() && Application.isPortrait){    			
					$(".body-mj").css("width", 0);
					$(".body-mj").css("width", $(document).width());
					Application.isPortrait = false;
					//menu_fns.setFirstMenuLandscape();
				} else {
					if(!Application.isPortrait && $(document).height() > $(document).width()){
						$(".body-mj").css("width", 0);
						$(".body-mj").css("width", $(document).width());					
						Application.isPortrait = true;
						//menu_fns.setFirstMenuPortrait();
					}
				}*/
				
				/*if(window.innerHeight < window.innerWidth && Application.isPortrait){    			
					$(".body-mj").css("width", 0);
					$(".body-mj").css("width", window.innerWidth);
					Application.isPortrait = false;
					menu_fns.setFirstMenuLandscape();
				} else {
					if(!Application.isPortrait && window.innerHeight > window.innerWidth){
						$(".body-mj").css("width", 0);
						$(".body-mj").css("width", window.innerWidth);					
						Application.isPortrait = true;
						menu_fns.setFirstMenuPortrait();
					}
				}*/
			});
		}
		
		Application.ArrangeElemsInDOM();
	},
	
	ArrangeElemsInDOM: function(){
		if($(".know-more-about-mj") && $(".know-more-about-mj").length){
			var hgt = 0;
			$("#know-more-about-mj-items-wrapper-01-a .know-more-about-mj-items-wrapper").each(function(index, item){
				if(item.clientHeight > hgt){
					hgt = item.clientHeight;
					item.clientHeight = hgt;
				}
			});
			
			$("#know-more-about-mj-items-wrapper-01-a .know-more-about-mj-items-wrapper").css("height", hgt + "px");
		}
		
			var hgt2 = 0;
			$(".third-section-products .second-filter-wrapper a").each(function(index, item){
				if(item.clientHeight > hgt2){
					hgt2 = item.clientHeight;
					item.clientHeight = hgt2;
				}
			});
		
			$(".third-section-products .second-filter-wrapper a").css("height", hgt2 + "px");
	},
	
	beforeStart: function(isHome){
		this.isHomePage = isHome;
		
		if(isHome){
			this.productsJSONUrl = "sections/produtos/products.json";
		}
		
		this.getProducts();
		this.SetLanguage();
		this.LoadUserEvents();
		this.Initialize(isHome);
		this.currWindowWidth = $( window ).width();
	},
	
	Initialize: function(){
		commonFns.HighlightMenuItem(this.getSection());
		
		if($(".loader-wrapper") && $(".loader-wrapper").length){
			setTimeout(function(){ 
				TweenMax.to(".loader-wrapper", 1, {"opacity": "0", onComplete:function(){
					$(".loader-wrapper").hide();
					$(".loader-wrapper").remove();
				}});				
			}, 1000);			
		}		
		$(".no-home").css("overflow-y", "scroll");
		
	},
	
	getProducts: function(){		
		this.products = $.parseJSON(
			$.ajax({
				url: this.productsJSONUrl,
				async: false
			}).responseText);
		
		var a = setInterval(function(){
			if(Application.products != ""){
				Application.products.products.sort(function(a,b) {
					
					var x = a.name.replace(/\®/g,"");
					var y = b.name.replace(/\®/g,"");
					
					return (x > y) ? 1 : ((y > x) ? -1 : 0);
				});	
				
				if($(".pdct-nbrs") && $(".pdct-nbrs").length){					
					var mtp = Application.products.products.length / 10;
					if(mtp > 1){
						$(".pdct-nbrs").html(parseInt(mtp) * 10);
					} else {
						$(".pdct-nbrs").html(Application.products.products.length - 1);
					}					
				}
				clearInterval(a);
			}
		}, 250);
	},	
	
	SetLanguage: function(){
		
		var currentLocation = window.location.href;
		
		/*if(currentLocation.indexOf("index") >= 0) {
			isHomePage = true;
		} else {
			isHomePage = false;
		}*/
		
		if(this.isHomePage){
			this.config.langURLPrefix = "./";
		} else {
			this.config.langURLPrefix = "../../";
		}
		
		this.config.langEN = this.config.langURLPrefix + "lang/langEN.json";
    	this.config.langPT = this.config.langURLPrefix + "lang/langPT.json";
    	this.config.langES = this.config.langURLPrefix + "lang/langES.json";
		
		if (this.config.defaultLang == 'en') {
			this.langUrl = this.config.langEN;
		} else if (this.config.defaultLang == 'pt') {
			this.langUrl = this.config.langPT;
		} else if (this.config.defaultLang == 'es') {
			this.langUrl = this.config.langES;
		}
		
		var self = this;
		
		this.langTranslate = $.parseJSON(
			$.ajax({
				url: this.langUrl,
				async: false
			}).responseText);
		var a = setInterval((function(){
			if(Application.langTranslate != ""){
				this.updateView = true;
				this.translateText();
				clearInterval(a);
			}
		}).bind(this), 250);
	},
	
	translateText: function(){
		
		
		$("#navbar_about_us a").html(Application.langTranslate.menus.about_us.toUpperCase());
		//$("#navbar_resp_social a").html(Application.langTranslate.menus.social_resp.toUpperCase());
		$("#navbar_products a").html(Application.langTranslate.menus.products.toUpperCase());
		//$("#navbar_health a").html(Application.langTranslate.menus.healthAndWelfare.toUpperCase());
		//$("#navbar_health_doctors a").html(Application.langTranslate.menus.healthDoctors.toUpperCase());
		$("#navbar_contact a").html(Application.langTranslate.menus.contact.toUpperCase());
		
		if(!Application.config.isMobile && !Application.config.isAndroidTablet && !Application.config.isIPad){
			$("#navbar_resp_social a").html(Application.langTranslate.menus.social_resp.toUpperCase());			
			$("#navbar_health a").html(Application.langTranslate.menus.healthAndWelfare.toUpperCase());
			$("#navbar_health_doctors a").html(Application.langTranslate.menus.healthDoctors.toUpperCase());			
		}
		
		$("#sm-prod-au-btn-km").html(Application.langTranslate.buttons.knowMore);
		$("#sm-prod-rs-btn-km").html(Application.langTranslate.buttons.knowMore);
		$("#sm-prod-pd-btn-km").html(Application.langTranslate.buttons.knowMore);
		$("#sm-prod-ht-btn-km").html(Application.langTranslate.buttons.knowMore);
		$("#sm-prod-hd-btn-km").html(Application.langTranslate.buttons.knowMore);
		$("#sm-prod-ct-btn-km").html(Application.langTranslate.buttons.knowMore);
		
		$("#submenu-products-first-title").html(Application.langTranslate.menus.ourProducts);
		$("#submenu-products-second-title").html(Application.langTranslate.menus.products);
		$("#submenu-prod-show-all").html(Application.langTranslate.menus.aToZ);
		$("#submenu-prod-show-under-pres").html(Application.langTranslate.menus.underPrescription);
		$("#submenu-prod-show-exempt-pres").html(Application.langTranslate.menus.exemptPrescription);
		$("#submenu-prod-show-foods").html(Application.langTranslate.menus.foods);
		$("#sm-prod-health-docts-btn").html(Application.langTranslate.menus.healthDoctors);
		$(".submenu-desc-input p").html(Application.langTranslate.menus.name + " e/ou " + Application.langTranslate.menus.activePrinciple);
	    $("#input-wrapper-submenu input").attr("placeholder", Application.langTranslate.inputs.search);
	},
	
	getSection: function(){
		if(window.location.href.indexOf("sobre-nos") >= 0){
			return this.currSection = "about_us";
		}
		
		if(window.location.href.indexOf("responsabilidade-social") >= 0){
			return this.currSection = "social_resp";
		}
		
		if(window.location.href.indexOf("produtos") >= 0){
			return this.currSection = "products";
		}
		
		if(window.location.href.indexOf("profissionais-da-saude") >= 0){
			return this.currSection = "healthDoctors";
		}
		
		if(window.location.href.indexOf("saude-e-bem-estar") >= 0){
			return this.currSection = "health";
		}
		
		if(window.location.href.indexOf("contato") >= 0){
			return this.currSection = "contact";
		}
		
		if(window.location.href.indexOf("sala-social") >= 0){
			return this.currSection = "social_room";
		}
		
		if(window.location.href.indexOf("noticias") >= 0){
			return this.currSection = "noticies";
		}
	},
	
	LoadUserEvents: function(){
		this.MenuEvents();		
		this.FooterEvents();
	},
	
	ShowSubmenu: function(id){
		switch(id){
			case "navbar_about_us":
				$(".submenu-wrapper.submenu-about-us").show();
				break;
			case "submenu-wrapper-about-us":
				$(".submenu-wrapper.submenu-about-us").show();
				break;
				
			case "navbar_resp_social":
				$(".submenu-wrapper.submenu-resp-social").show();
				break;
			case "submenu-wrapper-resp-social":
				$(".submenu-wrapper.submenu-resp-social").show();
				break;
				
			case "navbar_products":
				$(".submenu-wrapper.submenu-products").show();
				break;
			case "submenu-wrapper-products":
				$(".submenu-wrapper.submenu-products").show();
				break;
				
			case "navbar_health":
				$(".submenu-wrapper.submenu-health").show();
				break;
			case "submenu-wrapper-health":
				$(".submenu-wrapper.submenu-health").show();
				break;
				
			case "navbar_health_doctors":
				$(".submenu-wrapper.submenu-health-doctors").show();
				break;
			case "submenu-wrapper-health-doctors":
				$(".submenu-wrapper.submenu-health-doctors").show();
				break;
				
			case "navbar_contact":
				$(".submenu-wrapper.submenu-contact").show();
				break;
			case "submenu-wrapper-contact":
				$(".submenu-wrapper.submenu-contact").show();
				break;
		}
	},
	
	HideSubmenu: function(id){
		switch(id){
			case "navbar_about_us":
				$(".submenu-wrapper.submenu-about-us").hide();
				break;
			case "submenu-wrapper-about-us":
				$(".submenu-wrapper.submenu-about-us").hide();
				break;
				
			case "navbar_resp_social":
				$(".submenu-wrapper.submenu-resp-social").hide();
				break;
			case "submenu-wrapper-resp-social":
				$(".submenu-wrapper.submenu-resp-social").hide();
				break;
				
			case "navbar_products":
				$(".submenu-wrapper.submenu-products").hide();
				break;
			case "submenu-wrapper-products":
				$(".submenu-wrapper.submenu-products").hide();
				break;
				
			case "navbar_health":
				$(".submenu-wrapper.submenu-health").hide();
				break;
			case "submenu-wrapper-health":
				$(".submenu-wrapper.submenu-health").hide();
				break;
				
			case "navbar_health_doctors":
				$(".submenu-wrapper.submenu-health-doctors").hide();
				break;
			case "submenu-wrapper-health-doctors":
				$(".submenu-wrapper.submenu-health-doctors").hide();
				break;
				
			case "navbar_contact":
				$(".submenu-wrapper.submenu-contact").hide();
				break;
			case "submenu-wrapper-contact":
				$(".submenu-wrapper.submenu-contact").hide();
				break;
		}
	},
	
	MenuEvents: function(){	
		
		$(".navbar-item").on("mouseleave", (function(event){
			this.HideSubmenu(event.currentTarget.id);
		}).bind(this));		
		
		$(".submenu-wrapper").on("mouseleave", (function(event){
			this.HideSubmenu(event.currentTarget.id);
		}).bind(this));
		
		$(".navbar-item").on("mouseover", (function(event){
			this.ShowSubmenu(event.currentTarget.id);			
		}).bind(this));
		
		$(".submenu-wrapper").on("mouseover", (function(event){
			this.ShowSubmenu(event.currentTarget.id);
		}).bind(this));
		
		
		/*$("#navbar_products").on("mouseover", (function(event){
			this.ShowSubmenu(event.currentTarget.id);
			//$(".submenu-wrapper.products").show();
		}).bind(this));
		
		$("#navbar_products").on("mouseleave", (function(event){
			this.HideSubmenu(event.currentTarget.id);
			//$(".submenu-wrapper.products").hide();
		}).bind(this));
		
		$(".submenu-wrapper.products").on("mouseleave", (function(event){
			this.HideSubmenu(event.currentTarget.id);
			//$(".submenu-wrapper.products").hide();
		}).bind(this));
		
		$(".submenu-wrapper.products").on("mouseover", (function(event){
			this.ShowSubmenu(event.currentTarget.id);
			//$(".submenu-wrapper.products").show();
		}).bind(this));*/
		
		/*$(".submenu-desc-input input").on("click", function(){
			$(".submenu-desc-input input").attr("placeholder", "");
		});*/
		
		$(".call-to-next").on("click", function(){
			var $elem = ".call-to-next-anchor";
			var isElemAvailable = $($elem);

			if(isElemAvailable && isElemAvailable.length){
				TweenLite.to(window, 0.8, {scrollTo:{y: $elem, offsetY: 100}});			
			}
		});
		
		/*$(".submenu-desc-input input").on("focusout", (function(){
			if($(".submenu-desc-input input").val() == ""){
				$(".submenu-desc-input input").attr("placeholder", this.langTranslate.inputs.search);
			}
		}).bind(this));*/
	},
	
	FooterEvents: function(){
		
	},
	
	showSuccessFormFeedbackNormal: function($formToClear){
		$("body").append("<div class='form-feedback-mask'></div><div class='form-feedback-wrapper'><div class='close-form-feedback'><p>[x] Fechar<p></div><h4>"+
						 	"Formulário enviado com sucesso. Caso necessário, entraremos em contato o mais breve possível.<br><br>A Marjan Farma agradece o seu contato." + 
						 "</h4><br><br><p>Esta resposta fechará automaticamente em 10 segundos</p></div>");
		this.runFeedbackTimeout(10);
		$($formToClear)[0].reset();
	},
	
	showSuccessFormFeedbackFarmacovigilancia: function($formToClear, authContact){
		
		if(authContact){
			$("body").append("<div class='form-feedback-mask'></div><div class='form-feedback-wrapper'><div class='close-form-feedback'><p>[x] Fechar<p></div><h4>"+
							 	"Formulário enviado com sucesso. Entraremos em contato o mais breve possível.<br><br>A Marjan Farma agradece o seu contato." + 
						 	 "</h4></div>");
		} else {
			$("body").append("<div class='form-feedback-mask'></div><div class='form-feedback-wrapper'><div class='close-form-feedback'><p>[x] Fechar<p></div><h4>"+
							 	"Formulário enviado com sucesso.<br><br>A Marjan Farma agradece o seu contato." + 
						 	 "</h4><br><br><p>Esta resposta fechará automaticamente em 10 segundos</p></div>");
		}
		this.runFeedbackTimeout(10);
		$($formToClear)[0].reset();
	},
	
	showErrorFormFeedback: function(){
		$("body").append("<div class='form-feedback-mask'></div><div class='form-feedback-wrapper'><div class='close-form-feedback'><p>[x] Fechar<p></div><h4>"+
						 	"Ocorreu um erro ao enviar o formulário. Por gentileza tente novamente.<br><br>Caso o problema persista, tente novamente em alguns minutos ou entre em contato conosco através do nosso SAC pelo número 0800-55-4545.<br><br>A Marjan Farma agradece seu contato." + 
						 "</h4><br><br><p>Esta resposta fechará automaticamente em 10 segundos</p></div>");
		this.runFeedbackTimeout(10);
		
	},
	
	runFeedbackTimeout: function(timeoutSecs){
		var t_o = setTimeout(function(){
			$(".close-form-feedback").off("click");
			$(".form-feedback-mask").off("click");
			$(".form-feedback-wrapper").remove();
			$(".form-feedback-mask").remove();			
		}, timeoutSecs * 1000, true);
		
		$(".close-form-feedback").on("click", function(){
			$(".close-form-feedback").off("click");
			$(".form-feedback-mask").off("click");
			$(".form-feedback-wrapper").remove();
			$(".form-feedback-mask").remove();
			clearTimeout(t_o);
		});	
		
		$(".form-feedback-mask").on("click", function(){
			$(".close-form-feedback").off("click");
			$(".form-feedback-mask").off("click");
			$(".form-feedback-wrapper").remove();
			$(".form-feedback-mask").remove();
			clearTimeout(t_o);
		});	
	},
}
