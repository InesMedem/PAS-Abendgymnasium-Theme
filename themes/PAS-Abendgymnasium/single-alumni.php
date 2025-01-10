<?php

get_header();

while (have_posts()) {
  the_post();
  pageBanner(array(
    // 'title' => 'hello Title',
    'photo' => 'https://static.vecteezy.com/vite/assets/photo-masthead-375-BoK_p8LG.webp',
    'subtitle' => 'Unsere Hörer*innen'
  ));

?>

  <div class="container container--narrow page-section">
    <div class="generic-content">
      <?php the_content();
      ?>
    </div>
  </div>


<?php }

get_footer();

?>