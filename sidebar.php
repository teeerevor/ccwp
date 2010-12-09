<div id="sidebar">

  <!-- ^^^^^^^^^^^^^^ Flickr Badge ^^^^^^^^^^^^^^ -->
  <div id='big_links' class="box" >
      <ul>
        <li>
          <a href="/category/ccjwp/">Central Coast Junior Water Polo</a>
        </li>
        <li>
          <a href="/page/ccwp-draw/">CCWP Draw</a>
        </li>
        <li>
          <a href="/page/ccjwp-draw/">CCJWP Draw</a>
        </li>

      </ul>
  </div>

<!-- ^^^^^^^^^^^^^^ Flickr Badge ^^^^^^^^^^^^^^ -->
<div class="box">
  <!-- Start of Flickr Badge -->
  <style type="text/css">
  #flickr_badge_source_txt {padding:0; font: 11px Arial, Helvetica, Sans serif; color:#666666;}
  #flickr_badge_icon {display:block !important; margin:0 !important; border: 1px solid rgb(0, 0, 0)       !important;}
  #flickr_icon_td {padding:0 5px 0 0 !important;}
  .flickr_badge_image {text-align:center !important;}
  .flickr_badge_image img {border: 1px solid black !important;}
  #flickr_www {display:block; padding:0 10px 0 10px !important; font: 11px Arial, Helvetica, Sans serif    !important; color:#3993ff !important;}
  #flickr_badge_uber_wrapper a:hover,
  #flickr_badge_uber_wrapper a:link,
  #flickr_badge_uber_wrapper a:active,
  #flickr_badge_uber_wrapper a:visited {text-decoration:none !important; background:inherit   !important;color:#3993ff;}
  #flickr_badge_wrapper {background-color:#ffffff;border: solid 1px #dddddd}
  #flickr_badge_source {padding:0 !important; font: 11px Arial, Helvetica, Sans serif !important;   color:#666666 !important;}
  </style>
  <table id="flickr_badge_uber_wrapper" cellpadding="0" cellspacing="10" border="0"><tr><td><a     href="http://www.flickr.com" id="flickr_www">www.<strong style="color:#3993ff">flick<span   style="color:#ff1c92">r</span></strong>.com</a><table cellpadding="0" cellspacing="10" border="0"   id="flickr_badge_wrapper">
  <tr>
  <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=3&display=random&size=t&layout=h&context=in%2Fpool-620171%40N25%2F&source=group&group=620171%40N25"></script>
  </tr>
  </table>
  </td></tr></table>
  <!-- End of Flickr Badge -->
  <a class="FlickrQ" href="/central-coast-water-polo-photos-on-flickr/"> Want your photo up there?</a>
</div>

<!-- ^^^^^^^^^^^^^^ League Engine Tables ^^^^^^^^^^^^^^ -->

<div class="box">
    <style type='text/css'>
      div.LeagueEngine {margin: 20px 0 20px 25px;}
      div.LeagueEngine #league_name {text-align: left; color:#444444; margin: 5px 0 10px 20px;}
      div.LeagueEngine table {border-collapse: collapse; }
      div.LeagueEngine table th {background-color:#5EA2E7; padding: 4px 7px; color: #eeeeee;}
      div.LeagueEngine tr.even{background-color: #ebf4ff;}
      div.LeagueEngine tr td{text-align:center; padding: 2px 2px; color: #444444;}
      div.LeagueEngine tr td:first-child{text-align:left; padding: 0 7px;}
    </style>
    <script src="http://liquidleagues.heroku.com/leagues/show/1.js" type="text/javascript"></script>
    <script src="http://liquidleagues.heroku.com/leagues/show/2.js" type="text/javascript"></script>
    <script src="http://liquidleagues.heroku.com/leagues/show/3.js" type="text/javascript"></script>
    <script src="http://liquidleagues.heroku.com/leagues/show/4.js" type="text/javascript"></script>
    <script src="http://liquidleagues.heroku.com/leagues/show/5.js" type="text/javascript"></script>
</div>

<!-- ^^^^^^^^^^^^^^ Google Calandar ^^^^^^^^^^^^^^ -->

<!-- <div class="box"
    <h3 style="margin:10px 0">Coming up...</h3>
    <iframe src="//www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;mode=AGENDA&amp;height=500&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=nth5jfa47g2u6ioneu50dsu8pg%40group.calendar.google.com&amp;color=%2329527A&amp;src=r65e1dkdgv31b3i1o928aofko4%40group.calendar.google.com&amp;color=%23BE6D00&amp;ctz=Australia%2FSydney" style=" border-width:0 " width="380" height="500" frameborder="0" scrolling="no"></iframe>
    <div></div>
</div> -->

<!-- ^^^^^^^^^^^^^^ rss subscription code ^^^^^^^^^^^^^^ -->
<!--div class="box">
  <h2>RSS Subscription</h2>
  <div class="subscribe">

  <div class="rssfeed">Subscribe via RSS reader:</div>
  <div class="rssfeedlinks"><a href="<?php bloginfo('rss2_url'); ?>">Posts RSS</a><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments RSS</a><div class="clear"></div></div>

  </div>
</div-->
<!-- ^^^^^^^^^^^^^^ rss subscription code ^^^^^^^^^^^^^^ -->

<!-- ^^^^^^^^^^^^^^ tabbed content ^^^^^^^^^^^^^^ -->
<ul id="tabs" class="tabs">
<li><a href="#" rel="tab1" class="selected">Recent Posts</a></li>
<li><a href="#" rel="tab2">Recent Comments</a></li>
<li><a href="#" rel="tab3">Popular Tags</a></li>
</ul>

<div id="tab1" class="tabcontent">
<ul>
<?php query_posts('showposts=5&orderby=date'); ?>
<?php while (have_posts()) : the_post(); ?>
<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
<span><?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?> Since <?php the_time('l, F j, Y, G:i'); ?></span></li>
<?php endwhile; ?>
</ul>
</div>

<div id="tab2" class="tabcontent">
<?php include (TEMPLATEPATH . '/simple_recent_comments.php'); ?>
<?php if (function_exists('src_simple_recent_comments')) { src_simple_recent_comments(5, 50, '', ''); } ?>
</div>

<div id="tab3" class="tabcontent">
<?php wp_tag_cloud('smallest=8&largest=14&number=30'); ?>
</div>

<script type="text/javascript">
var countries=new ddtabcontent("tabs")
countries.setpersist(false)
countries.setselectedClassTarget("link")
countries.init()
</script>
<!-- ^^^^^^^^^^^^^^ tabbed content ^^^^^^^^^^^^^^ -->

<div class="clear"></div>

<!-- ^^^^^^^^^^^^^^ include sidebars ^^^^^^^^^^^^^^ -->
<?php include (TEMPLATEPATH . "/sidebar1.php"); ?>
<?php include (TEMPLATEPATH . "/sidebar2.php"); ?>
<div class="clear"></div>
<!-- ^^^^^^^^^^^^^^ include sidebars ^^^^^^^^^^^^^^ -->

</div>
