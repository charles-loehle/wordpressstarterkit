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
<section id="hero" data-type="background" data-speed="5">
<article>
  <div class="container clearfix">
    <div class="row">

      <div class="col-sm-12 hero-text">
        <h1><?php bloginfo('name'); ?></h1>
        <p class="lead"><?php bloginfo('description'); ?></p>

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





<!-- <//?php
$project_feature_title = get_field('project_feature_title');
$project_feature_body = get_field('project_feature_body');
?> -->

<!-- PROJECT FEATURES
========================================== -->
<section id="project-features">
  <div class="container">


    <h2><?php echo $project_feature_title; ?></h2>
    <p class="lead"><?php $project_feature_body; ?></p>

    <div class="row">

      <?php $loop = new WP_Query( array( 'post_type' => 'project_feature', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

      <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

      <div class="col-sm-4">

        <?php

          if ( has_post_thumbnail() ) {
               the_post_thumbnail();
             }
          ?>

          <h3><?php the_title(); ?></h3>
          <p><?php the_content(); ?></p>
      </div><!-- /.col -->

      <?php endwhile; wp_reset_query(); ?>

    </div><!-- /.row -->

  </div><!-- /.container -->
</section><!-- /.project-features -->

<!-- <//?php
$video_featurette_title = get_field('video_featurette_title');
$video_featurette_link = get_field('video_featurette_link');
?> -->

<!-- VIDEO FEATURETTE
======================================= -->
<section id="featurette">
<div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <h2><?php echo $video_featurette_title; ?></h2>
      <?php echo $video_featurette_link; ?>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container -->
</section><!-- /.featurette -->

<!-- < //?php
$income_feature_image	= get_field('income_feature_image');
$income_section_title = get_field('income_section_title');
$column_1_title       = get_field('column_1_title');
$column_1_descr       = get_field('column_1_description');
$column_2_title       = get_field('column_2_title');
$column_2_descr       = get_field('column_2_description');
?> -->

<!-- BOOST YOUR INCOME
========================================= -->
<section id="boost-income">
<div class="container">
  <div class="section-header">

    <!-- If feature image exists -->
    <?php if( !empty($income_feature_image) ) : ?>

    <img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt']; ?>">

    <?php endif; ?>

    <h2><?php echo $income_section_title; ?></h2>
  </div><!-- /.section-header -->

  <p class="lead"><?php $income_section_descr; ?></p>

  <div class="row">
    <div class="col-sm-6">
      <h3><?php echo $column_1_title; ?></h3>
      <p><?php echo $column_1_descr; ?></p>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <h3><?php echo $column_2_title; ?></h3>
      <p><?php echo $column_2_descr; ?></p>
    </div><!-- /.col -->


  </div><!-- /.row -->

</div><!-- /.container -->
</section><!-- /.boost-income -->

<!-- <//?php
$who_section_image    = get_field('who_section_image');
$who_section_title    = get_field('who_section_title');
$who_section_body     = get_field('who_section_body');
?> -->

<!-- WHO BENEFITS
======================================== -->
<section id="who-benefits">
<div class="container">

  <div class="section-header">

    <!-- If feature image exists -->
    <?php if( !empty($who_section_image) ) : ?>

    <img src="<?php echo $who_section_image['url']; ?>" alt="<?php echo $who_section_image['alt']; ?>">

    <?php endif; ?>

    <h2><?php echo $who_section_title; ?></h2>
  </div><!-- /.section-header -->

  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">

      <?php echo $who_section_body; ?>

    </div><!-- /.col -->
  </div><!-- /.row -->

</div><!-- /.container -->
</section><!-- /.who-benefits -->

<!-- <//?php
$features_section_image = get_field('features_section_image');
$features_section_title = get_field('features_section_title');
$features_section_body  = get_field('features_section_body');
?> -->

<!-- COURSE FEATURES
======================================= -->
<section id="course-features">
  <div class="container">

    <div class="section-header">

      <!-- If user uploaded an image -->
      <?php if( !empty($features_section_image) ) : ?>

      <img src="<?php echo $features_section_image['url']; ?>" alt="<?php echo $features_section_image['alt']; ?>">

      <?php endif; ?>

      <h2><?php echo $features_section_title; ?></h2>

      <!-- If user added body text -->
      <?php if( !empty($features_section_body) ) : ?>

      <p class="lead"><?php echo $features_section_body; ?></p>

      <?php endif; ?>

    </div><!-- /.section-header" -->

    <div class="row">

      <?php $loop = new WP_Query( array( 'post_type' => 'course_feature', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

      <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

      <div class="col-sm-2">
        <i class="<?php the_field('course_feature_icon'); ?>"></i>
        <h4><?php the_title(); ?></h4>
      </div><!-- /.col -->

      <?php endwhile; wp_reset_query(); ?>

    </div><!-- /.row -->

  </div><!-- /.container -->
</section><!-- /.course-features -->

<!-- <//?php
$instructor_section_title = get_field('instructor_section_title');
$instructor_name = get_field('instructor_name');
$bio_excerpt = get_field('bio_excerpt');
$full_bio = get_field('full_bio');
$twitter_username = get_field('twitter_username');
$facebook_username = get_field('facebook_username');
$google_plus_username = get_field('google_plus_username');
$num_students = get_field('num_students');
$num_reviews = get_field('num_reviews');
$num_courses = get_field('num_courses');
?> -->

<!-- INSTRUCTOR ==================================== -->
<section id="instructor">
<div class="container">
  <div class="row">
    <div class="col-sm-8 col-md-6">
      <div class="row">
        <div class="col-lg-8">
          <h2><?php echo $instructor_section_title; ?> <small><?php echo $instructor_name; ?></small></h2>
        </div><!-- /.col-sm-8 -->

        <div class="col-lg-4">
          <?php if( !empty($twitter_username) ) : ?>
          <a href="https://twitter.com/<?php echo $twitter_username; ?>" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
        <?php endif; ?>

        <?php if( !empty($facebook_username) ) : ?>
          <a href="https://facebook.com/<?php echo $facebook_username; ?>" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
        <?php endif; ?>

        <?php if( !empty($google_plus_username) ) : ?>
          <a href="https://plus.google.com/<?php echo $google_plus_username; ?>" target="_blank" class="badge social gplus"><i class="fa fa-google-plus"></i></a>
        <?php endif; ?>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <p class="lead"><?php echo $bio_excerpt; ?></p>

      <?php echo $full_bio; ?>

      <hr>

      <h3> Sed lacinia <small>Suspendisse potenti.</small></h3>

      <div class="row">
        <div class="col-xs-4">
          <div class="num">
            <div class="num-content"><?php echo $num_students; ?><span>consequat</span>
            </div><!-- /.num-content -->
          </div><!-- /.num -->
        </div><!-- /.col-xs-4-->

        <div class="col-xs-4">
          <div class="num">
            <div class="num-content"><?php echo $num_reviews; ?><span>tellus</span>
            </div><!-- /.num-content -->
          </div><!-- /.num -->
        </div><!-- /.col-xs-4-->

        <div class="col-xs-4">
          <div class="num">
            <div class="num-content"><?php echo $num_courses; ?><span>mi a</span>
            </div><!-- /.num-content -->
          </div><!-- /.num -->
        </div><!-- /.col-xs-4-->
      </div><!-- /.row -->

    </div><!-- /.col-sm-8 -->
  </div><!-- /.row -->
</div><!-- /.container -->
</section><!-- /.instructor -->

<!-- TESTIMONIALS ============================-->
<section id="kudos">
<div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">

      <h2>What People Are Saying About CL Digital Design</h2>

      <?php $loop = new WP_Query( array( 'post_type' => 'testimonial', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

      <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

        <!-- TESTIMONIAL -->
        <div class="row testimonial">
          <div class="col-sm-4">

            <?php
              if ( has_post_thumbnail() ) { // check for feature image
                the_post_thumbnail( array( 200, 200 ) );
              }
            ?>

          </div><!-- /.col-sm-4 -->
          <div class="col-sm-8">
            <blockquote>
              <?php the_content(); ?>
              <cite>&mdash; <?php the_title(); ?></cite>
            </blockquote>
          </div><!-- /.col-sm-8 -->
        </div><!-- /.row -->

      <?php endwhile; wp_reset_query(); ?>

    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container -->
</section><!-- /#kudos -->


<?php get_footer(); ?>
