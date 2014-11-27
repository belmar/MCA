

<footer>
    <div class="wrap row">
      <div class="col-md-6">
        <?php wp_nav_menu( array( 'menu' => 'Main Menu') ); ?>
      </div>
      <div class="col-md-6">
        <p>© 2014 The Mind Coaching Academy. All rights reserved. Designed by Spurpress.</p>
      </div>
    </div>
  </footer>
</span>
<?php wp_footer(); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php bloginfo("stylesheet_directory"); ?>/js/jquery.js"></script>
    <script type="text/javascript">
        var dir = "<?php bloginfo("stylesheet_directory"); ?>/images/";
    </script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo("stylesheet_directory"); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo("stylesheet_directory"); ?>/js/html5Preloader.js"></script>
    <script src="<?php bloginfo("stylesheet_directory"); ?>/js/rotary_extension.js"></script>
    <script src="<?php bloginfo("stylesheet_directory"); ?>/js/main.js"></script>
  </body>
</html>