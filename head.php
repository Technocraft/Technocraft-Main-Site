		<?php
		//Turn of deprecated and strict warnings
		error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		
		//Include global configuration
		include '/inc/config.inc.php';
		?>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<title><?php echo "$title"; ?></title>
		
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $root_dir; ?>/inc/favicon.ico" />
		
		<link rel="stylesheet" href="<?php echo $root_dir; ?>/inc/helpers.css" />
		
		<!--Font-->
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css' />
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />

		<!--Optional theme trick-->
		<?php session_start(); ?>
		
		<?php if (isset($_SESSION['theme']) && $_SESSION['theme'] == 'night') { ?>
		
		
		<link rel="stylesheet" href="https://bootswatch.com/darkly/bootstrap.min.css">
		
		
		<?php } elseif (isset($_SESSION['theme']) && $_SESSION['theme'] == 'day') { ?>
		
		
		<link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
		
		
		<?php } elseif (isset($_SESSION['theme']) && $_SESSION['theme'] == 'metro') { ?>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootswatch/3.3.4/cosmo/bootstrap.min.css" />
		<?php } else { ?>
		
		
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootswatch/3.3.4/cosmo/bootstrap.min.css" />
		
		
		<?php } ?>