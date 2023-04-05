<div class="container">
    <div class="body">
        <h2>Регистрация нового пользователя</h2>
        <h3><?= $message ?? ''; ?></h3>
        <form method="post">
            
            <select name="IDRole" id="" >
                <option value="1">Администратор</option>
                <option value="2">Сотрудник</option>
            </select>

            <label class="ID">Фамилия<input type="text"  name="surname"></label>
            <label class="ID">Имя<input type="text"  name="name"></label>
            <label class="ID">Отчество<input type="text"  name="patronymic"></label>
            <select name="IDSex" id="" >
                <option value="1">Муж</option>
                <option value="2">Жен</option>
            </select>
            <label class="ID">Дата рождения<input type="date"  name="date"></label>
            <label class="ID">Адрес<input type="text"  name="address"></label>
            <select name="IDJobTitle" id="" >
                <option value="3"></option>
                <option value="1">Преподаватель</option>
                <option value="2">Преподаватель в.к.</option>
            </select>
            <select name="IDSubvision" id="" >
                <option value="3"></option>
                <option value="1">Физ-мат</option>
                <option value="2">Соц-гум</option>
            </select>
            <select name="IDDisciplines" id="" >
                <option value="3"></option>
                <option value="1">Математика</option>
                <option value="2">Физика</option>
            </select>
            <!-- <label class="ID">Должность<input type="text"  name="IDJobTitle"></label>
            <label class="ID">Подразделение<input type="text"  name="IDSubvision"></label>
            <label class="ID">Дисциплина<input type="text"  name="IDDiscipline"></label> -->
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