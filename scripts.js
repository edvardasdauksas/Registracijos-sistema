function get_data() {
	$.ajax( {
        url: 'submit_order.php',
		type: 'POST',
		data: dataString,
		success: function( xml ) {
		
		}
	});
}
		