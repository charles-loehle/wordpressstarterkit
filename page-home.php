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
            <h1 class="headline-type">Hi, I'm Charles. I design and build</h1>
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
          <h3 class="my-expertise-title">Ideas</h3>
          <p class="my-expertise-paragraph">I collaborate with clients and peers to nurture and transform ideas into well thought out design specs. After all, that's where the majority of amazing user experiences start.</p>
        </div>

        <div class="col-sm-4 expertise-block">
          <i class="fa fa-magic"></i>
          <h3 class="my-expertise-title">UX/UI</h3>
          <p class="my-expertise-paragraph">I sketch and wireframe interfaces focusing on content structure, intuitive UI patterns and simple interactions. I'm a minimalist who truly believes that less is more.</p>
        </div>

        <div class="col-sm-4 expertise-block">
          <i class="fa fa-code"></i>
          <h3 class="my-expertise-title">Code</h3>
          <p class="my-expertise-paragraph">I design in the browser with HTML(5), CSS(3) and a touch of JavaScript. I love coding things from scratch, but I can work with front-end frameworks like Bootstrap too.</p>
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
            <a class="btn btn-success btn-lg btn-block pull-left" href="http://gregerbscpa.cldigitaldesign.com/">VISIT WEBSITE</a>
          </div><!-- /.col -->

          <div class="col-sm-6">
            <div class="wrapper work-pic thumbnail">
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
            <a class="btn btn-success btn-lg btn-block pull-left" href="https://clguitar1.github.io/travel-site/">VISIT WEBSITE</a>
          </div><!-- /.col -->

          <div class="col-sm-6">
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
