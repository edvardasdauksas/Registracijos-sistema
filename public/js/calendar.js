var slot_size = 3;
var employee_id = 1;
var procedure_id = 1;
var timeslot_id = 1;
var user_id = 1;
var date = new Date();
var month = date.getMonth();
var day = date.getDate();
var hour = date.getHours();
var minute = date.getMinutes();

var monthNames = [ "Sausis", "Vasaris", "Kovas", "Balandis", "Gegužė", "Birželis",
    "Liepa", "Rupjūtis", "Rugsėjis", "Spalis", "Lapkritis", "Gruodis" ];
var dayCount = [31,28,31,30,31,30,31,31,30,31,30,31];
	
	
$(document).ready(function() {
	$('.current-time').css('top', ((hour  - 8) * 40 + minute / 1.5));
	$('.user-selection').css('height', 20 * slot_size);

	for(var i = 1; i <= 14; i++) {
		$('.time').append('<div class="hour">' + (i + 7) + ':00</div>');
	}
	
	for(var i = 0; i < 12; i++) {
		$('.months').append('<div class="month" id="month-' + i + '">' + monthNames[i] + '</div>');
		if(i == month) {
			$('#month-' + i).addClass('m-selected');
		}
		$('#month-' + i).click(function() {
			$('.month').removeClass('m-selected');
			$(this).addClass('m-selected');
			month = $(this).attr('id').substring(6);
			appendDays();
			getDaySlots();
		});
	}
	

	appendDays();

	
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
	}
	
	for(var i = 1; i <= 28; i++) {
		if(checkSlot(i)) {
			$('#time-slot-' + i).hover(function() {
				if(!$('.dialog').hasClass('visible')) {
					$('.user-selection').css('top',($(this).offset().top - 185));
				}		
			}			
			, function(){}).click(function() {
				$('.user-selection').css('top',($(this).offset().top - 185));
				$('.dialog').addClass('visible');
				$('.dialog').css('top',($(this).offset().top - 365));
			});
		}
	}
	
	$('#cancel-reg').click(function() {
		$('.dialog').removeClass('visible');
	});
	 
	
	
	
});

function getDaySlots() {
	//---- ajax shit that return all time slots
}


function checkSlot(id) {
	var valid = true;
	for(var i = 0; i < slot_size; i++) {
		if($('#time-slot-' + (id + i)).hasClass('reserved')) {
			valid = false;
		}
	}
	
	if(id + slot_size - 1 > 28) {
		valid = false;
	}
	
	return valid;
}

function appendDays() {
	$('.days').html('');
	for(var i = 1; i <= dayCount[month]; i++) {
		$('.days').append('<div class="day" id="day-' + i + '">' + i + '</div>');
		if(i == day) {
			$('#day-' + i).addClass('d-selected');
		}
		$('#day-' + i).click(function() {
			$('.day').removeClass('d-selected');
			$(this).addClass('d-selected');
			day = $(this).attr('id').substring(4);
			getDaySlots();
		});
	}
}