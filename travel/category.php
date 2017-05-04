	<!-- подключение header.php -->
<?php get_header();?>
<div class="content">
	<!-- выводим название рубрики, передаем параметер "рубрика: " -->
<h2 class="page_title"><?php single_cat_title('Рубрика: '); ?></h2>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>	

	<div class="post_main">
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span>(<?php the_time('d.m.Y'); ?>)</span></h1>
		<div class="post">
				<!-- вывод миниатюры, размер + класс (используем файл function.php) -->
			<?php the_post_thumbnail('full', 'class=img_l'); ?>
				<!-- вывод цытати из записи или превью -->
			<?php the_excerpt(); ?>
			<p><a href="<?php the_permalink(); ?>">Читать далее</a></p>
				<!-- вывод меток -->
			<p><?php the_tags(); ?></p>
		</div>	
	</div>

<?php endwhile; ?>
	<!--post navegation -->
<div class="pagination">
	<?php
	// global $wp_query;
	$big = 999999999;
	echo paginate_links(array(
		'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
		'format' => '?paged=%#%',
		'current' => max(1, get_query_var('paged')),
		'total' => $wp_query->max_num_pages,
		'prev_text' => '&laquo;',
		'next_text' => '&raquo;'
	));
	?>
</div>	
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

</div>
	<!-- подключение sidebar.php -->
<?php get_sidebar();?>
	</div>
	<!-- подключение footer.php -->
<?php get_footer();?>
</div>
