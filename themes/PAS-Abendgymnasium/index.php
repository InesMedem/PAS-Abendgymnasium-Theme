<?php get_header(); ?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url('<?php echo get_theme_file_uri('images/Friedrich-Ebert-Schule_Front.jpg'); ?>')"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title">Aktuelles</h1>
    <div class="page-banner__intro">
      <p>DONT FORGET TO REPLACE ME LATER</p>
    </div>
  </div>
</div>

<div class="container container--narrow page-section">
  <?php while(have_posts()) : the_post(); ?>
    <div class="post-item">
      <h2><a class="headline headline--medium headline--post-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <div class="metabox">
        <p>Posted By <?php the_author_posts_link();?> on <?php the_time('n/j/y');?> in <?php echo get_the_category_list(', ');?></p>
      </div>

      <div class="generic-content"> 
        <?php
        the_excerpt();
        ?>
        <p><a class="btn btn--blue" href="<?php the_permalink();?>">Continue Reading &raquo</a></p>
      </div>
    </div>
  <?php endwhile; 

echo paginate_links();
  
  ?>

</div>

<?php get_footer(); ?>
