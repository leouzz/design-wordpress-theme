<?php
/*
 * Template Name: DI - Articolo con sidebar
 * Template Post Type: post, product
 */
 
 get_header(); ?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	
	<section class="container">
	  <div class="row">
	    <div class="offset-lg-1 col-lg-9 col-md-12">
				<?php if ( is_singular() ) { wppa_breadcrumb(); } ?>
	    </div>
	  </div>
	</section>
	
	<section class="container">
		<?php get_template_part( 'entry-di-head' ); ?>
	</section>

  <section id="articolo-dettaglio-testo">
    <div class="container">
      <div class="row">
        <div class="col-12">
					<?php get_template_part( 'entry-di-thumb' ); ?>
				</div>
    	</div>
    	<div class="row">
	      <div class="col-md-3">
 	       <?php get_sidebar(); ?>
	      </div>
    		<div class="offset-md-1 col-md-6">
					<section class="entry-content contenuto">
						<?php the_content(); ?>
						<div class="entry-links"><?php wp_link_pages(); ?></div>
					</section>
	  		</div>
    	</div>
  	</div>
	</section>


  <section id="articolo-dettaglio-meta">
    <div class="container">
    	<div class="row">
	      <div class="offset-md-3 col-md-6 mt-5 mb-5 text-center">
					<div class="argomenti">
						<h6>Argomenti</h6>
						<?php the_tags('',''); ?>
					</div>
	      </div>
    	</div>
  	</div>
	</section>


				
				
</article>


<?php get_footer(); ?>
