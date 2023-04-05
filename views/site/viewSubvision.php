<div class="container">
    <div class="body">
        <h2>Вид подразделения</h2>
        <h3><?= $message ?? ''; ?></h3>

        <button class="dob">Добавить</button>

        <table>
            <tr>
                <td>ID вида подразделения</td>
                <td>Название</td>
            </tr>

                <?php
                foreach($ViewSubvision as $viewsub){
                    echo '<tr>';
                    echo '<td class="tabl">'.$viewsub->IDView.'</td>';
                    echo '<td class="tabl">'.$viewsub->title.'</td>';
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
    .dob{
        margin-bottom: 30px;
    }
</style>
