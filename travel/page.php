	<!-- подключение header.php -->
<?php get_header();?>
<div class="content">
<h2 class="page_title">Страница: <?php the_title(); ?></h2>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>	

	<div class="post_main">
		<h1><?php the_title(); ?></h1>
		<div class="post">
				<!-- вывод контента страницы -->
			<?php the_content(); ?>
		</div>	
	</div>

<?php endwhile; ?>
<!--post navegation -->
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
