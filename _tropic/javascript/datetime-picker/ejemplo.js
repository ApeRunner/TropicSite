$(document).ready(function() {
	 
	 
	$.datepicker.regional['mx'] = {
		dateFormat: 'yy-mm-dd'
	};
	
	$.datepicker.setDefaults($.datepicker.regional['mx']);
	
	

	
	
	
	$('.Timestamp').datetimepicker({
		timeFormat: 'hh:mm:ss'
	});


	
   
   
});




