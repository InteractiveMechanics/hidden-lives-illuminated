<?php 
	$base_path 		= "/hiddenlives/";	
	$page_class 	= "page-interior";
	$page_title		= "Schedule for August 28";
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
				
				<h3>7:00 – 9:00 pm: Learn how you can get involved!</h3>
				<p>Join us for an open house with these community organizations and learn how you can get involved:</p>
				<ul>
					<li>The Institute for Community Justice is a comprehensive prison services and reentry program providing health linkages, supportive services, education, and advocacy for individuals, families and communities impacted by mass incarceration. To learn more about ICJ, visit <a href="www.fight.org" target="_blank">www.fight.org</a>.</li>
					<li>Interim House provides a continuum of comprehensive services to women addicted to drugs and alcohol that includes three levels of care: Residential Treatment, Intensive Outpatient Treatment, and Outpatient Counseling. Incorporated in 1971, Interim House was the first such specialized program in the Commonwealth of Pennsylvania and one of the first in the nation. It has served as a model for innovative treatment of substance abusing women. To learn more about Interim House, visit <a href="www.InterimHouse.org" target="_blank">www.InterimHouse.org</a>.</li>
					<li>The Mayor’s Office of Reintegration Services (RISE) and PA Career Link provide employment support to individuals who have been previously convicted, sentenced and incarcerated. This includes vocational training, computer literacy, and job search assistance. To learn more about RISE and PA Career Link, visit www.phila.gov and <a href="www.PACareerLinkPHL.org" target="_blank">www.PACareerLinkPHL.org</a>.</li>
				</ul>
				<div class="clearfix"></div><br/>
				
				<p class="text-muted">These events (as with all events during <em>Hidden Lives Illuminated</em>) are free and open to the public. No reservations required. Appropriate for all ages.</p>
				
				
				<br /><br />
				<div class="text-center">
					<h2 class="text-underline">Member Night</h2>
				</div>
				<div class="clearfix"></div><br />
				
				<h3>7:00 – 9:00 pm: Member Night</h3>
				<p>On Wednesday evenings, Eastern State members receive special perks. Members should check in at the welcome table inside the <em>Hidden Lives Illuminated</em> Event Hub at OCF Coffee House.</p>
				<div class="clearfix"></div><br/>
				
				
				
			</div>
		</div>
	</div>
</div>

<?php require('../../../inc/footer.php'); ?>
