<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>myShop</title>
    <link rel="stylesheet" type="text/css" href="lib/style.css">
   
</head>

<body>
	<!--Header section-->
	<div class="header">
		<a href="">myShop</a>
	</div>

	<!--content section-->
	<div class="container"></div>

	<script src="jquery-3.4.0.min.js"></script>
	<script>
		$(document).ready(function(){
			setInterval(function() {
				$('.container').load('data.php');
			}, 3000);
		});
	</script>
</body>
</html>