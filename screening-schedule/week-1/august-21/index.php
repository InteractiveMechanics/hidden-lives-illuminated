<?php 
	$base_path 		= "/hiddenlives/";	
	$page_class 	= "page-interior";
	$page_title		= "Schedule for August 21";
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
				
				<h3>7:40 pm: Jawn Appetit Podcast Taping</h3>
				<p>Join local food podcast Jawn Appetit for a live taping with Todd Lewis of the Pennsylvania Department of Corrections Culinary Arts Training Program and Kurt Evans, a local chef who organizes the End Mass Incarceration Dinner series.</p>
				<p>Located at the intersection of Philadelphia and food, the Jawn Appetit podcast is a fun, informative look at the local restaurant scene without the pretentiousness that you might find elsewhere. Each week, they give you their takes on the hottest establishments in Philly and tell you where you can find the best eats in (and around) the City of Brotherly Love. To learn more about Jawn Appetit, visit www.JawnAppetit.com.</p>
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
