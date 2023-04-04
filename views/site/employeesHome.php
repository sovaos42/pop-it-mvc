

<div class="container">
    <div class="body">
        <label class="ID">Фамилия<input type="text"  name="surname" readonly></label>
        <label class="ID">Имя<input type="text"  name="name" readonly></label>
        <label class="ID">Отчество<input type="text"  name="patronmic" readonly></label>
        <label class="ID">Пол<input type="text"  name="sex" readonly></label>
        <label class="ID">Дата рождения<input type="date"  name="date" readonly></label>
        <label class="ID">Адрес<input type="text"  name="address" readonly></label>
        <label class="ID">Должность<input type="text"  name="IDJobTitle" readonly></label>
        <label class="ID">ID сотрудника<input type="text"  name="IDEmployees" readonly></label>
        <label class="ID">Подразделение<input type="text"  name="IDSubdivision" readonly></label>
        <label class="ID">Дисциплина<input type="text"  name="IDDiscipline" readonly></label>
        <label class="ID">Логин<input type="text"  name="login" readonly></label>
        <label class="ID">Пароль<input type="text"  name="password" readonly></label>

        <button class="button">Выход</button>
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
        display: block;
        margin-left: auto;
        margin-right: auto
    }
</style>