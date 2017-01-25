<?php

/**
* Plugin Name: Configure SMTP
* Description: Awesome way to configure SMTP
* Author: Pierre Ozoux * Version: 0.1
*/

add_filter('wp_mail_from', function($email) {
  return '${WORDPRESS_MAIL_FROM}';
});

add_action('phpmailer_init', function($phpmailer) {
  $phpmailer->isSMTP();
  $phpmailer->SMTPAuth = true;
  $phpmailer->Host = '${WORDPRESS_MAIL_HOST}';
  $phpmailer->Port = '${WORDPRESS_MAIL_PORT}';
  $phpmailer->Username = '${WORDPRESS_MAIL_USERNAME}';
  $phpmailer->Password = '${WORDPRESS_MAIL_PASSWORD}';
  $phpmailer->SMTPSecure = '${WORDPRESS_MAIL_SECURITY}';
  $phpmailer->From = '${WORDPRESS_MAIL_FROM}';
  $phpmailer->FromName = '${WORDPRESS_MAIL_NAME}';
});
