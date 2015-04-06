<?php
//Quick and dirty configuration, later in a global config
$root_dir = 'http://localhost/projects/Technocraft/'


?>


		<!--Navbar start-->
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
			  <a class="navbar-brand" href="<?php echo $root_dir . 'index.php'; ?>">Technocraft</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				
				<?php if (isset($current_nav) && $current_nav == 'home') { ?>
				<li class="active"><a href="<?php echo $root_dir . 'index.php'; ?>">Home <span class="sr-only">(current)</span></a></li>
				<?php } else {?>
				<li><a href="<?php echo $root_dir . 'index.php'; ?>">Home</a></li>
				<?php } ?>
				
				
				<?php if (isset($current_nav) && $current_nav == 'forums') { ?>
				<li class="active"><a target="_blank" href="http://forum.technocraft-mc.nl/">Forums <span class="sr-only">(current)</span></a></li>
				<?php } else { ?>
				<li><a href="http://forum.technocraft-mc.nl" target="_blank">Forums</a></li>
				<?php } ?>
				
				
				<?php if (isset($current_nav) && $current_nav == 'support') { ?>
				<li class="active"><a href="<?php echo $root_dir . 'support.php'; ?>">Home <span class="sr-only">(current)</span></a></li>
				<?php } else { ?>
				<li><a href="<?php echo $root_dir . 'support.php'; ?>">Support</a></li>
				<?php } ?>
				
				
				<li><a href="./store/">Store</a></li>
				
				
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Vote <span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
					<li><a href="http://serverpact.nl/vote-20764" target="_blank">Vote 1</a></li>
					<li><a href="http://www.minecraft-index.com/30793-technocraft/vote" target="_blank">Vote 2</a></li>
					<li><a href="http://minecraft-mp.com/server/77257/vote/" target="_blank">Vote 3</a></li>
					<li><a href="http://topg.org/Minecraft/in-404320" target="_blank">Vote 4</a></li>
					<li class="disabled"><a href="#">Vote 5</a></li>
				  </ul>
				</li>
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
				<li><p class="navbar-text">Join @ play.technocraft-mc.nl</p></li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		<!--Navbar end-->