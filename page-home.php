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
          <!-- <h1><//?php bloginfo('name'); ?></h1> -->
          <!-- <p class="lead"><//?php bloginfo('description'); ?></p> -->
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
          <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><?php echo $optin_button_text; ?></button>
        </div><!-- col -->

      </div><!-- row -->
    </div><!-- container -->
  </section><!-- optin -->

</section><!-- hero -->

<!-- PROJECT FEATURES
========================================== -->
<section id="project-features">
  <div class="container">

    <h2 class="title">My Expertise</h2>
    <p class="subtitle">I've got chops in all phases of the design process.</p>
    <div class="row">
      <div class="col-sm-4 expertise-block">
        <i class="fa fa-diamond"></i>
        <h3 class="title">Ideas</h3>
        <p class="paragraph">I collaborate with clients and peers to nurture and transform ideas into well thought out design specs. After all, that's where the majority of amazing user experiences start.</p>
      </div>

      <div class="col-sm-4 expertise-block">
        <i class="fa fa-magic"></i>
        <h3 class="title">UX/UI</h3>
        <p class="paragraph">I sketch and wireframe interfaces focusing on content structure, intuitive UI patterns and simple interactions. I'm a minimalist who truly believes that less is more.</p>
      </div>

      <div class="col-sm-4 expertise-block">
        <i class="fa fa-code"></i>
        <h3 class="title">Code</h3>
        <p class="paragraph">I design in the browser with HTML(5), CSS(3) and a touch of JavaScript. I love coding things from scratch, but I can work with front-end frameworks like Bootstrap too.</p>
      </div>
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.project-features -->

<!-- MY WORK
========================================= -->
<section id="my-work">
  <div class="container">
    <div class="row">
      <h2>My Work</h2>
      <div class="col-sm-6">
        <h3 class="title">Greg Erbs CPA</h3>
        <ul>
          <li>WORDPRESS THEME CUSTOMIZATION</li>
        </ul>
        <p>Greg Erbs is a CPA based in Atlanta, Ga. who
          provides accounting solutions of all types.</p>
        <a class="btn btn-success btn-lg btn-block pull-left" href="gregerbscpa.cldigitaldesign.com">VISIT WEBSITE</a>
      </div><!-- /.col -->

      <div class="col-sm-6">
        <img src="/" alt="">
      </div><!-- /.col -->

    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /#my-work-->

<?php get_footer(); ?>