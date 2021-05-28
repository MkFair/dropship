
<?php if( isset($success_message) ){ ?>
    <div class="alert alert-success alert-message"><?=$success_message?></div>
<?php }?>
<div class="row">
<div class="col-lg-4 col-md-6 ">
<div class="card">
	<div class="card-inner">
<form method="POST">
                        <div class="form-group">
                            <label class="form-label" for="full-name">Телефон </label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="phone" value="<?=$user->phone?>" required>
                            </div>
                        </div>
                        <div class="form-group">

                            <label class="form-label" for="email-address">Пароль</label>
                            <div class="form-control-wrap">
                                <div class="input-group">
                                <input type="text" class="form-control" name="password" id="pass" style="border-right: 0px;">
                            <div class="input-group-append">
                               <a onclick="gen_password();" style="cursor: pointer;"> <span class="input-group-text" style="background-color: white;border-left: 0px;">&</span></a>
                            </div>
                        </div>
                    </div>
                    </div>

                         <div class="form-group">
                            <label class="form-label" for="email-address">Баланс</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="balance" value="<?=$user->balance?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                        	
                            <button type="submit" class="btn btn-lg btn-primary mt-1">Сохранить</button>
                        </div>
</div>                        
</form>

</div>   
 </div>  
  
        
<div class="col-lg-6 col-md-6 ">
    <div class="card"> 
        <div class="card-header"> 
            Изменение баланса администратором
        </div>
        <div class="card-body"> 
            <table class="table">
                <tr>
                    <td>Дата</td>
                    <td>Изменение</td>
                </tr>
                <?php if( !empty($changes_balance) ){ 
                    foreach( $changes_balance as $line ){
                    ?>
                    <tr>
                        <td><?=$line->changed?></td>
                        <td><?=$line->money?> грн</td>
                    </tr>
                    
                <?php }} else echo"<tr><td сolspan=2>Нет данных</td></tr>";?>
            </table>
        </div> 
    </div> 
        <div class="card"> 
        <div class="card-header"> 
            Пополнение баланса
        </div>
        <div class="card-body"> 
            <table class="table">
                <tr>
                    <td>Дата</td>
                    <td>Сумма</td>
                    <td>Статус</td>
                </tr>
                <?php if( !empty($replenishments) ){ 
                    foreach( $replenishments as $line ){
                    ?>
                    <tr>
                        <td><?=$line->created_on?></td>
                        <td><?=$line->amount?> грн</td>
                        <td><?=($line->status?"<span class='badge badge-outline-success'>Оплачено</span>":"<span class='badge badge-outline-light'>В ожидании</span>")?></td>
                    </tr>
                    
                <?php }} else echo"<tr><td сolspan=2>Нет данных</td></tr>";?>
            </table>
        </div> 
    </div> 

</div>


</div>
<script type="text/javascript">
    
function gen_password(){
    $("#pass").val(Math.random().toString(36).slice(-8)) ;
}


</script>
