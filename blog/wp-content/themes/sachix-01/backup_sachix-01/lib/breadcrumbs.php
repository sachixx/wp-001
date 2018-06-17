<?php
//breadcrumb
function the_breadcrumb() {
		echo '<ul id="breadcrumb" class="cf">';
	if (!is_home()) {
		echo '<li itemscope itemtype=”http://data-vocabulary.org/Breadcrumb”><a href="';
		echo get_option('home');
		echo '" itemprop=”url”>';
		echo 'Home';
		echo "</a></li>";
		if (is_category() || is_single()) {
			echo '<li>';
			the_category(' </li><li> ');
			if (is_single()) {
				echo "</li><li>";
				the_title();
				echo '</li>';
			}
		} elseif (is_page()) {
			echo '<li>';
			echo the_title();
			echo '</li>';
		}

	}
	echo '</ul>';
}