	<!-- подключение header.php -->
<?php get_header();?>
<div class="content">

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>	

	<div class="post_main">
		<h1><?php the_title(); ?> <span>(<?php the_time('d.m.Y'); ?>)</span></h1>
		<div class="post">
				<!-- вывод миниатюры, размер + класс (используем файл function.php) -->
			<?php the_post_thumbnail('full', 'class=img_l'); ?>
				<!-- вывод контента из записи -->
			<?php the_content(); ?>
				<!-- вывод меток -->
			<p><?php the_tags(); ?></p>
		</div>	
	</div>

		<!-- вывод комментариев -->
	<?php comments_template(); ?>

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
