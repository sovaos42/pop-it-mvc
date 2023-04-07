<div class="container">
    <div class="body">
<h2>Сотрудники</h2>
<h3><?= $message ?? ''; ?></h3>



        <a class="button" href="<?= app()->route->getUrl('/signup') ?>">Добавить</a>
        <table>
            <tr>
                <td class="tabl">ID сотрудника</td>
                <td class="tabl">Фамилия</td>
                <td class="tabl">Имя</td>
                <td class="tabl">Отчество</td>
                <td class="tabl">ID дисциплины</td>
                <td class="tabl">ID подразделение</td>
                <td class="tabl">ID должность</td>
            </tr>

                <?php
                foreach($User as $empl){
                    
                        echo '<tr>';
                        echo '<td class="tabl">'.$empl->id.'</td>';
                        echo '<td class="tabl">'.$empl->surname.'</td>';
                        echo '<td class="tabl">'.$empl->name.'</td>';
                        echo '<td class="tabl">'.$empl->patronymic.'</td>';
                        echo '<td class="tabl">'.$empl->IDDisciplines.'</td>';
                        echo '<td class="tabl">'.$empl->IDSubvision.'</td>';
                        echo '<td class="tabl">'.$empl->IDJobTitle.'</td>';
                        echo '<td>'.'<button>Ред.</button>'.'</td>';
                        echo '<td>'.'<button>Уд.</button>'.'</td>';
                        '</tr>';
                    
                }
                ?>
        </table>
    </div>
</div>
<style>
    .body{
        background-color: rgba(204, 226, 221, 1);
        padding: 25px;
    }
    .container{
        display: flex;
        justify-content: center;
        font-family: Roboto;
    }
    button{
        height: 40px;
        width: 150px;
        color: #004B27;
        background-color: white;
        border: 2px solid #004B27 ;
    }
    .tabl{
        padding: 7px;
        border: solid #004B27 2px;
        background-color: white;
    }
    .button{
        font-size: 20pt;
        text-shadow: 1px 1px 1px green;
        color: white;
    }
</style>

