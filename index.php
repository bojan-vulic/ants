<?php get_header(); ?>

<!--header-->
<header class="manjaVisinaSlike">
    
</header>

<section class="container blog pb-5">
      <h2 class="text-center pb-5">Poslednje sa bloga</h2>
      <div class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="col-md-4 mb-5">
          <div class="featured-image">
           <?php the_post_thumbnail(); ?>
          </div>
          <div class="content">
            <h4><?php the_title(); ?></h4>
            <?php the_excerpt(); ?>
            <a class="btn" href="<?php the_permalink(); ?>">Procitaj vise</a>
          </div>
        </div>
        
        <?php endwhile; ?>
          
          <?php the_posts_pagination(); ?>
          
          <?php else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

      </div>
    </section>
<?php get_footer(); ?>