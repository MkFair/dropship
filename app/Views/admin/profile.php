
<?php if( isset($success_message) ){ ?>
    <div class="alert alert-sucess alert-message"><?=$success_message?></div>
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
                                <input type="text" class="form-control" name="password" required>
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
   </div>  
     </div>    