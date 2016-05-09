<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package unite
 */
?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">



			<div class="row">


<!--- start newsletter -->

<div class="col-md-12 col-sm-8">



     <div class="row">
<div class="col-md-4 col-sm-6 col-xs-6">
<?php $widgetNL = new WYSIJA_NL_Widget(true);
echo $widgetNL->widget(array('form' => 1, 'form_type' => 'php')); ?>


</div><!-- col-md-4 -->



<div class="col-md-4 col-sm-6 col-xs-6" id="payment-cards"><!-- start payment cards -->
 <h4>We Accept All Major Credit Cards</h4>
 <img src="<?php bloginfo('template_directory');?>/images/creditcards.png">

</div><!-- end accept payment-cards -->



</div>


    </div>


    <!--- end -->































    <div class="col-md-8 col-sm-8">
     <div class="row">
      <div class="col-md-3 col-sm-3" id="footer_link">
      <h4>Company</h4>
       <ul>

       <?php wp_list_pages('include=39,42,45,48&title_li='); ?>

      </ul>
      </div>
      <div class="col-md-3 col-sm-3" id="footer_link">
     <h4>Account</h4>
      <ul>

       <?php wp_list_pages('include=12,72&title_li='); ?>

      </ul>
      </div>
      <div class="col-md-3 col-sm-3" id="footer_link">
     <h4>Connect with us </h4>
 <ul>
  <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
  <li><a href="#" ><i class="fa fa-twitter"></i> Twitter</a></li>
  <li><a href="#" ><i class="fa fa-google-plus"></i> Google</a></li>

      

      </ul>
      </div>
   

     </div>



    </div>

<div class="col-md-4" id="footer_link">

<h4>COMPANY INFO</h4>
Phone: 1-855-848-0655<br />
E-Mail: sales@azamsscorp.com<br />
Website: www.azamsscorp.com<br />
</p>



</div>



			

				<div class="copyright col-md-8" id="footer_link_images">
    
   <!--   <ul>
    <li><img src="<?php bloginfo('template_directory');?>/images/Genuine.png" width="90px"></li>
    <li><img src="<?php bloginfo('template_directory');?>/images/paypal.png" width="90px"></li>
    <li><img src="<?php bloginfo('template_directory');?>/images/AccredBus.jpg" width="90px"></li>

     </ul> -->
    

			
				</div>
			</div>
     <div class="row" id="footer_bottom">


   <address class="copyright">© 2014 Azamsscorp . All Rights Reserved.</address>


   <span id="siteseal"><script type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=kyFutdaYlXRQELFSDUQR8Ck9bjjbvs01kVZAIiI0ANNDdvvtwLW8aUDXhvoJ"></script></span



     </div>





		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>