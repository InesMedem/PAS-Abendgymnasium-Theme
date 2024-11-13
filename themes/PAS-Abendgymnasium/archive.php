<?php get_header(); 
  pageBanner(array(
    'title' => get_the_archive_title(),
    'photo' => get_theme_file_uri('images/Friedrich-Ebert-Schule_Front.jpg'),
    'subtitle' =>  get_the_archive_description(),
));

?>

<div class="container container--narrow page-section">
  <?php while (have_posts()) : the_post(); ?>
    <div class="post-item">
      <h2><a class="headline headline--medium headline--post-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <div class="metabox">
        <p>Posted By <?php the_author_posts_link(); ?> on <?php the_time('n/j/y'); ?> in <?php echo get_the_category_list(', '); ?></p>
      </div>

      <div class="generic-content">
        <?php
        the_excerpt();
        ?>
        <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue Reading &raquo</a></p>
      </div>
    </div>
  <?php endwhile;

  echo paginate_links();

  ?>

</div>

<?php get_footer(); ?>