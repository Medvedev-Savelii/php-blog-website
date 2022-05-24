<?php
    setcookie('log', '', time() - 3600 * 24 * 30, "/php-blog-website");
    unset($_COOKIE['log']);
    echo true;
?>

