<?php 
	$base_path 		= "/hiddenlives/";	
	$page_class 	= "page-interior";
	$page_title		= "Schedule for August 23";
	$page_id		= 1;
	
	require('../../../inc/header.php');
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
			<div class="page-content clearfix">
				<a href="<?php echo $base_path; ?>screening-schedule" class="return-to">&larr; Return to Screening Schedule</a>
				<h3>Week 2: Criminal Justice Today</h3>
				<h1><?php echo $page_title; ?></h1>
				
				
				<br /><br />
				<div class="text-center">
					<h2 class="text-underline">Original Hidden Lives Illuminated Films</h2>
				</div>
				<div class="clearfix"></div><br />
				
				<?php include('../../../inc/films/film-alexander-s.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../../inc/films/film-joseph-k.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../../inc/films/film-louis-b.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../../inc/films/film-marvin-s.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../../inc/films/film-riverside.php'); ?>
				<div class="clearfix"></div><br/>
				
				
				<br /><br />
				<div class="text-center">
					<h2 class="text-underline">Guest Films</h2>
				</div>
				<div class="clearfix"></div><br />
				
				<?php include('../../../inc/guest-films/guest-film-brooklyn-defender-services.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../../inc/guest-films/guest-film-sesame-street.php'); ?>
				<div class="clearfix"></div><br/>
				
				
				<br /><br />
				<div class="text-center">
					<h2 class="text-underline">This Evening’s Programs</h2>
				</div>
				<div class="clearfix"></div><br />
				
				<h3>7:00 – 9:45 pm: Write the Filmmakers</h3>
				<p>Share your thoughts with the filmmakers! Postcards and pens will be available every night during <em>Hidden Lives Illuminated</em>. Write your note to the artists and drop it in the mailbox provided. We’ll take care of delivering your message.</p>
				<div class="clearfix"></div><br/>
				
				<h3>7:40 pm: Lightning Talk with the Youth Sentencing and Reentry Project</h3>
				<p>Cameron Holmes will give a 20-minute presentation on the Youth Sentencing and Reentry Project’s work on juvenile justice.</p>
				<p>The Youth Sentencing and Reentry Project (YSRP) works to keep children out of adult jails and prisons, and to bring home people who were sentenced as children to life in prison without the possibility of parole (“juvenile lifers“). To learn more about YSRP, visit <a href="www.ysrp.org" target="_blank">www.ysrp.org</a>.</p>
				<div class="clearfix"></div><br/>
				
				
				<p class="text-muted">These events (as with all events during <em>Hidden Lives Illuminated</em>) are free and open to the public. No reservations required. Appropriate for all ages.</p>
			</div>
		</div>
	</div>
</div>

<?php require('../../../inc/footer.php'); ?>
