var products_list={

	products:"",
	productsJSONUrl: "../produtos/products.json",
	insertProductsToDOM: false,
	products_letters: [],
	products_specialties: [],
	products_active_principles: [],
	isFilterByURL: true,
	show_label_only_top: true,

	Initialize: function(){
		this.LoadUserEvents();
		this.getProducts();
		commonFns.ResizeBackgroundImageById("first_section_wrapper");
	},

	filterProductsByURL: function(){
		var param = "";
		param = commonFns.getParameterByName("show");

		/*Get parameters of the url*/

		if(param != ""){
			switch(param){
				case "all":
					this.isFilterByURL = true;
					filters.ShowAll();
					break;
				case "under_prescription":
					this.isFilterByURL = true;
					filters.ShowUnderPrescriptionProducts();
					break;
				case "exempt_prescription":
					this.isFilterByURL = true;
					filters.ShowExemptPrescriptionProducts();
					break;
				case "foods":
					this.isFilterByURL = true;
					filters.ShowFoodProducts();
					break;
			}
			return;
		}

		param = commonFns.getParameterByName("query");
		if(param != ""){
			this.isFilterByURL = true;
			filters.ShowProductsByQuery(param.toLowerCase());
			return;
		}
		this.isFilterByURL = false;
		filters.ShowAll();
	},

	LoadUserEvents: function(){
		$( window ).resize((function(){
			$(".medical-info-wrapper.showlist span").each(function(index, item){
				var a  = item;
				var hgt = $(this).closest("li.medical-info-wrapper").height();
				$(this).css({
					"height" : hgt,
					"line-height" : hgt,
					"vertical-align" : "middle"
				});

				var a = $(this)[0];
				a.firstChild.style.paddingTop = hgt/2 + "px";
			});
		}).bind(this));
	},

	getProducts: function(){

		this.products = $.parseJSON(
			$.ajax({
				url: this.productsJSONUrl,
				async: false
			}).responseText);

		var a = setInterval(function(){
			if(products_list.products != ""){
				products_list.products.products.sort(function(a,b) {

					var x = a.name.replace(/\®/g,"");
					var y = b.name.replace(/\®/g,"");

					return (x > y) ? 1 : ((y > x) ? -1 : 0);
				});
				products_list.createFirstPrdctLtrs();
				products_list.GetAllSpecialties();
				products_list.GetAllActivePrinciples();
				products_list.filterProductsByURL();
				clearInterval(a);
			}
		}, 250);
	},

	createFirstPrdctLtrs: function(){
		var push = false;
		for(i = 0; i<this.products.products.length; i++){

			var letter = this.products.products[i].name[0].toLowerCase();
			push = true;

			for(j=0;j < this.products_letters.length;j++){
				if(letter == this.products_letters[j]){
					push = false;
				}
			}
			if(push){
				this.products_letters.push(letter);
			}
		}

		if(this.products_letters.length){
			products_list.insertProductsToDOM();
		}
	},

	GetAllSpecialties: function(){

		var push = false;
		this.products_specialties = [];

		for(i = 0; i<this.products.products.length; i++){

			push = true;

			for(j = 0; j < this.products.products[i].specialties.length; j++){
				var specialtie = this.products.products[i].specialties[j];
			}

			for(k=0;k < this.products_specialties.length;k++){
				if(specialtie.toLowerCase() == this.products_specialties[k].toLowerCase()){
					push = false;
				}
			}
			if(push){
				this.products_specialties.push(specialtie);
			}
		}

		products_list.products_specialties.sort(function(a,b) {
			return (a > b) ? 1 : ((b > a) ? -1 : 0);
		});

		this.FillSpecialtiesSearch();
	},

	FillSpecialtiesSearch: function(){
		$('.select-specialties-filter').append($('<option>', {
			value: 999,
			text: "Todas as especialidades"
		}));
		for(i = 0; i < products_list.products_specialties.length; i++){
			$('.select-specialties-filter').append($('<option>', {
				value: i,
				text: products_list.products_specialties[i]
			}));
		}
	},

	GetAllActivePrinciples: function(){
		var push = false;
		this.products_active_principles = [];
		var activePrinciple = "";

		for(i = 0; i<this.products.products.length; i++){

			push = true;

			for(j = 0; j < this.products.products[i].active_principles.length; j++){
				activePrinciple = this.products.products[i].active_principles[j];
			}

			for(k=0;k < this.products_active_principles.length;k++){
				if(activePrinciple.toLowerCase() == this.products_active_principles[k].toLowerCase()){
					push = false;
				}
			}
			if(push){
				this.products_active_principles.push(activePrinciple);
			}
		}

		products_list.products_active_principles.sort(function(a,b) {
			return (a.toLowerCase() > b.toLowerCase()) ? 1 : ((b.toLowerCase() > a.toLowerCase()) ? -1 : 0);
		});
	},

	insertProductsToDOM: function(){

		var $elem = ".products-list-wrapper";

		if(this.show_label_only_top){
			var show_label = "<li class='active-principle-icon'><img src='../../img/sections/produtos/principio-ativo-icon.png' /></li>" +
							 "<li class='active-principle-text'><p>Princípio Ativo ou Composição</p></li>" +
							 "<li class='presentation-icon'><img src='../../img/sections/produtos/apresentacao-icon.png' /></li>" +
							 "<li class='presentation-text'><p>Forma Farmacêutica ou Apresentação</p></li>";
			var print_link = "<a class='print-link-prod-list' href='../../sections/produtos/print-list.html' target='_blank'><div><p>Imprimir</p></div></a>";
			var show_label_top = "<div>" +
									"<div>" +
										"<div class='letter-indicator'>" +
											"<ul>" +
												"<li class='letter-indicator-item' style='display: none;'></li>" +
												 show_label + print_link +
												/*"<li class='specialties-icon'><img src='../../img/sections/produtos/especialidades-icon.png' /></li>" +
												"<li class='specialties-text'><p>Especialidades</p></li>" +*/
											"</ul>" +
										"</div>" +
									"</div>" +
									"<div class='products-list-items-wrapper'></div>" +
								"</div>";
			$($elem).append(show_label_top);
		}

		for(i = 0; i < this.products_letters.length; i++){

			var print_link = "";
			var show_label = "";
			var hr_margin_top_class = "margin-top";

			if(!this.show_label_only_top){

				if(i === 0){
					print_link = "<a class='print-link-prod-list' href='../../sections/produtos/print-list.html' target='_blank'><div><p>Imprimir</p></div></a>";
				}

				show_label = "<li class='active-principle-icon'><img src='../../img/sections/produtos/principio-ativo-icon.png' /></li>" +
							 "<li class='active-principle-text'><p>Princípio Ativo ou Composição</p></li>" +
							 "<li class='presentation-icon'><img src='../../img/sections/produtos/apresentacao-icon.png' /></li>" +
							 "<li class='presentation-text'><p>Forma Farmacêutica ou Apresentação</p></li>";
				hr_margin_top_class = "";
			}

			$($elem).append(
			"<div class='product-letter-" + this.products_letters[i].toLowerCase() + "-wrapper product-wrapper' id='product-letter-" + this.products_letters[i].toLowerCase() + "-wrapper'>" +
				"<hr>" +
				"<div class='letter-" + this.products_letters[i].toLowerCase() + "' id='letter-" + this.products_letters[i].toLowerCase() + "'>" +
					"<div class='letter-indicator'>" +
						"<ul>" +
							"<li class='letter-indicator-item'>" +  this.products_letters[i].toUpperCase() + "</li>" +
							 show_label + print_link +
							/*"<li class='specialties-icon'><img src='../../img/sections/produtos/especialidades-icon.png' /></li>" +
							"<li class='specialties-text'><p>Especialidades</p></li>" +*/
						"</ul>" +
					"</div>" +
				"</div>" +

				"<hr class='" + hr_margin_top_class + "'>" +

				"<div class='products-list-items-wrapper items-letter-" + this.products_letters[i].toLowerCase() + "'></div>" +
			"</div>"
			);
		}
		this.insertProductsToRespectiveContainer();
	},

	insertProductsToRespectiveContainer: function(){
		for(i = 0; i<this.products.products.length; i++){
			var $elem = ".items-letter-" + this.products.products[i].name[0].toLowerCase();
			var letter = this.products.products[i].name[0].toLowerCase();
			var id = this.products.products[i].id;
			var	name = this.products.products[i].name.replace("®", "<sup>®</sup>");
			var active_principles = "";
			var active_principles_separator = "";
			var presentation = this.products.products[i].presentation;
			var specialties = "";
			var specialties_separator = "";
			var _active_principles_li = "";
			var leaflet_patient = "";
			var leaflet_health_doctors = "";
			var leaflet_patient_closer_tag = "";
			var leaflet_health_doctors_closer_tag = "";
			var hideLeaflets = "";
			var active_principle_title = "";
			var presentation_title = "";
			var products_keywords = "";

			for(j = 0; j < this.products.products[i].active_principles.length; j++){
				if(this.products.products[i].active_principles_divisor == "+"){
					active_principles_separator = " " + "+" + " ";
				} else if(this.products.products[i].active_principles_divisor == ","){
					active_principles_separator = "," + " ";
				} else {
					active_principles_separator = this.products.products[i].active_principles_divisor;
				}

				if(j != this.products.products[i].active_principles.length-1){
					active_principles += this.products.products[i].active_principles[j] + active_principles_separator;
				} else {
					active_principles += this.products.products[i].active_principles[j];
				}
			}

			for(j = 0; j < this.products.products[i].specialties.length; j++){

				if(this.products.products[i].specialties_separator == "+"){
					specialties_separator = " " + "+" + " ";
				} else if(this.products.products[i].specialties_separator == ","){
					specialties_separator = "," + " ";
				} else {
					specialties_separator = this.products.products[i].specialties_separator;
				}

				if(j != this.products.products[i].specialties.length-1){
					specialties += this.products.products[i].specialties[j] +  specialties_separator;
				} else {
					specialties += this.products.products[i].specialties[j];
				}
			}

			//for(j = 0; j < this.products.products[i].product_keywords.length; j++){
			//	if(j != this.products.products[i].product_keywords.length-1){
			//		products_keywords += this.products.products[i].product_keywords[j] + ", ";
			//	} else {
					products_keywords = this.products.products[i].product_keywords;
			//	}
			//}

			if(this.products.products[i].is_food_supplement){
				hideLeaflets = " style='visibility: hidden'";
				active_principle_title = "Composição";
				presentation_title = "Apresentação";
			}

			if(this.products.products[i].isUnderPrescription && !this.products.products[i].is_food_supplement){
				active_principle_title = "Princípio Ativo";
				presentation_title = "Forma Farmacêutica";
			}

			if(!this.products.products[i].isUnderPrescription && !this.products.products[i].is_food_supplement){
				active_principle_title = "Princípio Ativo";
				presentation_title = "Forma Farmacêutica";
			}

			if(this.products.products[i].active_principles.length == 0){

				_active_principles_li = "<li class='prod-list-info apend-product-principle-active principle-active-wrapper paddind-10-horizontal' style='visibility: hidden'>" +
						"<div class='product-item-principle-active-icon product-item-col-icon active-principle-icon' title='" + active_principle_title + "'>" +
							"<img src='../../img/sections/produtos/principio-ativo-icon.png' />" +
						"</div>" +
						"<p class='ellipsis-overflow append-product-principles-actives'>" + active_principles + "</p>" +
					"</li>";
			} else {
				_active_principles_li = "<li class='prod-list-info apend-product-principle-active principle-active-wrapper paddind-10-horizontal'>" +
						"<div class='product-item-principle-active-icon product-item-col-icon active-principle-icon' title='" + active_principle_title + "'>" +
							"<img src='../../img/sections/produtos/principio-ativo-icon.png' />" +
						"</div>" +
						"<p class='ellipsis-overflow append-product-principles-actives'>" + active_principles + "</p>" +
					"</li>";
			}

			if(this.products.products[i].drug_leaflet_patient !=""){
				leaflet_patient = "<a href='bulas/" + this.products.products[i].drug_leaflet_patient + "' target='_blank'>";
				leaflet_patient_closer_tag = "</a>";
			}

			if(this.products.products[i].drug_leaflet_healthcare_professional !=""){
				leaflet_health_doctors = "<a href='bulas/" + this.products.products[i].drug_leaflet_healthcare_professional + "' target='_blank'>";
				leaflet_health_doctors_closer_tag = "</a>";
			}

			$($elem).append(
			"<div class='product-item-container product-item-letter-" + letter + " product-item-" + id + "' id='product-item-'" + id + "'>" +
				"<div class='product_keywords' style='display: none;'><p>" + products_keywords + "</p></div>" +
				"<ul>" +
					"<li class='prod-list-info'><div data-id='" +id+ "' class='product-item-title paddind-10-horizontal' id='product-item-" + id + "-title'><a href='product_item.html?id=" + id + "'><h5>" + name + "</h5></a></div></li>" + 	_active_principles_li +
						"<li class='prod-list-info apend-product-presentation presentation-wrapper paddind-10-horizontal'>" +
							"<div class='product-item-presentation-icon product-item-col-icon presentation-icon' title='" + presentation_title + "'>" +
								"<img src='../../img/sections/produtos/apresentacao-icon.png' />" +
							"</div>" +
							"<p class='ellipsis-overflow append-product-presentations'>" + presentation + "</p>" +
					"</li>" +
					"<li class='apend-product-medical-info medical-info-wrapper'>" +
						"<div class='product-item-medical-info-items'>" +
							"<ul class='product-item-medical-info-items-ul'>" +
								"<li class='leaflet-icon'" + hideLeaflets + ">" + leaflet_patient + "<div><span><p>Bula<font class='hide-max-1249'> Paciente</font></p></span></div>" + leaflet_patient_closer_tag + "</li>" +
								"<li class='leaflet-icon leaflet-hd'" + hideLeaflets + ">" +  leaflet_health_doctors + "<div><span><p>Bula Prof. Saúde</p></span></div>" + leaflet_health_doctors_closer_tag + "</li>" +
							"</ul>" +
						"</div>" +
					"</li>" +
				"</ul>" +
			"</div>"
			);
		}

		products_list.LoadEvents();
		styleElemSizes.CalcElemSizes();
		filters.ShowAll();
	},

	LoadEvents: function(){
		// To remove after implement filters on submenu
		$(".first-filter-list-wrapper *").removeClass("active");
		$(".filter-option-show-all").addClass("active");

		/*$(".product-item-title").on("click", function(event){
			var id = event.currentTarget.dataset.id;
			var url = "product_item.html?id=" + id;
			window.location.href = url;
		});*/

	},

	printList: function(){ /*NOT USED*/
		var w = window.open();
		var headers =  $(".fixed-menu.menu").html();
		var field= $(".second-section-list-products.list-products-filter").html();
		var field2= $(".third-section-list-products.products-list").html();

		var html = "<!DOCTYPE HTML>";
		html += '<html lang="en-us">';
		html += head;
		html += "<body>";

		//check to see if they are null so "undefined" doesnt print on the page. <br>s optional, just to give space
		if(headers != null) html += headers + "<br/><br/>";
		if(field != null) html += field + "<br/><br/>";
		if(field2 != null) html += field2 + "<br/><br/>";

		html += "</body></html>";
		w.document.write(html);
		w.window.print();
		w.document.close();
	},
}

