<?php

$css_our_solutions_file = get_template_directory() . '/css/our-solutions.min.css';
$css_our_solutions_url = get_template_directory_uri().'/css/our-solutions.min.css';
$css_solution_file = get_template_directory() . '/css/solution.min.css';
$css_solution_url = get_template_directory_uri().'/css/solution.min.css';

if (get_page_template_slug() === 'page-our-solutions.php') {
  wp_enqueue_style('our-solutions-style', $css_our_solutions_url, array(), filemtime($css_our_solutions_file), 'all' );
}
if (get_page_template_slug() === 'page-solution.php') {
  wp_enqueue_style('solution-style', $css_solution_url, array(), filemtime($css_solution_file), 'all' );
}