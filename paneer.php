<html>
	<head>
		<title>Menu Page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Courgette&family=Creepster&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<style>
			.a
		{
		 font-size:15px;
		 color:black;
		}
			.b
		{
		 font-size:25px;
		 color:maroon;
		}
		.image_zoom:hover img
		{
		transform:scale(1.1);
		}
		</style>
	</head>
	<body>
		<!---div for header--->
		<?php include'header.php' ?>
		<!---first row for pizza--->
		<br><br>
		<div class="container">
			<div class="row">
				<div class="col-sm-4 image_zoom">
					<img  src="https://wfg32p.s3.amazonaws.com/media/dishes/punjabi_matar_paneer_1665.jpg" height="250px" width="100%"/><br>
					<h4 style="text-align:center;font-family:serif;">Matar Paneer</h4>
					<hr>
					<font class="a">Half :-</font><font class="b"> &#8377;80</font><br/>
					<font class="a">Full :-</font><font class="b"> &#8377;150</font><br/>
					
					</div>
				<div class="col-sm-4 image_zoom">
					<img src="https://thehimalayantreasure.pl/wp-content/uploads/2018/09/Paneer-Butter-Masala-1184x800.jpg" height="250px" width="100%"/>
					<h4 style="text-align:center;font-family:serif;">Paneer Masala</h4>
					<hr>
					<font class="a">Half :-</font><font class="b"> &#8377;100</font><br/>
					<font class="a">Full :-</font><font class="b"> &#8377;185</font><br/>
					
					</div>
				<div class="col-sm-4 image_zoom">
					<img src="https://wallpapercave.com/wp/wp11413528.jpg" height="250px" width="100%"/>
					<h4 style="text-align:center;font-family:serif;">Paneer Chilli</h4>
					<hr>
					<font class="a">Half :-</font><font class="b"> &#8377;70(4 Pcs)</font><br/>
					<font class="a">Full :-</font><font class="b"> &#8377;120(8 Pcs)</font><br/>
					</div>
				</div>
				<br><br>
				<!----second div for pizza-->
				<div class="row">
				<div class="col-sm-4 image_zoom">
					<img src="https://www.lekhafoods.com/media/202157/matar-paneer.jpg" height="250px" width="100%"/>
					<h4 style="text-align:center;font-family:serif;">Handi Paneer</h4>
					<hr>
					<font class="a">Half :-</font><font class="b"> &#8377;200(500gm)</font><br/>
					<font class="a">Full :-</font><font class="b"> &#8377;380(1 kg)</font><br/>
					
					</div>
				<div class="col-sm-4 image_zoom">
					<img src="https://cdn.shopify.com/s/files/1/1836/6085/products/paneer-do-pyaza-featured_1024x1024.jpg?v=1492437540" height="250px" width="100%"/>
					<h4 style="text-align:center;font-family:serif;">Paneer Do Pyaza</h4>
					<hr>
					<font class="a">Half :-</font><font class="b"> &#8377;110</font><br/>
					<font class="a">Full :-</font><font class="b"> &#8377;200</font><br/>
					
					</div>
				<div class="col-sm-4 image_zoom">
					<img src="https://i.pinimg.com/originals/d9/9d/2b/d99d2b131f287a15361f561ede8f0b6e.jpg" height="250px" width="100%"/>
					<h4 style="text-align:center;font-family:serif;">Paneer Pakoda</h4>
					<hr>
					<font class="a">Half :-</font><font class="b"> &#8377;80</font><br/>
					<font class="a">Full :-</font><font class="b"> &#8377;150</font><br/>
					</div>
				</div>
			</div>
			<!---div of footer-->
			<?php include 'footer.php'?>
	</body>
</html>