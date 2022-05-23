<?php
    setcookie('log', $login, time() - 3600 * 24 * 30, "/php-blog-website");
    echo true;
?>

