<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LINNS SPORT CLUB</title>
	<?php wp_head(); ?>
</head>
<body <?php echo body_class(); ?>>


<header>
	<div class="headerImage">
		<a href="">
		<img  src="<?= get_template_directory_uri() . '/img/logga.png' ?>">
		</a>
	</div>
	
	<b>
	<div class="headerMenu">
		<?php    
		$mainMenuArray = [
			'theme_location' => 'mainmenu'
			];
							
		wp_nav_menu($mainMenuArray);
		?>
		<div class="searchBar">
			<?php dynamic_sidebar('searching'); ?>
		</div>
	</div>
	</b>

	


</header>

