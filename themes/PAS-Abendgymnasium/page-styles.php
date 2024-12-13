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
      <h1 style="margin-bottom: 0.5em; font-weight: 700;">Typografie-Leitfaden</h1>
      <p style="margin-bottom: 2em; font-size: 1rem;">
        Dieser Leitfaden zeigt die typografischen Standards unserer Website.
        Wir verwenden die Schriftart <strong>Poppins</strong>, eine elegante und moderne Sans-Serif-Schriftart,
        die für Lesbarkeit und Stil optimiert ist. Alle Elemente erben standardmäßig den festgelegten Font-Weight.
      </p>

      <!-- <h1>h1 – Überschrift 1</h1>
      <p>Verwendet den standardmäßigen Font-Weight für eine auffällige Hauptüberschrift.</p>

      <h2>h2 – Überschrift 2</h2>
      <p>Perfekt für Sektionen und Unterüberschriften.</p>

      <h3>h3 – Überschrift 3</h3>
      <p>Wird für kleinere Überschriften oder wichtige Absätze verwendet.</p>

      <h4>h4 – Überschrift 4</h4>
      <p>Gut geeignet für Nebenüberschriften oder detaillierte Inhalte.</p>

      <h5>h5 – Überschrift 5</h5>
      <p>Kleinere, weniger prominente Überschrift für unterstützende Texte.</p>

      <h6>h6 – Überschrift 6</h6>
      <p>Die kleinste Überschrift für dezente Hinweise oder Fußnoten.</p> -->

      <h2>Bearbeitung in WordPress Gutenberg</h2>
      <p>Diese Schriftgrößen entsprechen den Optionen, die Sie im WordPress Gutenberg-Editor verwenden können. Beim Bearbeiten des Inhalts können Sie die Schriftgrößen direkt auswählen, um Ihre Überschriften und Texte anzupassen.</p>

      <!-- X-Large Font Size -->
      <p class="has-x-large-font-size" style=" margin: 0px;">X-Large Schriftgröße</p>

      <!-- Large Font Size -->
      <p class="has-large-font-size" style="  margin: 0px;">Large Schriftgröße</p>
     
      <!-- Medium Font Size -->
      <p class="has-medium-font-size" style="  margin: 0px;">Medium Schriftgröße</p>

      <!-- Small Font Size -->
      <p class="has-small-font-size">Small Schriftgröße</p>


      <h2>Buttons Großer</h2>


      <!-- <a href="#" class="btn btn--orange">Oranger Button</a>
      <p>Der orange Button verwendet einen Verlauf und hebt sich durch seine warme Farbgebung hervor. Ideal für Call-to-Action (CTA) Elemente.</p>


      <a href="#" class="btn btn--blue">Blauer Button</a>
      <p>Der blaue Button nutzt das Hauptblau der Seite. Er eignet sich gut für wichtige Aktionen oder Links.</p>

      <h3>Button Größen</h3> -->

      <!-- Large Button -->
      <a href="#" class="btn btn--orange btn--large">Großer Oranger Button</a>
      <p>Der große Button hat eine größere Schriftgröße und mehr Padding. Perfekt für prominente Call-to-Action-Elemente.</p>

      <!-- Medium Button -->
      <a href="#" class="btn btn--blue btn--medium">Mittlerer Blauer Button</a>
      <p>Der mittlere Button hat eine ausgewogene Größe, die sowohl für kurze als auch für längere Texte geeignet ist.</p>

      <!-- Small Button -->
      <a href="#" class="btn btn--blue btn--small">Kleiner Blauer Button</a>
      <p>Der kleine Button eignet sich für weniger auffällige Aktionen und schmalere Textinhalte. Ideal für sekundäre Aktionen.</p>


      <h1>Markenfarben Style Guide</h1>
      <div class="color-grid">
        <div class="color-item">
          <div class="color-swatch" style="background-color: #f5f5f5;"></div>
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
          <div class="color-swatch" style="background: #ee964b"></div>
          <div class="color-details">
            <div class="color-name">$orangeMix</div>
            <div class="color-hex">#f95738</div>
          </div>
        </div>

      </div>

    </div>

  </div>

<?php }
get_footer();

?>