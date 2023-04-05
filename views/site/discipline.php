<h2>Дисцилины</h2>
<h3><?= $message ?? ''; ?></h3>


<button>Добавить</button>

<table>
    <tr>
        <td>ID дисциплины</td>
        <td>Название</td>
    </tr>

    <?php
        foreach($Discipline as $disc){
            echo '<tr>';
            echo '<td>'.$disc->IDDisciplines.'</td>';
            echo '<td>'.$disc->title.'</td>';
            echo '<td>'.'<button>Ред.</button>'.'</td>';
            echo '<td>'.'<button>Уд.</button>'.'</td>';
            '</tr>';
        }
        ?>
</table>
<style>

</style>
