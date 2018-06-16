<?php
/*
Template Name: Custom Page
*/
get_header();
?>
		


	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" integrity="sha512-07I2e+7D8p6he1SIM+1twR5TIrhUQn9+I6yjqD53JQjFiMf8EtC93ty0/5vJTZGF8aAocvHYNEDJajGdNx1IsQ==" crossorigin="" />

	<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet-src.js" integrity="sha512-WXoSHqw/t26DszhdMhOXOkI7qCiv5QWXhH9R7CgvgZMHz1ImlkVQ3uNsiQKu5wwbbxtPzFXd1hK4tzno2VqhpA==" crossorigin=""></script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/includes/map/screen.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/includes/map/MarkerCluster.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/includes/map/MarkerCluster.Default.css">

	<body>

		<div id="map" ></div>

	</body>
	<script src="<?php echo get_template_directory_uri(); ?>/includes/map/leaflet.markercluster-src.js"></script>

	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/includes/map/leaf-de.js'></script>

		
<?php get_footer();	?>