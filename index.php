<?php get_header(); ?>

<div id="column">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<!-- ^^^^^^^^^^^^^^ post code ^^^^^^^^^^^^^^ -->
<div class="post" id="post-<?php the_ID(); ?>">
<div class="post-top"></div>
<div class="entry">

<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<span class="date"><?php the_time('l, F j, Y'); ?> <?php the_time('G:i'); ?></span>

<div class="info">
<div class="cat">Posted in category <?php the_category(', ') ?></div>
<div class="comments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></div>
<div class="clear"></div>
</div>

<div class="content">
<?php the_content('Read the rest of this entry &raquo;'); ?><div class="clear"></div>
</div>

<div class="tags"><?php edit_post_link('Edit', '', ' | '); ?><?php the_tags('Tags: ', ', ', ''); ?></div>

</div>
<div class="post-bottom"></div>
</div>
<!-- ^^^^^^^^^^^^^^ post code ^^^^^^^^^^^^^^ -->

<?php endwhile; ?>

<!-- ^^^^^^^^^^^^^^ post navigation ^^^^^^^^^^^^^^ -->
<div class="navigation">
<div class="navleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
<div class="navright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
<div class="clear"></div>
</div>
<!-- ^^^^^^^^^^^^^^ post navigation ^^^^^^^^^^^^^^ -->

<?php else : ?>

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

<?php endif; ?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>