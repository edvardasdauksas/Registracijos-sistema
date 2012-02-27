<?php 
    session_start();
    
    if(isset($_COOKIE['btyprlusr']) && isset($_COOKIE['btyprlpsw']) && !isset($_SESSION['id'])) {
        $_SESSION['id'] = $_COOKIE['btyprlusr'];
      
    }
?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <link type="text/css" rel="stylesheet" href="css/styles.css" />
	<link type="text/css" rel="stylesheet" href="css/nav.css" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
  </head>
	<body>
		<div class="main">
      <nav>
        <?php
          $nav = include "../app/nav.php";
          echo $nav;
        ?>
      </nav>
			<div class="content">
				<div id="stylist">
        
				</div>
        <div id="procedure">
        
        </div>
      </div>
    </div>
	</body>
</html>