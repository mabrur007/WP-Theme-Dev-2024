<?php
    // echo get_template_directory_uri();
    // echo "<br>";
    
    // if(have_posts()):
    //     echo "post available!! <br><br>";
    //     while(have_posts()): the_post();
    //         echo "Post Title: ";
    //         the_title();
    //         echo "<br>";

    //         echo "Author: ";
    //         the_author();
    //         echo "<br><br>";
    //     endwhile;
    // endif;
    get_header();
?>

<?php
    // simple array itteration 
    $car = array(
      "Company" => "ford",
      "Model" => "Mustang",
      "Year" => 2002
    );
    echo "Company of the car is " . $car["Company"] . " and year is " . $car["Year"];

    // associative array in wp dev function
    $myArguments = array(
      'post_type' => 'students'
    );

    $myQuery = new WP_Query($myArguments);

    while($myQuery -> have_posts()){
      $myQuery -> the_post();
      echo "<br>";
      the_title();
      the_content();

      // Display associated departments
      $terms = get_the_terms(get_the_ID(), 'department');
      if (!empty($terms) && !is_wp_error($terms)) {
          echo '<p>Department: ';
          $term_links = array_map(function($term) {
              return '<a href="' . get_term_link($term) . '">' . esc_html($term -> name) . '</a>';
          }, $terms);
          echo implode(', ', $term_links);
          echo '</p>';
      } else {
          echo '<p>No departments assigned.</p>';
      }
    }
    wp_reset_postdata();
?>

    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="col-lg-10 col-md-11 mx-auto">
                <div class="detail-box">
                  <div>
                    <h3>
                      Fitness
                    </h3>
                    <h2>
                      Training
                    </h2>
                    <h1>
                      Neogym
                    </h1>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                    </p>
                    <div class="">
                      <a href="">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="col-lg-10 col-md-11 mx-auto">
                <div class="detail-box">
                  <div>
                    <h3>
                      Fitness
                    </h3>
                    <h2>
                      Training
                    </h2>
                    <h1>
                      Neogym
                    </h1>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                    </p>
                    <div class="">
                      <a href="">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="col-lg-10 col-md-11 mx-auto">
                <div class="detail-box">
                  <div>
                    <h3>
                      Fitness
                    </h3>
                    <h2>
                      Training
                    </h2>
                    <h1>
                      Neogym
                    </h1>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                    </p>
                    <div class="">
                      <a href="">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="col-lg-10 col-md-11 mx-auto">
                <div class="detail-box">
                  <div>
                    <h3>
                      Fitness
                    </h3>
                    <h2>
                      Training
                    </h2>
                    <h1>
                      Neogym
                    </h1>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                    </p>
                    <div class="">
                      <a href="">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="col-lg-10 col-md-11 mx-auto">
                <div class="detail-box">
                  <div>
                    <h3>
                      Fitness
                    </h3>
                    <h2>
                      Training
                    </h2>
                    <h1>
                      Neogym
                    </h1>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                    </p>
                    <div class="">
                      <a href="">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
      </div>
    </section>

    <div style='display: flex;'>
        <?php 
            if(have_posts()):
                while(have_posts()):
                  the_post();
                  echo "<br>";
                  echo "Post Title: ", the_title();
                  echo "<br>";
                  echo "Post content: ", the_excerpt();
                  the_post_thumbnail('thumbnail');
                endwhile;
              endif;
          ?>
    </div>
    <!-- end slider section -->
  </div>

  <!-- Us section -->
  <section class="us_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Why Choose Us
        </h2>
      </div>

      <div class="us_container ">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/u-1.png'?>" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  QUALITY EQUIPMENT
                </h5>
                <p>
                  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/u-4.png'?>" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  NUTRITION
                </h5>
                <p>
                  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/u-2.png'?>" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  HEALTHY DIET PLAN
                </h5>
                <p>
                  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/u-3.png'?>" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  SPORT TRAINING
                </h5>
                <p>
                  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end us section -->


  <!-- heathy section -->
  <section class="heathy_section layout_padding">
    <div class="container">

      <div class="row">
        <div class="col-md-12 mx-auto">
          <div class="detail-box">
            <h2>
              HEALTHY MIND, HEALTHY BODY
            </h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillumLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
            </p>
            <div class="btn-box">
              <a href="">
                READ MORE
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- end heathy section -->

  
  <!-- trainer section -->

  <section class="trainer_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Gym Trainers
        </h2>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 mx-auto">
          <div class="box">
            <div class="name">
              <h5>
                Smirth Jon
              </h5>
            </div>
            <div class="img-box">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/t1.jpg'?>" alt="">
            </div>
            <div class="social_box">
              <a href="">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/facebook-logo.png'?>" alt="">
              </a>
              <a href="">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/twitter.png'?>" alt="">
              </a>
              <a href="">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/instagram-logo.png'?>" alt="">
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mx-auto">
          <div class="box">
            <div class="name">
              <h5>
                Jean Doe
              </h5>
            </div>
            <div class="img-box">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/t2.jpg'?>" alt="">
            </div>
            <div class="social_box">
              <a href="">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/facebook-logo.png'?>" alt="">
              </a>
              <a href="">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/twitter.png'?>" alt="">
              </a>
              <a href="">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/instagram-logo.png'?>" alt="">
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mx-auto">
          <div class="box">
            <div class="name">
              <h5>
                Alex Den
              </h5>
            </div>
            <div class="img-box">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/t3.jpg'?>" alt="">
            </div>
            <div class="social_box">
              <a href="">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/facebook-logo.png'?>" alt="">
              </a>
              <a href="">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/twitter.png'?>" alt="">
              </a>
              <a href="">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/instagram-logo.png'?>" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end trainer section -->

  <!-- contact section -->

  <section class="contact_section ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/contact-img.jpg'?>" alt="">
          </div>
        </div>
        <div class="col-lg-5 col-md-6">
          <div class="form_container pr-0 pr-lg-5 mr-0 mr-lg-2">
            <div class="heading_container">
              <h2>
                Contact Us
              </h2>
            </div>
            <form action="">
              <div>
                <input type="text" placeholder="Name" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="d-flex ">
                <button>
                  Send
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <?php
    get_footer();
  ?>

</html>