function subSribe(subscribe) {
	// Get the snackbar DIV
	var x = document.getElementById("snackbar");
	 
	// Add the "show" class to DIV
	x.className = "show";
	x.innerHTML = subscribe;
	// After 3 seconds, remove the show class from DIV
	setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
	  
	  
	 }
   $("#subScribe-Form").submit(function(event){
	   event.preventDefault(); //prevent default action 
	   var post_url = "";
	   var request_method = 'post'
	   var form_data = $(this).serialize(); //Encode form elements for submission
	   
	   $.ajax({
		   url : post_url,
		   type: request_method,
		   data : form_data
	   }).done(function(response){ 
		   var result = JSON.parse(response); 
		   if (result.function == 'addCustomer') {
               subSribe(result.msg);
               
		   }		
	   });
   });