<footer id="contact">
  <div class="map"></div>
  <div class="contact">
  	<h3>Hours</h3>
  	<p>Open daily from 10am to 6pm<br/>
	Closed for all statutory holidays</p>
	<h3>Contact</h3>
	<p>86 Nassau Street<br/>
	Toronto, ON M5T 1M5<br/>
	(555) 555-5555<br/>
	info@yarnsuntangled.com</p>
	<ul class="social">
		<li><a href="https://www.facebook.com/YarnsUntangled" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
		<li><a href="https://twitter.com/YarnsUntangled" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
		<li><a href="https://instagram.com/yarnsuntangled/" target="_blank"><i class="fa fa-instagram"></i></a></li>
	</ul>
  </div>
  <div class="instagram">
  	<h3>Instagram</h3>
  	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Instagram') ) ?>
  </div>
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>