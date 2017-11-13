<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}
// server {
//     listen 80;
//     server_name example.com;
//     root /example.com/public;

//     add_header X-Frame-Options "SAMEORIGIN";
//     add_header X-XSS-Protection "1; mode=block";
//     add_header X-Content-Type-Options "nosniff";

//     index index.html index.htm index.php;

//     charset utf-8;

//     location / {
//         try_files $uri $uri/ /index.php?$query_string;
//     }

//     location = /favicon.ico { access_log off; log_not_found off; }
//     location = /robots.txt  { access_log off; log_not_found off; }

//     error_page 404 /index.php;

//     location ~ \.php$ {
//         fastcgi_split_path_info ^(.+\.php)(/.+)$;
//         fastcgi_pass unix:/var/run/php/php7.1-fpm.sock;
//         fastcgi_index index.php;
//         include fastcgi_params;
//     }

//     location ~ /\.(?!well-known).* {
//         deny all;
//     }
// }
require_once __DIR__.'/public/index.php';
