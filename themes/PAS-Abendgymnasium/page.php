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

    <?php
    $theParent = wp_get_post_parent_id(get_the_ID());
    if ($theParent) {
    ?>
      <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" href="
          <?php echo get_the_permalink($theParent); ?>
          "><i class="fa fa-home" aria-hidden="true"></i> Zurück zu <?php
                                                                    echo get_the_title($theParent);
                                                                    ?></a>
          <span class="metabox__main"><?php the_title(); ?></span>
        </p>
      </div>
    <?php
    }
    ?>

    <?php

    // Check if the current page has any children
    $child_pages = get_pages(array(
      'child_of' => get_the_ID(),
      'post_type' => 'page'
    ));


    if ($child_pages or $theParent) {

    ?>
      <div class="page-links">
        <h3 class="page-links__title"><a href="#"><?php echo get_the_title($theParent) ?></a></h3>
        <ul class="min-list">
          <?php

          if ($theParent) {
            $findChildrenOf = $theParent;
          } else {
            $findChildrenOf = get_the_ID();
          }
          wp_list_pages(array(
            'title_li' => NULL,
            'child_of' => $findChildrenOf,
            'depth' => 2
          ));
          ?>
        </ul>
      </div>
    <?php

    }

    ?>
    <div class="generic-content">
      <?php the_content();
      ?>
    </div>
  </div>

<?php }

get_footer();

?>