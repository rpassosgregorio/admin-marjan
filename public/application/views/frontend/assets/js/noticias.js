// JavaScript Document

var noticies_fns = {
	
	$releaseWrpElem: ".new-releases-wrapper",
	releaseWrpHeigth: 0,
	$release01Elem: ".release-01-wrapper",
	$release02Elem: ".release-02-wrapper",
	$release03Elem: ".release-03-wrapper",
	$release04Elem: ".nr-col03-a",
	$release05And06Elem: ".nr-col03-b",
	release01HeightPercent: 100,
	release02HeightPercent: 64,
	release03HeightPercent: 33,
	release04HeightPercent: 33,
	release05And06HeightPercent: 64,
	release02MrgBtmPercent: 3,
	release04MrgBtmPercent: 3,
	
	Initialize: function(){
		this.ArrangeElemsInDOM();
		this.resizeEvents();
	},
	
	ArrangeElemsInDOM: function(){
		this.releaseWrpHeigth = $(this.$releaseWrpElem).height();
		$(this.$release01Elem).height(this.releaseWrpHeigth * this.release01HeightPercent/100);
		$(this.$release02Elem).height(this.releaseWrpHeigth * this.release02HeightPercent/100);
		$(this.$release03Elem).height(this.releaseWrpHeigth * this.release03HeightPercent/100);
		$(this.$release04Elem).height(this.releaseWrpHeigth * this.release04HeightPercent/100);
		$(this.$release05And06Elem).height(this.releaseWrpHeigth * this.release05And06HeightPercent/100);
		$(this.$release02Elem).css("margin-bottom", this.releaseWrpHeigth * this.release02MrgBtmPercent / 100);
		$(this.$release04Elem).css("margin-bottom", this.releaseWrpHeigth * this.release04MrgBtmPercent / 100);
		
		$(".row2 .new-releases-wrapper, .new-releases-wrapper").width($(".know-more-about-mj-items").width());
		$(".row2 .new-releases-wrapper, .new-releases-wrapper").css("margin-left", $(".know-more-about-mj-items")[0].offsetLeft);
	},
	
	resizeEvents: function(){
		$(window).on("resize", function(){
			$(".row2 .new-releases-wrapper, .new-releases-wrapper").width($(".know-more-about-mj-items").width());
			$(".row2 .new-releases-wrapper, .new-releases-wrapper").css("margin-left", $(".know-more-about-mj-items")[0].offsetLeft);
		});
	},
}