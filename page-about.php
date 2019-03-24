<?php
/*
Template Name: О компании
*/
?>
    <?php get_header();?>
		<!-- /.top-nav -->
		<div class="row">
			<div class="col-lg-4">
			<?php get_sidebar('category');?>
			</div>
			<!-- /.col-md-4 -->
			<div class="col-lg-8">
				<div class="content">
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
					<h2>Руководство</h2>
					<div class="team">
						<div class="row">
							<div class="col-md-4">
								<img src="<?php the_field('field_5c93c9947442d') ?>" alt="">
								<h4><?php the_field('field_5c93c91d7442b') ?></h4>
								<p><?php the_field('field_5c93c96a7442c') ?></p>
							</div>
							<div class="col-md-4">
								<img src="<?php the_field('field_5c93ca7a74431') ?>" alt="">
								<h4><?php the_field('field_5c93ca057442f') ?></h4>
								<p><?php the_field('field_5c93ca1974430') ?></p>
							</div>
							<div class="col-md-4">
								<img src="<?php the_field('field_5c93cac7ead9a') ?>" alt="">
								<h4><?php the_field('field_5c93cab5ead98') ?></h4>
								<p><?php the_field('field_5c93cabcead99') ?></p>
							</div>
						</div>
					</div>
				</div> 
				 <!--/.content  -->
    <?php get_footer(); ?>