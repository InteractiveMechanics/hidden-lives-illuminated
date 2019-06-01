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
					<li>Screenings last about 40 minutes, and are looped three times nightly.</li>
					<li>Start times are 7 pm, 8 pm, and 9 pm nightly, rain or shine		 	 </li>
					<li>Recommended arrival time: 15 minutes before screening begins		 </li>
					<li>Each week features different films, grouped by theme (see below)	 </li>
					<li>Free and open to the public											 </li>
					<li>2100 Fairmount Avenue, Philadelphia PA 19130						 </li>
				</ul>
				<br /><br />
				
				<h3 name="Week1">Week 1: The View from Inside 			<small>August 15 to August 21, 2019</small></h3><br/>
				<h3 name="Week2">Week 2: Criminal Justice Today 		<small>August 22 to August 28, 2019</small></h3><br/>
				<h3 name="Week3">Week 3: Family and Community Impact 	<small>August 29 to September 4, 2019</small></h3><br/>
				<h3 name="Week4">Week 4: Restorative Justice			<small>September 5 to September 11, 2019</small></h3><br/>
				<h3 name="Week5">Finale 								<small>September 12, 2019</small></h3>
				
				<!--
				<div class="cal cal-week1">
					<h2>Week 1:&nbsp;&nbsp;The View from Inside</h2>
					<a href="<?php echo $base_path; ?>screening-schedule/week-1/august-15" class="cal-wed">AUG <span>15</span></a>
					<a href="<?php echo $base_path; ?>screening-schedule/week-1/august-16" class="cal-thr">AUG <span>16</span></a>
					<a href="<?php echo $base_path; ?>screening-schedule/week-1/august-17" class="cal-fri">AUG <span>17</span></a>
					<a href="<?php echo $base_path; ?>screening-schedule/week-1/august-18" class="cal-sat">AUG <span>18</span></a>
					<a href="<?php echo $base_path; ?>screening-schedule/week-1/august-19" class="cal-sun">AUG <span>19</span></a>
					<a href="<?php echo $base_path; ?>screening-schedule/week-1/august-20" class="cal-mon">AUG <span>20</span></a>
					<a href="<?php echo $base_path; ?>screening-schedule/week-1/august-21" class="cal-tue">AUG <span>21</span></a>
				</div>
				<div class="cal cal-week2">
					<h2>Week 2:&nbsp;&nbsp;Criminal Justice Today</h2>
					<a href="#" class="cal-wed">AUG <span>22</span></a>
					<a href="#" class="cal-thr">AUG <span>23</span></a>
					<a href="#" class="cal-fri">AUG <span>24</span></a>
					<a href="#" class="cal-sat">AUG <span>25</span></a>
					<a href="#" class="cal-sun">AUG <span>26</span></a>
					<a href="#" class="cal-mon">AUG <span>27</span></a>
					<a href="#" class="cal-tue">AUG <span>28</span></a>
				</div>
				<div class="cal cal-week3">
					<h2>Week 3:&nbsp;&nbsp;Family and Community Impact</h2>
					<a href="#" class="cal-wed">AUG <span>29</span></a>
					<a href="#" class="cal-thr">AUG <span>30</span></a>
					<a href="#" class="cal-fri">AUG <span>31</span></a>
					<a href="#" class="cal-sat">SEP <span>1</span></a>
					<a href="#" class="cal-sun">SEP <span>2</span></a>
					<a href="#" class="cal-mon">SEP <span>3</span></a>
					<a href="#" class="cal-tue">SEP <span>4</span></a>
				</div>
				<div class="cal cal-week4">
					<h2>Week 4:&nbsp;&nbsp;Restorative Justice</h2>
					<a href="#" class="cal-wed">SEP <span>5</span></a>
					<a href="#" class="cal-thr">SEP <span>6</span></a>
					<a href="#" class="cal-fri">SEP <span>7</span></a>
					<a href="#" class="cal-sat">SEP <span>8</span></a>
					<a href="#" class="cal-sun">SEP <span>9</span></a>
					<a href="#" class="cal-mon">SEP <span>10</span></a>
					<a href="#" class="cal-tue">SEP <span>11</span></a>
				</div>
				<div class="cal cal-week5">
					<h2>Finale</h2>
					<a href="#" class="cal-wed">SEP <span>12</span></a>
				</div>
				
				-->
			</div>
		</div>
	</div>
</div>

<?php require('../inc/footer.php'); ?>
