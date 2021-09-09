<?php get_header(); ?>

<!--header-->
<header>
    
</header>
<!--novaKolekcija-->
<section class="novaKolekcija py-5">
    <h2 class="text-center mb-5">Najnovija kolekcija</h2>
    <div class="d-flex">
    <article></article>
    <article></article>
    <article></article>
    </div>
   
</section>
<section class="container blog pb-5">
      <h2 class="text-center pb-5">Poslednje sa bloga</h2>
      <div class="row">

        <div class="col-md-4">
          <div class="featured-image">
            <img src="<?php echo get_template_directory_uri() ;?>/img/02-min.jpg" alt="">
          </div>
          <div class="content">
            <h4>Blog post 1</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum facere impedit similique cumque beatae enim fuga ipsa in praesentium animi.</p>
            <a class="btn" href="https://www.google.com">Procitaj vise</a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="featured-image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/04-min.jpg" alt="">
          </div>
          <div class="content">
            <h4>Blog post 2</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum facere impedit similique cumque beatae enim fuga ipsa in praesentium animi.</p>
            <a class="btn" href="">Procitaj vise</a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="featured-image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/06-min.jpg" alt="">
          </div>
          <div class="content">
            <h4>Blog post 3</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum facere impedit similique cumque beatae enim fuga ipsa in praesentium animi.</p>
            <a class="btn" href="">Procitaj vise</a>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>