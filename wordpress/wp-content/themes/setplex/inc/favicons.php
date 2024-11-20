<?php

function setplex_inline_header() {
	?>

  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="96x96"  href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon.svg" />
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-touch-icon.png" />
  <meta name="apple-mobile-web-app-title" content="Setplex" />
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicon/site.webmanifest">
  <meta name="msapplication-TileColor" content="#0a85ce">
  <meta name="theme-color" content="#121212">

<?php
}
add_action( 'wp_head', 'setplex_inline_header' );