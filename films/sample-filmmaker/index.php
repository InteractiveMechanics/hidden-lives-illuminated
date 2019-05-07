<?php 
	$base_path 		= "/hiddenlives/";	
	$page_class 	= "page-interior";
	$page_title		= "Filmmaker Name";
	$page_id		= 5;
	
	require('../../inc/header.php');
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
			<div class="page-content clearfix">
				<a href="<?php echo $base_path; ?>films" class="return-to">&larr; Return to All Films</a>
				<h1><?php echo $page_title; ?></h1>
				
				<br /><br />
				<figure>
					<iframe src="https://player.vimeo.com/video/176338495" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<figcaption>Original Film: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed leo augue.</figcaption>
				</figure>
				
				<br />
				<figure>
					<iframe src="https://player.vimeo.com/video/176338495" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<figcaption>Projected Film: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed leo augue.</figcaption>
				</figure>
				
				<br />
				<div class="text-center">
					<h2 class="text-underline">About the Film</h2>
				</div>				
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam felis ante, iaculis vel fermentum sed, rhoncus vulputate mauris. Fusce nunc lorem, dapibus ac nisl in, mollis bibendum odio. Morbi sit amet nunc ornare leo laoreet finibus sit amet in erat. Etiam id mi sit amet lectus tincidunt accumsan. Nunc ornare posuere diam sed fermentum. Pellentesque in metus purus. Phasellus fringilla ante urna, sit amet congue lorem viverra quis. Fusce suscipit, lacus suscipit varius feugiat, ex metus posuere velit, at venenatis est ante sed elit.</p>
			</div>
		</div>
	</div>
</div>

<?php require('../../inc/footer.php'); ?>
