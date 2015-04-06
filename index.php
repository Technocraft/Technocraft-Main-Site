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
$title = 'Technocraft - Home';

$current_nav = 'home';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<?php include('head.php'); ?>
    </head>
    <body id="custom-body">
	<!--Nav start-->
		<?php include './inc/header.inc.php'; ?>
		<!--Nav end-->
		<div class="container">
			<div class="col-md-9">
				<div class="jumbotron main-content">
					<?php
					include('content.html');
					?>
				</div>
			</div>
				<?php include('sidebar.php'); ?>
		</div>
			<!--Google analytics-->
			<script src="./inc/google_analytics.js"></script> 
			
	
		    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
			<!-- Latest compiled and minified JavaScript -->
			<script src="./inc/bootstrap.min.js"></script>
    </body>
</html>