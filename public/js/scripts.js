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
        $('#stylist').append('<div class="frame" id="stylist-' + i + '"><img />Stilistas</div>');
        $('#stylist-' + i).click(function() {
            alert('Stylistas ' + i);
        });
    }
}

function generateStylistList () {
    for(var i = 1; i <= 5; i++) {
        $('#procedure').append('<div class="frame" id="procedure-' + i + '"><img />Procedûra</div>');
        $('#procedure-' + i).click(function() {
            alert('Procedûra ' + i);
        });
    }
}

		