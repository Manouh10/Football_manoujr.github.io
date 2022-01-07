<?php 
include("data.php");
session_start();
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="main.css"></link>

		<link type="text/css" rel="stylesheet" href="css/jquery-ui-1.10.1.custom.min.css" />
		<link type="text/css" rel="stylesheet" href="css/scoreboard.css" />
        <script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.10.1.custom.min.js"></script>
        <script type="text/javascript" src="js/scoreboard.js"></script>
	</head>
    <body>
	 
		<canvas id="canvas" width="700" height="500">Football soccer</canvas>
		<div id="out"></div>
	 
		
		<div id="main">
          
            <div class="teamControlBox">
				<span class="teamName" style="font-size: 50pt; color: #800000;"><?php echo($data[$_SESSION['player1']]['nom'])?></span>
                <br/>
                <div class="teamControl" id="awayTeamControl"></div>
            </div>

			<div id="centerPanel" style="display: inline-block; width: 420px;">
				 
 
				<div id="clockControl" class="control basketball broomball football hockey lacrosse soccer">
				 
				 
					<div class="innerBox specialFunctionBox football" id="downDistanceBox">
						<span id="spacer" style="margin: 0 5px;">
							<span style="font-size:60px" class="downDistance" id="p1"> </span>
							<span style="font-size:60px" class="downDistance">:</span>
							<span style="font-size:60px" class="downDistance" id="p2"> </span>
						</span>
					</div>
				</div>
			</div>
			 
        	<div class="teamControlBox">
			<span class="teamName" style="font-size: 50pt; color: #D40000;"><?php echo($data[$_SESSION['player2']]['nom'])?></span>
            <br/>
            <div class="teamControl" id="homeTeamControl"></div>
        	</div>
        </div>
		
		<script type="text/javascript" src="script.js"></script>	

    </body>
</html>