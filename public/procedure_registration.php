<!DOCTYPE HTML>
<html>
    <head>
        <link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link type="text/css" rel="stylesheet" href="css/calendar.css" />
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
				<div class="current-time"></div>
				<div class="user-selection ok"></div>
				<div class="grid">
					
				</div>
				<div style="clear: both;"></div>
				
			</div>
		</div>
    </body>
</html>