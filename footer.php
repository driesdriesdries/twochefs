<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DopeIndustries
 */

?>

	

<?php wp_footer(); ?>

<!--Back to top section-->
<section id="btt">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h3 data-aos="fade-up" id="btt" class="pull-right btt-click"><i class="fa fa-chevron-up" aria-hidden="true"></i></h3>
      </div><!--close column-->
    </div><!--close row-->
  </div><!-- Close container-->
</section>


<!--footer -->
<footer >
  <div class="container">
    <div class="row">


      <div class="col-md-3 col-sm-6 col-xs-6 footer_block social_icons_footer">
        <h4>FOLLOW</h4>
          <a target="_blank" class="hvr-float" href="https://www.instagram.com/twochefs.catering/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a target="_blank" class="hvr-float" href="https://www.facebook.com/TwoChefs1/?pnref=lhc"><i class="fa fa-facebook" aria-hidden="true"></i></a>
      </div>

      <div class="col-md-3 col-sm-6 col-xs-6 footer_block">
        <h4>CONTACT DETAILS</h4>
        <p>info@twochefs.co.za</p>
        <p>021 881 3974</p>
      </div>

      <div class="col-md-3 col-sm-6 col-xs-6 footer_block">
        <h4>PHYSICAL ADDRESS</h4>
        <p>M12 Pokadraai road</p>
        <p>Mulderbosch Vineyards</p>
        <p>Vlottenburg</p>
        <p>Stellenbosch</p>
        <p>7604</p>
        <br/>
      </div>
      
      <div class="col-md-3 col-sm-6 col-xs-6 footer_block">

        <h4>MENU</h4>
        <?php wp_nav_menu( array( 'theme_location' => 'new-menu', 'menu_id' => 'footer_menu' ) ); ?>
      </div>
   
    </div><!--close row-->
  </div><!--close container-->
</footer>

<!--TC-->
<section id="tc">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <p class="small" >&copy; TwoChefs <?php echo date('Y'); ?></p>
      </div>
    </div>
  </div>
</section>

<!--AOS-->
<script>
      AOS.init({
        easing: 'ease-out-back',
        duration: 1000
      });
</script>

<!--Match Heights-->
  <script src="<?php bloginfo('template_directory'); ?>assets/js/jquery.matchHeight.js" type="text/javascript"></script>
  <script>
  $('.team_post').matchHeight();
  $('.blog_item_post').matchHeight();
  </script>

</body>
</html>
