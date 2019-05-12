<?php 
	$base_path 		= "/hiddenlives/";	
	$page_class 	= "page-interior";
	$page_title		= "Press";
	$page_id		= 5;
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

				
				<img src="<?php echo $base_path; ?>assets/press/hidden-lives-press-article.jpg" alt="A Former Prison Breaks From the System That Built It - The New York Times" class="float-left max-200" />
				<a href="https://www.nytimes.com/2019/03/12/arts/eastern-state-penitentiary-museum-philadelphia.html" target="_blank">
					<h3>A Former Prison Breaks From the System That Built It</h3>
				</a>
				<h3><small>The New York Times</small></h3>
				<p>March 12, 2019</p>
				<div class="clearfix"></div><br/>
				
				<img src="<?php echo $base_path; ?>assets/press/hidden-lives-press-article-02.jpg" alt="Hidden Lives Illuminated - Comcast Newsmakers" class="float-left max-200" />
				<a href="https://www.dropbox.com/s/o44yjoysk0wm1cm/3.29.19%20Comcast%20Newsmakers.mp4?dl=0" target="_blank">
					<h3>Hidden Lives Illuminated</h3>
				</a>
				<h3><small>Comcast Newsmakers</small></h3>
				<p>April 10, 2019</p>
				<div class="clearfix"></div><br/>
				
			</div>
		</div>
	</div>
</div>

<?php require('../inc/footer.php'); ?>
