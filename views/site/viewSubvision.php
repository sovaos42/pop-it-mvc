<h2>Вид подразделения</h2>
<h3><?= $message ?? ''; ?></h3>

<button>Добавить</button>

<table>
    <tr>
        <td>ID вида подразделения</td>
        <td>Название</td>
    </tr>

        <?php
        foreach($ViewSubvision as $viewsub){
            echo '<tr>';
            echo '<td>'.$viewsub->IDView.'</td>';
            echo '<td>'.$viewsub->title.'</td>';
            echo '<td>'.'<button>Ред.</button>'.'</td>';
            echo '<td>'.'<button>Уд.</button>'.'</td>';
            '</tr>';
        }
        ?>
</table>
