<div class="container">
    <div class="body">
        <h2>Подразделение</h2>
        <h3><?= $message ?? ''; ?></h3>

        <a  href="<?= app()->route->getUrl('/subvisionAdd') ?>" class="button">Добавить</a>

        <table>
            <tr>
                <td >ID подразделения</td>
                <td>ID вида подразделения</td>
                <td>Название</td>
            </tr>

                <?php
                foreach($Subvision as $sub){
                    echo '<tr>';
                    echo '<td class="tabl">'.$sub->IDSubvision.'</td>';
                    echo '<td class="tabl">'.$sub->id.'</td>';
                    echo '<td class="tabl">'.$sub->title.'</td>';
                    '</tr>';
                }
                ?>
        </table>
        <form method="post" class="login">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <input name="type_form" type="hidden" value="search_users"/>
    <input name="search" type="text">
            <button type="submit">Поиск</button><br>
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
    .tabl{
        padding: 7px;
        border: solid #004B27 2px;
        background-color: white;
    }
    .dob{
        margin-bottom: 30px;
    }
    .button{
        font-size: 20pt;
        text-shadow: 1px 1px 1px green;
        color: white;
    }
    input, select{
        padding: 7px;
        border: solid #004B27 2px;
        background-color: white;
    }
</style>

