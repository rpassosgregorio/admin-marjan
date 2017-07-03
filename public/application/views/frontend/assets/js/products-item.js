// JavaScript Document
var products_item={

	products:"",
	productsJSONUrl: "../produtos/products.json",
	insertProductsToDOM: false,
	products_letters: [],//
	products_specialties: [],//
	products_active_principles: [],//
	product_id: "",
	product: {},

	Initialize: function(){
		this.translateText();
		this.getProducts();
	},

	translateText: function(){
		$("#a-to-z-filter-text").html(Application.langTranslate.menus.aToZ);

		$("#under-presc-filter-text").html(Application.langTranslate.menus.underPrescription);

		$("#exempt-presc-filter-text").html(Application.langTranslate.menus.exemptPrescription);

		$("#foods-filter-text").html(Application.langTranslate.menus.foods);
	},

	ResizeImgs: function(){

	},

	getProducts: function(){

		this.products = $.parseJSON(
			$.ajax({
				url: this.productsJSONUrl,
				async: false
			}).responseText);

		var a = setInterval(function(){
			if(products_item.products != ""){
				products_item.products.products.sort(function(a,b) {

					var x = a.name.replace(/\®/g,"");
					var y = b.name.replace(/\®/g,"");

					return (x > y) ? 1 : ((y > x) ? -1 : 0);
				});
				products_item.getProductById();
				clearInterval(a);
			}
		}, 250);
	},

	getProductById: function(){

		var id = 0;

		function getParameterByName(name) {
			name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
			var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
			results = regex.exec(location.search);
			return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
		}

		/*Get parameters of the url*/
		id = getParameterByName('id');

		for(i = 0; i < products_item.products.products.length; i++){
			if(products_item.products.products[i].id == id){
				this.product = products_item.products.products[i];
			}
		}

		this.fillProductWrapper();
	},

	fillProductWrapper: function(){

		var $elem = ".item-product-item-container";
		var $prodImg = ".product-img";
		var $prodProductInfo = ".product-tabs-product-info p";
		var $prodIndication = ".product-tabs-info-indication p";
		var $prodNutritionalInfoImg = ".nutritional-img";
		var $prodNutritionalInfoObs = ".nutritional-obs p";
		var $prodIngredients = ".product-tabs-info-ingredients p";

		var active_principles = "";
		var active_principles_separator = "";
		var presentation = this.product.presentation;
		var specialties = "";
		var specialties_separator = "";
		var img_src;
		var nutritional_info_img_src;
		var _active_principles_li = "";

		var leaflet_patient = "";
		var leaflet_health_doctors = "";

		var active_principle_title = "";
		var presentation_title = "";

		if(this.product.active_principles_divisor == "+"){
			active_principles_separator = " + ";
		} else if(this.product.active_principles_divisor == ","){
			active_principles_separator = ", ";
		} else {
			active_principles_separator = this.product.active_principles_divisor + "&nbsp";
		}

		if(this.product.specialties_separator == "+"){
			specialties_separator = " " + "+" + " ";
		} else if(this.product.specialties_separator == ","){
			specialties_separator = ", ";
		} else {
			specialties_separator = this.product.specialties_separator + " ";
		}

		for(j = 0; j < this.product.active_principles.length; j++){
			if(j != this.product.active_principles.length-1){
				active_principles += this.product.active_principles[j] + active_principles_separator;
			} else {
				active_principles += this.product.active_principles[j];
			}
		}

		for(j = 0; j < this.product.specialties.length; j++){
			if(j != this.product.specialties.length-1){
				specialties += this.product.specialties[j] +  specialties_separator;
			} else {
				specialties += this.product.specialties[j];
			}
		}

		if(this.product.isUnderPrescription && !this.product.is_food_supplement){
			img_src= "../../img/sections/produtos/imgs-by-product/under_prescription/generic.jpg";
			active_principle_title = "Princípio Ativo";
			presentation_title = "Forma Farmacêutica";
		} else if(!this.product.isUnderPrescription && !this.product.is_food_supplement){
			img_src= "../../img/sections/produtos/imgs-by-product/exempt_prescription/" + this.product.id + ".png";
			active_principle_title = "Princípio Ativo";
			presentation_title = "Forma Farmacêutica";
		} else if(this.product.is_food_supplement) {
			img_src= "../../img/sections/produtos/imgs-by-product/food_suplemments/" + this.product.id + ".png";
			nutritional_info_img_src = "../../img/sections/produtos/imgs-by-product/food_suplemments/ingredients/" + this.product.id + ".png";
			active_principle_title = "Composição";
			presentation_title = "Apresentação";
		} else {
			img_src= "../../img/sections/produtos/imgs-by-product/under_prescription/generic.jpg";
			active_principle_title = "Princípio Ativo";
			presentation_title = "Forma Farmacêutica";
		}

		if(this.product.drug_leaflet_patient !=""){
			leaflet_patient = "<a href='bulas/" + this.product.drug_leaflet_patient + "' target='_blank'><div><span><p>Bula Paciente</p></span></div></a>";
		}

		if(this.product.drug_leaflet_healthcare_professional !=""){
			leaflet_health_doctors = "<a href='bulas/" + this.product.drug_leaflet_healthcare_professional + "' target='_blank'><div><span><p>Bula Prof. Saúde</p></span></div></a>";
		}

		//$($prodImg).html("<img src=\"" + img_src +"\" />");
		$(".product-item-row-01-col-01").css({
			"background-image": "url(" + img_src + ")",
			"background-size": "contain",
			"background-position": "center",
			"background-repeat": "no-repeat"
		});

		style="background: url(../../img/sections/produtos/item-products-principal.png); background-size: 100% auto; 	background-position: right center;";

		if(this.product.active_principles.length == 0){
			_active_principles_li = "<li class='item-apend-product-principle-active item-principle-active-wrapper' style='display: none;'>" +
										"<div class='item-product-item-principle-active-icon item-product-item-col-icon item-active-principle-icon' title='" + active_principle_title + "'>" +
											"<img src='../../img/sections/produtos/principio-ativo-icon.png' />" +
										"</div>" +
										"<div class='div-ellipsis'><p class='item-ellipsis-overflow item-append-product-principles-actives item-product-active-principles'><b>" + active_principle_title + ":</b> " + active_principles + "</p></div>" +
									"</li>";
		} else {
			_active_principles_li = "<li class='item-apend-product-principle-active item-principle-active-wrapper'>" +
										"<div class='item-product-item-principle-active-icon item-product-item-col-icon item-active-principle-icon' title='" + active_principle_title + "'>" +
											"<img src='../../img/sections/produtos/principio-ativo-icon.png' />" +
										"</div>" +
										"<div class='div-ellipsis'><p class='item-ellipsis-overflow item-append-product-principles-actives item-product-active-principles'><b>" + active_principle_title + ": </b>" + active_principles + "</p></div>" +
									"</li>";
		}

		$($elem).append(
				"<ul>" +
					"<li><div class='item-product-item-title' id='product-item-title'><h4>" + this.product.name.replace("®", "<sup>®</sup>") + "</h4></div></li>" +
						_active_principles_li +
						"<li class='item-apend-product-presentation item-presentation-wrapper'>" +
							"<div class='item-product-item-presentation-icon item-product-item-col-icon item-presentation-icon' title='" + presentation_title + "'>" +
								"<img src='../../img/sections/produtos/apresentacao-icon.png' />" +
							"</div>" +
							"<div class='div-ellipsis'><p class='item-ellipsis-overflow item-append-product-presentations item-product-presentations'><b>" + presentation_title + ": </b>" + presentation + "</p></div>" +
					"</li>" +
					"<li class='item-apend-product-specialties item-specialties-wrapper' style='display: none;'>" +
						"<div class='item-product-item-specialties-icon item-product-item-col-icon item-specialties-icon' title='Especialidades'>" +
							"<img src='../../img/sections/produtos/especialidades-icon.png'/>" +
						"</div>" +
						"<div class='div-ellipsis'><p class='item-ellipsis-overflow item-append-product-especialties item-product-specialties'><b>Especialidades: </b>" + specialties + "</p></div>" +
					"</li>" +
				"</ul>"
		);

		if(leaflet_patient != ""){
			$(".leaflet-icon.patient-ll").html(leaflet_patient);
		}

		if(leaflet_health_doctors != ""){
			$(".leaflet-icon.health-doctor-ll").html(leaflet_health_doctors);
			$(".leaflet-icon.health-doctor-ll").hide();
		}

		$(".first-filter-item-wrapper *").removeClass("active");

		if(this.product.isUnderPrescription && !this.product.is_food_supplement){

			$(".filter-option-under-prescription").addClass("active");
			$(".product-item-tabs *").removeClass("active");
			$(".indication-tab").hide();
			$(".product-tabs-info-indication").hide();
			$(".product-tabs-product-info").show();

			$(".product-info-tab").addClass("active");
			$(".apend-product-medical-info.item-medical-info-wrapper").show();
			$(".product-tabs-product-info p").html(this.product.product_info);

		} else if(!this.product.isUnderPrescription && !this.product.is_food_supplement){

			$(".filter-option-exempt-prescription").addClass("active");
			$(".product-item-tabs *").removeClass("active");
			$(".product-info-tab").addClass("active");
			$(".product-tabs-info-indication").hide();
			$(".product-tabs-product-info").show();
			$(".apend-product-medical-info.item-medical-info-wrapper").show();
			$(".product-tabs-product-info p").html(this.product.product_info);

		} else {

			$(".filter-option-foods-supplement").addClass("active");

			$(".product-item-tabs *").removeClass("active");
			$(".ingredients-tab").hide();
			$(".nutritional-info-tab").show();
			$(".product-info-tab").show();
			$(".indication-tab").hide();

			$(".product-tabs-info-ingredients").hide();
			$(".product-tabs-info-nutritional").hide();
			$(".product-tabs-product-info").show();
			$(".product-tabs-info-indication").hide();

			$(".apend-product-medical-info.item-medical-info-wrapper").hide();

			$(".product-info-tab").addClass("active");

			$($prodNutritionalInfoImg).html("<img src=\"" + nutritional_info_img_src +"\" />");
			$($prodNutritionalInfoObs).html(this.product.nutritional_info_obs);
			$(".product-tabs-product-info p").html(this.product.product_info);

		}

		$($prodIndication).html(this.product.indication);
		this.LoadEvents();
	},

	LoadEvents: function(){

		$(".ingredients-tab").on("click", function(){
			$(".product-item-tabs *").removeClass("active");
			$(".ingredients-tab").addClass("active");

			$(".product-tabs-info-ingredients").show();
			$(".product-tabs-info-nutritional").hide();
			$(".product-tabs-product-info").hide();
			$(".product-tabs-info-indication").hide();
		});

		$(".nutritional-info-tab").on("click", function(){
			$(".product-item-tabs *").removeClass("active");
			$(".nutritional-info-tab").addClass("active");

			$(".product-tabs-info-nutritional").show();
			$(".product-tabs-info-ingredients").hide();
			$(".product-tabs-product-info").hide();
			$(".product-tabs-info-indication").hide();
		});

		$(".product-info-tab").on("click", function(){
			$(".product-item-tabs *").removeClass("active");
			$(".product-info-tab").addClass("active");
			$(".product-tabs-product-info").show();
			$(".product-tabs-info-indication").hide();
			$(".product-tabs-info-ingredients").hide();
			$(".product-tabs-info-nutritional").hide();
		});

		$(".indication-tab").on("click", function(){
			$(".product-item-tabs *").removeClass("active");
			$(".indication-tab").addClass("active");
			$(".product-tabs-info-indication").show();
			$(".product-tabs-product-info").hide();
			$(".product-tabs-info-ingredients").hide();
			$(".product-tabs-info-nutritional").hide();
		});

		$( window ).resize((function(){
			//this.ResizeImgs();
		}).bind(this));
	},
}

var styleElemSizes= {

	CalcElemSizes: function(){
		var pageMargin = (2 * ($(window).width() * 5 / 100));
		var productItemWidth = $(".products-list-wrapper").width() / 3 - 50;
		$(".product-item-container").css({
			"width":productItemWidth,
			"max-width":productItemWidth,
			"min-width":productItemWidth,
		});
	},
}
