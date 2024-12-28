$(document).ready(function(){  
	// code to get all records from table via select box
	$("#supplymaster").change(function() {    
		var id = $(this).find(":selected").val();
		var dataString = 'smid='+ sm_id;    
		$.ajax({
			url: 'getdata.php',
			dataType: "json",
			data: dataString,  
			cache: false,
			success: function(smData) {
			   if(empData) {
					$("#errorMassage").addClass		  
					 ('hidden').text("");
                    $("#recodlisting").removeClass		  
					 ('hidden');
                    $("#smId").text(smData.sm_id);					 
					$("#empName").text(smData.name);
					 
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