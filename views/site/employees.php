<h2>Сотрудники</h2>
<h3><?= $message ?? ''; ?></h3>



<button>Добавить</button>
<table>
    <tr>
        <td >ID сотрудника</td>
        <td>Фамилия</td>
        <td>Имя</td>
        <td>Отчество</td>
        <td>ID дисциплины</td>
        <td>ID подразделение</td>
        <td>ID должность</td>
    </tr>

        <?php
        foreach($Employees as $empl){
            echo '<tr>';
            echo '<td>'.$empl->IDEmployees.'</td>';
            echo '<td>'.$empl->surname.'</td>';
            echo '<td>'.$empl->name.'</td>';
            echo '<td>'.$empl->patronymic.'</td>';
            echo '<td>'.$empl->IDDiscipline.'</td>';
            echo '<td>'.$empl->IDSubvision.'</td>';
            echo '<td>'.$empl->IDJobTitle.'</td>';
            echo '<td>'.'<button>Ред.</button>'.'</td>';
            echo '<td>'.'<button>Уд.</button>'.'</td>';
            '</tr>';
        }
        ?>
</table>



