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
					<div class="object-page">
						<div class="object-page_gallery">
								<?php the_post_thumbnail('sidebar-preview'); ?>
							</div>
						<div class="object-page_text">
							<p>Земельный участок ИЖС 70</p>
							<p><b>Площадь:</b> <?php the_field('field_5c930d512f829') ?> </p>
							<p><b>Назначение:</b> <?php the_field('field_5c9317112f82a') ?> </p>
							<p><b>Стоимость:</b> <?php the_field('object_price'); ?></p>
							<p><b>Описание:</b> <?php the_content(); ?> </p>
							<a href="#" class="btn btn-primary">Бесплатная консультация</a>
						</div>
					</div>
					
				</div> 
				 <!--/.content  -->
				
    <!-- /.container -->
    <?php get_footer(); ?>