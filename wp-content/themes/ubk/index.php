<?php
/*
Theme Name: Ubk-mebel
Theme URI: http://ubk-mebel.ru/
Author: M2
Author URI: http://mkvadrat.com/
Description: Тема для сайта http://ubk-mebel.ru/
Version: 1.0
*/

get_header(); ?>

	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
