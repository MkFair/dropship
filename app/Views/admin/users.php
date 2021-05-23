<?php if( isset($success_message) ){ ?>
<div class="row mb-3">
	<div class="col-lg-5">
    <div class=" alert alert-success"><?=$success_message?></div>
		</div>
</div>
<?php }?>
<!--Кнопка открывает модальное окно, обращаясь к адресу по аджакс и в боди модалки вставляет ответ admin/users/create_user-->
<button type="button" onclick="user();return false;" class="btn btn-primary" data-toggle="modal" data-target="#modalForm">Создать пользователя</button>
<div class="row">
<div class="col-lg-4 col-md-5 mt-3">
<div class="card">
	<div class="card-inner">
<table class="table table-hover">
	<tr>
      <th scope="col">#</th>
      <th scope="col">Номер</th>
      <th scope="col">Перейти</th>
    </tr>
<?php
$i=1;
if($users){
    foreach($users as $user){?>
        <tr>
        	<td><?=$i?></td>
            <td><?=$user->phone?></td>
            <td><a href="/admin/users/profile/<?=$user->id?>">В профиль</a></td>
     
        </tr>

<?php
$i+=1;
}}else{?>
    <tr>
            <td colspan=2>Нет пользователей для отображения</td>
    </tr>
<?php }
?>
</table>
</div></div>
</div></div>
 <!-- Modal Form -->
    <div class="modal fade" tabindex="-1" id="modalForm">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Создание пользователя</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                   

                </div>
                <div class="modal-footer bg-light">
                   
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">
function user(){

		$.get('/admin/users/create_user', function(data){
	$(".modal-body").append(data);
});

}
</script>