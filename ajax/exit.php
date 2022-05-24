<?php
    setcookie('login', null, time() - 3600 * 24 * 30, "/php-blog-website");
    unset($_COOKIE['login']);
    echo true;


