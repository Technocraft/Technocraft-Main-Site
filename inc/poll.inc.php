<?php
//Configuration (later done via admin panel)
$db_host = 'localhost';

$db_username = 'root';

$db_password = '';

$db = 'technocraft';



//Must be a TINYINT
$current_poll = 1;


//Define current page
$currentpage = htmlspecialchars("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);

//Get the user's ip
$ip = $_SERVER['REMOTE_ADDR'];


//Connect to database
if (($connection = mysql_connect("$db_host", "$db_username", "$db_password")) === false) {
	die("Could not connect to database");
}

//Select database
if (mysql_select_db("$db") === false) {
	die("Could not select database");
	}

	
//Check if user already voted before
	
//Prepare SQL
$sql = "SELECT * FROM `polls_bans` WHERE `IP` LIKE '$ip' ";

	//Execute query
		$result = mysql_query($sql);
		if ($result === false)
			die("Could not query database");
			
				//Check wether we found a row
				if (mysql_num_rows($result) >= 1) {
				
					//Prepare SQL
					$sql = "SELECT * FROM `polls` WHERE `poll_id` = $current_poll";


						//Execute query
						$result = mysql_query($sql); {
						if ($result === false)
							die("Could not query database");
							}
							
							
						//Check wether we found a row
						if (mysql_num_rows($result) >= 1) {
						
							//fetch row
							$row = mysql_fetch_assoc($result);
							
							//Prepare poll question
							$poll_question = $row['poll_question'];
							
							//Prepare options for poll							
							$poll_option_1 = $row['poll_option_1'];
							$poll_option_2 = $row['poll_option_2'];
							$poll_option_3 = $row['poll_option_3'];
							$poll_option_4 = $row['poll_option_4'];
							$poll_option_5 = $row['poll_option_5'];
							
							//Prepare results for results
							$poll_option_1_votes = $row['poll_option_1_votes'];
							$poll_option_2_votes = $row['poll_option_2_votes'];
							$poll_option_3_votes = $row['poll_option_3_votes'];
							$poll_option_4_votes = $row['poll_option_4_votes'];
							$poll_option_5_votes = $row['poll_option_5_votes'];
							
							echo "<strong>You already voted, showing results instead</strong><br /><br />";
							echo "<p><strong>$poll_question</strong></p>";
							if ($poll_option_1) {echo "<p><strong>$poll_option_1_votes</strong> votes - <em>$poll_option_1</em></p>";}
							if ($poll_option_2) {echo "<p><strong>$poll_option_2_votes</strong> votes - <em>$poll_option_2</em></p>";}
							if ($poll_option_3) {echo "<p><strong>$poll_option_3_votes</strong> votes - <em>$poll_option_3</em></p>";}
							if ($poll_option_4) {echo "<p><strong>$poll_option_4_votes</strong> votes - <em>$poll_option_4</em></p>";}
							if ($poll_option_5) {echo "<p><strong>$poll_option_5_votes</strong> votes - <em>$poll_option_5</em></p>";}
							}
							
							} else {
	
	
//Check if user just submitted a vote
if (isset($_POST['poll_options']) && $_POST['poll_options']) {

$vote = mysql_real_escape_string($_POST['poll_options']);

//Prepare SQL
$sql = "UPDATE polls SET $vote = $vote +1 WHERE poll_id = '$current_poll'";

	//Execute query
	$result = mysql_query($sql);
	if ($result === false) {
		die("Could not query database");
	}
	
	//Prepare SQL
	$sql = "INSERT INTO `$db`.`polls_bans` (`id`, `ip`) VALUES (NULL, '$ip');";
	
		//Execute query
		$result = mysql_query($sql);
		if ($result === false) {
			die("Could not query database");
		}

	
//Thank user and show results after voting
					
//Prepare SQL
$sql = "SELECT * FROM `polls` WHERE `poll_id` = $current_poll";


	//Execute query
	$result = mysql_query($sql); {
		if ($result === false)
			die("Could not query database");
	}
							
							
	//Check wether we found a row
	if (mysql_num_rows($result) >= 1) {
					
	//fetch row
	$row = mysql_fetch_assoc($result);
						
	//Prepare options for poll
	$poll_option_1 = $row['poll_option_1'];
	$poll_option_2 = $row['poll_option_2'];
	$poll_option_3 = $row['poll_option_3'];
	$poll_option_4 = $row['poll_option_4'];
	$poll_option_5 = $row['poll_option_5'];
					
	//Prepare results for results
	$poll_question = $row['poll_question'];
	
	$poll_option_1_votes = $row['poll_option_1_votes'];
	$poll_option_2_votes = $row['poll_option_2_votes'];
	$poll_option_3_votes = $row['poll_option_3_votes'];
	$poll_option_4_votes = $row['poll_option_4_votes'];
	$poll_option_5_votes = $row['poll_option_5_votes'];
	
	//Echo results
	echo "<strong>Thanks for voting, showing results</strong><br /><br />";
	echo "<p><strong>$poll_question</strong></p>";
	if ($poll_option_1) {echo "<p><strong>$poll_option_1_votes</strong> votes - <em>$poll_option_1</em></p>";}
	if ($poll_option_2) {echo "<p><strong>$poll_option_2_votes</strong> votes - <em>$poll_option_2</em></p>";}
	if ($poll_option_3) {echo "<p><strong>$poll_option_3_votes</strong> votes - <em>$poll_option_3</em></p>";}
	if ($poll_option_4) {echo "<p><strong>$poll_option_4_votes</strong> votes - <em>$poll_option_4</em></p>";}
	if ($poll_option_5) {echo "<p><strong>$poll_option_5_votes</strong> votes - <em>$poll_option_5</em></p>";}
}
	
	
} else {


//If user didn't just submit a vote nor already voted before, show user voting options
	
//Prepare SQL
$sql = "SELECT * FROM `polls` WHERE `poll_id` = $current_poll";


	//Execute query
	$result = mysql_query($sql); {
	if ($result === false)
		die("Could not query database");
		}
		
		
	//Check wether we found a row
	if (mysql_num_rows($result) >= 1) {
	
		//fetch row
		$row = mysql_fetch_assoc($result);
		
		//Prepare vars for form
		$poll_question = $row['poll_question'];
		
		$poll_option_1 = $row['poll_option_1'];
		$poll_option_2 = $row['poll_option_2'];
		$poll_option_3 = $row['poll_option_3'];
		$poll_option_4 = $row['poll_option_4'];
		$poll_option_5 = $row['poll_option_5'];
		

?>	
		<!--Show user vote options-->
			<p><strong><?php echo "$poll_question"; ?></strong></p>
		<form action="<?php echo $currentpage; ?>" method="POST">
			<p><?php if ($poll_option_1) {?><input type="radio" name="poll_options" value="poll_option_1_votes" /> <?php echo $poll_option_1; ?></p><?php } ?>
			<p><?php if ($poll_option_2) {?><input type="radio" name="poll_options" value="poll_option_2_votes" /> <?php echo $poll_option_2; ?></p><?php } ?>
			<p><?php if ($poll_option_3) {?><input type="radio" name="poll_options" value="poll_option_3_votes" /> <?php echo $poll_option_3; ?></p><?php } ?>
			<p><?php if ($poll_option_4) {?><input type="radio" name="poll_options" value="poll_option_4_votes" /> <?php echo $poll_option_4; ?></p><?php } ?>
			<p><?php if ($poll_option_5) {?><input type="radio" name="poll_options" value="poll_option_5_votes" /> <?php echo $poll_option_5; ?></p><?php } ?>
			
			<br /><input type="submit" value="Vote!" />
		
		</form>
<?php
		
		
		
		} else {
			echo 'Error - No rows were found.';
				}
		}
		}
?>