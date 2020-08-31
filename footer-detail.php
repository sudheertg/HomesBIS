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
                <form autocomplete="off" class="footer_form">
                    <input type="text" placeholder="Enter your email id"/>
                    <input type="submit"/>
                </form>
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
    </div>
</footer>

<!--Scripts-->
<script src="assets/zoom/Vendor/jquery/jquery-1.8.3.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>
   <script src="assets/zoom/Vendor/jquery/jquery-ui.min.js"></script>
<script src="assets/zoom/Vendor/fancybox/jquery.fancybox.js"></script>
<script src="assets/zoom/Vendor/elevatezoom/jquery.elevatezoom.js"></script>
<script src="assets/zoom/Vendor/panZoom/panZoom.js"></script>
<script src="assets/zoom/Vendor/ui-carousel/ui-carousel.js"></script>

<script src="assets/zoom/zoom.js"></script>
<script src="assets/js/cocoen.min.js"></script>
<script type="text/javascript" src="js/lightcase.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('a[data-rel^=lightcase]').lightcase();
	});
</script>
<script>
    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        	$(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });
</script>
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
<script>
$(document).ready(function(){
  $("#note").click(function(){
    $(".notification-div").toggleClass("note-show");
  });
});
</script>

