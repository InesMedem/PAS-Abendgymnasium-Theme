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

<div>
  <h1>HEADLINE</h1>
  <h1 class="headline headline--large">
    Large Headline 
  </h1> <p>font-weight: 400 /* Slightly bold */ </p>

  <h2 class="headline headline--large-medium">
    Large-Medium Headline 
  </h2> <p>font-weight: 200 /* Regular */</p>

  <h3 class="headline headline--medium">
    Medium Headline 
  </h3><p>font-weight: 500 /* Medium */</p>

  <h4 class="headline headline--small-plus">
    Small-Plus Headline 
  </h4> <p>font-weight: 400 /* Slightly bold */ </p>

  <h5 class="headline headline--small">
    Small Headline 
  </h5>  <p>font-weight: 300 /* Light */ </p>


  <h6 class="headline headline--smaller">
    Smaller Headline 
  </h6>  <p>font-weight: 200 /* Extra Light */ </p>

  <p class="headline headline--tiny">
    This is Tiny Text 
  </p> <p>font-weight: 300 /* Light */ and italic </p>

  <h1>
    h1 (inherits font-weight: default)
  </h1>

  <h2>
    h2 (inherits font-weight: default)
  </h2>

  <h3>
    h3 (inherits font-weight: default)
  </h3>

  <h4>
    h4 (inherits font-weight: default)
  </h4>

  <h5>
    h5 (inherits font-weight: default)
  </h5>

  <h6>
    h6 (inherits font-weight: default)
  </h6>

  <p>
    paragraph (inherits font-weight: default)
  </p>

  <p class="has-x-large-font-size">
    Has X-large font size (inherits font-weight: default)
  </p>
  <p class="has-large-font-size">
    Has large font size (inherits font-weight: default)
  </p>
  <p class="has-medium-font-size">
    Has medium font size (inherits font-weight: default)
  </p>
  <p class="has-small-font-size">
    Has small font size (inherits font-weight: default)
  </p>

  <h1>Brand Colors Style Guide</h1>
  <div class="color-grid">
  <div class="color-item">
      <div class="color-swatch" style="background-color: #fffaf2;"></div>
      <div class="color-details">
        <div class="color-name">$whitesmoke</div>
        <div class="color-hex">#f5f5f5</div>
      </div>
    </div>
    <div class="color-item">
      <div class="color-swatch" style="background-color: #faf0ca;"></div>
      <div class="color-details">
        <div class="color-name">$beige</div>
        <div class="color-hex">#faf0ca</div>
      </div>
    </div>
    <div class="color-item">
      <div class="color-swatch" style="background-color: #f4d35e;"></div>
      <div class="color-details">
        <div class="color-name">$mainYellow</div>
        <div class="color-hex">#f4d35e</div>
      </div>
    </div>
    <div class="color-item">
      <div class="color-swatch" style="background-color: #0d3b66;"></div>
      <div class="color-details">
        <div class="color-name">$mainBlue</div>
        <div class="color-hex">#0d3b66</div>
      </div>
    </div>
    <div class="color-item">
      <div class="color-swatch" style="background-color: #2d8180;"></div>
      <div class="color-details">
        <div class="color-name">$teal</div>
        <div class="color-hex">#2d8180</div>
      </div>
    </div>
    <div class="color-item">
      <div class="color-swatch" style="background-color: #ee964b;"></div>
      <div class="color-details">
        <div class="color-name">$lightOrange</div>
        <div class="color-hex">#ee964b</div>
      </div>
    </div>
    <div class="color-item">
      <div class="color-swatch" style="background-color: #f95738;"></div>
      <div class="color-details">
        <div class="color-name">$darkOrange</div>
        <div class="color-hex">#f95738</div>
      </div>
    </div>

  </div>

</div>


  <!-- <div>


    <h1>HEADLINE</h1>
    <h1 class="headline headline--large">
      This is a Large Headline
    </h1>

    <h2 class="headline headline--large-medium">
      This is a Large-Medium Headline
    </h2>

    <h3 class="headline headline--medium">
      This is a Medium Headline
    </h3>

    <h4 class="headline headline--small-plus">
      This is a Small-Plus Headline
    </h4>

    <h5 class="headline headline--small">
      This is a Small Headline
    </h5>

    <h6 class="headline headline--smaller">
      This is a Smaller Headline
    </h6>

    <p class="headline headline--tiny">
      This is Tiny Text (with "Roboto" font)
    </p>

    <h1>
      This is a h1
    </h1>

    <h2>
      This is a h2
    </h2>

    <h3>
      This is a h3
    </h3>

    <h4>
      This is a h4
    </h4>

    <h5>
      This is a h5
    </h5>

    <h6>
      This is a h6
    </h6>

    <p>
      This is paragraph
    </p>

    <p class="has-x-large-font-size"> Has X-large font size </p>
    <p class="has-large-font-size"> Has large font size </p>
    <p class="has-medium-font-size"> Has medium font size </p>
    <p class="has-small-font-size"> Has small font size </p>

  </div> -->
  <div>

    <!-- Orange Button -->
    <a href="#" class="btn btn--orange">Orange Button</a>

    <!-- Blue Button -->
    <a href="#" class="btn btn--blue">Blue Button</a>

  </div>


</div>

<?php }
get_footer();

?>