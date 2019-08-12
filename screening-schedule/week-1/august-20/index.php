<?php 
	$base_path 		= "/hiddenlives/";	
	$page_class 	= "page-interior";
	$page_title		= "Schedule for August 20";
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
				
				<h3>7:00 – 9:00 pm: Justin Griggs</h3>
				<p>Musician Justin Griggs will perform an acoustic set. Justin began playing the piano at the age of two, and he now plays 19 different instruments. His father gave him the guitar he will play tonight. Justin used music to cope with his father's incarceration. A student at CAPA, Justin is able to flourish into the eclectic musician that he is today. Justin and his musical talent are the subject of <em>Piano Priest</em>, an original film that will be screened Week 3 of <em>Hidden Lives Illuminated</em>.</p>
				<div class="clearfix"></div><br/>
				
				<p class="text-muted">These events (as with all events during <em>Hidden Lives Illuminated</em>) are free and open to the public. No reservations required. Appropriate for all ages.</p>
			</div>
		</div>
	</div>
</div>

<?php require('../../../inc/footer.php'); ?>
