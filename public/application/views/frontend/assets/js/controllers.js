// JavaScript Document

//    _____           __            ____
//   / ___|___  _ __ | |_ _ __ ___ | | | ___ _ __ ___
//  | |   / _ \| '_ \| __| '__/ _ \| | |/ _ \ '__/ __|
//  | |__| (_) | | | | |_| | | (_) | | |  __/ |  \__ \
//  \____\___/|_| |_|\__|_|  \___/|_|_|\___|_|  |___/

/*
Angular notes

Events:

Use $scope.$broadcast("event", args) to dispatch an event from parent-child relation
First controller is the parent and dispatch an event to the second controller witch is the child

Use $scope.$emit("event", args) to dispatch an event from child-upwards relation
Child controller dispatch an event to the upwards controllers - maybe to the parent or parent-parent-parent-n controllers

Use $rootScope.$broadcast("event", args) to dispatch event without parent-child or child-upwards relations
The controller who intercept an event is out of the the of the element who dispatch the event.
Other possibilite - Any controller can intercept the dispatched event

*/

angular.module('ngApp', [])
	.controller('menuController', function($scope, $rootScope, $interval) {

		//updateMenuView();

		var b = $interval(function(){
			if(Application.updateView){
				updateMenuView();
				$interval.cancel(b);
			}
		}, 250);


		$scope.setLangEN = function(){
			Application.config.defaultLang = "en";
			Application.SetLanguage();
			updateMenuView();
		};

		function updateMenuView(){
			$scope.search = Application.langTranslate.inputs.search;
			$scope.about_us= Application.langTranslate.menus.about_us;
			$scope.social_resp= Application.langTranslate.menus.social_resp;
			$scope.products= Application.langTranslate.menus.products;
			$scope.healthAndWelfare= Application.langTranslate.menus.healthAndWelfare;
			$scope.healthDoctors= Application.langTranslate.menus.healthDoctors;
			$scope.contact= Application.langTranslate.menus.contact;
			$scope.ourProducts= Application.langTranslate.menus.ourProducts;
			$scope.knowMore= Application.langTranslate.buttons.knowMore;
			$scope.aToZ= Application.langTranslate.menus.aToZ;
			$scope.underPrescription= Application.langTranslate.menus.underPrescription;
			$scope.exemptPrescription= Application.langTranslate.menus.exemptPrescription;
			$scope.foods= Application.langTranslate.menus.foods;
			$scope.name= Application.langTranslate.menus.name;
			$scope.specialties= Application.langTranslate.menus.specialties;
			$scope.activePrinciple= Application.langTranslate.menus.activePrinciple;
			$rootScope.$broadcast('footerTranstale');
		}
	})
	.controller('homeSliderController', function($scope) {
		var sliderList = this;
		sliderList.slides = [
			{number: 1, img_src: 'img/home/slider/01/slide_img.jpg', title:'Um futuro sem limites para a saúde',
			 sub_title: 'A Marjan Farma é tudo isso', thumb: 'img/home/slider/01/slide_thumb.png', horizontalAlign: "center", verticalAlign: "top", lane_img: "img/home/slider/01/lane.png"},

			{number: 2, img_src: 'img/home/slider/02/slide_img.jpg', title:'Bem estar e qualidade de vida',
			 sub_title: 'A Marjan Farma é tudo isso', thumb: 'img/home/slider/02/slide_thumb.png', horizontalAlign: "right", verticalAlign: "top", lane_img: "img/home/slider/02/lane.png"},

			{number: 3, img_src: 'img/home/slider/03/slide_img.jpg', title:'Cuidado e carinho essenciais',
			 sub_title: 'A Marjan Farma é tudo isso', thumb: 'img/home/slider/03/slide_thumb.png', horizontalAlign: "right", verticalAlign: "center", lane_img: "img/home/slider/03/lane.png"},

			{number: 4, img_src: 'img/home/slider/04/slide_img.jpg', title:'Um futuro saudável para várias gerações',
			 sub_title: 'A Marjan Farma é tudo isso', thumb: 'img/home/slider/04/slide_thumb.png', horizontalAlign: "left", verticalAlign: "top", lane_img: "img/home/slider/04/lane.png"},

			{number: 5, img_src: 'img/home/slider/05/slide_img.jpg', title:'Pesquisa e inovação sempre',
			 sub_title: 'A Marjan Farma é tudo isso', thumb: 'img/home/slider/05/slide_thumb.png', horizontalAlign: "center", verticalAlign: "top", lane_img: "img/home/slider/05/lane.png"}];
	})
	.controller('aboutUsSlider', function($scope) {
		var sliderList = this;
		sliderList.slides = [
			{number: 1, img_src: '../../img/sections/sobre-nos/valores.jpg', thumb: '../../img/sections/sobre-nos/valores.png', horizontalAlign: "right", verticalAlign: "bottom", cls:"_01", title:"NOSSOS\nVALORES", subtitle:"Ética\nProfissionalismo\nComprometimento\nTransparência\nReconhecimento e valorização\nSustentabilidade\nRespeito à diversidade\nEmpresa cidadã"},

			{number: 2, img_src: '../../img/sections/sobre-nos/inovacao.png', thumb: '../../img/sections/sobre-nos/inovacao.png', horizontalAlign: "left", verticalAlign: "center", cls:"_02", title:"INOVAÇÃO", subtitle:"Em produtos para\no bem-estar da\nhumanidade"},

			{number: 3, img_src: '../../img/sections/sobre-nos/meio-ambiente.jpg', thumb: '../../img/sections/sobre-nos/meio-ambiente.png', horizontalAlign: "right", verticalAlign: "bottom", cls:"_03", title:"MEIO\nAMBIENTE", subtitle:"Cuidar e preservar o meio\nambiente, um compromisso\npara minimizar o impacto\nno meio ambiente"},

			{number: 4, img_src: '../../img/sections/sobre-nos/qualidade.jpg', thumb: '../../img/sections/sobre-nos/qualidade.png', horizontalAlign: "left", verticalAlign: "top", cls:"_04", title:"QUALIDADE", subtitle:"Padrões internacionais\nde boas práticas\nde fabricação"},

			{number: 5, img_src: '../../img/sections/sobre-nos/negocios.png', thumb: '../../img/sections/sobre-nos/negocios.png', horizontalAlign: "center", verticalAlign: "center", cls:"_05", title:"NOVOS\nNEGÓCIOS", subtitle:"Vislumbramos a introdução\nde novos negócios e\nparcerias com empresas\nbrasileiras, estrangeiras,\nfornecedores..."}];
	})
	.controller('footerController', function($scope, $interval) {

		var b = $interval(function(){
			if(Application.updateView){
				updateFooterView();
				$interval.cancel(b);
			}
		}, 250);

		$scope.$on("footerTranstale", function(){
			updateFooterView();
		});

		function updateFooterView(){
			$scope.news = Application.langTranslate.footer.news;
			$scope.social= Application.langTranslate.footer.social;
			$scope.contact= Application.langTranslate.footer.contact;
		}
	})
	.controller('products', function($scope, $interval) {
		var productsList = this;
		productsList.products = [];

		var b = $interval(function(){
			if(products_list.products){
				pushProducts();
				$interval.cancel(b);
			}
		}, 250);

		function pushProducts(){
			var cont = 0;
			angular.forEach(products_list.products.products, function(value, key){
				productsList.products.push(products_list.products.products[cont]);
				cont++;
			});
		}
		/*angular.forEach(products_list.products.products, function(value, key){
			this.push(key + ":" + value);
		});*/
			/*{number: 1, img_src: 'img/home/slider/01/slide_img.jpg', title:'Um futuro sem limites para a saúde',
			 sub_title: 'A Marjan Farma é tudo isso', thumb: 'img/home/slider/01/slide_thumb.png'},

			{number: 2, img_src: 'img/home/slider/02/slide_img.png', title:'Bem estar e qualidade de vida',
			 sub_title: 'A Marjan Farma é tudo isso', thumb: 'img/home/slider/02/slide_thumb.png'},

			{number: 3, img_src: 'img/home/slider/03/slide_img.png', title:'Cuidado e carinho essenciais',
			 sub_title: 'A Marjan Farma é tudo isso', thumb: 'img/home/slider/03/slide_thumb.png'},

			{number: 4, img_src: 'img/home/slider/04/slide_img.png', title:'Um futuro saudável para várias gerações',
			 sub_title: 'A Marjan Farma é tudo isso', thumb: 'img/home/slider/04/slide_thumb.png'},

			{number: 5, img_src: 'img/home/slider/05/slide_img.png', title:'Pesquisa e inovação sempre',
			 sub_title: 'A Marjan Farma é tudo isso', thumb: 'img/home/slider/05/slide_thumb.png'}];*/

	})
;