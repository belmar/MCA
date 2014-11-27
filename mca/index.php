<?php /* Template Name: Home */

m("head");

?>


  <section id="slider-parallax">
    <div class="wrap row">
        <div class="col-md-7">
          <h1>Change Your Thinking - Change Your Life</h1>
          <h3>The affordable Mind Coaching Membership site that can transform your life in 90 days</h3>
          <a class="button-style-1" href="#">Watch the Video</a>
        </div>
    </div>
  </section>

  <section id="container" class="video-subscribe black">
    <div class="wrap row">
        <div class="col-md-7">
          <img src="<?php bloginfo("stylesheet_directory"); ?>/images/video-image.png" width="100%" />
        </div>
        <div class="col-md-5">
          <h2>FREE: How to unleash the powers of your mind</h2>

          <p>Download My Special MindShifting PDF Report Now.</p>
          <p>Sign up today!</p>

          <?php echo do_shortcode('[contact-form-7 id="22" title="Contact form 1"]'); ?>


        </div>
    </div>
  </section>

  <section id="container" class="white">
    <div class="wrap row">
        <div class="col-md-12">
          <h2 class="text-center">Anything Really is Possible<br />
          <strong>Powerful Mind Coaching to Kick-Start<br />Your Life in 90-Days</strong></h2>
          <br />
          <h3>Everything Starts in Your Mind</h3><br />
          <p>
            If you have reached that point in life where you have ‘had enough’ or you are filled with the desire to create moresuccess and happiness in your life, then you couldn’t be at a better site than you are now.
  <br /><br />
  Fast, powerful coaching techniques, using new MindShifting technology, combined with NLP and Timeline Therapytechniques together with my 10 years coaching experience 
          </p>
        </div>
    </div>
  </section>

  <section id="courses-seminars-books">
    <div class="wrap row">
        <div class="col-sm-3">
          <span class="icon-courses"></span>
        </div>
        <div class="col-sm-9">
          <h4>Courses, Seminars, Books</h4>
          <p>
          Robert has various courses for sale and his bestseller, “Ignite the Spark Explode Your Results” is also available on Amazon. Of course, as a member, you get allcourses for free and any live event is heavily discounted.</p><br />
          <p>For a list of courses, live seminars and books available please go here
          <a href="#"> <span class="icon-hyperlink"></span> Click the link</a></p>
          </p>
        </div>
    </div>
  </section>

  <section id="container" class="white our-client">
    <div class="wrap row">
        <a class="client-logo" href="#"><img src="<?php bloginfo("stylesheet_directory"); ?>/images/client1.png"></a>
        <a class="client-logo" href="#"><img src="<?php bloginfo("stylesheet_directory"); ?>/images/client2.png"></a>
        <a class="client-logo" href="#"><img src="<?php bloginfo("stylesheet_directory"); ?>/images/client3.png"></a>
        <a class="client-logo" href="#"><img src="<?php bloginfo("stylesheet_directory"); ?>/images/client4.png"></a>
    </div>
  </section>

  <section id="container" class="grey social-icons">
    <div class="wrap row">
        <h3 class="text-center">CONNECT WITH US</h3><br />
        <?php if($url=genesis_get_option( 'facebook', 'social-media-settings' )){echo '<a href="'.$url.'"><span class="icon-facebook"></span></a>'; } ?>
        <?php if($url=genesis_get_option( 'instagram', 'social-media-settings' )){echo '<a href="'.$url.'"><span class="icon-instagram"></span></a>'; } ?>
        <?php if($url=genesis_get_option( 'pinterest', 'social-media-settings' )){echo '<a href="'.$url.'"><span class="icon-pinterest"></span></a>'; } ?>
        <?php if($url=genesis_get_option( 'twitter', 'social-media-settings' )){echo '<a href="'.$url.'"><span class="icon-twitter"></span></a>'; } ?>
        <?php if($url=genesis_get_option( 'linkedin', 'social-media-settings' )){echo '<a href="'.$url.'"><span class="icon-linkedin"></span></a>'; } ?>
        <?php if($url=genesis_get_option( 'google', 'social-media-settings' )){echo '<a href="'.$url.'"><span class="icon-google"></span></a>'; } ?>
        <?php if($url=genesis_get_option( 'youtube', 'social-media-settings' )){echo '<a href="'.$url.'"><span class="icon-youtube"></span></a>'; } ?>
        <?php if($url=genesis_get_option( 'flickr', 'social-media-settings' )){echo '<a href="'.$url.'"><span class="icon-flickr"></span></a>'; } ?>
        <?php if($url=genesis_get_option( 'foursquare', 'social-media-settings' )){echo '<a href="'.$url.'"><span class="icon-foursquare"></span></a>'; } ?>
    </div>
  </section>

<?php

m("foot");

?>

  