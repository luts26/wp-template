<?php get_header() ?>
<div class="content">
	<h2 class="page_title">Страница 404</h2>
	<p>По вашему запросу ничего не найдено. Попробуйте начать с <a href="<?= home_url();?>">главной страницы</a>.</p>
	<img src="<?php bloginfo('template_url');?>/images/404.jpg" alt="">
</div>
<?php get_sidebar() ?>
</div>
<?php get_footer() ?>
</div>