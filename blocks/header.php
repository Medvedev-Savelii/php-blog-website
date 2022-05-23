<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <h5 class="my-0 mr-md-auto font-weight-normal">PHP Blog</h5>

        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/php-blog-website" class="nav-link px-2 link-secondary">Home</a></li>
            <?php
            if($_COOKIE['log'] != ''):
                echo '<a class="nav-link px-2 link-dark" href="article.php">Добавить статью</a>';
                ?>
            <?php
            endif;
            ?>
        </ul>
        <div class="col-md-3 text-end">
            <?php
            if($_COOKIE['log'] == ''):
            ?>
            <a type="button" class="btn btn-outline-primary me-2" href="auth.php">Войти</a>
            <a type="button" class="btn btn-primary" href="reg.php">Регистрация</a>
            <?php
                else:
            ?>
            <a type="button" class="btn btn-outline-primary me-2" href="auth.php">Кабинет пользователя</a>
            <?php
                endif;
            ?>
        </div>
    </header>
</div>
