<?php

include_once "player.php";
include_once "cards.php";

//create the singleton object cards
//dont know how to make singleton so basically dont call this constructor again :)

$cards_obj = new cards();

// init function for cards_obj creates arrays and place holder for other initializations

$cards_obj->init();
//create four players

$top_player = new player();
$left_player = new player();
$right_player = new player();
$bottom_player = new player();

//now get 13 random cards and assign to bottom player a.k.a our user

$bottom_player->addCards($cards_obj);
$top_player->addCards($cards_obj);
$left_player->addCards($cards_obj);
$right_player->addCards($cards_obj);

//initially mark/ bottom player is the dealer so set that flag on the player object
//this is used to display who the user is 

$bottom_player->isDealer = true;
$bottom_player->displayCards = true;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Spades Game</title>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <!--Linking the style sheet-->
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
<!--
Container with complete layout.
The layout of the web page is divided into 3 rows and 3 columns. 
-->
<div class="container">

<!--Row1-->
<div class="row" style="height:35%; display: block;">
<!--Row1-column 1 -->
<div class="col-sm-4 col-md-4 col-lg-4">	
</div>
<!--Row1-column2-->
<!--Player in the north-->
<div class="col-sm-4 col-md-4 col-lg-4" style="background-color:red">
	<h3>Sam</h3>
	<div>
			<?php echo'<p style="font-size:20px">'.$top_player->noOfTricksWon.'/'.$top_player->noOfTricksBid.'</p>';?>
	</div>
	<img src="images/player1.jpg" style="width:150px;height:150px">
</div>
<!--Row1 Column3-->
<div class="col-sm-4 col-md-4 col-lg-4">
</div>
</div>

<!--Row2-->
<div class="row" style="height:35%; display: block;">
<!--Row2-column 1 -->
<!--Player in the west-->
<div class="col-sm-4 col-md-4 col-lg-4" style="background-color:red">
<h3>Tim</h3>
<div>
			<?php echo'<p style="font-size:20px">'.$left_player->noOfTricksWon.'/'.$left_player->noOfTricksBid.'</p>';?>
		</div>
<img src="images/player1.jpg" style="width:150px;height:150px">
</div>
<!--Row2-column2-->
<div class="col-sm-4 col-md-4 col-lg-4">	
</div>
<!--Row2 Column3-->
<!--Player in the East-->
<div class="col-sm-4 col-md-4 col-lg-4" style="background-color:red">
<h3>Garry</h3>	
<div>
			<?php echo'<p style="font-size:20px">'.$right_player->noOfTricksWon.'/'.$right_player->noOfTricksBid.'</p>';?>
		</div>
<img src="images/player1.jpg" style="width:150px;height:150px">
</div>
</div>

<!--Row3-->
<div class="row" style="height:30%; display: block;">
<!--Row3-column 1 -->
<div class="col-sm-4 col-md-4 col-lg-4">	
</div>
<!--Row3-column2-->
<!--Player in the south/Human Player-->
<div class="col-sm-4 col-md-4 col-lg-4" style="background-color:red">
	<h3>Mark</h3>
	<div>
			<div style="float:left; width:100px">
			<?php echo'<p style="font-size:20px">'.$bottom_player->noOfTricksWon.'/'.$bottom_player->noOfTricksBid.'</p>';?>
			</div>
			<?php 
				if ($bottom_player->isDealer) {
				echo'<div style="">
						<img class="dealer" src="images/dealer.png"></img>
					</div>';
				}
			?>
		</div>
	<img src="images/human.jpg" style="width:150px;height:150px">
</div>
<!--Row3-column3-->
<div class="col-sm-4 col-md-4 col-lg-4">	
</div>
</div>

<!--Row4-->
<div class="row" style="height:10%; display: block;">
<!--Row4-column 1 -->
<div class="col-sm-0.5 col-md-0.5 col-lg-0.5">	
</div>
<!--Row4-column2-->
<!--Cards of Player-->
<div class="col-sm-11 col-md-11 col-lg-11" >
	<?php
		//now lets display the cards alloted to the user
		//first display spades
		foreach ($bottom_player->spades as $temp) {
			echo '<img src="images/dood_deck/'.$temp.'.gif" style="width:75px;height:75px">';
		}
		//Now lets display clubs
		foreach ($bottom_player->clubs as $temp) {
			echo '<img src="images/dood_deck/'.$temp.'.gif" style="width:75px;height:75px">';
		}
		//now hearts
		foreach ($bottom_player->hearts as $temp) {
			echo '<img src="images/dood_deck/'.$temp.'.gif" style="width:75px;height:75px">';
		}
		// and finally diamonds
		foreach ($bottom_player->diamonds as $temp) {
			echo '<img src="images/dood_deck/'.$temp.'.gif" style="width:75px;height:75px">';
		}
	?>
</div>
<!--Row4-column3-->
<div class="col-sm-0.5 col-md-0.5 col-lg-0.5">	
</div>
</div>


</div>
</body>
</html>