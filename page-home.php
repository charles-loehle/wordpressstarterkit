<?php
/*
 Template Name: Home Page
*/

get_header(); ?>

<?php
$optin_button_text = get_field('optin_button_text');
?>



<!-- HERO
===================================== -->
  <section id="hero">
    <article>
      <div class="container clearfix">
        <div class="row">
          <div class="col-sm-12 hero-text">
            <h1 class="headline-type">Welcome To CL Digital Design.<br> I design and build</h1>
            <div id="typed-strings">
                <p>landing pages.</p>
                <p>business websites.</p>
            </div>
            <div class="typing-area">
              <span id="typed"></span>
            </div>
          </div><!--hero text -->
        </div><!-- row -->
      </div><!-- container -->
    </article>

    <!-- OPT IN SECTION
    ====================================== -->
    <section id="optin">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <a class="btn btn-success btn-lg btn-block" href="#contact"><?php echo $optin_button_text; ?></a>
          </div><!-- col -->
        </div><!-- row -->
      </div><!-- container -->
    </section><!-- optin -->
  </section><!-- hero -->

<!-- MY EXPERTISE
========================================== -->
  <section id="my-expertise">
    <div class="container">
      <h2 class="my-expertise-title">My Expertise</h2>
      <p class="my-expertise-subtitle">I've got chops in all phases of the design process.</p>
      <div class="row">
        <div class="col-sm-4 expertise-block">
          <i class="fa fa-diamond"></i>
          <h3 class="my-expertise-title">Website Design</h3>
          <p class="my-expertise-paragraph">Our approach to website design is to create a website that strengthens your company’s brand while ensuring ease of use and simplicity for your audience.</p>
        </div>

        <div class="col-sm-4 expertise-block">
          <i class="fa fa-wordpress" aria-hidden="true"></i></i>
          <h3 class="my-expertise-title">Wordpress Development</h3>
          <p class="my-expertise-paragraph">Wordpress CMS is a user-friendly administrative area allowing you to easily edit your website's content.</p>
        </div>

        <div class="col-sm-4 expertise-block">
          <i class="fa fa-code"></i>
          <h3 class="my-expertise-title">Modern Technologies</h3>
          <p class="my-expertise-paragraph">I have knowledge of multiple fields such as HTML5, CSS3, Javascript, Jquery, PHP and MySQL. These allow me to work on a project producing a more cohesive experience for users.</p>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /#my-expertise -->

<!-- MY WORK
========================================= -->
  <section id="my-work">
    <div class="container">
      <div class="row">
        <h2 class="my-work-title">My Work</h2>

          <div class="my-work-text col-sm-6">
            <h3 class="my-work-title">Greg Erbs CPA</h3>
            <ul>
              <li>WORDPRESS THEME CUSTOMIZATION, HTML5, CSS3, JAVASCRIPT, JQUERY, BOOTSTRAP</li>
            </ul>
            <p class="my-work-paragraph">Greg Erbs is a CPA based in Atlanta, Ga. who
              provides accounting solutions of all types.</p>
              <a class="btn btn-success btn-lg btn-block" href="http://gregerbscpa.cldigitaldesign.com/">VISIT WEBSITE</a>
          </div><!-- /.col -->

          <div class="my-work-pic col-sm-6">
            <div class="wrapper thumbnail">
              <a href="http://gregerbscpa.cldigitaldesign.com/">
                <img src="http://localhost/wordpress-starter-kit/wp-content/uploads/2017/06/gregerbscpa-desktop-cropped-1.png">
                <div class="overlay">
                  <div class="content">
                    <i class="fa fa-plus fa-3x"></i>
                  </div>
                </div>
              </a>
            </div><!-- wrapper -->
          </div><!-- /.col -->
          <hr>

          <div class="my-work-text col-sm-6">
            <h3 class="my-work-title">Clear View Escapes</h3>
            <ul>
              <li>HTML5, CSS3, JAVASCRIPT, JQUERY</li>
            </ul>
            <p class="my-work-paragraph">Clear View Escapes is a mock travel agency site designed to display coding abilities in
            several different realms.</p>
            <a class="btn btn-success btn-lg btn-block" href="https://clguitar1.github.io/travel-site/">VISIT WEBSITE</a>
          </div><!-- /.col -->

          <div class="my-work-pic col-sm-6">
            <div class="wrapper work-pic thumbnail">
              <a href="https://clguitar1.github.io/travel-site/">
                <img src="http://localhost/wordpress-starter-kit/wp-content/uploads/2017/06/travel-site-desktop-again-resized.png">
                <div class="overlay">
                  <div class="content">
                    <i class="fa fa-plus fa-3x"></i>
                  </div>
                </div>
              </a>
            </div><!-- wrapper -->
          </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /#my-work-->

<?php get_footer(); ?>
