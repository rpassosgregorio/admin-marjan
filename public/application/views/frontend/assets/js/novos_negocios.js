// JavaScript Document

var novos_negocios_fns = {
		
	blockSendForm: false,
	
	Initialize: function(){		
		this.LoadEvents();
	},	
		
	LoadEvents: function(){
		$("#novos-negocios-form").submit(function(e) {
			
			e.preventDefault();
			if(!novos_negocios_fns.blockSendForm){
				novos_negocios_fns.blockSendForm = true;
				var $submit = $('#novos-negocios-form').find(':submit');
				$submit.css("opacity", 0.5);
				$submit.val("Enviando");
				
				var url = "http://www.marjan.com.br/portal/email/novos_negocios/send.php";			
				
				$.ajax({
				   type: "POST",
				   url: url,
				   data: $("#novos-negocios-form").serialize(), // serializes the form's elements.
				   success: function(data)
				   {
					   $submit.val("Enviar");
					   $submit.css("opacity", 1);
					   novos_negocios_fns.blockSendForm = false;
					   
					   Application.showSuccessFormFeedbackNormal("#novos-negocios-form");					   
				   },
				   error: function(data){
					   $submit.val("Enviar");
					   $submit.css("opacity", 1);
					   novos_negocios_fns.blockSendForm = false;
					   Application.showErrorFormFeedback();					   
				   }
				});
			}
		});
	}
}