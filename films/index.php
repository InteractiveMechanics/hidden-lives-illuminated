<?php 
	$base_path 		= "/hiddenlives/";	
	$page_class 	= "page-interior";
	$page_title		= "Films";
	$page_id		= 5;
	$inverse		= false;
	
	require('../inc/header.php');
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
			<div class="page-content clearfix">
				<h1><?php echo $page_title; ?></h1>
				
				<br /><br />
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
			</div>
		</div>
	</div>
</div>

<?php require('../inc/footer.php'); ?>
