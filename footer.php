<!--footer-->
<footer class="py-5">
    <div class="container text-white">
        <div class="row">
            <div class="col-md-4">
                <h3 class="text-white">Prodavnice:</h3>
                <!-- <p>Prodavnica1</p>
                <p>Prodavnica2</p>
                <p>Prodavnica3</p>-->
                   <?php wp_nav_menu(array('theme_location'=>'footer-menu')); ?>
            </div>
            <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ANTS%20na%20crnom-01.svg" alt="">
                <?php echo get_search_form(); ?>
            </div>
            <div class="col-md-4 text-center">
                <a href=""><i class="fab fa-facebook-square"></i></a>
                 <a href=""><i class="fab fa-instagram-square"></i></a>
                 <a href=""><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>
</footer>



    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
    <?php wp_footer(); ?>
  </body>
</html>
