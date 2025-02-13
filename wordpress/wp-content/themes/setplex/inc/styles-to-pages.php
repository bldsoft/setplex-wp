<?php

$css_legal_docs_file = get_template_directory() . '/css/legal-docs.min.css';
$css_legal_docs_url = get_template_directory_uri().'/css/legal-docs.min.css';
$css_404_file = get_template_directory() . '/css/404.min.css';
$css_404_url = get_template_directory_uri().'/css/404.min.css';
$css_thank_you_file = get_template_directory() . '/css/thank-you.min.css';
$css_thank_you_url = get_template_directory_uri().'/css/thank-you.min.css';
$css_our_solutions_file = get_template_directory() . '/css/our-solutions.min.css';
$css_our_solutions_url = get_template_directory_uri().'/css/our-solutions.min.css';
$css_solution_file = get_template_directory() . '/css/solution.min.css';
$css_solution_url = get_template_directory_uri().'/css/solution.min.css';
$css_bad_file = get_template_directory() . '/css/book-a-demo.min.css';
$css_bad_url = get_template_directory_uri().'/css/book-a-demo.min.css';
$css_contact_file = get_template_directory() . '/css/contact-us.min.css';
$css_contact_url = get_template_directory_uri().'/css/contact-us.min.css';
$css_about_file = get_template_directory() . '/css/about.min.css';
$css_about_url = get_template_directory_uri().'/css/about.min.css';
$css_partners_file = get_template_directory() . '/css/partners.min.css';
$css_partners_url = get_template_directory_uri().'/css/partners.min.css';
$css_support_file = get_template_directory() . '/css/support.min.css';
$css_support_url = get_template_directory_uri().'/css/support.min.css';
$css_leadership_file = get_template_directory() . '/css/leadership.min.css';
$css_leadership_url = get_template_directory_uri().'/css/leadership.min.css';
$css_careers_file = get_template_directory() . '/css/careers.min.css';
$css_careers_url = get_template_directory_uri().'/css/careers.min.css';
$css_careers_inner_file = get_template_directory() . '/css/careers-inner.min.css';
$css_careers_inner_url = get_template_directory_uri().'/css/careers-inner.min.css';
$css_careers_vacancy_file = get_template_directory() . '/css/careers-vacancy.min.css';
$css_careers_vacancy_url = get_template_directory_uri().'/css/careers-vacancy.min.css';

if (get_page_template_slug() === 'page-legal-docs.php') {
  wp_enqueue_style('legal-docs-style', $css_legal_docs_url, array(), filemtime($css_legal_docs_file), 'all' );
}
if (is_404()) {
  wp_enqueue_style('404-style', $css_404_url, array(), filemtime($css_404_file), 'all' );
}
if (get_page_template_slug() === 'page-thank-you.php') {
  wp_enqueue_style('thank-you-style', $css_thank_you_url, array(), filemtime($css_thank_you_file), 'all' );
}
if (get_page_template_slug() === 'page-our-solutions.php') {
  wp_enqueue_style('our-solutions-style', $css_our_solutions_url, array(), filemtime($css_our_solutions_file), 'all' );
}
if (get_page_template_slug() === 'page-solution.php') {
  wp_enqueue_style('solution-style', $css_solution_url, array(), filemtime($css_solution_file), 'all' );
}
if (get_page_template_slug() === 'page-book-a-demo.php') {
  wp_enqueue_style('book-a-demo-style', $css_bad_url, array(), filemtime($css_bad_file), 'all' );
}
if (get_page_template_slug() === 'page-contact-us.php') {
  wp_enqueue_style('contact-us-style', $css_contact_url, array(), filemtime($css_contact_file), 'all' );
}
if (get_page_template_slug() === 'page-about.php') {
  wp_enqueue_style('about-style', $css_about_url, array(), filemtime($css_about_file), 'all' );
}
if (get_page_template_slug() === 'page-partners.php') {
  wp_enqueue_style('partners-style', $css_partners_url, array(), filemtime($css_partners_file), 'all' );
}
if (get_page_template_slug() === 'page-customer-support.php') {
  wp_enqueue_style('support-style', $css_support_url, array(), filemtime($css_support_file), 'all' );
}
if (get_page_template_slug() === 'page-leadership.php') {
  wp_enqueue_style('leadership-style', $css_leadership_url, array(), filemtime($css_leadership_file), 'all' );
}
if (get_page_template_slug() === 'page-careers.php') {
  wp_enqueue_style('careers-style', $css_careers_url, array(), filemtime($css_careers_file), 'all' );
}
if (get_page_template_slug() === 'page-careers-inner.php') {
  wp_enqueue_style('careers-inner-style', $css_careers_inner_url, array(), filemtime($css_careers_inner_file), 'all' );
}
if (get_page_template_slug() === 'page-careers-vacancy.php') {
  wp_enqueue_style('careers-vacancy-style', $css_careers_vacancy_url, array(), filemtime($css_careers_vacancy_file), 'all' );
}
