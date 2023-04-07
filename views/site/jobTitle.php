<div class="container">
    <div class="body">
        <h2>Должности</h2>
        <h3><?= $message ?? ''; ?></h3>


        <a  href="<?= app()->route->getUrl('/jobTitleAdd') ?>" class="button">Добавить</a>

        <table>
            <tr>
                <td>ID должности</td>
                <td>Название</td>
            </tr>

                <?php
                foreach($JobTitle as $jobt){
                    echo '<tr>';
                    echo '<td class="tabl">'.$jobt->IDJobTitle.'</td>';
                    echo '<td class="tabl">'.$jobt->title.'</td>';
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
    .dob{
        margin-bottom: 30px;
    }
    .button{
        font-size: 20pt;
        text-shadow: 1px 1px 1px green;
        color: white;
    }
</style>

