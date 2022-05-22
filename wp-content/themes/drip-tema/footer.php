<footer class="footergrp3">
    <div style="font-size: 12px;" class="footerwidget">
    <?php dynamic_sidebar('footerwidget'); ?>
    </div>
    <div class="footermenu">
    <?php    
		$footerMenuArray = [
			'theme_location' => 'footermenu'
			];
							
		wp_nav_menu($footerMenuArray);
		?>
    </div>

    
</footer>
<div class="finishingFooter">
<p style="font-size: 12px; padding-right: 100px; padding-left: 100px;">LINNS SPORT CLUB</p>

<p style="font-size: 7px; padding: 10px;">
 -------------------------------------------------------------- LINNS SPORT CLUB AB © --------------------------------------------------------------</p>
 <p style="font-size: 7px;"> Org-number: 009754280470987</p>
</div>

<?php 
    wp_footer(); 
?>
</body>
</html>