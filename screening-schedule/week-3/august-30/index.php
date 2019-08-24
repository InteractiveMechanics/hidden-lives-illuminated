<?php 
	$base_path 		= "/hiddenlives/";	
	$page_class 	= "page-interior";
	$page_title		= "Schedule for Fri. Aug. 30";
	$page_id		= 1;
	
	require('../../../inc/header.php');
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
			<div class="page-content clearfix">
				<a href="<?php echo $base_path; ?>screening-schedule" class="return-to">&larr; Return to Screening Schedule</a>
				<h3>Week 3: Family and Community Impact</h3>
				<h1><?php echo $page_title; ?></h1>
				
				
				<br /><br />
				<div class="text-center">
					<h2 class="text-underline">Original Hidden Lives Illuminated Films</h2>
				</div>
				<div class="clearfix"></div><br />
				
				<?php include('../../../inc/films/film-brian-h.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../../inc/films/film-braheem-l.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../../inc/films/film-clarence-s.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../../inc/films/film-justino-g.php'); ?>
				<div class="clearfix"></div><br/>
				
				<?php include('../../../inc/films/film-robert-t.php'); ?>
				<div class="clearfix"></div><br/>
				
				
				<br /><br />
				<div class="text-center">
					<h2 class="text-underline">Guest Film</h2>
				</div>
				<div class="clearfix"></div><br />
				
				<?php include('../../../inc/guest-films/guest-film-last-day-of-freedom.php'); ?>
				<div class="clearfix"></div><br/>
				
				
				<br /><br />
				<div class="text-center">
					<h2 class="text-underline">This Evening’s Programs</h2>
				</div>
				<div class="clearfix"></div><br />
				
				<h3>7:00 – 9:45 pm: Write the Filmmakers</h3>
				<p>Share your thoughts with the filmmakers! Postcards and pens will be available every night during <em>Hidden Lives Illuminated</em>. Write your note to the artists and drop it in the mailbox provided. We’ll take care of delivering your message.</p>
				<div class="clearfix"></div><br/>
				
				<h3>7:00 – 9:45 pm: Hands-on Activities</h3>
				<p>Create buttons in response to themes found in the films, and add your reflections to our community canvas.</p>
				<div class="clearfix"></div><br/>
				
				<h3>7:00 – 9:45 pm: School Supply Drive</h3>
				<p>Join us in donating to the <em>Hidden Lives Illuminated</em> School Supplies Drive! These much needed supplies will go to children who have an incarcerated parent at SCI Chester or Riverside Correctional Facility. Donations will be collected at the <em>Hidden Lives Illuminated</em> Event Hub at OCF Coffee House, 2100 Fairmount Avenue from 7:00 – 9:45 pm, August 29 through September 4. Please donate one or more of these new, unused school supply items:</p>
				<ul>
					<li>Pencils</li>
					<li>Pens</li>
					<li>Markers</li>
					<li>Crayons</li>
					<li>Glue Sticks</li>
					<li>Scissors</li>
					<li>Pencil Cases</li>
					<li>Notebooks</li>
					<li>Backpacks</li>
					<li>Folders</li>
					<li>Feminine Hygiene Products</li>
				</ul>
				<p>If you have any questions, please contact Damon McCool at dm@easternstate.org or at (215) 236-5111 x243. Thank you for your support!</p>
				<div class="clearfix"></div><br/>
				
				
				<p class="text-muted">These events (as with all events during <em>Hidden Lives Illuminated</em>) are free and open to the public. No reservations required. Appropriate for all ages.</p>
			</div>
		</div>
	</div>
</div>

<?php require('../../../inc/footer.php'); ?>
