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
    
    // $options = get_option( '_prefix_my_options' );
    // echo $options['opt-text-1'] . '<br>';
    // echo $options['opt-text-2'];
    // simple array itteration 
    $car = array(
      "Company" => "ford",
      "Model" => "Mustang",
      "Year" => 2002
    );
    // echo "Company of the car is " . $car["Company"] . " and year is " . $car["Year"];

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
    <?php 
      get_template_part('template-parts/homepage/content', 'slider');
      ?>
    <!-- end slider section -->
  </div>
  
  <!-- Us section -->
   <?php 
      get_template_part('template-parts/homepage/content', 'us');
   ?>
  <!-- end us section -->


  <!-- healthy section -->
  <?php 
      get_template_part('template-parts/homepage/content', 'healthy');
   ?>
  <!-- end healthy section -->

  
  <!-- trainer section -->
  <?php 
      get_template_part('template-parts/homepage/content', 'trainer');
   ?>
  <!-- end trainer section -->

  <!-- contact section -->
  <?php 
      get_template_part('template-parts/homepage/content', 'contact');
   ?>
  <!-- end contact section -->

  <?php
    get_footer();
  ?>

</html>