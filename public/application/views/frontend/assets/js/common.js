//
// Return query string value giving its name
//
function getParameterByName(name) {
	name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
	var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
	results = regex.exec(location.search);
	return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}
/*Get parameters of th url*/


var commonFns = {
	
	getParameterByName: function(name) {
		name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
		var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
		results = regex.exec(location.search);
		return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
	},
	
	replaceSpecialChars: function(str)
	{
		str = str.replace(/[ÀÁÂÃÄÅ]/g,"A");
		str = str.replace(/[àáâãäå]/g,"a");
		str = str.replace(/[ÈÉÊË]/g,"E");
		str = str.replace(/[èéêë]/g,"e");
		str = str.replace(/[ÒÓÔÖ]/g,"O");
		str = str.replace(/[òóôö]/g,"o");
		str = str.replace(/[ÙÚÛÜ]/g,"U");
		str = str.replace(/[ùúûü]/g,"u");
		str = str.replace(/[Ç]/g,"C");
		str = str.replace(/[ç]/g,"c");
		
		return str;
		
		return str.replace(/[^a-z0-9]/gi,'');
	},
	
	HighlightMenuItem: function (section){
		switch (section) {
			case "":

			case "about_us":
				$("#navbar_about_us").addClass("active");	
				$(".navbar-item.active .navbar-link-container").css("border-bottom-color", "#EB5F46");
				break;
			case "social_resp":					
				$("#navbar_resp_social").addClass("active");				
				$(".navbar-item.active .navbar-link-container").css("border-bottom-color", "#EB5F46");
				break;
			case "products":
				$("#navbar_products").addClass("active");
				$(".navbar-item.active .navbar-link-container").css("border-bottom-color", "#EB5F46");
				break;
			case "health":
				$("#navbar_health").addClass("active");
				$(".navbar-item.active .navbar-link-container").css("border-bottom-color", "#EB5F46");
				break;
			case "healthDoctors":
				$("#navbar_health_doctors").addClass("active");
				$(".navbar-item.active .navbar-link-container").css("border-bottom-color", "#EB5F46");
				break;
			case "contact":
				$("#navbar_contact").addClass("active");
				$(".navbar-item.active .navbar-link-container").css("border-bottom-color", "#EB5F46");
				break;
			case "social_room":
				break;
			case "noticies":
				break;
		}
	},
	
	ResizeBackgroundImageByClass: function(elemClass){
		/*var newWindowWidth = $(window).width();		
		
		if(newWindowWidth < Application.screenWidth){
			var widthDif = Application.screenWidth - newWindowWidth;
			var percent = widthDif * 100 / Application.screenWidth;
			percent = newWindowWidth < 1200 ? (percent + 15) : percent;	
			var newWidth = Math.ceil(100 + percent);
		} else {
			var widthDif = newWindowWidth - Application.screenWidth;
			var percent = widthDif * 100 / Application.screenWidth;			
			percent = newWindowWidth < 1200 ? (percent + 15) : percent;
			var newWidth = 100;
		}

		if (elemClass.indexOf('.') > -1){
  			var cls = elemClass;
		} else {
			var cls = '.' + elemClass;
		}
		$(cls).each(function(index,item){			
			var imgurl = $(item).css('background-image');
			imgurl = imgurl.replace('url(','').replace(')','').replace(/\"/gi, "");
			var imgPos = $(item).css('background-position');			
			$(item).attr('style','background-size: ' + newWidth + '% auto; background-image: url(' + imgurl + '); background-position: ' + imgPos + ';');
		});*/
	},
	
	ResizeBackgroundImageById: function(elemID){
		/*var newWindowWidth = $(window).width();		
		
		if(newWindowWidth < Application.screenWidth){
			var widthDif = Application.screenWidth - newWindowWidth;
			var percent = widthDif * 100 / Application.screenWidth;
			percent = newWindowWidth < 1200 ? (percent + 15) : percent;	
			var newWidth = Math.ceil(100 + percent);
		} else {
			var widthDif = newWindowWidth - Application.screenWidth;
			var percent = widthDif * 100 / Application.screenWidth;			
			percent = newWindowWidth < 1200 ? (percent + 15) : percent;			
			var newWidth = 100;
		}
		
		if (elemID.indexOf('#') > -1){
  			var id = elemID;
		} else {
			var id = '#' + elemID;
		}
		$(id).each(function(index,item){
			var imgurl = $(item).css('background-image');
			imgurl = imgurl.replace('url(','').replace(')','').replace(/\"/gi, "");
			var imgPos = $(item).css('background-position');			
			$(item).attr('style','background-size: ' + newWidth + '% auto; background-image: url(' + imgurl + '); background-position: ' + imgPos + ';');
		});*/
	},
	
	HighlightMenuBottomLine: function(){
		
	},
}