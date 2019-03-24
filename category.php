    <?php get_header();?>
		<!-- /.top-nav -->
		<div class="row">
			<div class="col-lg-4">
			<?php get_sidebar('category');?>
			</div>
			<!-- /.col-md-4 -->
			<div class="col-lg-8">
            <div class="content">
					<h2><?php if( is_category() ) {
                        echo get_queried_object()->name;
                        $slug_id = get_queried_object()->slug; 
                        } ?></h2>
					<div class="row">
                    <?php
                    // параметры по умолчанию
                    $posts = get_posts( array(
                        'numberposts' => 0,
                        'category_name'    => $slug_id,
                        'orderby'     => 'date',
                        'order'       => 'DESC',
                        'include'     => array(),
                        'exclude'     => array(),
                        'meta_key'    => '',
                        'meta_value'  =>'',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    foreach( $posts as $post ){
                        setup_postdata($post);
                        ?>
                        <div class="col-md-6">
                            <div class="object-card">
                            <?php the_post_thumbnail('object-preview') ?>
                            <div class="object-card_text">
                                <a href="<?php the_permalink(); ?>" class="object-card_title"><?php the_title(); ?></a>
                                <?php the_excerpt(); ?>
                                <p class="object-card_price"><?php the_field('object_price'); ?></p>
                                <a href="#" data-target="modal" class="btn btn-primary object-card_btn">Бесплатная консультация</a><a href="<?php the_permalink(); ?>" class="object-card_more">Подробнее</a>
                            </div>
                            </div>
                        </div>
                            
                        <?php     
                    }
                   
                    wp_reset_postdata(); // сброс ?>
					  
                 <!--/.content  -->
                 </div>
                 </div>
    <?php get_footer(); ?>