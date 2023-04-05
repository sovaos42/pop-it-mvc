<h2>Подразделение</h2>
<h3><?= $message ?? ''; ?></h3>

<!-- <ol>
    <?php
    // foreach(){
    //     echo '<li>'..'</li>';
    // }
    ?>
</ol> -->

<button>Добавить</button>

<table>
    <tr>
        <td >ID подразделения</td>
        <td>ID вида подразделения</td>
        <td>Название</td>
    </tr>

        <?php
        foreach($Subvision as $sub){
            echo '<tr>';
            echo '<td>'.$sub->IDSubvision.'</td>';
            echo '<td>'.$sub->IDView.'</td>';
            echo '<td>'.$sub->title.'</td>';
            echo '<td>'.'<button>Ред.</button>'.'</td>';
            echo '<td>'.'<button>Уд.</button>'.'</td>';
            '</tr>';
        }
        ?>
</table>