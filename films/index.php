<?php 
	$base_path 		= "/hiddenlives/";	
	$page_class 	= "page-interior";
	$page_title		= "The Films";
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
				<?php include('../inc/films/film-riverside.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../inc/films/film-ezra-b.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../inc/films/film-louis-b.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../inc/films/film-david-g.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../inc/films/film-justino-g.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../inc/films/film-brian-h.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../inc/films/film-joseph-k.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../inc/films/film-braheem-l.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../inc/films/film-jerome-l.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../inc/films/film-lamar-l.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../inc/films/film-michael-l.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../inc/films/film-paul-m.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../inc/films/film-donyea-p.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../inc/films/film-qwasheam-r.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../inc/films/film-alexander-s.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../inc/films/film-clarence-s.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../inc/films/film-joseph-s.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../inc/films/film-marvin-s.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../inc/films/film-robert-t.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../inc/films/film-aaron-w.php'); ?>
				<div class="clearfix"></div><br/>
				
			</div>
		</div>
	</div>
</div>

<?php require('../inc/footer.php'); ?>
