<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<div id="footer" class="footer">
	<div class="col1">
		<h3>Contact</h3>
			<ul>
				<li>2, Galerie du Roi</li>
				<li>Bruxelles, Belgium</li>
				<li>infos@hoteldesgaleries.be</li>
				<li><a href="#">voir carte</a></li>
			</ul>
	</div>

	<div class="col2">
			<ul>
				<li><a href="mailto:info@hoteldesgaleries.be">info@hoteldesgaleries.be</a></li>
				<li>T:+32 2 435 463</li>
				<li>F:+32 2 435 463</li>
			</ul>
	</div>
	<!--<small>hoteldesgaleries</small>-->
</div>

</div><!-- #main .wrapper -->

</body>

<script>
	$('#nav-btn').click(toggleMenu);
	$('#main').click(function() {
	    if ($(this).hasClass('active')) {
	        toggleMenu();
	    }
	});

	function toggleMenu() {
	    $('#nav-btn, #header, #container, #main').toggleClass('active');
	}
</script>

<script>
$( ".accordion" ).click(function() {
  $( "#myform" ).show( "slow" );
});

$( ".hidr" ).dblclick(function() {
  $( "#myform" ).hide( "slow" );
});
</script>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="/wordpress/wp-content/themes/hotel_des_galeries/js/masonry.js"></script>
<script src="/wordpress/wp-content/themes/hotel_des_galeries/js/main.js"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
</html>