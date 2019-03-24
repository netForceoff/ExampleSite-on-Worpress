<?php
/*
Template Name: Структура
*/
?>

    <?php get_header(); ?>
		<!-- /.top-nav -->
		<div class="row">
			<div class="col-lg-4">
            <?php get_sidebar('category');?>
			</div>
			<!-- /.col-md-4 -->
			<div class="col-lg-8">
				<div class="content">
					<h2><?php the_title(); ?></h2>
					<div class="organization">
						<div class="row">
							<?php 
							$args = array(
								'hierarchical' => 1,
								'child_of'     => 83,
								'parent'       => -1,
								'post_type'    => 'page',
								'post_status'  => 'publish',
							); 
							$pages = get_pages( $args );
							foreach( $pages as $post ){
								setup_postdata( $post );
								?>

								<div class="col-md-6">
								<div class="organization-card">
									<a href="#" class="organozation-title"> <?php the_title(); ?> </a>
									<small>ОГРН <?php the_field('field_5c92f9fcb1ccb'); ?> <br>
										ИНН <?php the_field('field_5c92fa35b1ccc'); ?>
									 </small>
									<p> <?php the_excerpt(); ?> </p>
								</div>
							</div>
							<?php
							}
							
							wp_reset_postdata();  
				?>
						</div>
					</div>	
				</div> 
				 <!--/.content  -->
	<?php get_footer(); ?>