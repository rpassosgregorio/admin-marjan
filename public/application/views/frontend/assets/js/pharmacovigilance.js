// JavaScript Document

var pharmaco_vig_fns = {
	formHeight: 0,
	$formElem: "",
	$formClass: "",
	$btnSendFormClass: "",
	$btnOpenForm: "",
	isFormVisible: false,	
	blockSendForm01: false,
	blockSendForm02: false,
	
	Initialize: function(){
		this.$formClass = ".form-fv";
		this.$formMaskClass = ".form-mask";
		this.$formMaskElem = $(this.$formMaskClass);
		this.$formElem = $(this.$formClass);
		this.formHeight = this.$formElem.height();
		//this.$formElem.css("max-height", "0px");
		this.$btnSendFormClass = ".send-user-form";
		this.$btnOpenForm = ".col-pv-02-btn-wp button";		
		this.LoadEvents();
		this.FormAdjusts();
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
	
	FormAdjusts: function(){
		$( "#bday-date-picker, #treat-start-date-picker, #fv-event-start-date-picker, #fv-treat-start-date-picker" ).datepicker({
			dateFormat: "dd-mm-yy",
			dayNamesMin: [ "Do", "Se", "Te", "Qu", "Qu", "Se", "Sá" ],
			dayNamesShort: [ "Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb" ],
			dayNames: [ "Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado" ],
			monthNames: [ "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro" ],
			monthNamesShort : [ "Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez" ],
		});		
		$('#hd-phone-nbr').mask("(00)0000-0000", {placeholder: "(00)0000-0000"});
		$('#hd-cel-nbr').mask("(00)00000-0000", {placeholder: "(00)00000-0000"});	
		$('#pt-phone-nbr').mask("(00)0000-0000", {placeholder: "(00)0000-0000"});
		$('#pt-cel-nbr').mask("(00)00000-0000", {placeholder: "(00)00000-0000"});	
		this.LoadFormEvents();
	},
	
	ShowForm: function(){
		this.isFormVisible = true;
		var formClass = this.$formClass;
		var formMaskClass = this.$formMaskClass;
		$(formClass).css("display", "block");
		$(formMaskClass).css("display", "block");
		/*TweenMax.to(this.$formClass, 1, {css:{minHeight : this.formHeight}, onComplete: (function(){
			$(formClass).css("max-height", "1000px");
		}).bind(this)});*/
	},
	
	HideForm: function(){
		this.isFormVisible = false;
		var formClass = this.$formClass;
		var formMaskClass = this.$formMaskClass;		
		$(formMaskClass).css("display", "none");
		$(formClass).css("display", "none");
		$("#form-fv-patient").hide();
		$("#form-fv-health-doctor").hide();
		$("#form-fv-filter-btn-yes").show();
		$("#form-fv-filter-btn-no").show();
		$('.form-fv-form')[0].reset();
		$('.form-pt-form')[0].reset();
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
		$(this.$formMaskElem).on("click", (function(){
				this.HideForm();
		}).bind(this));
		$(".close-fv-form").on("click", (function(){
				this.HideForm();
				
		}).bind(this));		
	},
	
	LoadFormEvents: function(){
		$("#form-fv-filter-btn-yes").on("click", (function(){
			$("#form-fv-health-doctor").show();
			$("#form-fv-patient").hide();
			$("#form-fv-filter-btn-no").hide();
		}).bind(this));
		$("#form-fv-filter-btn-no").on("click", (function(){
			$("#form-fv-patient").show();
			$("#form-fv-health-doctor").hide();
			$("#form-fv-filter-btn-yes").hide();
		}).bind(this));
		
		$("#fv-patient-form").submit(function(e) {
			
			e.preventDefault();
			if(!pharmaco_vig_fns.blockSendForm01){
				
				pharmaco_vig_fns.blockSendForm01 = true;
				var $submit = $('#fv-patient-form').find(':submit')/*.find(':submit')*/;
				$submit.css("opacity", 0.5);
				$submit.val("Enviando");
				
				var url = "http://www.marjan.com.br/portal/email/pharmacovigilance/no.php";
				var auth_contact = $("#pt-contact-auth-form").val() == "Sim" ? true : false;
				
				$.ajax({
				   type: "POST",
				   url: url,
				   data: $("#fv-patient-form").serialize(), // serializes the form's elements.
				   success: function(data)
				   {
					   $submit.val("Enviar");
					   $submit.css("opacity", 1);
					   pharmaco_vig_fns.blockSendForm01 = false;
					   
					   pharmaco_vig_fns.HideForm();
					   Application.showSuccessFormFeedbackFarmacovigilancia("#fv-patient-form", auth_contact)
				   },
				   error: function(data){
					   
					   $submit.val("Enviar");
					   $submit.css("opacity", 1);
					   pharmaco_vig_fns.blockSendForm01 = false;
					   
					   Application.showErrorFormFeedback();
				   }
				 });
			}
		});
		
		$("#fv-hd-form").submit(function(e) {
			
			e.preventDefault();
			
			if(!pharmaco_vig_fns.blockSendForm02){
				
				pharmaco_vig_fns.blockSendForm02 = true;
				var $submit = $('#fv-hd-form').find(':submit')/*.find(':submit')*/;
				$submit.css("opacity", 0.5);
				$submit.val("Enviando");
				
				var url = "http://www.marjan.com.br/portal/email/pharmacovigilance/yes.php";
				var auth_contact = $("#hd-contact-auth-form").val() == "Sim" ? true : false;
				
				$.ajax({
				   type: "POST",
				   url: url,
				   data: $("#fv-hd-form").serialize(), // serializes the form's elements.
				   success: function(data)
				   {
					   
					   $submit.val("Enviar");
					   $submit.css("opacity", 1);
					   pharmaco_vig_fns.blockSendForm02 = false;
					   
					   pharmaco_vig_fns.HideForm();
					   Application.showSuccessFormFeedbackFarmacovigilancia("#fv-hd-form", auth_contact)
				   },
				   error: function(data){
					   
					   $submit.val("Enviar");
					   $submit.css("opacity", 1);
					   pharmaco_vig_fns.blockSendForm02 = false;
					   
					   Application.showErrorFormFeedback();
				   }
				 });
			}
		});
	},
}// JavaScript Document