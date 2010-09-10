<?php get_header(); ?>

<div id="column">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- ^^^^^^^^^^^^^^ post code ^^^^^^^^^^^^^^ -->
<div class="post" id="post-<?php the_ID(); ?>">
<div class="post-top"></div>
<div class="entry">

<h2><?php the_title(); ?></h2>
<span class="date"><?php the_time('l, F j, Y'); ?> <?php the_time('G:i'); ?></span>

<div class="info">
<div class="cat">Posted in category <?php the_category(', ') ?></div>
<div class="comments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></div>
<div class="clear"></div>
</div>

<div class="content">
<?php the_content('Read the rest of this entry &raquo;'); ?><div class="clear"></div>
<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
</div>

<div class="follow">You can follow any responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed.</div>

<div class="state">
<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) { ?>
You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.

<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) { ?>
Responses are currently closed, but you can <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.

<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) { ?>
You can skip to the end and leave a response. Pinging is currently not allowed.

<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) { ?>
Both comments and pings are currently closed.

<?php } ?>
</div>

<div class="tags"><?php edit_post_link('Edit', '', ' | '); ?><?php the_tags('Tags: ', ', ', ''); ?></div>

<?php comments_template(); ?>

</div>
<div class="post-bottom"></div>
</div>
<!-- ^^^^^^^^^^^^^^ post code ^^^^^^^^^^^^^^ -->

<?php endwhile; ?>

<!-- ^^^^^^^^^^^^^^ post navigation ^^^^^^^^^^^^^^ -->
<div class="navigation">
<div class="navleft"><?php previous_post_link('&laquo; %link') ?></div>
<div class="navright"><?php next_post_link('%link &raquo;') ?></div>
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
