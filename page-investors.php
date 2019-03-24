<?php
/*
Template Name: Инвесторам
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
					<?php the_content(); ?>
				</div> 
				 <!--/.content  -->
				 <div class="calc">
					 <div class="row">
						 <div class="col-md-6">
							 <div class="calc-programms">
								 <div class="calc-radio">
									<input type="radio" data-month="6" data-per="0.2" checked name="programm" id="first">
									 <label for="first">
										 <span>20% годовых <small>на 6 месяцев</small></span>
									 </label>
								 </div>							
								<div class="calc-radio">
									<input type="radio" data-month="12" data-per="0.24" name="programm" id="second">
									<label for="second">
										<span>24% годовых <small>на 1 год</small></span>
									</label>
								</div>						
								<div class="calc-radio">
									<input type="radio" data-month="24" data-per="0.26" name="programm" id="third">
									<label for="third">
										<span>26% годовых <small>на 2 года</small></span>
									</label>
								</div>				
								<div class="calc-radio">
									<input type="radio"  data-month="36" data-per="0.28"name="programm" id="fourth">
									<label for="fourth">
										<span>28% годовых <small>на 3 года</small></span>
									</label>
								</div>
								<div class="calc-radio">
									<input type="radio" data-month="48" data-per="0.32" name="programm" id="fivth">
									<label for="fivth">
										<span>32% годовых <small>на 4 года</small></span>
									</label>
									<div class="calc-popular">
										Популярная программа
									</div>
								</div>
							</div>
							<div class="calc-legal">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem molestiae dolorum veniam dicta nihil voluptatem earum est, totam vero vel officia ex dolore fugiat omnis! Eaque fuga ipsum doloribus dicta.</p>
								</div>
						 </div>
						 <div class="col-md-6">
							 <h4>Укажите сумму инвестиций</h4>
							 <input class="calc-range" type="text" name="summ" id="">
							 <div class="calc-summ_invest">
								 <span class="calc-summ_invest_label">Сумма: </span>
								 <span class="calc-summ_invest_num"><span>110 000</span> руб.</span>
							 </div>
							 <div class="calc-summ_price">
								 <span class="calc-total">
									 <strong><span id = "total"></span> руб.</strong>
									 <small>Сумма через <span id = "month"></span> месяцев</small>
								 </span>
								 <span class="calc-monthly">
										<strong><span></span> руб.</strong><br>
										<small>Ежемесячный доход</small>
									</span>
							 </div>
						 </div>
					 </div>
				 </div>
	<!-- /.container -->
	<?php get_footer(); ?>