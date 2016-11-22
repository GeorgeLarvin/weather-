<?php

	if ($_GET['city']) {
	
		$forecastPage = file_get_contents("http://www.weather-forecast.com/locations/London/forecasts/latest");
		
		echo $forecastPage;
	
	}
	
	
	




?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

	<link rel="stylesheet" href="style2.css"/>
	
	<!--google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet"> 
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
  </head>
  <body>
  
	
	<h1 class="center container">What's the weather</h1>
	<p class="center1 container">Enter a city name!</p>
	
<div class="container center2">
<form>
		<div class="form-group">
			<label for="city">City</label>
			<input type="text" name="city" class="form-control" id="location" aria-describedby="emailHelp" placeholder="Enter city Eg.London, tokyo">
		</div>
  
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>	
	
	
	
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
  </body>
</html>