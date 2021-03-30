<div class="mBanner">
  <div class="mBannerCover">
    <h1><?php echo get_bloginfo( 'description' ) ?></h1>
  </div>
</div>

<div class="subBanner">
  <h1 style="text-align:center;font-weight:390;margin-top:40px;margin-bottom:20px;">Our Services/Features</h1>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <div class="featureBox">
          <div class="feature-content">
            <img class="feature-icon" src="<?php echo get_template_directory_uri() ?>/images/feature.png">
            <h4 class="feature-title">
              Responsive Design
            </h4>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <div class="featureBox">
          <div class="feature-content">
            <img class="feature-icon" src="<?php echo get_template_directory_uri() ?>/images/feature.png">
            <h4 class="feature-title">
              Custom Design
            </h4>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <div class="featureBox">
          <div class="feature-content">
            <img class="feature-icon" src="<?php echo get_template_directory_uri() ?>/images/feature.png">
            <h4 class="feature-title">
              Wordpress Ready
            </h4>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container" style="margin-top:50px;">
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <ul class="noStyleList">
          <?php
          // Define our WP Query Parameters
          $the_query = new WP_Query( 'posts_per_page=1' ); ?>


          <?php
          // Start our WP Query
          while ($the_query -> have_posts()) : $the_query -> the_post();
          // Display the Post Title with Hyperlink
          ?>
          <h3 style="text-align:left;font-weight:450;margin-top:40px;margin-bottom:0px;color:var(--darkColor);"><?php the_title(); ?></h3>
          <h5 style="text-align:left;font-weight:390;margin-top:10px;margin-bottom:20px;">
            <?php
            // Display the Post Excerpt
            the_excerpt(__('(more…)')); ?>

            <a href="<?php the_permalink() ?>">Read More</a>
          </h5>
          <?php
          // Repeat the process and reset once it hits the limit
          endwhile;
          wp_reset_postdata();
          ?>
        </ul>
      </div>

      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <h3 style="text-align:left;font-weight:450;margin-top:40px;margin-bottom:0px;color:var(--primaryColor);">Recent Posts</h3>


        <ul class="noStyleList">
          <?php
          // Define our WP Query Parameters
          $the_query = new WP_Query( 'posts_per_page=5' ); ?>


          <?php
          // Start our WP Query
          while ($the_query -> have_posts()) : $the_query -> the_post();
          // Display the Post Title with Hyperlink
          ?>
          <div class="popularPost">
            <li>
              <a href="<?php the_permalink() ?>">
                <h5 style="text-align:left;font-weight:450;margin-top:20px;color:var(--primaryColor);"><?php the_title(); ?></h5>
              </a>
            </li>

          </div>
          <?php
          // Repeat the process and reset once it hits the limit
          endwhile;
          wp_reset_postdata();
          ?>
        </ul>

      </div>
    </div>
  </div>


  <div class="container" style="margin-top:50px;">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
        <button onclick="window.location.href='<?php echo get_site_url() ?>/blog.php'" class="btn blogBtn">READ MORE ON OUR BLOG</button>
      </div>
    </div>
  </div>



  <div class="container" style="margin-top:50px;">
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <img src="<?php echo get_template_directory_uri() ?>/images/support.png" width="100%">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <h2 style="text-align:left;font-weight:390;margin-top:20px;margin-bottom:10px;">Why Choose Us?</h2>
        <h3 style="padding-left:10px;border-left:6px solid black;text-align:left;font-weight:390;margin-top:20px;margin-bottom:10px;color:var(--primaryColor);">
          We offer quality services and products with 24/7 customer support which keeps us ahead of other
          providers in this industry
        </h3>
      </div>
    </div>
  </div>

  <div class="container" style="margin-top:50px;">
    <h2 style="text-align:center;font-weight:390;margin-top:40px;margin-bottom:20px;">Our Team</h2>
    <div class="row">
      <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 text-center">
        <div class="teamBox">
          <img class="rounded-circle" src="<?php echo get_template_directory_uri() ?>/images/team1.jpg" width="150px" height="150px"><hr>
          <h4 style="font-weight:390;">John Doe</h4>
          <h5 style="font-weight:390;color:var(--primaryColor);"><b>C.E.O</b></h5>
        </div>
      </div>

      <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 text-center">
        <div class="teamBox">
          <img class="rounded-circle" src="<?php echo get_template_directory_uri() ?>/images/team2.jpg" width="150px" height="150px"><hr>
          <h4 style="font-weight:390;">Jane Doe</h4>
          <h5 style="font-weight:390;color:var(--primaryColor);"><b>Chief Designer</b></h5>
        </div>
      </div>

      <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 text-center">
        <div class="teamBox">
          <img class="rounded-circle" src="<?php echo get_template_directory_uri() ?>/images/team3.jpg" width="150px" height="150px"><hr>
          <h4 style="font-weight:390;">Susan Doe</h4>
          <h5 style="font-weight:390;color:var(--primaryColor);"><b>C.F.O</b></h5>
        </div>
      </div>

      <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 text-center">
        <div class="teamBox">
          <img class="rounded-circle" src="<?php echo get_template_directory_uri() ?>/images/team4.jpg" width="150px" height="150px"><hr>
          <h4 style="font-weight:390;">Paul Doe</h4>
          <h5 style="font-weight:390;color:var(--primaryColor);"><b>C.T.O</b></h5>
        </div>
      </div>

    </div>
  </div>

  <div class="container-fluid text-center">
    <h3 style="text-align:center;font-weight:390;margin-top:50px;margin-bottom:30px;">Testimonials</h3>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="text-center testimonial">
            <span class="testimonial-comment">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ull
            </span>
            <hr>
            <span class="testimonial-user">Anonymous User1</span>
          </div>
        </div>
        <div class="carousel-item">
          <div class="text-center testimonial">
            <span class="testimonial-comment">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ull
            </span>
            <hr>
            <span class="testimonial-user">Anonymous User2</span>
          </div>
        </div>
        <div class="carousel-item">
          <div class="text-center testimonial">
            <span class="testimonial-comment">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ull
            </span>
            <hr>
            <span class="testimonial-user">Anonymous User</span>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true" style="color:black;"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>
