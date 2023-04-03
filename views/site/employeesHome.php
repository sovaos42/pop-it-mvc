<h2>Личный кабинет</h2>
<h3><?= $message ?? ''; ?></h3>

<!-- <ol>
    <?php
    // foreach(){
    //     echo '<li>'..'</li>';
    // }
    ?>
</ol> -->



<div>
    <label>Фамилия<input type="text"  name="surname"></label>
    <label>Имя<input type="text"  name="name"></label>
    <label>Отчество<input type="text"  name="patronmic"></label>
    <label>Пол<input type="text"  name="sex"></label>
    <label>Дата рождения<input type="text"  name="date"></label>
    <label>Адрес<input type="text"  name="address"></label>
    <label>Должность<input type="text"  name="IDJobTitle"></label>
    <label>ID сотрудника<input type="text"  name="IDEmployees"></label>
    <label>Подразделение<input type="text"  name="IDSubdivision"></label>
    <label>Дисциплина<input type="text"  name="IDDiscipline"></label>
    <label>Логин<input type="text"  name="login"></label>
    <label>Пароль<input type="text"  name="password"></label>
</div>

<button>Добавить</button>

