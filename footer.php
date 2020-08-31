<footer>
   <div class="footer">
      <div class="container footer_main_section">
         <div class="footer_main footer1">
            <h3>ABOUT US</h3>
            <ul class="common_ul">
               <li><a href="">About Arabia House</a></li>
               <li><a href="">Contact Us</a></li>
               <li><a href="">Help Center</a></li>
               <li><a href="">FAQ</a></li>
            </ul>
         </div>
         <div class="footer_main footer2">
            <h3>FOR COMPANIES</h3>
            <ul class="common_ul">
               <li><a href="">Why Join Us</a></li>
               <li><a href="">Memberships Plans</a></li>
               <li><a href="">Advertise with Us</a></li>
            </ul>
         </div>
         <div class="footer_main footer3">
            <h3>FOR HOMEOWNERS</h3>
            <ul class="common_ul">
               <li><a href="">Free Services</a></li>
               <li><a href="">How it Works</a></li>
            </ul>
         </div>
         <div class="footer_main footer4">
            <h3>STAY CONNECTED</h3>
            <form autocomplete="off" class="footer_form">                    <input type="text" placeholder="Enter your email id"/>                    <input type="submit"/>                </form>
         </div>
         <div class="footer_main footer5">
            <h3>Connect With Us</h3>
            <ul class="common_ul d-flex">
               <li><a href=""><img width="20" src="assets/images/social/facebook.svg"></a></li>
               <li><a href=""><img width="20" src="assets/images/social/twitter.svg"></a></li>
               <li><a href=""><img width="20" src="assets/images/social/instagram.svg"></a></li>
               <li><a href=""><img width="20" src="assets/images/social/linkedin.svg"></a></li>
               <li><a href=""><img width="20" src="assets/images/social/google-plus.svg"></a></li>
            </ul>
         </div>
      </div>
      <div class="container">
         <p class="copy">© 2019 Arabia House. All rights reserved</p>
      </div>
   </div>
</footer>
<!--Scripts--><script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/owl.carousel.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/cocoen.min.js"></script>
<script type="text/javascript" src="js/lightcase.js"></script>



<script>
	   $('.our-client-testimonials-slider').owlCarousel({

	    loop:true,

	    margin:20,

	    nav:true,

	    dots:false,

				   	
				   
	    autoplay: false,

	    //animateIn: 'fadeIn',

	    //animateOut: 'fadeOut',

			 navText: ["<img src='assets/images/my-groups/left-arrow.png'>","<img src='assets/images/my-groups/right-arrow.png'>"],
	    responsive:{

	        0:{

	            items:1

	        },

	        600:{

	            items:1

	        },

	        1000:{

	            items:3

	        }

	    }

	});
	</script>
	
	
	
	
<script type="text/javascript">	jQuery(document).ready(function($) {		$('a[data-rel^=lightcase]').lightcase();	});</script>
<script>
   $(document).ready(function() {
     $(document).on("click", "ul.prod-gram .init", function() {
       $(this).parent().find('li:not(.init)').toggle();
     });
     var allOptions = $("ul.prod-gram").children('li:not(.init)');
     $("ul.prod-gram").on("click", "li:not(.init)", function() {
       allOptions.removeClass('selected');
       $(this).addClass('selected');
       $(this).parent().children('.init').html($(this).html());
       $(this).parent().find('li:not(.init)').toggle();
     });
   });
</script>
