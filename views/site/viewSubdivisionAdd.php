<h2>Добавить вид подразделения</h2>
<h3><?= $message ?? ''; ?></h3>

<!-- <ol>
    <?php
    // foreach(){
    //     echo '<li>'..'</li>';
    // }
    ?>
</ol> -->

<div class="container">
    <div class="body">
    <label class="ID">ID вид подразделения<input type="text"  name="viewSubdivision"></label>
    <label class="title">Название <input type="text"  name="title"></label>

<button class="button">Добавить</button>

</div>
</div>
<style>
    h2 {
        display: flex;
        justify-content: center;
        color: #004B27;
    }
    h3 {
        display: flex;
        justify-content: center;
        color: #004B27;
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
    label{
        margin: 15px;
    }
    input{
        border: 2px solid #004B27 ;
        border-radius: 3px;
        height: 30px;
        width: 400px;
        margin: 10px;
    }
    form{
        color: #004B27;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .ID{
        display: flex;
        flex-direction: column;
    }

    .title{
        display: flex;
        flex-direction: column;
    }
    .button{
        height: 40px;
        width: 150px;
        color: #004B27;
        background-color: white;
        border: 2px solid #004B27 ;
        display: block;
        margin-left: auto;
        margin-right: auto
    }
</style>

