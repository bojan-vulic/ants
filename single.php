<?php get_header(); ?>

<!--header-->
<header class="manjaVisinaSlike">
    
</header>

<section class="container blog pb-5">
      <h2 class="text-center pb-5"><?php the_title(); ?></h2>
      <div class="row">
       
        <div class="col-md-8 offset-2 mb-5">
          <div class="featured-image">
           <?php the_post_thumbnail(); ?>
          </div>
          <div class="content">
            <?php the_content(); ?>
            
          </div>
        </div>

      </div>
    </section>
<?php get_footer(); ?>