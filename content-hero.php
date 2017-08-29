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
            <a class="btn btn-success btn-lg btn-block" href="#my-expertise"><?php echo $optin_button_text; ?></a>
          </div><!-- col -->
        </div><!-- row -->
      </div><!-- container -->
    </section><!-- optin -->
  </section><!-- hero -->
