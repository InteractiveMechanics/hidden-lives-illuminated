<?php 
	$base_path 		= "/hiddenlives/";	
	$page_class 	= "page-interior";
	$page_title		= "Donyea P.";
	$page_subtitle  = "Big Boy Shoes";
	$page_id		= 5;
	
	require('../../inc/header.php');
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
			<div class="page-content clearfix">
				<a href="<?php echo $base_path; ?>films" class="return-to">&larr; Return to All Films</a>
				<h1><?php echo $page_title; ?></h1>
				<h2><?php echo $page_subtitle; ?></h2>
				
				<br />
				<figure>
					<div style="
							width: 100%; 
							height: 400px;
							background-color: gray;
							display: flex;
							align-items: center;
							justify-content: center;
							font-size: 1.8rem;
							font-family: 'Roboto Condensed', sans-serif;">
						Video Coming Soon</div>
					<iframe class="d-none" src="https://player.vimeo.com/video/" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<figcaption class="d-none"></figcaption>
				</figure>
				
				<br />
				<div class="text-center">
					<h2 class="text-underline">About the Film</h2>
				</div>				
				<p>The young filmmaker looks back on his life and forward to a better future for us all. “It’s time to put on those big boy shoes.”</p>
			</div>
		</div>
	</div>
</div>

<?php require('../../inc/footer.php'); ?>
