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
<!DOCTYPE html>
<html lang="en">
    <head>
		<title>Technocraft</title>
		
		<link rel="stylesheet" href="helpers.css" />
		
		<!--Font-->
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    </head>
    <body id="custom-body">
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="index.php">Technocraft</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
				<li><a href="http://forum.technocraft-mc.nl" target="_blank">Forums</a></li>
				<li><a href="support.php">Support</a></li>
				<li><a href="http://store.technocraft-mc.nl/">Store</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Vote <span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
					<li><a href="http://serverpact.nl/vote-20764" target="_blank">Vote 1</a></li>
					<li><a href="http://www.minecraft-index.com/30793-technocraft/vote" target="_blank">Vote 2</a></li>
					<li class="disabled"><a href="#">Vote 3</a></li>
					<li class="disabled"><a href="#">Vote 4</a></li>
					<li class="disabled"><a href="#">Vote 5</a></li>
				  </ul>
				</li>
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="#">ACP</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Staff <span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
					<li><a href="#">Submit a ban(WIP)</a></li>
					<li><a href="#">WIP</a></li>
					<li><a href="#">WIP</a></li>
					<li class="divider"></li>
					<li><a href="#">WIP</a></li>
				  </ul>
				</li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		<div class="container">
			<div class=col-md-9>
				<div class="jumbotron main-content">
					<?php
					include('content.html')
					?>
				</div>
			</div>
			<div class="col-md-3">
				<div class="jumbotron sidebar padding-fix">
				
					<!--Donate panel start-->
					<div class="panel panel-default" style="margin-top: 15px;">
					  <div class="panel-heading">
						<h3 class="panel-title"><span class="glyphicon glyphicon-gift" aria-hidden="true"></span> Donate</h3>
					  </div>
					  <div class="panel-body">
							<div class="btn-group">
							  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									Donate <span class="caret"></span>
							 </button>
								  <ul class="dropdown-menu" role="menu">
									<li><a href="http://store.technocraft-mc.nl/factions/">Factions</a></li>
									<li class="disabled"><a href="#">Skyblock</a></li>
								  </ul>
								</div>
					  </div>
					</div>
					<!--Donate panel end-->
					
					<!--Twitter panel start-->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Twitter</h3>
						</div>
						<div class="panel-body">

											
											
										<a class="twitter-timeline"  href="https://twitter.com/Technocraft375" data-widget-id="567377639871377408">Tweets by @Technocraft375</a>
										<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</div>
					</div>
					<!--Twitter panel end-->
					
					<!--Server Info Panel Start-->
					<div class="panel panel-default">
					
					  <div class="panel-heading"><span class="glyphicon glyphicon-cloud" aria-hidden="true"></span> Server Info</div>
					  <div class="panel-body custom-server-info">
					  <p><strong>Server IP:</strong></p>
					  <p class="text-danger"><strong>play.technocraft-mc.nl</strong></p>
					  <p><strong>Minecraft Version:</strong></p>
					  <p class="text-danger"><strong>1.8</strong></p>
					
					
					</div>
					
							</div>
				  <!--Server Info Panel End-->
				</div>
			</div>
		</div>
	
			<!--Google analytics-->
			<script>
			
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-60726856-1', 'auto');
			  ga('send', 'pageview');

			</script>
			<!--Google analytics-->
			
	
		    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
			<!-- Latest compiled and minified JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    </body>
</html>