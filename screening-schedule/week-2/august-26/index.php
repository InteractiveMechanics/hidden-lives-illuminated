<?php 
	$base_path 		= "/hiddenlives/";	
	$page_class 	= "page-interior";
	$page_title		= "Schedule for August 25";
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
				<p>Share your thoughts with the filmmakers! Postcards, pens, and postage will be available every night during <em>Hidden Lives Illuminated</em>. Write your note to the artists and drop it in the mailbox provided.</p>
				<div class="clearfix"></div><br/>
				
				<h3>7:40 pm: Free Library of Philadelphia</h3>
				<p>Meet representatives from the Free Library and learn about their Prison and Re-entry services.</p>
				<p>The Free Library is committed to offering high-quality programs and services to incarcerated people, their children, and their families. These include literacy support, family programs, cultural and literary offerings, and re-entry resources and information. To learn more about the Free Library, visit www.FreeLibrary.org.</p>
				<div class="clearfix"></div><br/>
				
				
				<p class="text-muted">These events (as with all events during <em>Hidden Lives Illuminated</em>) are free and open to the public. No reservations required. Appropriate for all ages.</p>
			</div>
		</div>
	</div>
</div>

<?php require('../../../inc/footer.php'); ?>
