
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
   </div>  
     </div>    
<script type="text/javascript">
    
function gen_password(){
    $("#pass").val(Math.random().toString(36).slice(-8)) ;
}


</script>