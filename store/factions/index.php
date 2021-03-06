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


if (isset($_POST['mc_name'])) {
		if($_POST['mc_name']) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<?php
		//Configuration
		$title = 'Technocraft - Store';

		include('../../inc/head.inc.php'); 
		?>
		<!--Store specific css-->
		<link rel="stylesheet" href="store.css" />
    </head>
    <body id="custom-body">
		<?php include '../../inc/header.inc.php'; ?>
		<div class="container">
			<div class=col-md-12>
				<div class="jumbotron main-content" style="padding-bottom: 500px; padding-top: 100px;">
					<center><h1>Factions</h1></center><br />
					<!--Start panel 1-->
					<div class="donation col-sm-4 col-md-4">
						<div class="panel panel-default">
						  <div class="panel-heading">
							<h3 class="panel-title">Electrician</h3>
						  </div>
						  <div class="panel-body">
							<div class="donation-panel-footer">
								<div class="price"><p>4.50 EUR</p></div>
								<div class="buy-button">
									<!-- Button trigger modal -->
									<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Electrician">
									  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
									  Buy
									</button>

									<!-- Modal -->
									<div class="modal fade" id="Electrician" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									  <div class="modal-dialog">
										<div class="modal-content">
										  <div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="myModalLabel">Electrician</h4>
										  </div>
										  <div class="modal-body">
											<p><strong>Commands:</strong></p><br />
											<ul>
												<li><strong>/back</strong> - Teleport to your last location!(Not on death)</li>
												<li><strong>/hat</strong> - Wear any block on your head!</li>
												<li><strong>/heal</strong> - Heal yourself every 5 minutes!</li>
												<li><strong>/spawnmob</strong> - Spawn mobs!(Pigs, cows and sheep!)</li>
											</ul>
												<br /><p><strong>Perks:</strong></p>
											<ul>
												<li>A <strong>[Electrician]</strong> prefix in chat!</li>
											</ul>
										  </div>
										  <div class="modal-footer">
											<div class="modal-price">
											4.50 EUR
											</div>
											<form method="post" action="https://www.serverbuilds.nl/serverlist/donate/15921/15654">
											<input type="hidden" name="mc_name"
											value="<?php echo $_POST['mc_name']; ?>">
											<input type="submit" name="submitDonation" class="btn btn-success" value="Buy" />
											</form>
										  </div>
										</div>
									  </div>
									</div>
									<!--End modal-->
								</div>
							</div>
						  </div>
						</div>
					</div>
					<!--End panel 1-->
					
					<!--Start panel 2-->
					<div class="donation col-sm-4 col-md-4">
						<div class="panel panel-default">
						  <div class="panel-heading">
							<h3 class="panel-title">TechnoBot</h3>
						  </div>
						  <div class="panel-body">
							<div class="donation-panel-footer">
								<div class="price"><p>9.50 EUR</p></div>
								<div class="buy-button">
									<!-- Button trigger modal -->
									<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#TechnoBot">
									  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
									  Buy
									</button>

									<!-- Modal -->
									<div class="modal fade" id="TechnoBot" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									  <div class="modal-dialog">
										<div class="modal-content">
										  <div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="myModalLabel">TechnoBot</h4>
										  </div>
										  <div class="modal-body">
											<p><strong>Commands:</strong></p><br />
											<ul>
												<li><strong>/back</strong> - Teleport to your last location!(Also on death)</li>
												<li><strong>/hat</strong> - Wear any block on your head!</li>
												<li><strong>/heal</strong> - Heal yourself every 5 minutes!</li>
												<li><strong>/spawnmob</strong> - Spawn mobs!(Pigs, cows and sheep!)</li>
												<li><strong>/tpahere</strong> - Request people to tpa to you!</li>
												<li><strong>/me</strong> - Describes an action in the context of the player!</li>
											</ul>
												<br /><p><strong>Perks:</strong></p>
											<ul>
												<li>A <strong>[TechnoBot]</strong> prefix in chat!</li>
											</ul>
										  </div>
										  <div class="modal-footer">
										  
											<div class="modal-price">
											9.50 EUR
											</div>
											<form method="post" action="https://www.serverbuilds.nl/serverlist/donate/15921/15655">
											<input type="hidden" name="mc_name"
											value="<?php echo $_POST['mc_name']; ?>">
											<input type="submit" name="submitDonation" class="btn btn-success" value="Buy" />
											</form>
										  </div>
										</div>
									  </div>
									</div>
									<!--End modal-->
								</div>
							</div>
						  </div>
						</div>
					</div>
					<!--End panel 2-->
					
					<!--Start panel 3-->
					<div class="donation col-sm-4 col-md-4">
						<div class="panel panel-default">
						  <div class="panel-heading">
							<h3 class="panel-title">Comet</h3>
						  </div>
						  <div class="panel-body">
							<div class="donation-panel-footer">
								<div class="price"><p>14.50 EUR</p></div>
								<div class="buy-button">
									<!-- Button trigger modal -->
									<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Comet">
									  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
									  Buy
									</button>

									<!-- Modal -->
									<div class="modal fade" id="Comet" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									  <div class="modal-dialog">
										<div class="modal-content">
										  <div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="myModalLabel">Comet</h4>
										  </div>
										  <div class="modal-body">
											<ul>
											<p><strong>Commands:</strong></p><br />
												<li><strong>/back</strong> - Teleport to your last location!(Also on death)</li>
												<li><strong>/hat</strong> - Wear any block on your head!</li>
												<li><strong>/heal</strong> - Heal yourself every 5 minutes!</li>
												<li><strong>/spawnmob</strong> - Spawn mobs!(Pigs, cows, skeletons, and zombies!)</li>
												<li><strong>/tpahere</strong> - Request people to tpa to you!</li>
												<li><strong>/me</strong> - Describes an action in the context of the player!</li>
												<li><strong>/enchant</strong> - Enchant items with this command! (Respiration, featherfalling)</li>
											</ul>
												<br /><p><strong>Perks:</strong></p>
											<ul>
												<li>A <strong>[Comet]</strong> prefix in chat!</li>
											</ul>
										  </div>
										  <div class="modal-footer">
											<div class="modal-price">
											14.50 EUR
											</div>
											<form method="post" action="https://www.serverbuilds.nl/serverlist/donate/15921/15656">
											<input type="hidden" name="mc_name"
											value="<?php echo $_POST['mc_name']; ?>">
											<input type="submit" name="submitDonation" class="btn btn-success" value="Buy" />
											</form>
										  </div>
										</div>
									  </div>
									</div>
									<!--End modal-->
								</div>
							</div>
						  </div>
						</div>
					</div>
					<!--End panel 3-->
					
					<!--Start panel 4-->
					<div class="donation col-sm-4 col-md-4">
						<div class="panel panel-default">
						  <div class="panel-heading">
							<h3 class="panel-title">Nova</h3>
						  </div>
						  <div class="panel-body">
							<div class="donation-panel-footer">
								<div class="price"><p>19.50 EUR</p></div>
								<div class="buy-button">
									<!-- Button trigger modal -->
									<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Nova">
									  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
									  Buy
									</button>

									<!-- Modal -->
									<div class="modal fade" id="Nova" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									  <div class="modal-dialog">
										<div class="modal-content">
										  <div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="myModalLabel">Nova</h4>
										  </div>
										  <div class="modal-body">
											<p><strong>Commands:</strong></p><br />
											<ul>
												<li><strong>/back</strong> - Teleport to your last location!(Also on death)</li>
												<li><strong>/hat</strong> - Wear any block on your head!</li>
												<li><strong>/heal</strong> - Heal yourself every 5 minutes!</li>
												<li><strong>/spawnmob</strong> - Spawn mobs!(Pigs, cows, skeletons, and zombies!)</li>
												<li><strong>/tpahere</strong> - Request people to tpa to you!</li>
												<li><strong>/me</strong> - Describes an action in the context of the player!</li>
												<li><strong>/enchant</strong> - Enchant items with this command! (Respiration, featherfalling, smite, looting, blastprotection)</li>
												<li><strong>/enderchest</strong> - Open your enderchest anywhere you are!</li>
												<li><strong>/weather</strong> - Change the weather!</li>
											</ul>
												<br /><p><strong>Perks:</strong></p>
											<ul>
												<li>A <strong>[Nova]</strong> prefix in chat!</li>
											</ul>
										  </div>
										  <div class="modal-footer">
											<div class="modal-price">
												19.50 EUR
											</div>
											<form method="post" action="https://www.serverbuilds.nl/serverlist/donate/15921/15657">
											<input type="hidden" name="mc_name"
											value="<?php echo $_POST['mc_name']; ?>">
											<input type="submit" name="submitDonation" class="btn btn-success" value="Buy" />
											</form>
										  </div>
										</div>
									  </div>
									</div>
									<!--End modal-->
								</div>
							</div>
						  </div>
						</div>
					</div>
					<!--End panel 4-->
					
					<!--Start panel 5-->
					<div class="donation col-sm-4 col-md-4">
						<div class="panel panel-default">
						  <div class="panel-heading">
							<h3 class="panel-title">SuperNova</h3>
						  </div>
						  <div class="panel-body">
							<div class="donation-panel-footer">
								<div class="price"><p>24.50 EUR</p></div>
								<div class="buy-button">
									<!-- Button trigger modal -->
									<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#SuperNova">
									  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
									  Buy
									</button>

									<!-- Modal -->
									<div class="modal fade" id="SuperNova" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									  <div class="modal-dialog">
										<div class="modal-content">
										  <div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="myModalLabel">SuperNova</h4>
										  </div>
										  <div class="modal-body">
											<p><strong>Commands:</strong></p><br />
											<ul>
												<li><strong>/back</strong> - Teleport to your last location!(Also on death)</li>
												<li><strong>/hat</strong> - Wear any block on your head!</li>
												<li><strong>/heal</strong> - Heal yourself every 5 minutes!</li>
												<li><strong>/spawnmob</strong> - Spawn mobs!(Pigs, cows, skeletons, zombies, and giants!! (No abuse though!))</li>
												<li><strong>/tpahere</strong> - Request people to tpa to you!</li>
												<li><strong>/me</strong> - Describes an action in the context of the player!</li>
												<li><strong>/enchant</strong> - Enchant items with this command! (Respiration, featherfalling, smite, looting, blastprotection, flame, punch)</li>
												<li><strong>/enderchest</strong> - Open your enderchest anywhere you are!</li>
												<li><strong>/weather</strong> - Change the weather!</li>
												<li><strong>/jump</strong> - Teleport to where you are looking!</li>
												<li><strong>/repair all</strong> - Repair all items in your inventory!</li>
											</ul>
												<br /><p><strong>Perks:</strong></p>
											<ul>
												<li>A <strong>[SuperNova]</strong> prefix in chat!</li>
											</ul>
										  </div>
										  <div class="modal-footer">
											<div class="modal-price">
												24.50 EUR
											</div>
											<form method="post" action="https://www.serverbuilds.nl/serverlist/donate/15921/15658">
											<input type="hidden" name="mc_name"
											value="<?php echo $_POST['mc_name']; ?>">
											<input type="submit" name="submitDonation" class="btn btn-success" value="Buy" />
											</form>
										  </div>
										</div>
									  </div>
									</div>
									<!--End modal-->
								</div>
							</div>
						  </div>
						</div>
					</div>
					<!--End panel 5-->
					
					<!--Start panel 6-->
					<div class="donation col-sm-4 col-md-4">
						<div class="panel panel-default">
						  <div class="panel-heading">
							<h3 class="panel-title">TechnoLord</h3>
						  </div>
						  <div class="panel-body">
							<div class="donation-panel-footer">
								<div class="price"><p>29.50 EUR</p></div>
								<div class="buy-button">
									<!-- Button trigger modal -->
									<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#TechnoLord">
									  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
									  Buy
									</button>

									<!-- Modal -->
									<div class="modal fade" id="TechnoLord" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									  <div class="modal-dialog">
										<div class="modal-content">
										  <div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="myModalLabel">TechnoLord</h4>
										  </div>
										  <div class="modal-body">
											<p><strong>Commands:</strong></p><br />
											<ul>
												<li><strong>/back</strong> - Teleport to your last location!(Also on death)</li>
												<li><strong>/hat</strong> - Wear any block on your head!</li>
												<li><strong>/heal</strong> - Heal yourself every 5 minutes!</li>
												<li><strong>/spawnmob</strong> - Spawn mobs!(Pigs, cows, skeletons, zombies, and giants!! (No abuse though!))</li>
												<li><strong>/tpahere</strong> - Request people to tpa to you!</li>
												<li><strong>/me</strong> - Describes an action in the context of the player!</li>
												<li><strong>/enchant</strong> - Enchant items with this command! (Respiration, featherfalling, smite, looting, blastprotection, flame, punch)</li>
												<li><strong>/enderchest</strong> - Open your enderchest anywhere you are!</li>
												<li><strong>/weather</strong> - Change the weather!</li>
												<li><strong>/jump</strong> - Teleport to where you are looking!</li>
												<li><strong>/repair all</strong> - Repair all items in your inventory!</li>
												<li><strong>/pv 1</strong> - An enderchest, but double its size!</li>
											</ul>
											<br /><p><strong>Perks:</strong></p>
											<ul>
												<li>Bypass cooldown for <strong>/feed</strong>!</li>
												<li>A <strong>[TechnoGod]</strong> prefix in chat!</li>
											</ul>
										  </div>
										  <div class="modal-footer">
											<div class="modal-price">
												29.50 EUR
											</div>								  
											<form method="post" action="https://www.serverbuilds.nl/serverlist/donate/15921/15659">
											<input type="hidden" name="mc_name"
											value="<?php echo $_POST['mc_name']; ?>">
											<input type="submit" name="submitDonation" class="btn btn-success" value="Buy" />
											</form>
										  </div>
										</div>
									  </div>
									</div>
									<!--End modal-->
								</div>
							</div>
						  </div>
						</div>
					</div>
					<!--End panel 6-->
					
					<!--Start panel 7-->
					<div class="donation col-sm-4 col-md-4">
						<div class="panel panel-default">
						  <div class="panel-heading">
							<h3 class="panel-title">TechnoGod</h3>
						  </div>
						  <div class="panel-body">
							<div class="donation-panel-footer">
								<div class="price"><p>39.50 EUR</p></div>
								<div class="buy-button">
									<!-- Button trigger modal -->
									<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#TechnoGod">
									  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
									  Buy
									</button>

									<!-- Modal -->
									<div class="modal fade" id="TechnoGod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									  <div class="modal-dialog">
										<div class="modal-content">
										  <div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="myModalLabel">TechnoGod</h4>
										  </div>
										  <div class="modal-body">
										  <p><strong>Commands:</strong></p><br />
											<ul>
												<li><strong>/back</strong> - Teleport to your last location!(Also on death)</li>
												<li><strong>/hat</strong> - Wear any block on your head!</li>
												<li><strong>/heal</strong> - Heal yourself every 5 minutes!</li>
												<li><strong>/spawnmob</strong> - Spawn mobs!(Pigs, cows, skeletons, zombies, giants, squids, chickens, and spiders! (No abuse though!))</li>
												<li><strong>/tpahere</strong> - Request people to tpa to you!</li>
												<li><strong>/me</strong> - Describes an action in the context of the player!</li>
												<li><strong>/enchant</strong> - Enchant items with this command! (Respiration, featherfalling, smite, looting, blastprotection, flame, punch, bane of arthropods, aqua affinity, and depth strider!)</li>
												<li><strong>/enderchest</strong> - Open your enderchest anywhere you are!</li>
												<li><strong>/weather</strong> - Change the weather!</li>
												<li><strong>/jump</strong> - Teleport to where you are looking!</li>
												<li><strong>/repair all</strong> - Repair all items in your inventory!</li>
												<li><strong>/pv 1 and /pv 2</strong> - An enderchest, but double its size!</li>
											</ul>
												<br /><p><strong>Perks:</strong></p>
											<ul>
												<li><strong>Silkspawners!</strong> - Mine mob spawners with silk touch and get the spawner, you can also place them!</li>
												<li>A <strong>[TechnoGod]</strong> prefix in chat!</li>
											</ul>
										  </div>
										  <div class="modal-footer">
											<div class="modal-price">
												39.50 EUR
											</div>								  
											<form method="post" action="https://www.serverbuilds.nl/serverlist/donate/15921/16303">
											<input type="hidden" name="mc_name"
											value="<?php echo $_POST['mc_name']; ?>">
											<input type="submit" name="submitDonation" class="btn btn-success" value="Buy" />
											</form>
										  </div>
										</div>
									  </div>
									</div>
									<!--End modal-->
								</div>
							</div>
						  </div>
						</div>
					</div>
					<!--End panel 7-->
				</div>	<!--End jumbotron-->
			</div>
				<center>
					<div style="position: static; bottom: 0">
					Technocraft is in no way affiliated with Mojang AB <span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span></div>
				</center>
		</div>
		
			<!--Google analytics-->
			<script src="../../inc/google_analytics.js"></script> 
			
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="../../inc/bootstrap.min.js"></script>
    </body>
</html>

<?php }	else {//If field isnt filled in?>

<!--If field isnt filled in html here-->
<!DOCTYPE html>
<html lang="en">
    <head>	
		<?php
		//Configuration
		$title = 'Technocraft - Store';

		include('../../inc/head.inc.php'); 
		?>
    </head>
    <body id="custom-body">
		<?php include '../../inc/header.inc.php'; ?>
		<div class="container">
			<div class=col-md-12 style="padding-top: 50px;">
				<div class="jumbotron main-content" style="text-align: center;">
					<center>
						<!--Error message for when field isnt filled in-->
						<div class="alert alert-danger" role="alert">
						  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
						  <span class="sr-only">Error:</span>
						  You must fill in your minecraft username
						</div>
							<h1 style="font-size: 30px;">Please enter your minecraft username to continue</h1><br />
							<form method="post" action="index.php">
								<div class="input-group" style="float: initial;">
									<input type="text" class="form-control" size="30" name="mc_name" placeholder="Minecraft Username" aria-describedby="basic-addon1"><br /><br />
								</div>
								<input type="submit" name="submit" value="Continue" class="btn btn-primary" />
							</form>
					</center>
				</div>
			</div>
		</div>
	
			<!--Google analytics-->
			<script src="../../inc/google_analytics.js"></script> 
	
		    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
			<!-- Latest compiled and minified JavaScript -->
			<script src="../../inc/bootstrap.min.js"></script>
    </body>
</html>
<!--End if field isnt filled in html-->

<?php }
} else {?>
<!--If form doensnt exist html here-->
<!DOCTYPE html>
<html lang="en">
    <head>
		<?php
		//Configuration
		$title = 'Technocraft - Store';

		include('../../inc/head.inc.php'); 
		?>
    </head>
    <body id="custom-body">
		<?php include '../../inc/header.inc.php'; ?>
		<div class="container">
			<div class=col-md-12 style="padding-top: 50px;">
				<div class="jumbotron main-content">
					<center>
						<h1 style="font-size: 30px;">Please enter your minecraft username to continue</h1><br />
						<form method="post" action="index.php">
							<div class="input-group">
								<input type="text" class="form-control" size="30" name="mc_name" placeholder="Minecraft Username" aria-describedby="basic-addon1" /><br /><br />
							</div>
							<input type="submit" name="submit" value="Continue" class="btn btn-primary" />
						</form>
					</center>
				</div>
			</div>
		</div>
		
			<!--Google analytics-->
			<script src="../../inc/google_analytics.js"></script> 	
		

		    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
			<!-- Latest compiled and minified JavaScript -->
			<script src="../../inc/bootstrap.min.js"></script>
    </body>
</html>
<!--End if form doesnt exist html-->


<?php
}
?>