<?php 
	$base_path 		= "/hiddenlives/";	
	$page_class 	= "page-interior";
	$page_title		= "Sample Film Title";
	$page_id		= 1;
	
	require('../../inc/header.php');
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
			<div class="page-content clearfix">
				<a href="<?php echo $base_path; ?>screening-schedule" class="return-to">&larr; Return to Screening Schedule</a>
				<h1><?php echo $page_title; ?></h1>
				
				<figure>
					<iframe src="https://player.vimeo.com/video/176338495" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<figcaption>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed leo augue.</figcaption>
				</figure>
				
				<h2>About the Film</h2>					
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam felis ante, iaculis vel fermentum sed, rhoncus vulputate mauris. Fusce nunc lorem, dapibus ac nisl in, mollis bibendum odio. Morbi sit amet nunc ornare leo laoreet finibus sit amet in erat. Etiam id mi sit amet lectus tincidunt accumsan. Nunc ornare posuere diam sed fermentum. Pellentesque in metus purus. Phasellus fringilla ante urna, sit amet congue lorem viverra quis. Fusce suscipit, lacus suscipit varius feugiat, ex metus posuere velit, at venenatis est ante sed elit.</p>
				<br />
				
				<h2>About the Artists</h2>
				<h3>Artist Name</h3>			
				<p>Integer vitae tristique quam. Quisque vehicula nunc eu auctor dapibus. Fusce faucibus suscipit dolor. Duis non volutpat enim. Morbi vulputate diam nisl, id sagittis nibh tristique sed. Morbi id viverra felis. Aenean purus metus, auctor at suscipit non, mollis sit amet nunc. In id pulvinar dui. Pellentesque commodo fringilla felis efficitur ornare. Phasellus nec sem lorem. Proin non mauris posuere, imperdiet leo vel, tempus nisi. Etiam tristique, urna vitae convallis varius, nisl dolor iaculis odio, a volutpat neque nisl vitae elit. Mauris id dui lobortis, sodales turpis quis, euismod purus. Sed blandit, est eu accumsan tempus, eros felis egestas lacus, sit amet commodo nisi felis nec leo. Suspendisse placerat dignissim tempor. Vestibulum sed varius tellus.</p>
				<br />
				
				<h3>Artist Name</h3>			
				<p>Integer vitae tristique quam. Quisque vehicula nunc eu auctor dapibus. Fusce faucibus suscipit dolor. Duis non volutpat enim. Morbi vulputate diam nisl, id sagittis nibh tristique sed. Morbi id viverra felis. Aenean purus metus, auctor at suscipit non, mollis sit amet nunc. In id pulvinar dui. Pellentesque commodo fringilla felis efficitur ornare. Phasellus nec sem lorem. Proin non mauris posuere, imperdiet leo vel, tempus nisi. Etiam tristique, urna vitae convallis varius, nisl dolor iaculis odio, a volutpat neque nisl vitae elit. Mauris id dui lobortis, sodales turpis quis, euismod purus. Sed blandit, est eu accumsan tempus, eros felis egestas lacus, sit amet commodo nisi felis nec leo. Suspendisse placerat dignissim tempor. Vestibulum sed varius tellus.</p>
			</div>
		</div>
	</div>
</div>

<?php require('../../inc/footer.php'); ?>
