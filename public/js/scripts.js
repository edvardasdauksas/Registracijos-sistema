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
  var req,
    par,
    send;
  par = document.getElementById('procedure');
  req=new XMLHttpRequest();
  req.onreadystatechange=function() {
    if (req.readyState==4 && req.status==200) {
      par.innerHTML += req.responseText;
    }
  }
  //jeigu ka reikia pakeisti path pagal savo masina
  req.open("GET","../app/gen_proc.php",true);
  req.send();
  /*for(var i = 1; i <= 5; i++) {
      $('#stylist').append('<a class="frame" id="procedure-' + i + '" href="../app/process_user.php"><img />Stilistas</a>');
  }*/
}

function generateStylistList () {
  var req,
    par,
    send;
  par = document.getElementById('stylist');
  req=new XMLHttpRequest();
  req.onreadystatechange=function() {
    if (req.readyState==4 && req.status==200) {
      par.innerHTML = req.responseText;
    }
  }
  //jeigu ka reikia pakeisti path pagal savo masina
  req.open("GET","../app/gen_styl.php",true);
  req.send();
    /*for(var i = 1; i <= 5; i++) {
        $('#procedure').append('<a class="frame" id="stylist-' + i + '" href="../app/process_user.php"><img />Procedūra</a>');
    }*/
}

		