var filters={

	showFilteredLetters: [],
	hideFilteredLetters: [],

	Initialize: function(){
		this.LoadEvents();
		this.translateText();
	},

	translateText: function(){

		$("#a-to-z-filter-text").html(Application.langTranslate.menus.aToZ);

		$("#under-presc-filter-text").html(Application.langTranslate.menus.underPrescription);

		$("#exempt-presc-filter-text").html(Application.langTranslate.menus.exemptPrescription);

		$("#foods-filter-text").html(Application.langTranslate.menus.foods);

		$("#input-search-placeholder input").attr("placeholder", Application.langTranslate.inputs.search);
	},

	LoadEvents: function(){

		$(".a-to-z-items").on("click", function(event){

			if(event.currentTarget.firstChild.style.opacity != "1" || event.currentTarget.firstChild.style.opacity != 1){
				return;
			}

			var toLetter = event.currentTarget.innerText[0].toLowerCase();

			var $elem = "#product-letter-" + toLetter + "-wrapper";
			var isElemAvailable = $($elem);

			if(isElemAvailable && isElemAvailable.length){
				TweenLite.to(window, 0.8, {scrollTo:{y: $elem, offsetY: 100}});
			}
			event.preventDefault();
		});

		$(".third-filter-search-input input").on("click", function(){
			$(".third-filter-search-input input").attr("placeholder", "");
		});

		$(".third-filter-search-input input").on("focusout", function(){
			if($(".third-filter-search-input input").val() == ""){
				$(".third-filter-search-input input").attr("placeholder", Application.langTranslate.inputs.search);
			}
		});

		$(".display-options-list").on("click", function(event){
			changeDOM.addShowListClassToChilds();
			$(".display-options-list img").attr("src", "../../img/sections/produtos/procucts-show-list-color.png");
			$(".display-options-tiles img").attr("src", "../../img/sections/produtos/procucts-show-tiles-gray.png");
		});

		$(".display-options-tiles").on("click", function(event){
			changeDOM.removeShowListClassToChilds();
			$(".display-options-list img").attr("src", "../../img/sections/produtos/procucts-show-list-gray.png");
			$(".display-options-tiles img").attr("src", "../../img/sections/produtos/procucts-show-tiles-color.png");
		});

		$( window ).resize((function(){
			if(Application.config.isMobile || Application.config.isIPad){
				return;
			}
			//alert("resize");
			styleElemSizes.CalcElemSizes();
		}).bind(this));

		$(".filter-option-under-prescription").on("click", (function(){
			products_list.isFilterByURL = false;
			this.ShowUnderPrescriptionProducts();
		}).bind(this));

	    $(".filter-option-exempt-prescription").on("click", (function(){
			products_list.isFilterByURL = false;
			this.ShowExemptPrescriptionProducts();
		}).bind(this));

		$(".filter-option-foods-supplement").on("click", (function(){
			products_list.isFilterByURL = false;
			this.ShowFoodProducts();
		}).bind(this));


        $(".filter-option-show-all").on("click", (function(){
			products_list.isFilterByURL = false;
			this.ShowAll();
		}).bind(this));

		$(".third-filter-search-input input").on("keypress", (function(event){
			if(event.keyCode == 13 || event.key.toLowerCase() == "enter"){
				this.ShowProductsByQuery($(".third-filter-search-input input").val());
			}
		}).bind(this));
	},

	ShowAll: function(){

		if($(".filter-option-show-all").hasClass("active") && !products_list.isFilterByURL){
			return;
		}

		$(".first-filter-list-wrapper *").removeClass("active");
		$(".filter-option-show-all").addClass("active");

		this.showFilteredLetters = [];
		this.hideFilteredLetters = [];

		this.ShowHideProductsContainerByLetter(products_list.products_letters, []);

		for(i = 0; i < products_list.products.products.length; i++){
			$(".product-item-" + products_list.products.products[i].id).show();
		}
		//if(!products_list.isFilterByURL){
			this.scrollToFirstProductsGroup();
		//}
		this.ProductsLetterAllProducts();
		this.ArrangeFiltersLetters();
	},

	ShowUnderPrescriptionProducts: function(){
		if($(".filter-option-under-prescription").hasClass("active")){
			return;
		}

		$(".first-filter-list-wrapper *").removeClass("active");
		$(".filter-option-under-prescription").addClass("active");

		this.ProductsLetterByPrescription(true, false);
		this.FilterByPrescription(true);
		this.ArrangeFiltersLetters();
	},

	ShowExemptPrescriptionProducts: function(){
		if($(".filter-option-exempt-prescription").hasClass("active")){
			return;
		}

		$(".first-filter-list-wrapper *").removeClass("active");
		$(".filter-option-exempt-prescription").addClass("active");

		this.ProductsLetterByPrescription(false, false);
		this.FilterByPrescription(false);
		this.ArrangeFiltersLetters();
	},

	ShowFoodProducts: function(){
		if($(".filter-option-foods-supplement").hasClass("active")){
			return;
		}

		$(".first-filter-list-wrapper *").removeClass("active");
		$(".filter-option-foods-supplement").addClass("active");

		this.ProductsLetterByPrescription(false, true);
		this.FilterOnlyFoodSupplement(false);
		this.ArrangeFiltersLetters();
	},

	ShowProductsByQuery: function(Query){
		$(".first-filter-list-wrapper *").removeClass("active");
		this.ProductsLetterByQuery(Query);
		this.FilterProductsByQuery(Query);
		if(this.showFilteredLetters.length == 0){
			this.ShowAll();
		}
		this.ArrangeFiltersLetters();
	},

	ArrangeFiltersLetters: function(){
		var self = this;
		var toShow = false;
		$(".a-to-z-item-cols a").each(function(index){
			toShow = false;
			for(i = 0; i<self.showFilteredLetters.length; i++){
				if(this.dataset.letter.toLowerCase() == self.showFilteredLetters[i].toLowerCase()){
					toShow = true;
					break;
				}
			}
			if(toShow){
				this.firstChild.style.opacity = 1; //("opacity", 1);
			} else {
				this.firstChild.style.opacity = 0.2; //("opacity", 1);
			}
		});
	},

	FilterProductsByQuery: function(_query){
		var id;
		var searchedByName = false;
		var searchedByActivePrinciple = false;
		var searchedByKeyword = false;
		var match = "";
		var cleanQuery = commonFns.replaceSpecialChars(_query);

		for(i = 0; i<products_list.products.products.length; i++){

			id = products_list.products.products[i].id;

			searchedByName = false;
			searchedByActivePrinciple = false;
			searchedByKeyword = false;

			match = commonFns.replaceSpecialChars(products_list.products.products[i].name.toLowerCase());
			if(match.indexOf(cleanQuery) !== -1){
				searchedByName = true;
			}

			if(!searchedByName){
				for(j = 0; j<products_list.products.products[i].active_principles.length; j++){
					match = commonFns.replaceSpecialChars(products_list.products.products[i].active_principles[j].toLowerCase());
					if(match.indexOf(cleanQuery) !== -1){
						searchedByActivePrinciple = true;
					}
				}
			}

			if(!searchedByName && !searchedByActivePrinciple){
				//for(j = 0; j<products_list.products.products[i].product_keywords.length; j++){
					match = commonFns.replaceSpecialChars(products_list.products.products[i].product_keywords.toLowerCase());
					if(match.indexOf(cleanQuery) !== -1){
						searchedByKeyword = true;
					}
				//}
			}

			if(searchedByName || searchedByActivePrinciple || searchedByKeyword){
				$(".product-item-" + id).show();
			} else {
				$(".product-item-" + id).hide();
			}
		}

		//if(!products_list.isFilterByURL){
			this.scrollToFirstProductsGroup();
		//}
	},

	ProductsLetterAllProducts: function(){
		this.showFilteredLetters = [];
		this.hideFilteredLetters = [];

		var showPush = false;
		var hidePush = false;
		var searchedByName = false;
		var searchedByActivePrinciple = false;

		for(i = 0; i<products_list.products.products.length; i++){

			var letter = products_list.products.products[i].name[0].toLowerCase();
			showPush = true;
			//hidePush = true;

			//if(searchedByName || searchedByActivePrinciple){
			//hidePush = false;
			for(j=0;j < this.showFilteredLetters.length;j++){
				if(letter == this.showFilteredLetters[j]){
					showPush = false;
				}
			}
			/*} else {
				showPush = false;
				for(j=0;j < this.hideFilteredLetters.length;j++){
					if(letter == this.hideFilteredLetters[j]){
						hidePush = false;
					}
				}
			}*/


			if(showPush){
				this.showFilteredLetters.push(letter);
			} else {
				this.hideFilteredLetters.push(letter);
			}

			/*if(hidePush){
				this.hideFilteredLetters.push(letter);
			}*/
		}

		for(i = this.hideFilteredLetters.length - 1; i >=0; i--){
			for(j = this.showFilteredLetters.length-1; j >=0 ; j--){
				if(this.hideFilteredLetters[i] == this.showFilteredLetters[j]){
					this.hideFilteredLetters.splice(i , 1);
				}
			}
		}

		/*if(this.showFilteredLetters.length || this.hideFilteredLetters.length){
			this.ShowHideProductsContainerByLetter(this.showFilteredLetters, this.hideFilteredLetters);
		}*/
	},

	ProductsLetterByQuery: function(_query){
		this.showFilteredLetters = [];
		this.hideFilteredLetters = [];

		var showPush = false;
		var hidePush = false;
		var searchedByName = false;
		var searchedByActivePrinciple = false;
		var searchedByKeyword = false;
		var match = "";
		var cleanQuery = commonFns.replaceSpecialChars(_query);

		for(i = 0; i<products_list.products.products.length; i++){

			var letter = products_list.products.products[i].name[0].toLowerCase();
			showPush = true;
			hidePush = true;
			searchedByName = false;
			searchedByActivePrinciple = false;
			searchedByKeyword = false;

			match = commonFns.replaceSpecialChars(products_list.products.products[i].name.toLowerCase());
			if(match.indexOf(cleanQuery) !== -1){
				searchedByName = true;
			}

			if(!searchedByName){
				for(j = 0; j<products_list.products.products[i].active_principles.length; j++){
					match = commonFns.replaceSpecialChars(products_list.products.products[i].active_principles[j].toLowerCase());
					if(match.indexOf(cleanQuery) !== -1){
						searchedByActivePrinciple = true;
					}
				}
			}

			if(!searchedByName && !searchedByActivePrinciple){
				//for(j = 0; j<products_list.products.products[i].product_keywords.length; j++){
					match = commonFns.replaceSpecialChars(products_list.products.products[i].product_keywords.toLowerCase());
					if(match.indexOf(cleanQuery) !== -1){
						searchedByKeyword = true;
					}
				//}
			}

			if(searchedByName || searchedByActivePrinciple || searchedByKeyword){
				hidePush = false;
				for(j=0;j < this.showFilteredLetters.length;j++){
					if(letter == this.showFilteredLetters[j]){
						showPush = false;
					}
				}
			} else {
				showPush = false;
				for(j=0;j < this.hideFilteredLetters.length;j++){
					if(letter == this.hideFilteredLetters[j]){
						hidePush = false;
					}
				}
			}


			if(showPush){
				this.showFilteredLetters.push(letter);
			}

			if(hidePush){
				this.hideFilteredLetters.push(letter);
			}
		}

		for(i = this.hideFilteredLetters.length - 1; i >=0; i--){
			for(j = this.showFilteredLetters.length-1; j >=0 ; j--){
				if(this.hideFilteredLetters[i] == this.showFilteredLetters[j]){
					this.hideFilteredLetters.splice(i , 1);
				}
			}
		}

		if(this.showFilteredLetters.length || this.hideFilteredLetters.length){
			this.ShowHideProductsContainerByLetter(this.showFilteredLetters, this.hideFilteredLetters);
		}
	},

	ProductsLetterByPrescription: function(underPrescription, isFoodSuplemment){
		this.showFilteredLetters = [];
		this.hideFilteredLetters = [];

		var showPush = false;
		var hidePush = false;

		for(i = 0; i<products_list.products.products.length; i++){

			var letter = products_list.products.products[i].name[0].toLowerCase();
			showPush = true;
			hidePush = true;

			if(underPrescription && !isFoodSuplemment){
				if(products_list.products.products[i].isUnderPrescription && !products_list.products.products[i].is_food_supplement){
					hidePush = false;
					for(j=0;j < this.showFilteredLetters.length;j++){
						if(letter == this.showFilteredLetters[j]){
							showPush = false;
						}
					}
				} else {
					showPush = false;
					for(j=0;j < this.hideFilteredLetters.length;j++){
						if(letter == this.hideFilteredLetters[j]){
							hidePush = false;
						}
					}
				}
			}
			if(!underPrescription && !isFoodSuplemment){
				if(!products_list.products.products[i].isUnderPrescription && !products_list.products.products[i].is_food_supplement){
					hidePush = false;
					for(j=0;j < this.showFilteredLetters.length;j++){
						if(letter == this.showFilteredLetters[j]){
							showPush = false;
						}
					}
				} else {
					showPush = false;
					for(j=0;j < this.hideFilteredLetters.length;j++){
						if(letter == this.hideFilteredLetters[j]){
							hidePush = false;
						}
					}
				}
			}
			if(isFoodSuplemment){

				if(products_list.products.products[i].is_food_supplement){
					hidePush = false;
					for(j=0;j < this.showFilteredLetters.length;j++){
						if(letter == this.showFilteredLetters[j]){
							showPush = false;
						}
					}
				} else {
					showPush = false;
					for(j=0;j < this.hideFilteredLetters.length;j++){
						for (k=0; k < this.showFilteredLetters.length;k++){
							if(letter == this.showFilteredLetters[k]){
								hidePush = false;
							}
						}
						if(letter == this.hideFilteredLetters[j]){
							hidePush = false;
						}
					}
				}
			}

			if(showPush){
				this.showFilteredLetters.push(letter);
			}

			if(hidePush){
				this.hideFilteredLetters.push(letter);
			}
		}

		for(i = this.hideFilteredLetters.length - 1; i >=0; i--){
			for(j = this.showFilteredLetters.length-1; j >=0 ; j--){
				if(this.hideFilteredLetters[i] == this.showFilteredLetters[j]){
					this.hideFilteredLetters.splice(i , 1);
				}
			}
		}

		if(this.showFilteredLetters.length || this.hideFilteredLetters.length){
			this.ShowHideProductsContainerByLetter(this.showFilteredLetters, this.hideFilteredLetters);
		}
	},

	FilterByPrescription: function(underPrescription){
		var id;
		if(underPrescription){
			for(i = 0; i < products_list.products.products.length; i++){

				id = products_list.products.products[i].id;

				if(products_list.products.products[i].isUnderPrescription){
					$(".product-item-" + id).show();
				} else {
					$(".product-item-" + id).hide();
				}
			}
		} else {
			for(i = 0; i < products_list.products.products.length; i++){

				id = products_list.products.products[i].id;

				if(!products_list.products.products[i].isUnderPrescription && !products_list.products.products[i].is_food_supplement){
					$(".product-item-" + id).show();
				} else {
					$(".product-item-" + id).hide();
				}
			}
		}
		//if(!products_list.isFilterByURL){
			this.scrollToFirstProductsGroup();
		//}
	},

	scrollToFirstProductsGroup: function(){
		var toLetter = "";
		if(this.showFilteredLetters.length){
			var toLetter = this.showFilteredLetters[0].toLowerCase();
		} else {
			var toLetter = products_list.products_letters[0];
		}

		if(toLetter != ""){
			var $elem = "#product-letter-" + toLetter + "-wrapper";
			var isElemAvailable = $($elem);

			if(isElemAvailable && isElemAvailable.length){
				$elem = ".second-section-list-products.list-products-filter"
				TweenLite.to(window, 0.8, {scrollTo:{y: $elem, offsetY: 100}});
			}
		}

		if(!products_list.isFilterByURL)
			event.preventDefault();
	},

	FilterOnlyFoodSupplement: function(){
		var id;

		for(i = 0; i < products_list.products.products.length; i++){

			id = products_list.products.products[i].id;

			if(products_list.products.products[i].is_food_supplement){
				$(".product-item-" + id).show();
			} else {
				$(".product-item-" + id).hide();
			}
		}
		//if(!products_list.isFilterByURL){
			this.scrollToFirstProductsGroup();
		//}
	},

	ShowHideProductsContainerByLetter: function(showLettersArray, hideLettersArray){
		if(showLettersArray.length){
			for(i = 0; i < showLettersArray.length; i++){
				$("#product-letter-" + showLettersArray[i].toLowerCase() + "-wrapper").show();
			}
		}

		if(hideLettersArray.length){
			for(i = 0; i < hideLettersArray.length; i++){
				$("#product-letter-" + hideLettersArray[i].toLowerCase() + "-wrapper").hide();
			}
		}
	},
}

