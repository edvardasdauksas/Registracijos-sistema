<!DOCTYPE HTML>
<html>
    <head>
        <link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link type="text/css" rel="stylesheet" href="css/calendar.css" />
		<link type="text/css" rel="stylesheet" href="css/nav.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/calendar.js"></script>
    </head>
    <body>
		<div class="main">
    <nav>
        <?php
          $nav = include "../app/nav.php";
          echo $nav;
        ?>
		<div style="clear: both;"></div>
    </nav>
	
		<div class="server-response"></div>
			<div class="months">
			
			</div>
			
			<div class="days">
			
			</div>
			
			<div class="content">
			<div class="dialog">
				<div>Registracija</div>
				<div class="info">
					Laikas:
					Procedūra:
					Stilistas:
				</div>
				<div>
					<div class="action" id="reg">Registruotis</div>
					<div class="action" id="cancel-reg">Atšaukti</div>
				</div>
			</div>
				<div class="time">
				
				</div>
				
				
				<div class="grid">
					<div class="aw current-time"></div>
					<div class="aw user-selection ok"></div>
				</div>
				<div style="clear: both;"></div>
				
			</div>
		</div>
    </body>
</html>