
<?php if( isset($success_message) ){ ?>
    <div class="alert alert-sucess alert-message"><?=$success_message?></div>
<?php }?>
<form method="POST">
    <label>Телефон</label>
    <input type=text name="phone" value="<?=$user->phone?>">
    <label>Пароль</label>
    <input type=text name="password">
    <label>Баланс</label>
    <input type=text name="balance" value="<?=$user->balance?>">
    <button>Сохранить</button>
</form>
