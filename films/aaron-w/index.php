<?php 
	$base_path 		= "/hiddenlives/";	
	$page_class 	= "page-interior";
	$page_title		= "Aaron W.";
	$page_subtitle  = "Where Did It Go?";
	$page_id		= 5;
	
	require('../../inc/header.php');
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
			<div class="page-content clearfix">
				<a href="<?php echo $base_path; ?>films" class="return-to">&larr; Return to All Films</a>
				<h1><?php echo $page_title; ?></h1>
				<h2><?php echo $page_subtitle; ?></h2>
				
				<br />
				<figure>
					<iframe src="https://player.vimeo.com/video/354087847" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<figcaption class="d-none"></figcaption>
				</figure>
				
				<br />
				<div class="text-center">
					<h2 class="text-underline">About the Film</h2>
				</div>				
				<p>There are many twists and turns on the highway of life, but time waits for no man. “Don’t miss your exit.”</p>
			</div>
		</div>
	</div>
</div>

<?php require('../../inc/footer.php'); ?>
