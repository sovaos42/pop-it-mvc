<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pop it MVC</title>
</head>
<div class="container1">
<header>
    <div class="headercon">
    <nav>
        <a class="home" href="<?= app()->route->getUrl('/hello') ?>">УМУ</a>
        <?php
        if (!app()->auth::check()):
            ?>
            <a class="nohome" href="<?= app()->route->getUrl('/login') ?>">Вход</a>
            <a class="nohome" href="<?= app()->route->getUrl('/signup') ?>">Регистрация</a>
        <?php
        else:
            ?>
            <?php
            if (app()->auth::IDRole() == 1):
            ?>

            <a class="nohome" href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>
            <a class="nohome" href="<?= app()->route->getUrl('/employees') ?>">Сотрудники</a>
            <a class="nohome" href="<?= app()->route->getUrl('/subvision') ?>">Подразделение</a>
            <a class="nohome" href="<?= app()->route->getUrl('/discipline') ?>">Дисциплина</a>
            <a class="nohome" href="<?= app()->route->getUrl('/jobTitle') ?>">Вид подразделенич </a>
            <?php
        endif;
        ?>
            <?php
            if (app()->auth::IDRole() == 2):
            ?>

            <a class="nohome" href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>
        <?php
        endif;
        ?>
         <?php
        endif;
        ?>
      
    </nav>

    </div>
</header>
</div>
<main>
    <?= $content ?? '' ?>
</main>
<style>

    .headercon{
        width: 100%;
        border-style: solid;
        border-width: 5px;
        border-color: white white #004B27 white;
    }
    .container1{
        margin-left: auto;
        margin-right: auto
    }
    .home{
        font-size: 32px;
    }
    .nohome{
        margin-top: 10px;
    }
    header{
        height: 100px;

    }
    nav{
        display: flex;
        justify-content: center;
    }
    a{
        padding: 20px;
        text-decoration: none;
        color: #004B27;
    }
</style>
</body>
</html>
