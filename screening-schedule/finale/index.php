<?php 
	$base_path 		= "/hiddenlives/";	
	$page_class 	= "page-interior";
	$page_title		= "Schedule for September 12";
	$page_id		= 1;
	
	require('../../inc/header.php');
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
			<div class="page-content clearfix">
				<a href="<?php echo $base_path; ?>screening-schedule" class="return-to">&larr; Return to Screening Schedule</a>
				<h3>Finale!</h3>
				<h1><?php echo $page_title; ?></h1>
				
				
				<p>This one-night festival marks the final night of Hidden Lives Illuminated with all 20 original films screened back to back.  Featuring guest speakers introducing each film, musical performances from special guests, and a spirt of celebration for the incarcerated filmmakers’ extraordinary accomplishments.</p>
				
				<br /><br />
				<div class="text-center">
					<h2 class="text-underline">Original Hidden Lives Illuminated Films</h2>
				</div>
				<div class="clearfix"></div><br />
				
				<?php include('../../inc/films/film-paul-m.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../inc/films/film-david-g.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../inc/films/film-aaron-w.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../inc/films/film-lamar-l.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../inc/films/film-qwasheam-r.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../inc/films/film-alexander-s.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../inc/films/film-joseph-k.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../inc/films/film-louis-b.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../inc/films/film-marvin-s.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../inc/films/film-riverside.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../inc/films/film-brian-h.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../inc/films/film-braheem-l.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../inc/films/film-clarence-s.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../inc/films/film-justino-g.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../inc/films/film-robert-t.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../inc/films/film-jerome-l.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../inc/films/film-donyea-p.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../inc/films/film-ezra-b.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../inc/films/film-joseph-s.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../inc/films/film-michael-l.php'); ?>
				<div class="clearfix"></div><br/>
				
			</div>
		</div>
	</div>
</div>

<?php require('../../inc/footer.php'); ?>
