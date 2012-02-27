var stylist = new Array();
var procedure = new Array();

function get_procedure() {
	$.ajax( {
        url: '../app/gen_proc.php',
		type: 'GET',
		success: function( data ) {
			procedure = data.split(";");
			for(i = 0; i < procedure.length - 1; i ++) {
				pData = procedure[i].split(":");
				$('#procedure').append('<a class="frame" id="procedure-' + pData[0] + '" href="../app/process_user.php"><img />' + pData[1] + '</a>');
			}
		}
	});
}

function get_stylist() {
	$.ajax( {
        url: '../app/gen_styl.php',
		type: 'GET',
		success: function( data ) {
			stylist = data.split(";");
			for(i = 0; i < stylist.length - 1; i ++) {
				sData = stylist[i].split(":");
				$('#stylist').append('<a class="frame" id="stylist-' + sData[0] + '" href="../app/process_user.php"><img />' + sData[1] + " " + sData[2] + '</a>');
			}
		}
	});
}

$(document).ready(function() {
    get_procedure();
	get_stylist();
});