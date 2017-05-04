<div class="sidebar">
		<!-- проверяем есть сайдбар с идентификатором 'sidebar' -->
	<?php if(!dynamic_sidebar('sidebar')) : ?>
		<div class="vidget">
			<h2>Категории</h2>
			<ul>
					<!-- выводим список рубрик если не создан виджет 'sidebar' и параметром убираем заголовок li -->
				<?php wp_list_categories(array('title_li' => '')); ?>
			</ul>
		</div>
	<?php endif; ?>
</div>