<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>header</title>
</head>
<body>
	<br>
	<form name="filter" method="get">Filter Pokemon by type: <br>  
		<br>
		<input type="submit" name="filter" value="Grass" />
		<input type="submit" name="filter" value="Water" />
		<input type="submit" name="filter" value="Fire" />
	</form>
		<br>
	<!-- Users can chose to filter results based on Pokemon Type. 
	These buttons were in the header because I wanted the content.php to be JSON only.-->
	
	



</body>
</html>