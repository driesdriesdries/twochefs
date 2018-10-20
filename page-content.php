<?php
/*
	Template Name: Contact Page

*/

//Advanced custom fields
$page_heading = get_field('page_heading');
$address_line_1 = get_field('address_line_1');
$address_line_2 = get_field('address_line_2');
$address_line_3 = get_field('address_line_3');
$phone_line_1 = get_field('phone_line_1');
$phone_line_2 = get_field('phone_line_2');
$email_line_1 = get_field('email_line_1');


get_header(); ?>

<!--page starts here-->

<!--start Building the contact page-->
<section id="contact_content">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h4 id="contact_heading"><?php echo $page_heading; ?></h3>

        <div class="row">
          <div class="col-sm-6">
            
<?php echo do_shortcode( '[contact-form-7 id="261" title="Contact form 1"]' ); ?>
            
          </div>
          <div class="col-sm-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3309.707407941947!2d18.764129115093123!3d-33.94865283063887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcc4d0ca8dfcd59%3A0x35a7959e957deab5!2sTwo+Chefs+Catering!5e0!3m2!1sen!2sza!4v1506059251014" width="100%" height="435" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div><!--Close row-->
    
  </div><!--Close container-->
</section>
<!--End Building the contact page-->



<!--page ends here-->
	
<?php

get_footer();
