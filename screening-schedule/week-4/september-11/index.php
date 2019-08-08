<?php 
	$base_path 		= "/hiddenlives/";	
	$page_class 	= "page-interior";
	$page_title		= "Schedule for September 11";
	$page_id		= 1;
	
	require('../../../inc/header.php');
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
			<div class="page-content clearfix">
				<a href="<?php echo $base_path; ?>screening-schedule" class="return-to">&larr; Return to Screening Schedule</a>
				<h3>Week 4: Restorative Justice</h3>
				<h1><?php echo $page_title; ?></h1>
				
				
				<br /><br />
				<div class="text-center">
					<h2 class="text-underline">Original Hidden Lives Illuminated Films</h2>
				</div>
				<div class="clearfix"></div><br />
				
				<?php include('../../../inc/films/film-jerome-l.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../../inc/films/film-donyea-p.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../../inc/films/film-ezra-b.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../../inc/films/film-joseph-s.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../../inc/films/film-michael-l.php'); ?>
				<div class="clearfix"></div><br/>
				
				
				<br /><br />
				<div class="text-center">
					<h2 class="text-underline">Guest Films</h2>
				</div>
				<div class="clearfix"></div><br />
				
				<?php include('../../../inc/guest-films/guest-film-edge-of-daybreak.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../../inc/guest-films/guest-film-restorative-justice.php'); ?>
				<div class="clearfix"></div><br/>
				
				
				<br /><br />
				<div class="text-center">
					<h2 class="text-underline">This Evening’s Programs</h2>
				</div>
				<div class="clearfix"></div><br />
				
				<h3>7:00 – 9:45 pm: Write the Filmmakers</h3>
				<p>Share your thoughts with the filmmakers! Postcards, pens, and postage will be available every night during <em>Hidden Lives Illuminated</em>. Write your note to the artists and drop it in the mailbox provided.</p>
				<div class="clearfix"></div><br/>
				
				<h3>7:00 – 9:00 pm: Coffee with a Commissioner</h3>
				<p>Enjoy coffee and conversation with Philadelphia Commissioner of Prisons Blanche Carney.</p>
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
