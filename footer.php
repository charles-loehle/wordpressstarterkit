<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wordpress_Starter_Kit
 */

?>

<?php wp_footer(); ?>

<!-- SIGN UP SECTION -->
<section id="signup" data-type="background" data-speed="4">
<div class="container">
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3">
      <h2>Subscribe to our <strong>mailing list.</strong></h2>
      <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">Click here</button>

    </div><!-- /col-->
  </div><!-- /row -->
</div><!-- /container -->
</section><!-- /#signup -->

<!-- FOOTER -->
<!-- ==================================== -->
<footer>
<div class="container">
  <div class="col-sm-3">
    <p><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/cldigitaldesign-logo2.png" alt="bootstrap to wordpress"></a></p>
  </div><!-- /col -->
  <div class="col-sm-6">
    <?php
      wp_nav_menu( array(
        'display_location'  => 'footer',
        'container'       => 'nav',
        'menu_class'      => 'list-unstyled list-inline'
      ) );
    ?>
  </div><!-- /col -->
  <div class="col-sm-3">
    <p class="pull-right">&copy; 2017 Charles Loehle</p>
  </div><!-- /col -->
</div><!-- /container -->
</footer>

<!-- MODAL -->
<div class="modal fade" id="myModal">
<div class="modal-dialog">
  <div class="modal-content">

    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i>Subscribe to our mailing list</h4>
    </div><!-- /.modal-header -->

    <div class="modal-body">
      <p>Enter your name and email!</p>

        <form class="form-inline" role="form">
          <div class="form-group">
            <label class="sr-only" for="subscribe-name">Your first name</label>
            <input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
          </div><!-- /.form-group -->
          <div class="form-group">
            <label class="sr-only" for="subscribe-email">and your email</label>
            <input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
          </div><!-- /.form-group -->

          <input type="submit" class="btn btn-danger" value="Subscribe!">
      </form>

      <hr>

      <p>By providing your email you consent to receiving occasional promotional emails &amp; newsletters. <br> No Spam. Just goood stuff. We respect your privacy &amp; you may unsubscribe at any time</p>
    </div><!-- /.modal-BODY -->
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- BOOTSTRAP CORE JAVASCRIPT placed at the end of the document so the pages load faster
=========================================================================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/dist/jquery-2.1.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/dist/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/dev/scripts.js"></script>

</body>
</html>
