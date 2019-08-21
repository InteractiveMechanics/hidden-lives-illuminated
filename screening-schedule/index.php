<?php 
	$base_path 		= "/hiddenlives/";	
	$page_class 	= "page-interior";
	$page_title		= "Screening Schedule";
	$page_id		= 1;
	$inverse		= false;
	
	require('../inc/header.php');
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
			<div class="page-content clearfix">
				<h1><?php echo $page_title; ?></h1>
				
				<div class="text-center">
					<h2 class="text-underline">Screening Details</h2>
				</div>
				
				
				<ul>
					<li>Click any date below to view that evening’s screening and programming schedule.</li>
					<li>Screenings last about 40 minutes, and are looped three times nightly: 7 pm, 8 pm, and 9 pm, rain or shine. (The 7:00 pm showing is indoor only.)</li>
					<li>Family-friendly, hands-on activities and presentations every night</li>
					<li>Free and open to the public</li>
					<li>2100 Fairmount Avenue, Philadelphia PA 19130</li>
					<li>Accessible seating is available for the film screenings as well as for the programs inside the Event Hub. All films are subtitled in English and Spanish.</li>
				</ul>
				<br /><br />
	
				
				<div class="cal cal-week1">
					<h2 style="color: #ED5F59;">Week 1:</h2>
					<h2 style="color: #FFFFFF; margin-top: 0;">The View from Inside</h2>
					<a href="<?php echo $base_path; ?>screening-schedule/week-1/august-15" class="cal-wed">AUG <span>15</span></a>
					<a href="<?php echo $base_path; ?>screening-schedule/week-1/august-16" class="cal-thr">AUG <span>16</span></a>
					<a href="<?php echo $base_path; ?>screening-schedule/week-1/august-17" class="cal-fri">AUG <span>17</span></a>
					<a href="<?php echo $base_path; ?>screening-schedule/week-1/august-18" class="cal-sat">AUG <span>18</span></a>
					<a href="<?php echo $base_path; ?>screening-schedule/week-1/august-19" class="cal-sun">AUG <span>19</span></a>
					<a href="<?php echo $base_path; ?>screening-schedule/week-1/august-20" class="cal-mon">AUG <span>20</span></a>
					<a href="<?php echo $base_path; ?>screening-schedule/week-1/august-21" class="cal-tue">AUG <span>21</span></a>
				</div>
				<div class="cal cal-week2">
					<h2 style="color: #ED5F59;">Week 2:</h2>
					<h2 style="color: #FFFFFF; margin-top: 0;">Criminal Justice Today</h2>
					<a href="<?php echo $base_path; ?>screening-schedule/week-2/august-22" class="cal-wed">AUG <span>22</span></a>
					<a href="<?php echo $base_path; ?>screening-schedule/week-2/august-23" class="cal-thr">AUG <span>23</span></a>
					<a href="<?php echo $base_path; ?>screening-schedule/week-2/august-24" class="cal-fri">AUG <span>24</span></a>
					<a href="<?php echo $base_path; ?>screening-schedule/week-2/august-25" class="cal-sat">AUG <span>25</span></a>
					<a href="<?php echo $base_path; ?>screening-schedule/week-2/august-26" class="cal-sun">AUG <span>26</span></a>
					<a href="<?php echo $base_path; ?>screening-schedule/week-2/august-27" class="cal-mon">AUG <span>27</span></a>
					<a href="<?php echo $base_path; ?>screening-schedule/week-2/august-28" class="cal-tue">AUG <span>28</span></a>
				</div>
				<div class="cal cal-week3">
					<h2 style="color: #ED5F59;">Week 3:</h2>
					<h2 style="color: #FFFFFF; margin-top: 0;">Family and Community Impact</h2>
					<a href="<?php echo $base_path; ?>screening-schedule/week-3/august-29" class="cal-wed">AUG <span>29</span></a>
					<a href="<?php echo $base_path; ?>screening-schedule/week-3/august-30" class="cal-thr">AUG <span>30</span></a>
					<a href="<?php echo $base_path; ?>screening-schedule/week-3/august-31" class="cal-fri">AUG <span>31</span></a>
					<a href="<?php echo $base_path; ?>screening-schedule/week-3/september-1" class="cal-sat">SEP <span>1</span></a>
					<a href="<?php echo $base_path; ?>screening-schedule/week-3/september-2" class="cal-sun">SEP <span>2</span></a>
					<a href="<?php echo $base_path; ?>screening-schedule/week-3/september-3" class="cal-mon">SEP <span>3</span></a>
					<a href="<?php echo $base_path; ?>screening-schedule/week-3/september-4" class="cal-tue">SEP <span>4</span></a>
				</div>
				<div class="cal cal-week4">
					<h2 style="color: #ED5F59;">Week 4:</h2>
					<h2 style="color: #FFFFFF; margin-top: 0;">Restorative Justice</h2>
					<a href="<?php echo $base_path; ?>screening-schedule/week-4/september-5" class="cal-wed">SEP <span>5</span></a>
					<a href="<?php echo $base_path; ?>screening-schedule/week-4/september-6" class="cal-thr">SEP <span>6</span></a>
					<a href="<?php echo $base_path; ?>screening-schedule/week-4/september-7" class="cal-fri">SEP <span>7</span></a>
					<a href="<?php echo $base_path; ?>screening-schedule/week-4/september-8" class="cal-sat">SEP <span>8</span></a>
					<a href="<?php echo $base_path; ?>screening-schedule/week-4/september-9" class="cal-sun">SEP <span>9</span></a>
					<a href="<?php echo $base_path; ?>screening-schedule/week-4/september-10" class="cal-mon">SEP <span>10</span></a>
					<a href="<?php echo $base_path; ?>screening-schedule/week-4/september-11" class="cal-tue">SEP <span>11</span></a>
				</div>
				<div class="cal cal-week5">
					<h2 style="color: #ED5F59;">Finale!</h2>
					<a href="<?php echo $base_path; ?>screening-schedule/finale" class="cal-wed">SEP <span>12</span></a>
				</div>
				
			</div>
		</div>
	</div>
</div>

<?php require('../inc/footer.php'); ?>
