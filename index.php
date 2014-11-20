<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Muri Plugins</title>

   
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/plugins/circle.min.js"></script>
	<link href="js/plugins/circle.min.css" rel="stylesheet">
  </head>
  <body>
	<script>
		$(document).ready(function($){
			$('#menu').murimenu({
				position:'left-bottom',
				button:[
						['facebook','https://www.facebook.com/muribudiman'], //facebook class 
						['twitter','https://twitter.com/Muribudiman'],
						['googleplus','https://plus.google.com/u/0/+muribudimanmuribudiman/about'],
						['youtube','https://www.youtube.com/'],
						['youtube','https://www.youtube.com/'],
						['googleplus','https://plus.google.com/u/0/+muribudimanmuribudiman/about'],
					],
			});
		});
	</script>
	
	<div id="menu"></div>
  </body>
</html>