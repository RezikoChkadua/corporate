<!DOCTYPE html>
<html lang="en">
<head>
	<?php get_header(); ?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>corporate 4</title>

     <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 804px;
          width: 100%;
      }
    </style>

</head>
<body>

	<div class="global-wrapper">

		<div class="content">


					<!-- Wrapper for slides -->
				<?php include 'includes/pages/logo.php' ?>
				  <?php include 'includes/pages/slider.php' ?>
			  	 <?php include 'includes/pages/our_services.php' ?>
				  	<?php include 'includes/pages/portfolio.php' ?>
			        <?php include 'includes/pages/ourteam.php' ?>
		         	  <?php include 'includes/pages/contact_us.php' ?>

		</div>
		<?php get_footer(); ?>
 	</div>


	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAliosaXSno8yasHmzzOGS_iyU0ffdboVg&callback=initMap"
    ></script>
</body>

</html>
