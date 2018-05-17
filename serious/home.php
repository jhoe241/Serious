<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>

<div id="home-top">
	<?php layerslider(1) ?>
</div><!-- home top -->

<div id="get-quote">
	<div class="container">
		<div class="col-lg-9 col-md-12 get-quote-left">
			<p>Are you interested in any of our hire services? You can get a fast and free quotation by clicking here.</p>
		</div>
		<div class="col-lg-3 col-md-12"><a class="white-box-button" role="button" href="/contact-us">Get A Quote</a></div>
	</div>
</div><!-- get-qute -->

<div id="cta">
	
	<div class="wrap-1700">
		<div class="one-fourth show show-first first">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cta1.jpg" alt="">
			 <div class="mask">
				<div class="info">
					<a href="/bulk-liquid-waste/"><i class="fa fa-arrow-circle-o-right"></i>
					<h4>Bulk Liquid Waste</h4></a>
				</div><!-- info -->
			</div><!-- mask -->
		</div><!-- one-fourth -->
		<div class="one-fourth show show-first">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cta2.jpg" alt="">
			 <div class="mask">
				<div class="info">
					<a href="/portable-toilets-hire/portable-toilets/"><i class="fa fa-arrow-circle-o-right"></i>
					<h4>HIRE</h4></a>
				</div><!-- info -->
			</div><!-- mask -->
		</div><!-- one-fourth -->		
		<div class="one-fourth show show-first">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cta3.jpg" alt="">
			 <div class="mask">
				<div class="info">
					<a href="/liquid-waste-services/special-even-hire/"><i class="fa fa-arrow-circle-o-right"></i>
					<h4>Special Event Services</h4></a>
				</div><!-- info -->
			</div><!-- mask -->
		</div><!-- one-fourth -->
		<div class="one-fourth show show-first">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cta4.jpg" alt="">
			 <div class="mask">
				<div class="info">
					<a href="/luxury-toilets/"><i class="fa fa-arrow-circle-o-right"></i>
					<h4>Luxury Toilets</h4></a>
				</div><!-- info -->
			</div><!-- mask -->
		</div><!-- one-fourth -->

	</div><!-- wrap -->
</div>


<div class="container liquied-waste-removal">
	<h3><span>Liquid waste removal</span>.</h3>
	<h4>Our liquid waste removal services are second to none. Specialising in bulk liquid waste removal regardless of where it is is what we are the best at. </h4>
	
	<a href="/liquid-waste-services/"><i class="fa fa-arrow-circle-o-right"></i></a>
	</div>
<div id="we-are-serious">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12 alignright">
				<h4>We are serious </h4>
				<p>About Waste</p>
			</div>
			<div class="col-md-6 col-sm-12 alignleft">
				<p>Since </p>
				<h4>1990 </h4></div>
		</div>
	</div>
</div>


<div id="tanks-cleaning">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
		
				<h4>Our Clients</h4>
				
				<strong>Just a few of the satisfied clients of Global Equipment</strong>
				
				<div id="client-logos">
					<?php kw_sc_logo_carousel('home-client-logos'); ?>
				</div>	
			</div>
			
		</div>
	</div>
</div><!-- tanks clearning -->

<div id="home-form">
	<div class="container">
	<div class="row">
	
	<?php echo do_shortcode('[contact-form-7 id="20" title="Home Form"]'); ?>
	</div>
	</div>
</div><!-- home form -->

<script type="text/javascript">

(function($) {
 
        $('.viewport').mouseenter(function(e) {
            $(this).children('a').children('img').animate({ height: '299', left: '0', top: '0', width: '450'}, 100);
            $(this).children('a').children('span').fadeIn(200);
        }).mouseleave(function(e) {
            $(this).children('a').children('img').animate({ height: '332', left: '-20', top: '-20', width: '500'}, 100);
            $(this).children('a').children('span').fadeOut(200);
        });
})( jQuery );

</script>


<?php get_footer(); ?>