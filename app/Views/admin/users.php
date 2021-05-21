<?php if( isset($success_message) ){ ?>
    <div class="alert alert-sucess alert-message"><?=$success_message?></div>
<?php }?>
<button>Создать пользователя</button><!--Кнопка открывает модальное окно, обращаясь к адресу по аджакс и в боди модалки вставляет ответ-->
<table>
<?php
if($users){
    foreach($users as $user){?>
        <tr>
            <td><?=$user->phone?></td>
            <td><a href="/admin/users/profile/<?=$user->id?>">В профиль</a></td>
        
        </tr>

<?php
}}else{?>
    <tr>
            <td colspan=2>Нет пользователей для отображения</td>
    </tr>
<?php }
?>
</table>
