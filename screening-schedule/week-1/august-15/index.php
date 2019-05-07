<?php 
	$base_path 		= "/hiddenlives/";	
	$page_class 	= "page-interior";
	$page_title		= "Schedule for August 15";
	$page_id		= 1;
	
	require('../../../inc/header.php');
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
			<div class="page-content clearfix">
				<a href="<?php echo $base_path; ?>screening-schedule" class="return-to">&larr; Return to Screening Schedule</a>
				<h1><?php echo $page_title; ?></h1>
				
				<br /><br />
				<div class="text-center">
					<h2 class="text-underline">The Films</h2>
				</div>
				<div class="clearfix"></div>
				
				<img src="<?php echo $base_path; ?>assets/team/hidden-lives-pennsylvania-state-correctional.jpg" alt="Sample Filmmaker" class="float-left max-200" />
				<a href="#"><h3>Sample Filmmaker</h3></a>
				<p>Film Title</p>
				<div class="clearfix"></div><br/>
				
				<img src="<?php echo $base_path; ?>assets/team/hidden-lives-pennsylvania-state-correctional.jpg" alt="Sample Filmmaker" class="float-left max-200" />
				<a href="#"><h3>Sample Filmmaker</h3></a>
				<p>Film Title</p>
				<div class="clearfix"></div><br/>
				
				<img src="<?php echo $base_path; ?>assets/team/hidden-lives-pennsylvania-state-correctional.jpg" alt="Sample Filmmaker" class="float-left max-200" />
				<a href="#"><h3>Sample Filmmaker</h3></a>
				<p>Film Title</p>
				<div class="clearfix"></div><br/>
				
				
				<br /><br />
				<div class="text-center">
					<h2 class="text-underline">Nightly Speakers</h2>
				</div>
				<div class="clearfix"></div>
				
				<h3>7:00PM		<div class="text-indent">Sample Speaker Name</div></h3>
				<h3>8:00PM		<div class="text-indent">Sample Speaker Name</div></h3>
				<h3>9:00PM		<div class="text-indent">Sample Speaker Name</div></h3>
				<div class="clearfix"></div><br/>
			</div>
		</div>
	</div>
</div>

<?php require('../../../inc/footer.php'); ?>
