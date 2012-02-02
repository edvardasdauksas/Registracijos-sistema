function get_data() {
	$.ajax( {
        url: 'submit_order.php',
		type: 'POST',
		data: dataString,
		success: function( data ) {
		
		}
	});
}

$(document).ready(function() {
    generateProcedureList();
    generateStylistList();
});

function generateProcedureList() {
    for(var i = 1; i <= 5; i++) {
        $('#stylist').append('<a class="frame" id="stylist-' + i + '" href="../app/process_user.php"><img />Stilistas</a>');
    }
}

function generateStylistList () {
    for(var i = 1; i <= 5; i++) {
        $('#procedure').append('<a class="frame" id="procedure-' + i + '" href="../app/process_user.php"><img />Procedūra</a>');
    }
}

		