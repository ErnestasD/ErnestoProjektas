<?php

$location = get_field('map', 9);

if( !empty($location) ):
?>
<div class="acf-map">
	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
	<div class="open-map">
		<p><i class="fas fa-map-marker-alt"></i></p>
		<p>OPEN MAP</p>
		<div class="line"></div>
	</div>
</div>

<?php endif; ?>
</main>
