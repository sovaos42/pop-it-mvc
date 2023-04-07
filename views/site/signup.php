<div class="container">
    <div class="body">
        <h2>Регистрация нового пользователя</h2>
        <h3><?= $message ?? ''; ?></h3>
        <form method="post">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>

            <lable class="ID">Роль
                
                <select name="IDRole" id="" >
                    <?php
                if ($_SESSION ['IDRole'] != 1):
                ?>
                    <option value="1">Администратор</option>
                    <?php
                    endif;
                    ?>
                    <option value="2">Сотрудник</option>
                </select>
            </lable>
            <label class="ID">Фамилия<input type="text"  name="surname"></label>
            <label class="ID">Имя<input type="text"  name="name"></label>
            <label class="ID">Отчество<input type="text"  name="patronymic"></label>
            <lable class="ID">Пол
                <select name="IDSex" id="" >
                    <option value="1">Муж</option>
                    <option value="2">Жен</option>
                </select>
            </lable>
            <label class="ID">Дата рождения<input type="date"  name="date"></label>
            <label class="ID">Адрес<input type="text"  name="address"></label>
            <lable class="ID">Должность
                <select name="IDJobTitle">
                <?php foreach ($jobTitle as $idjob){
                    ?>
                        <option value="<?= $idjob->IDJobTitle ?>"><?= $idjob->title ?></option>

                    <?php 
                    }
                    ?>
                </select>
            </lable>
            <lable class="ID">Подразделение
            <select name="IDSubvision">
                    <?php foreach ($subvision as $sub){
                    ?>
                        <option value="<?= $sub->IDSubvision ?>"><?= $sub->title ?></option>

                    <?php 
                    }
                    ?>
                    </select>
            </lable>
            <lable class="ID">Дисциплина
                <select name="IDDisciplines" id="" >
                <?php foreach ($discipline as $dis){
                    ?>
                        <option value="<?= $dis->IDDisciplines ?>"><?= $dis->title ?></option>

                    <?php 
                    }
                    ?>
                </select>
            </lable>
            <label class="ID">Логин <input type="text" name="login"></label>
            <label class="ID">Пароль <input type="password" name="password"></label>
            <button class="button">Зарегистрироваться</button>
        </form>
    </div>
</div>
<style>
    select{
        border: 2px solid #004B27 ;
        border-radius: 3px;
        height: 30px;
        width: 400px;
        margin: 10px;
        background-color: #fff;
    }
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
    }
    .name{
        display: flex;
        flex-direction: column;
    }
    .ID{
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