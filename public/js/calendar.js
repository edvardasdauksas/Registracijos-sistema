var slot_size = 3;
var employee_id = 1;
var procedure_id = 1;
var timeslot_id = 1;
var user_id = 1;

var monthNames = [ "Sausis", "Vasaris", "Kovas", "Balandis", "Gegužė", "Birželis",
    "Liepa", "Rupjūtis", "Rugsėjis", "Spalis", "Lapkritis", "Gruodis" ];
	
	
$(document).ready(function() {

	$('.user-selection').css('height', 20 * slot_size);

	for(var i = 1; i <= 14; i++) {
		$('.time').append('<div class="hour">' + (i + 7) + ':00</div>');
	}
	
	for(var i = 0; i < 12; i++) {
		$('.months').append('<div class="month m-selected" id="month-' + i + '">' + monthNames[i] + '</div>');
	}
	
	for(var i = 1; i <= 31; i++) {
		$('.days').append('<div class="day" id="day-' + i + '">' + i + '</div>')
	}

	
	$('#reg').click(function() {
		contentString = '&user=' + user_id + '&employee=' + employee_id + '&procedure=' + procedure_id + '&timeslot=' + timeslot_id;
		$.ajax({
		url: '../app/register.php',
		type: 'POST',
		data: contentString,
		success: function(data){
			$('.server-response ').html('Response :>');
		}
	});
	});
	
	for(var i = 1; i <= 28; i++) {
		$('.grid').append('<div class="time-slot" id="time-slot-' + i + '"></div>');
			$('#time-slot-' + i).hover(function() {
				$('.user-selection').addClass('visible');
				if(!$('.dialog').hasClass('visible')) {
					$('.user-selection').css('top',($(this).offset().top - 185));
				}
				
				
				var cool = true;
					for(var j =0; j<3; j++) {
						if($('#time-slot-' + (i +j)).hasClass('reserved')) {
							cool = false;
						}
					}
					if(!cool) {
						$('.user-selection').addClass('error');
					} else {
						$('.user-selection').addClass('ok');
						
					}
				}			
			, function(){
				if(!$('.dialog').hasClass('visible')) {
					$('.user-selection').removeClass('visible');
				}
			}).click(function() {
				$('.dialog').addClass('visible');
				$('.dialog').css('top',($(this).offset().top - 365));
			});
	}
	
	$('#cancel-reg').click(function() {
		$('.dialog').removeClass('visible');
	});
	
});