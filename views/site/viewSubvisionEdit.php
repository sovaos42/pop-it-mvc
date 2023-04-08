<h2>Редактировать</h2>
<h3><?= $message ?? ''; ?></h3>

<div class="container">
    <div class="body">
    <form method="post">
                <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <label class="title">Название <input type="text"  name="title" value="<?= $ViewSubvision[0]->title?>"></label>
    <button class="button">Добавить</button>
    </select>
    </form>
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

