<!doctype html>
<html lang="RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
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