<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); wp_title();?></title>
	<link href="<?php bloginfo('template_url'); ?>/favicon.ico" rel="shortcut icon" type="image/x-icon"; />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/default0.css">
	<?php wp_head();?>
</head>
<body>
<div class="main">
<div class="header">
	<h2>Выбери своё<br> Путешествие</h2>
	<a href="<?= home_url();?>"><span>C</span>hoose <span>T</span>ravel</a>
</div>
<div class="clear"></div>
<div class="content_main">
	<div class="menu">
		<?php wp_nav_menu(array('theme_location' => 'menu', 'container' => false)); ?>
		<form class="search_main" action="<?= home_url('/'); ?>" method="">
			<input class="search_txt" type="text" name="s">
			<input class="serach_btn" type="image" src="<?php bloginfo('template_url');?>/images/serach-btn.jpg" name="">
		</form>		
	</div>

	<?php $slider = new WP_Query(array(
			'post_type' => 'slider',
				// выводим все записи
			'posts_per_page' => -1,
				// изменяем сортировку 
			'order' => 'ASC'
		)); ?>

	<?php if($slider->have_posts()) : ?>
	<div id="slider">
		<ul id="cycle">
	<?php while($slider->have_posts()) : $slider->the_post(); ?>
				<!-- вывод миниатюры в полном(оригинальном) размере -->
			<li><?php the_post_thumbnail('full'); ?></li>
	<?php endwhile; ?>
		</ul>
		<div id="cyclePager"></div>
	</div>
		<!-- post navigation -->
	<?php else: ?>
			<!-- вывод если нет объекта слайдер или он пустой -->
		<div id="slider">
			<p class="slider_info_err">Место под слайдер</p>
		</div>
	<?php endif; ?>
		<!-- рекомендуется делать сброс цыкла такой функцией -->
	<?php wp_reset_query(); ?>