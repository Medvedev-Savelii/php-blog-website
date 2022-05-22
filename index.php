<!doctype html>
<html lang="RU">
<head>
    <?php
    $website_title = "PHP Blog";
    require 'blocks/head.php'
    ?>
</head>
<body>
<?php
    require 'blocks/header.php';
?>

<main class="container mt-5">
    <div class="row">
        <div class="col-md-8 mb-5">
            Основная часть сайта
        </div>
        <?php
            include 'blocks/aside.php';
        ?>

    </div>
</main>

<?php
    include 'blocks/footer.php';
?>


</body>
</html>