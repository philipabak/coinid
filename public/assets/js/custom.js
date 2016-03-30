/*
|--------------------------------------------------------------------------
| GOOGLE ANALYTICS
|--------------------------------------------------------------------------
*/	
/*************** REPLACE WITH YOUR OWN UA NUMBER ***********/
// window.onload = function () { "use strict"; gaSSDSLoad(); }; //load after page onload
/*************** REPLACE WITH YOUR OWN UA NUMBER ***********/



$(document).ready(function() { 
	"use strict";

}); //End Doc Ready


function gaSSDSLoad(acct) {
	"use strict";  
	var gaJsHost = (("https:" === document.location.protocol) ? "https://ssl." : "http://www."),
	pageTracker,
	s;
	s = document.createElement('script');
	s.src = gaJsHost + 'google-analytics.com/ga.js';
	s.type = 'text/javascript';
	s.onloadDone = false;
	function init () {
		pageTracker = _gat._getTracker(acct);
		pageTracker._trackPageview();
	}
	s.onload = function () {
		s.onloadDone = true;
		init();
	};
	s.onreadystatechange = function() {
		if (('loaded' === s.readyState || 'complete' === s.readyState) && !s.onloadDone) {
			s.onloadDone = true;
			init();
		}
	};
	document.getElementsByTagName('head')[0].appendChild(s);
}


/**
 * CONTACT FROM
 * @return {[type]} [description]
 */
 $(function() {
 	"use strict";
 	if( $("#contactform").length ){

 		$.validator.setDefaults({
 			highlight: function(element) {
 				$(element).closest('.form-group').addClass('has-error');
 				if(!$(element).closest('.form-group').find('.form-control-feedback').length){
 					$(element).closest('.form-group').append('<span class="icon-glyph-146 form-control-feedback"></span>');
 				}

 			},
 			unhighlight: function(element) {
 				$(element).closest('.form-group').removeClass('has-error');
 				$(element).closest('.form-group').find('.form-control-feedback').remove();
 			},
 			errorElement: 'span',
 			errorClass: 'help-block',
 			errorPlacement: function(error, element) {
 				if(element.parent('.input-group').length) {
 					error.insertAfter(element.parent());
 				} else {
 					error.insertAfter(element);
 				}
 			}
 		});


 		$("#contactform").validate({
 			/* debug: true, */
 			submitHandler: function(form) {

 				$(form).ajaxSubmit({
 					target: ".result",
 					success: function(){
 						if($('.result .alert-success').length){
 							$("#contactform").trigger('reset');

 						}
 					}
 				});
 			},
 			onkeyup: false,
 			onclick: false,
 			rules: {
 				name: {
 					required: true,
 					minlength: 3
 				},
 				email: {
 					required: true,
 					email: true
 				},
 				phone: {
 					required: false,
 					minlength: 10,
 					digits:true
 				},
 				comment: {
 					required: true,
 					minlength: 10,
 					maxlength: 350
 				},
 				captcha: {
 					required: true,
 					minlength: 6
 				}
 			}
 		});
 	}

 });
	