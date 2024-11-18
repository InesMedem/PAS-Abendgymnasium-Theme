<?php
get_header();
while (have_posts()) {
  the_post(); 
  pageBanner(array(
    // 'title' => 'hello Title',
    // 'photo' => 'https://static.vecteezy.com/vite/assets/photo-masthead-375-BoK_p8LG.webp',
    // 'subtitle' => 'this is a subtitle'
));
?>


  <div class="container container--narrow page-section">
  <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" href="
          <?php echo site_url('/aktuelles'); ?>
          "><i class="fa fa-home" aria-hidden="true"></i> Blog-Startseite <?php
                                                                  
                                                                  ?></a>
          <span class="metabox__main">Veröffentlicht von <?php the_author_posts_link(); ?> am <?php the_time('n/j/y'); ?> in <?php echo get_the_category_list(', '); ?>
          </span>
        </p>
      </div>

    <div class="generic-content">

      <?php the_content(); ?>
    </div>
  </div>
<?php








}
get_footer();
?>