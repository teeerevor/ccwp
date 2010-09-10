<?php get_header(); ?>

<div id="column">

<!-- ^^^^^^^^^^^^^^ page not found + search form ^^^^^^^^^^^^^^ -->
<div class="post">
<div class="post-top"></div>
<div class="entry">

<div class="content">
<h1>Page Not Found</h1>
<p>Sorry, but you are looking for something that isn't here.</p>
<h3>Search Blog</h3>
<?php include(TEMPLATEPATH."/searchform.php"); ?>
</div>

</div>
<div class="post-bottom"></div>
</div>
<!-- ^^^^^^^^^^^^^^ page not found + search form ^^^^^^^^^^^^^^ -->

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>