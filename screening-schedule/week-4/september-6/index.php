<?php 
	$base_path 		= "/hiddenlives/";	
	$page_class 	= "page-interior";
	$page_title		= "Schedule for Fri. Sept. 6";
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
				<p>Share your thoughts with the filmmakers! Postcards and pens will be available every night during <em>Hidden Lives Illuminated</em>. Write your note to the artists and drop it in the mailbox provided. We’ll take care of delivering your message.</p>
				<div class="clearfix"></div><br/>
				
				<h3>7:00 – 9:00 pm: Learn how you can get involved!</h3>
				<p>Join us for an open house with these community organizations and learn how you can get involved:</p>
				<ul>
					<li>Transformation Yoga Project serves people impacted by trauma, addiction, and incarceration through trauma-sensitive, mindfulness-based yoga programs driven by education and research.</li>
					<li>The Center for Returning Citizens (TCRC) assists returning citizens in the transition from incarceration to society by providing job training, housing assistance, counseling services, legal aid, and referrals. TCRC helps individuals, families and communities with the adverse impacts of incarceration, including mentoring and providing counseling for the children of incarcerated parents, at risk and incarcerated youth.</li>
				</ul>
				<div class="clearfix"></div><br/>
				
				<h3>7:40 pm: Meditation</h3>
				<p>Transformation Yoga Project staff will lead a 20-minute guided meditation.</p>
				<div class="clearfix"></div><br/>
				
				<h3>7:00 – 9:45 pm: Hands-on activities</h3>
				<p>Join us for hands-on activities designed to bring people together and spark reflection on tonight’s films.</p>
				<div class="clearfix"></div><br/>
				
				
				<p class="text-muted">These events (as with all events during <em>Hidden Lives Illuminated</em>) are free and open to the public. No reservations required. Appropriate for all ages.</p>

			</div>
		</div>
	</div>
</div>

<?php require('../../../inc/footer.php'); ?>
