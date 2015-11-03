	<!doctype html>
	<html lang=eng>
	<head>
		<!--SITE basics -->
		<title> Unit conversion </title>
		<meta charset="utf-8">
		
		
		
		<!--Bootstrap -->

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	<head>

<body >
	<div class="container-fluid" >
			<h1 <!--style="background-image:url('road1.jpg')"--> Length conversion</h1>


	<!--Top part of the length conversion -->	
	<form action="php/length.php" method="get">
			<div class="row  " id ="top.length"> 
				<div class="col-md-2 " style="background-color: white"> <h4>Millimeters</h4> 
					<div class="form-group"> 				
						<input type="number" name="mm"   > 
					</div>		
				</div>
				<div class="col-md-2" style="background-color: white"> <h4>Centimeters</h4>	
				<div class="form-group"> 				
						<input type="number" name="cm"  > 
					</div>		
					</div>
				<div class="col-md-2" style="background-color: white"> <h4>Miles</h4>	
					<div class="form-group"> 				
						<input type="number" name="mi" > 
					</div>		
			 	</div>
				<div class="col-md-2" style="background-color: white"> <h4>Inches</h4> 		
				<div class="form-group"> 				
						<input type="number" name="inches"  id ="length.inch"> 
					</div>		
					</div>
			</div>
			

	<!--Bottom part of the length conversion -->

			<div class="row" id ="bot.length">
				<div class="col-md-2" style="background-color:white"> <h4>Meter</h4>
					<div class="form-group">
						<input type="number"  name="meter"> 
					</div>
				</div>
				<div class="col-md-2" style="background-color:white"> <h4>Kilometer</h4>
					<div class="form-group">
						<input type="number"  name ="km"> 
					</div>
				</div>
				<div class="col-md-2" style="background-color:white"> <h4>Feet</h4>
					<div class="form-group">
						<input type="number" name ="ft"> 
					</div>
				</div>
				<div class="col-md-2" style="background-color:white"> <h4>Yard</h4>
					<div class="form-group">
						<input type="number"  name ="yd">
					 </div>
				</div>
			</div>
<div  class="row col-md-8" style="background-color : 	">
		<button type="submit" class=" btn btn-default btn pull-right" > Calculate </button>
	</div>
	</form>

<!--Empty row --> 
<br>
<br>


	</div>
</body>
 </html>