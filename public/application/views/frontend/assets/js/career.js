// JavaScript Document

var career_fns = {
	
	AdjustHeight: 0,
	
	Initialize: function(){
		$(".third-section-col-02").each(function(item,index){
			if(this.clientHeight > career_fns.AdjustHeight){
				career_fns.AdjustHeight = this.clientHeight;
			}			
		});
		
		$(".third-section-col-02").css("height", career_fns.AdjustHeight + "px");
	},

}