<?php 
	$base_path 		= "/hiddenlives/";	
	$page_class 	= "page-interior";
	$page_title		= "Schedule for Mon. Aug. 19";
	$page_id		= 1;
	
	require('../../../inc/header.php');
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
			<div class="page-content clearfix">
				<a href="<?php echo $base_path; ?>screening-schedule" class="return-to">&larr; Return to Screening Schedule</a>
				<h3>Week 1: The View from Inside</h3>
				<h1><?php echo $page_title; ?></h1>
				
				
				<br /><br />
				<div class="text-center">
					<h2 class="text-underline">Original Hidden Lives Illuminated Films</h2>
				</div>
				<div class="clearfix"></div><br />
				
				<?php include('../../../inc/films/film-paul-m.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../../inc/films/film-david-g.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../../inc/films/film-aaron-w.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../../inc/films/film-lamar-l.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../../inc/films/film-qwasheam-r.php'); ?>
				<div class="clearfix"></div><br/>
				
				
				<br /><br />
				<div class="text-center">
					<h2 class="text-underline">Guest Films</h2>
				</div>
				<div class="clearfix"></div><br />
				
				<?php include('../../../inc/guest-films/guest-film-freedom-time.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../../inc/guest-films/guest-film-the-long-term.php'); ?>
				<div class="clearfix"></div><br/>
				
				
				<br /><br />
				<div class="text-center">
					<h2 class="text-underline">This Evening’s Programs</h2>
				</div>
				<div class="clearfix"></div><br />
				
				<h3>7:00 – 9:45 pm: Write the Filmmakers</h3>
				<p>Share your thoughts with the filmmakers! Postcards and pens will be available every night during <em>Hidden Lives Illuminated</em>. Write your note to the artists and drop it in the mailbox provided. We’ll take care of delivering your message.</p>
				<div class="clearfix"></div><br/>
				
				<h3>7:00 – 9:45 pm: Pennsylvania Prison Society</h3>
				<p>Meet representatives from the Pennsylvania Prison Society and participate in a hands-on activity.</p>
				<p>Since 1787, the Pennsylvania Prison Society has worked to ensure humane prison and jail conditions and advocate for sensible criminal justice policies. The Society is the oldest organization in the country dedicated to sensible and humane criminal justice, and was the founder of Eastern State Penitentiary. Today the Society advocates for systemic policy change, responds to the concerns of prisoners and their families, provides subsidized bus service for Philadelphia families visiting loved ones incarcerated in different parts of the state, and provides assistance to individuals returning home from incarceration. To learn more about the Pennsylvania Prison Society, visit <a href="http://www.PrisonSociety.org" target="_blank">www.PrisonSociety.org</a>.</p>
				<div class="clearfix"></div><br/>
				
				<p class="text-muted">These events (as with all events during <em>Hidden Lives Illuminated</em>) are free and open to the public. No reservations required. Appropriate for all ages.</p>
			</div>
		</div>
	</div>
</div>

<?php require('../../../inc/footer.php'); ?>
