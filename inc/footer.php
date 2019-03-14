	</main>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@1.6.12/dist/js/lightgallery.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous"></script>
    
    <script>
	    $(function(){
		    $('#menu-icon').on('click tap', function(){
			    $(this).toggleClass('active');
			    $('main').toggleClass('active');
			    $('nav').toggleClass('active');
			    $('header').toggleClass('active');
			    $('#mobile-close').toggleClass('active');
		    });
		    
	        $(".lightgallery").lightGallery({
			    selector: 'this',
			    download: false
			}); 
		    
		    $('a[href*="#"]')
			  	// Remove links that don't actually link to anything
			  	.not('[href="#"]')
			  	.not('[href="#0"]')
			  	.click(function(event) {
			    	// On-page links
					if (
						location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
						&& 
						location.hostname == this.hostname
					) {
						// Figure out element to scroll to
						var target = $(this.hash);
						target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
						// Does a scroll target exist?
						if (target.length) {
							// Only prevent default if animation is actually gonna happen
							event.preventDefault();
							$('html, body').animate({
								scrollTop: target.offset().top
			        	}, 1000, function() {
							// Callback after animation
							// Must change focus!
							var $target = $(target);
							$target.focus();
							if ($target.is(":focus")) { // Checking if the target was focused
								return false;
			          		} else {
					  			$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
					  			$target.focus(); // Set focus again
			          		};
			        	});
			      	}
			    }
			});
		});
	</script>
</body>
</html>