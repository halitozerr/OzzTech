$(document).ready(function(){
	$('#contact-form-place').validate({
		rules:{
			nameInput: {required: true},
			surnameInput: {required:true},
			emailInput: {required:true,email:true},
			subjectInput: {required:true},
			descriptionInput: {required:true}
		}
		});

		


});

