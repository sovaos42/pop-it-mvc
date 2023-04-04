<h2>Сотрудники</h2>
<h3><?= $message ?? ''; ?></h3>

 <ol>
    <?php
     foreach($employees as $employee){
         echo '<li>'.$employee->IDEmployees.'</li>';
         echo '<li>'.$employee->name.'</li>';
         echo '<li>'.$employee->surname.'</li>';
         echo '<li>'.$employee->patronymic.'</li>';
         echo '<li>'.$employee->IDJobTitle.'</li>';
         echo '<li>'.$employee->IDDiscipline.'</li>';
         echo '<li>'.$employee->IDSubdivision.'</li>';
         echo '<li>'.$employee->IDJobTitle.'</li>';
     }
    ?>
</ol>

<button>Добавить</button>

<div>
    <p>ID сотрудника</p>
    <p>Фамилия</p>
    <p>Имя</p>
    <p>Отчество</p>
    <p>ID дисциплины</p>
    <p>ID подразделение</p>
    <p>ID должность</p>
</div>
<button>Ред.</button>
<button>Уд.</button>


