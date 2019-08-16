<?php 
	$base_path 		= "/hiddenlives/";	
	$page_class 	= "page-interior";
	$page_title		= "Quasheam R.";
	$page_subtitle  = "Lymph Notes";
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
					<iframe src="https://player.vimeo.com/video/354098202" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<figcaption class="d-none"></figcaption>
				</figure>
				
				<br />
				<div class="text-center">
					<h2 class="text-underline">About the Film</h2>
				</div>				
				<p>The filmmaker chronicles his journey through illness and incarceration.</p>
				
				<br />
				<div class="text-center">
					<h2 class="text-underline">Artist's Statement</h2>
				</div>
				<p>What’s going on? My name is Quasheam R. My film is about a few of my struggles going through my sickness while being incarcerated. I speak about what we lose from this sickness. I really want to bring awareness to these sicknesses in our prisons. I feel for all the children closely connected to the hospitals. And I want to tell all my fellow patients to KEEP FIGHTING! Thanks 4 watching.</p>
			</div>
		</div>
	</div>
</div>

<?php require('../../inc/footer.php'); ?>
