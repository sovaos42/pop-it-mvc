<div class="container">
    <div class="body">
        <h2>Регистрация нового пользователя</h2>
        <h3><?= $message ?? ''; ?></h3>
        <form method="post">
            
            <select name="IDRole" id="">
                <option value="1">Администратор</option>
                <option value="2">Сотрудник</option>
            </select>

            <label class="login">Логин <input type="text" name="login"></label>
            <label class="password">Пароль <input type="password" name="password"></label>
            <button class="button">Зарегистрироваться</button>
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
    .name{
        display: flex;
        flex-direction: column;
    }
    .login{
        display: flex;
        flex-direction: column;
    }

    .password{
        display: flex;
        flex-direction: column;
    }

    .button{
        height: 40px;
        width: 150px;
        color: #004B27;
        background-color: white;
        border: 2px solid #004B27 ;
    }
</style>