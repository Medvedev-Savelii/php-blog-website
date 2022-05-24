<!doctype html>
<html lang="RU">
<head>
    <?php
    require_once 'mysql_connect.php';
    $sql = "SELECT * FROM `articles` WHERE `id` = id";
    $id = $_GET['id'];
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);
    $website_title = "PHP Blog";

    $article = $query->fetch(PDO::FETCH_OBJ);
    $website_title = $article->title;
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
            <div class="jumbotron">
                <h1 class="display-4"> <?=$article->title?></h1>
                <p class="lead">
                    <?=$article->title?>
                    <br>
                    <?=$article->text?>
                </p>
            </div>
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