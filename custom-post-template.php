<?php
/**
* Template Name: Custom Post Template
* Template Post Type: post
*/
get_header();
?>
<main class="post-main">
  <section>
    <!-- add our post wrappper -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="post-wrapper">
        
          <div>
            <h2><?php the_title() ;?></h2>
            <br>
            <?php
              the_content();
              endwhile; else:
            ?>
            <p>Sorry, no posts to list</p>
            <?php endif; ?>
        </div>
     </div>
  </section>
 
</main>
<?php
  get_footer();
?>