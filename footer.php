<div class="directions">
					 <h2>Текст</h2>
					 <div class="direction-blocks">
					 	<?php 
					 		$args = array(
								'hierarchical' => 1,
								'child_of'     => 71,
								'parent'       => -1,
								'post_type'    => 'page',
								'post_status'  => 'publish',
							); 
							$pages = get_pages( $args );
							foreach( $pages as $post ){
								setup_postdata( $post );
								?>
								<div class="direction-block">
									<h3><?php the_title(); ?></h3>
									<?php the_post_thumbnail('directions-preview', '') ?>
								</div>
								<?php 
							}  
							wp_reset_postdata();


					 	 ?>
					</div>  <!-- /.direction blocks -->
				 </div>
			</div>
			<!-- /.col-md-8 -->
		</div>
		<!-- /.row -->
	</div>


<footer class="footer">
		<div class="container">
			<div class="row">
			<div class="col-md-4">
				<div class="copy">
					<p>Copyright &copy; 2014-<?php echo date('Y'); ?></p>
					<a class="footer-policy-link" href="#">Политика конфиденциальности</a>
					<small> <?php the_field('law_text', 19); ?> </small>
				</div>
			</div>
			<!-- /.col-md -->
			<div class="col-md-2 col-6">
						<?php
					wp_nav_menu( [ 
						'menu'			  => 'top_menu',
						'container'       => 'ul', 
						'menu_class'      => 'footer_menu', 
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					] );
					
					?>
			</div>
			<!-- /.col-md -->
			<div class="col-md col-6">
				<ul class="footer_menu">
						<?php
					$args = array(
						'orderby'            => 'name',
						'order'              => 'ASC',
						'style'              => 'list',
						'show_count'         => 0,
						'hide_empty'         => 0,
						'use_desc_for_title' => 1,
						'child_of'           => 0,
						'feed'               => '',
						'feed_type'          => '',
						'feed_image'         => '',
						'exclude'            => '1',
						'exclude_tree'       => '',
						'include'            => '',
						'hierarchical'       => true,
						'title_li'           => NULL,
						'number'             => NULL,
						'echo'               => 1,
						'depth'              => 0,
						'current_category'   => 0,
						'pad_counts'         => 0,
						'taxonomy'           => 'category',
						'walker'             => 'Walker_Category',
						'hide_title_if_empty' => false,
						'separator'          => '<br />',
					);
				
						wp_list_categories( $args );
					?>
					</ul>
					<?php wp_reset_postdata(); ?>
			</div>
			<!-- /.col-md -->
			<div class="col-md">
				<div class="footer-contacts">
					<p class="footer-contacts_phone"> <?php the_field('field_5c92dd0ddc777', 19); ?> </p>
					<p class="footer-contacts_address"> <?php the_field('field_5c92dd59dc778', 19); ?> </p>
					<p class="footer-contacts_address"> <?php the_field('field_5c92dd9fdc779', 19); ?> </p>
					<p class="footer-contacts_email"><?php the_field('field_5c92e15d8fdb7', 19); ?></p>
				</div>
				<div class="footer-social-links">
					<ul>
						<li><a href="<?php the_field('field_5c92e8a292be6', 19); ?>"><img src="<?php the_field('field_5c92e32300d03', 19); ?>" alt=""></a></li>
						<li><a href="<?php the_field('field_5c92e8df92be7', 19); ?>"><img src="<?php the_field('field_5c92e6117828d', 19); ?>" alt=""></a></li>
						<li><a href="<?php the_field('field_5c92e90e92be8', 19); ?>"><img src="<?php the_field('field_5c92e671ee810', 19); ?>" alt=""></a></li>
					</ul>
				</div>
			</div>
			<!-- /.col-md -->
		</div>
		<!-- /.row -->
		</div>
		<!-- /.container -->
	</footer>

	<div class="modal">
		<div class="modal-content">
			<div class="close">&times;</div>
			<h4>Заполните поля</h4>
			<p>Мы свяжемся с Вами в ближайшее время</p>
			<div class="modal-form">
				<?php echo do_shortcode('[contact-form-7 id="104" title="Контактная форма 1"]'); ?>
					<small>Нажимая на кнопку, даю свое согласие на <a href="#">обработку персональных данных</a></small>
			</div>
		</div>
	</div>

	
		<!-- Bootstrap core JavaScript ================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.12.4.min.js"><\/script>')</script> -->
		<script src="slick/slick.js"></script>
        <script src = "js/main.js"></script>
        
        <?php wp_footer(); ?>
	</body>
</html>