<h2>Должности</h2>
<h3><?= $message ?? ''; ?></h3>


<button>Добавить</button>


<table>
    <tr>
        <td>ID должности</td>
        <td>Название</td>
    </tr>

        <?php
        foreach($JobTitle as $jobt){
            echo '<tr>';
            echo '<td>'.$jobt->IDJobTitle.'</td>';
            echo '<td>'.$jobt->title.'</td>';
            echo '<td>'.'<button>Ред.</button>'.'</td>';
            echo '<td>'.'<button>Уд.</button>'.'</td>';
            '</tr>';
        }
        ?>
</table>