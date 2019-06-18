<?php 
	$base_path 		= "/hiddenlives/";	
	$page_class 	= "page-interior";
	$page_title		= "Documentary Preview";
	$page_id		= 4;
	$inverse		= false;
	
	require('../inc/header.php');
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
			<div class="page-content clearfix">
				<h1><?php echo $page_title; ?></h1>
				
				<p>Media in Neighborhoods Group (MING) are currently producing a documentary film about <em>Hidden Lives Illuminated</em>. 
					Find the completed documentary here in December, 2019.</p>
					
				<br />
				<iframe src="https://player.vimeo.com/video/323788223" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				
				
				<br /><br />
				<div class="text-center">
					<h2 class="text-underline">About This Clip</h2>
				</div>
				<p>In the early weeks of <em>Hidden Lives Illuminated</em> filmmaking, guest teaching artist Lowell Boston leads an animation class at the 
					Pennsylvania State Correctional Institution at Chester. The students are creating zoetrope cylinder animation.</p>
			</div>
		</div>
	</div>
</div>

<?php require('../inc/footer.php'); ?>
