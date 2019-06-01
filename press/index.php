<?php 
	$base_path 		= "/hiddenlives/";	
	$page_class 	= "page-interior";
	$page_title		= "Press";
	$page_id		= 6;
	$inverse		= false;
	
	require('../inc/header.php');
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
			<div class="page-content clearfix">
				<h1><?php echo $page_title; ?></h1>	
							
				<br /><br /><br />
				<div class="text-center">
					<h2 class="text-underline">Press Contact</h2>
				</div>
				<div class="clearfix"></div>
				
				<h3>Nicole Frankhouser <small>Director of Marketing and Communications</small></h3>
				<p>nf@easternstate.org <br/> 215-236-5111 x219</p>
				
				
				<br /><br />
				<div class="text-center">
					<h2 class="text-underline">Press Coverage</h2>
				</div>
				<div class="clearfix"></div>

				
				<br /><br />
				<img src="<?php echo $base_path; ?>assets/press/hidden-lives-press-releases.jpg" alt="Hidden Lives Press Releases" class="float-left max-200" />
				<a href="https://www.dropbox.com/s/lzbka1idh9z1xub/Press_Release-Long_Lead-Hidden_Lives_Illuminated.pdf?dl=0"><h3>Press Releases</h3></a>
				<div class="clearfix"></div><br/>
				
				<img src="<?php echo $base_path; ?>assets/press/hidden-lives-images-and-credits.jpg" alt="Hidden Lives Images and Credits" class="float-left max-200" />
				<a href="https://www.dropbox.com/sh/ncp9m4ph9du43wo/AAC6zyZJ6qNIzRzcZdqjtcjWa?dl=0"><h3>Images and Credits</h3></a>
				<div class="clearfix"></div><br/>
				
				<img src="<?php echo $base_path; ?>assets/press/hidden-lives-videos-and-credits.jpg" alt="Hidden Lives Video and Credits" class="float-left max-200" />
				<a href="https://www.dropbox.com/sh/a5pq3f03x2nt1e5/AADruO2k1zWxodq9PcHsHXkva?dl=0"><h3>Video and Credits</h3></a>
				<div class="clearfix"></div><br/>
				
			</div>
		</div>
	</div>
</div>

<?php require('../inc/footer.php'); ?>