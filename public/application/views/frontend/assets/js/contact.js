// JavaScript Document

var contact_fns = {
	formHeight: 0,
	$formElem: "",
	$formClass: "",
	$btnSendFormClass: "",
	$btnOpenForm: "",
	isFormVisible: false,	
	blockSendForm: false,
	
	Initialize: function(){
		this.$formClass = ".contact-form-input";
		this.$formElem = $(this.$formClass);
		this.formHeight = this.$formElem.height();
		this.$formElem.css("max-height", "0px");
		this.$btnSendFormClass = ".send-user-form";
		this.$btnOpenForm = ".btn-show-form";		
		this.LoadEvents();
		this.changeHelperFormInput();
	},
	
	changeHelperFormInput: function(){
		var elements = document.getElementsByTagName("input");
		for (var i = 0; i < elements.length; i++) {
			elements[i].oninvalid = function(e) {
				e.target.setCustomValidity("");
				if (!e.target.validity.valid) {
					e.target.setCustomValidity("Por favor preencha este campo. Ele é necessário para o envio deste formulário.");
				}
			};
			elements[i].oninput = function(e) {
				e.target.setCustomValidity("");
			};
		}	
	},
	
	ShowForm: function(){
		this.isFormVisible = true;
		var formClass = this.$formClass;
		$(formClass).css("visibility", "visible");
		TweenMax.to(this.$formClass, 1, {css:{minHeight : this.formHeight}, onComplete: (function(){
			$(formClass).css("max-height", "1000px");
		}).bind(this)});
	},
	
	HideForm: function(){
		this.isFormVisible = false;
		var formClass = this.$formClass;		
		TweenMax.to(this.$formClass, 1, {css:{maxHeight : 0, minHeight: 0}, onComplete: (function(){
			$(formClass).css("max-height", "0px");
			$(formClass).css("visibility", "visible");
		}).bind(this)});
	},
	
	LoadEvents: function(){
		this.LoadUserEvents();
	},
	
	LoadUserEvents: function(){
		$(this.$btnOpenForm).on("click", (function(){
			if(!this.isFormVisible){
				this.ShowForm();
			} else {
				this.HideForm();
			}
		}).bind(this));
		$(".close-ct-form").on("click", (function(){
			this.HideForm();
		}).bind(this));
		
		$("#ctc-form").submit(function(e) {
			e.preventDefault();
			if(!contact_fns.blockSendForm){
				contact_fns.blockSendForm = true;
				var $submit = $('#ctc-form').find(':submit')/*.find(':submit')*/;
				$submit.css("opacity", 0.5);
				$submit.val("Enviando");
				var url = "http://www.marjan.com.br/portal/email/contact/send.php";
				//$("#ctc-form").ajaxForm({url: '../email/send.php', type: 'post'})
				//$.post('../email/send.php', $('#ctc-form').serialize());
				$.ajax({
				   type: "POST",
				   url: url,
				   data: $("#ctc-form").serialize(), // serializes the form's elements.
				   success: function(data)
				   {
					   $submit.val("Enviar");
					   $submit.css("opacity", 1);
					   contact_fns.blockSendForm = false;
					   Application.showSuccessFormFeedbackNormal("#ctc-form");
					   //alert(data); // show response from the php script.
				   },
				   error: function(data){
					   contact_fns.blockSendForm = false;
					   $submit.val("Enviar");
					   $submit.css("opacity", 1);
					   Application.showErrorFormFeedback();
					   //alert("Error sending form: " + data);
				   }
				 });
			}			
		});
	},
}