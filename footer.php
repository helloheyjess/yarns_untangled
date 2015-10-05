<footer id="contact">
  <div class="map"></div>
  <div class="contact">
  	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Contact') ) ?>
	<ul class="social">
		<li><a href="https://www.facebook.com/YarnsUntangled" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
		<li><a href="https://twitter.com/YarnsUntangled" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
		<li><a href="https://instagram.com/yarnsuntangled/" target="_blank"><i class="fa fa-instagram"></i></a></li>
    <li><a href="http://www.ravelry.com/groups/yarns-untangled"><img src="http://localhost:8888/Work/003-yarns-untangled/wordpress/wp-content/uploads/2015/10/ravelryicon.png" alt=""></a></li>
	</ul>
  </div>
  <div class="instagram">
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