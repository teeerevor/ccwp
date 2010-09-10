<!-- ^^^^^^^^^^^^^^ clear column and sidebar ^^^^^^^^^^^^^^ -->
<div class="clear"></div>
</div>
<!-- ^^^^^^^^^^^^^^ end container :) // -->

<!-- ^^^^^^^^^^^^^^ footer code ^^^^^^^^^^^^^^ -->
<div id="footer">
<div id="footercontent">

	<ul>
	<li><a href="<?php bloginfo('url'); ?>">Home</a></li>
	<?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
	</ul>
	<div class="copyright">Copyright &copy;2008 <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>. All rights reserved.</div>

	<div class="clear"></div>

	<div class="rss"><a href="<?php bloginfo('rss2_url'); ?>" target="_blank">Posts RSS</a><a href="<?php bloginfo('comments_rss2_url'); ?>" target="_blank">Comments RSS</a></div>
	<div class="property">Sponsored by <a href="http://wordpress.reviewitonline.net">Free Wordpress Themes</a></div>

</div>
</div>
<!-- ^^^^^^^^^^^^^^ footer code ^^^^^^^^^^^^^^ -->

<?php wp_footer(); ?>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-2083028-5");
pageTracker._trackPageview();
</script>
</body>
</html>