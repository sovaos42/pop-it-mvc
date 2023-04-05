<div class="container">
<div class="body">
    <h2>Авторизация</h2>
    <h3><?= $message ?? ''; ?></h3>

    <h3><?= app()->auth->user()->name ?? ''; ?></h3>
    <?php
    if (!app()->auth::check()):
        ?>

        <form method="post">
            <label class="loginA">Логин <input type="text" name="login"></label>
            <label class="passwordA">Пароль <input type="password" name="password"></label>
            <button class="buttonA">Войти</button>
        </form>
</div>
</div>
<style>
    h2 {
        display: flex;
        justify-content: center;
        color: #004B27;
    }
    h3 {
        display: flex;
        justify-content: center;
        color: #004B27;
    }
    .body{

        background-color: rgba(204, 226, 221, 1);
        padding: 25px;
    }
    .container{
        display: flex;
        justify-content: center;
        font-family: Roboto;
    }
    label{
        margin: 15px;
    }
    input{
        border: 2px solid #004B27 ;
        border-radius: 3px;
        height: 30px;
        width: 400px;
        margin: 10px;
    }
    form{
        color: #004B27;
        display: flex;
        flex-direction: column;
        align-items: center;
        /*justify-content: center;*/
    }
    .loginA{
        display: flex;
        flex-direction: column;
    }

    .passwordA{
        display: flex;
        flex-direction: column;
    }

    .buttonA{
        height: 40px;
        width: 150px;
        color: #004B27;
        background-color: white;
        border: 2px solid #004B27 ;
    }
</style>
<?php endif;