var styleElemSizes= {

	CalcElemSizes: function(){
		var pageMargin = (2 * ($(window).width() * 5 / 100));
		var wdt = $(document).width();
		if(Application.config.isIPad || Application.config.isMobile || $(document).width() <= 1200){
			if($(document).width() < 768) {
				var productItemWidth = $(".products-list-wrapper").width() /1 - 30;
			} else {
				var productItemWidth = $(".products-list-wrapper").width() /2 - 30;
			}
		} else {
			var productItemWidth = $(".products-list-wrapper").width() / 3 -30;
		}
		$(".product-item-container").css({
			"width":productItemWidth,
			"max-width":productItemWidth,
			"min-width":productItemWidth,
		});
	},
}

var changeDOM={
	addShowListClassToChilds: function(){
		$(".products-list").addClass("showlist");
		$(".products-list *").addClass("showlist");

		$(".medical-info-wrapper.showlist span").each(function(index, item){
			var a  = item;
			var hgt = $(this).closest("li.medical-info-wrapper").height();
			$(this).css({
				"height" : hgt,
				"line-height" : hgt,
				"vertical-align" : "middle"
			});

			var a = $(this)[0];
			a.firstChild.style.paddingTop = hgt/2 + "px";
		});

		/*$(".medical-info-wrapper.showlist span").css({
			"height" : $(".medical-info-wrapper.showlist").height(),
			"line-height" : $(".medical-info-wrapper.showlist").height(),
			"vertical-align" : "middle"
		});*/

		//$(".medical-info-wrapper.showlist span p").css("padding", $(".medical-info-wrapper.showlist").height()/2 + "px 0 0");
	},

	removeShowListClassToChilds: function(){
		$(".products-list").removeClass("showlist");
		$(".products-list *").removeClass("showlist");
	},
}