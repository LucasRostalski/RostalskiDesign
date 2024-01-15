<?php

 

get_header();
?>



	<section id="omnie">
		<div class="container-flex">	
			<div class="row">

				<div class="col-sm-12 col-lg-5 omnie_zdjecie">

									<?php 
				$image = get_field('omnie_zdjecie');
				if( !empty( $image ) ): ?>
				    <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
				</div>
				<div class="col-sm-12 col-lg-7 p-sm-3 p-md-5 omnie_opis_box">

					<div class="omnie_opis">
					<h2>  <span class="line">Łukasz Rostalski</span></h2>
						<h3 class="pb-3"> Tworzenie stron i sklepów internetowych </h3>
			<div><?php the_field('omnie_opis'); ?></div>
				<div class="icon_about">			
					<i class="fa-brands fa-wordpress-simple"></i>
					<i class="fa-brands fa-square-js"></i>
					<i class="fa-brands fa-html5"></i>
					<i class="fa-brands fa-css3-alt"></i>
					<i class="fa-brands fa-php"></i>
					<i class="fa-brands fa-sass"></i>
					</div>
				</div>
			</div>
		</div>
	</section>




	<section id="realizacje">
		<div class="container-xxl">	
			<div class="row">
				<div class="col-sm-12 ">
					<h1 class="text-center"> 	<span class="line">Realizacje</span></h1>
					<h3 class="pb-5 text-center"> Sprawdź wybrane strony, sklepy internetowe </h3>
						</div>
<div class="portfolio">

					<?php if ( have_rows( 'portfolio' ) ) : ?>
	<?php while ( have_rows( 'portfolio' ) ) : the_row(); ?>
			<?php $photo = get_sub_field( 'photo' ); ?>
			
		<div class="col-sm-12 col-md-6 p-sm-1 p-md-4">

			<a class="fancybox" data-fancybox="gallery" title="sadsad" data-caption="<h1><a target='_blank' href='<?php the_sub_field( 'link' ); ?>'><?php the_sub_field( 'name' ); ?> </a></h1>  <?php the_sub_field( 'desc' ); ?> " href="<?php echo esc_url( $photo['url'] ); ?>">
		<div class="portfolio_photo ">
	
		<?php if ( $photo ) : ?>
		
    <img class="img-fluid" rel="group1"  src="<?php echo esc_url( $photo['url'] ); ?>" alt="<?php echo esc_attr( $photo['alt'] ); ?>" />
		<?php endif; ?>

			
		<div class="portfolio_name">
		<h2> <?php the_sub_field( 'name' ); ?> </h2>
	</div>
		<div class="fullcap">
			<h2> <?php the_sub_field( 'name' ); ?> </h2>
			<?php the_sub_field( 'desc' ); ?> </div>
	</div>
				</a>
</div>

	<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
</div>
				</div>
				
		
		</div>
	</section>

	<section id="kontakt">
		<div class="container-flex">	
			<div class="row">
				<div class="col-sm-12  p-3 p-1-md">
					<h1 class="pb-3 pt-3 text-center"> <span class="line">Kontakt</span></h1>
					
					<div class="contact_info text-center  pb-5 pb-3-md">
						Łukasz Rostalski<br>
						<a href="tel:530205966"> <i class="fa-solid fa-phone "></i>  530 205 966</a><br>
						 	<a href="mailto:lucas.rostalski@gmail.com"><i class="fa-regular fa-envelope "></i>kontakt@rostalskidesign.pl</a><br>
						</div>
				<?php echo do_shortcode("[contact-form-7 id='268' title='Formularz 1']"); ?>
				</div>
				
			</div>
		</div>
	</section>


<?php

get_footer();
