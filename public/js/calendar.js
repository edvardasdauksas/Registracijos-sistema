var slot_size = 3;
var employee_id = 1;
var procedure_id = 1;
var timeslot_id = 1;
var user_id = 1;
var date = new Date();
Date.prototype.toString = function () {return isNaN (this) ? 'NaN' : [this.getDate() > 9 ? this.getDate() : '0' + this.getDate(), this.getMonth() > 8 ? this.getMonth() + 1 : '0' + (this.getMonth() + 1), this.getFullYear()].join('-')}	
var month = date.getMonth();
var day = date.getDate();
var hour = date.getHours();
var minute = date.getMinutes();
var year = date.getFullYear();
var available = false;
var first = false;

var monthNames = [ "Sausis", "Vasaris", "Kovas", "Balandis", "Gegužė", "Birželis",
    "Liepa", "Rupjūtis", "Rugsėjis", "Spalis", "Lapkritis", "Gruodis" ];
	
function daysInMonth(__month,year) {
    return new Date(year, __month + 1, 0).getDate();
}
	
	
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
			appendDays(i);
			getDaySlots();
		});
	}
	

	appendDays(month);

	
	$('#reg').click(function() {
		$('#reg-status').html('Registruojama...');
		contentString = '&user=' + user_id + '&employee=' + employee_id + '&procedure=' + procedure_id + '&timeslot=' + timeslot_id;
		$.ajax({
		url: '../app/register.php',
		type: 'POST',
		data: contentString,
		success: function(data){
			$('#reg-status').html('Sėkmingai užregistruota!');
			$('#reg').css('display','none');
		}
	});
	});
	
	for(var i = 1; i <= 28; i++) {
		date.setHours(((i + 1)/2) + 7,  (i + 1) % 2 * 30);
		$('.grid').append('<div class="time-slot" id="time-slot-' + format(date) + '"></div>');
	}
	
	for(var i = 1; i <= 28; i++) {
		date.setHours(((i + 1)/2) + 7,  (i + 1) % 2 * 30);
		if(checkSlot(i)) {
		available = true;
		if(!first) {
			$('.user-selection').css('top',($('#time-slot-'  + format(date)).offset().top - 206));
			first = true;
		}
			$('#time-slot-' + format(date)).hover(function() {
				if(!$('.dialog').hasClass('visible')) {
					$('.user-selection').css('top',($(this).offset().top - 206));
				}		
			}			
			, function(){}).click(function() {
				hideInfo();
				$('.user-selection').css('top',($(this).offset().top - 206));
				$('.dialog').addClass('visible');
				$('.dialog').css('top',($(this).offset().top - 365));
			});
		}
	}
	
	$('#cancel-reg').click(function() {
		hideInfo()
	});
	if(available == true) {
		$('.user-selection').css('display','block');
	} else {
		
	}
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

function appendDays(_month) {
	$('.days').html('');
	for(var i = 1; i <= daysInMonth(_month, year); i++) {
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

function selectDay() {
	
}

function format(oldDate) {
	var _month = new String(oldDate.getMonth() + 1);
	var _day = new String(oldDate.getDate());
	var _hour = new String(oldDate.getHours());
	var _minute = new String(oldDate.getMinutes());
	var _year = oldDate.getFullYear().toString();
	if(_month.length == 1)
		_month = '0' + _month; 
	if(_day.length == 1)
		_day = '0' + _day;
	if(_hour.length == 1)
		_hour = '0' + _hour;
	if(_minute.length == 1)
		_minute = '0' + _minute; 
	_year = _year.substring(2,4);
		
	return _year + "" + _month + "" + _day + "" + _hour + "" + _minute;
}

function hideInfo() {
	$('.dialog').removeClass('visible');
	$('#reg').css('display','inline-block');
	$('#reg-status').html('');
}