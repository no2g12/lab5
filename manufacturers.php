<?php require('includes/header.php'); ?>

<!-- main content -->
<div id="content" class="row">
	
	<h2>We have cars from many manufacturers around the world!</h2>
		
	<!-- manufacturer list -->
	<div id="manufacturer-list" class="row">
		
		<?php require('includes/db.php'); ?>
		
		<?php 
      $manufacturer = $db->query("SELECT * manufacturer");
		?>
		<!-- ==================================== -->
		<!-- PART 1 MANUFACTURER LIST PLACEHOLDER -->
		<!-- ==================================== -->
		
	</div><!-- /manufacturer list -->
	
</div><!-- /main content -->


<?php require('includes/footer.php'); ?>