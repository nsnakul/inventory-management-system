 
$(document).ready(function(){  
	 
	$("#employee").change(function() {    
		var id = $(this).find(":selected").val();
		var dataString = 'imid='+ id;    
		$.ajax({
			url: 'gettemp.php',
			dataType: "json",
			data: dataString,  
			cache: false,
			success: function(empData) {
			   if(empData) {
					$("#errorMassage").addClass		  
					 ('hidden').text("");
                    $("#recodlisting").removeClass		  
					 ('hidden');
                    $("#imId").text(imData.id);					 
					$("#imName").text(imData.imRate);
					 
					$("#records").show();		 
				} else {
					$("#errorMassage").addClass		  
					 ('hidden');
					$("#recodlisting").removeClass		  
					 ('hidden').text("No record found!");
					 
				}   	
			} 
		});
 	}) 
});