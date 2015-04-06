<!--
	#=======================================#
	#	 									#
	#	 Copyright (c) 2015 Martijn Heil	#
	#										#
	#			Licensed under MIT:			#
	#		http://tinyurl.com/nl973ym		#
	#										#
	#				 Email:					#
	#		 ninjoh@technocraft-mc.nl		#
	#										#
	#				 Git Repo:				#
	#		http://tinyurl.com/qcdho3n		#
	#										#
	#=======================================#
-->
<?php
//Page specific configuration
$title = 'Technocraft - Store';

$current_nav = 'store';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<?php
		//Configuration
		$title = 'Technocraft - Store';

		include('../head.php'); 
		?>
    </head>
    <body id="custom-body">
		<?php include '../inc/header.inc.php'; ?>
		<div class="container">
			<div class=col-md-12 style="padding-top: 50px;">
				<div class="jumbotron main-content">
					<center>
						<div class="row">
						  <div class="col-xs-6 col-md-3" style="float: left;">
							<a href="#" class="thumbnail" style="cursor: not-allowed;">
							  <img src="skyblock.png" alt="Skyblock (Not yet available)">
							</a>
						  </div>
						  <div class="col-xs-6 col-md-3" style="float: right;">
							<a href="./factions" class="thumbnail">
							  <img src="factions.png" alt="Factions">
							</a>
						  </div>
						</div>
					</center>
				</div>
			</div>
		</div>
		
			<!--Google analytics-->
			<script src="../inc/google_analytics.js"></script> 
			
		
		    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
			<!-- Latest compiled and minified JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    </body>
</html>