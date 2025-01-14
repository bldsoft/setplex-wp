<?php

$css_our_solutions_file = get_template_directory() . '/css/our-solutions.min.css';
$css_our_solutions_url = get_template_directory_uri().'/css/our-solutions.min.css';

if (get_page_template_slug() === 'page-our-solutions.php') {
  wp_enqueue_style('our-solutions-style', $css_our_solutions_url, array(), filemtime($css_our_solutions_file), 'all' );
}