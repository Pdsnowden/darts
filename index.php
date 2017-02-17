<?php

/* 	File Name: index.html 
	Date: 02-17-2017
	Programmer: Paul Snowden

	God help if any one but myself ever reads this code as it will be terribly written and of the lowest quality. 

The point of this program, besides practice, will be to have a program where someone could "play" against a professional dart player.

Order
1) Who do you want to play against
2) 501 or 301?
3) Enter score
4) Process computer score
5) repeat 3/4 until you get close enough to double out
6) when computer gets close enough you run an algorithm to determine his chance of sucess and if not, what his score might have been.
7) Do you want to play again

*/

include "includes/functions.php";

?>

<!DOCTYPE html>



<html>

<head>

<meta charset="UTF-8">

<title>Dart Scorer</title>
	
<link href="styles/style.css" rel="stylesheet" type="text/css">

</head>

<body>
	
	<h1><?php echo $score ?> </h1>
	
	<h2> What did you score? </h2>
	
	<input type="number" name="score" id="score">

</body>

</html> 