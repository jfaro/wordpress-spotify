<?php get_header(); ?>

<!-- Page content wrapper -->
<div id="page-content">

  <!-- Left panel -->
  <div id="left-panel">
    <div>
      <img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/spotify-logo.svg" />
      <div class="page-link-button">
        <ion-icon name="home-sharp"></ion-icon>
        Home
      </div>
      <div class="page-link-button">
        <ion-icon name="search-sharp"></ion-icon>
        Search
      </div>
      <div class="page-link-button">
        <ion-icon name="library-sharp"></ion-icon>
        Your Library
      </div>
    </div>
  </div>

  <!-- Main content -->
  <div id="page-center">
    Center
  </div>
</div>

<!-- Bottom action area -->
<div id="bottom-panel">
  <div>
    Left
  </div>
  <div>
    Mid
  </div>
  <div>
    Right
  </div>
</div>

<?php get_footer(); ?>