<div class="container">
    <div class="body">
        <h2>Вид подразделения</h2>
        <h3><?= $message ?? ''; ?></h3>

        <a  href="<?= app()->route->getUrl('/viewSubvisionAdd') ?>" class="button">Добавить</a>

        <table>
            <tr>
                <td>ID вида подразделения</td>
                <td>Название</td>
            </tr>

            <?php
        foreach($ViewSubvision as $disc){
            ?>
            <tr>
            <td class="tabl"> <?= $disc->id?> </td>
            <td class="tabl"> <?= $disc->title?> </td>
            <td class="button"><a href="<?= app()->route->getUrl("/viewSubvisionEdit?id=$disc->id") ?>" class="button">Редактировать</a></td>
            </tr>
            <?php
        }
        ?>
        </table>
    </div>
</div>


<a href="delete_tub.php?=id<?php echo $row['IDView'];?>">
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
