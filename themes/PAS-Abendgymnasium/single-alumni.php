<?php

get_header();

while (have_posts()) {
  the_post();
  pageBanner(array(
    // 'title' => 'hello Title',
    'photo' => get_theme_file_uri("images/Friedrich-Ebert-Schule_Front.jpg"),
    'subtitle' => 'Liebe ehemalige Hörerinnen und Hörer der PAS!'
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