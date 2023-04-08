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
                        '</tr>';
                    
                }
                ?>
        </table>

        <form method="post" class="login">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <input name="type_form" type="hidden" value="filter_IDSubvision"/>
    <select name="IDSubvision">
    <?php
        foreach($User as $us){
            ?>
            <option class="tabl" value="<?= $us->IDSubvision?>"> <?= $us->IDSubvision?> </option>
            <?php
        }
        ?>
    </select>
            <button type="submit">Найти</button>
        </form>
    </div>
</div>
<style>
    .login{
        margin: 40px;
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
    button{
        height: 40px;
        width: 150px;
        color: #004B27;
        background-color: white;
        border: 2px solid #004B27 ;
    }
    .tabl, input, select{
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

