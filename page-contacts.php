<?php
/*
Template Name: Контакты
*/
?>

        <?php get_header(); ?>
		<div class="row">
			<div class="col-lg-4">
			<?php get_sidebar('category');?>
			</div>
			<!-- /.col-md-4 -->
			<div class="col-lg-8">
				<div class="content">
					<h2><?php the_title(); ?></h2>
					<div class="contacts">
						<p class="contacts-phone">
							<img class="contacts-img" src="<?php bloginfo('template_directory')?>/assets/img/phone-receiver.png" alt="">
							<?php the_field('field_5c92dd0ddc777', 19); ?>
						</p>
						<p class="contacts-mail">
							<img class="contacts-img" src="<?php bloginfo('template_directory')?>/assets/img/email.png" alt="">
							<?php the_field('field_5c92e15d8fdb7', 19); ?>
						</p>
						<div class="contacts-address">
							<a href="#"><?php the_field('field_5c92dd59dc778', 19); ?></a>
						</div>
						<div class="contacts-address">
							<a href="#"><?php the_field('field_5c92dd9fdc779', 19); ?></a>
						</div>
						<a href="#" class="btn btn-primary contacts-btn">Задать вопрос</a>
						<div class="footer-social-links contacts-links">
							<ul>
								<li><a href="<?php the_field('field_5c92e8a292be6', 19); ?>"><img src="<?php the_field('field_5c92e32300d03', 19); ?>" alt=""></a></li>
								<li><a href="<?php the_field('field_5c92e8df92be7', 19); ?>"><img src="<?php the_field('field_5c92e6117828d', 19); ?>" alt=""></a></li>
								<li><a href="<?php the_field('field_5c92e90e92be8', 19); ?>"><img src="<?php the_field('field_5c92e671ee810', 19); ?>" alt=""></a></li>
							</ul>
						</div>
					</div>	
				</div> 
				 <!--/.content  -->
    <?php get_footer(); ?>