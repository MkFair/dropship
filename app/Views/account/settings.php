<style type="text/css">
    .btn_text_center{
        justify-content: center;
    }
</style>
    <div class="nk-block-head-content mb-3">
       <h4 class="nk-block-title page-title" style="font-weight: normal;">НАСТРОЙКИ </h4>
         </div>
<div class="row mb-4">
<div class="col-lg-4 col-md-7 col-sm-10 ">
<div class="card">
    <div class="card-inner">
      <div class="card-title-group pb-3 g-2">
         <div class="card-title ">
          <h5 class="title">Пароль</h5>
              <p>Смена пароля</p>
                </div>
        </div>
         <form id="password_change_form" action="/settings/change_password">
         <div class="form-group">
              <label class="form-label" >Новый пароль</label>
               <div class="form-control-wrap">
              <input type="password" name="password" class="form-control"  required>
              </div>
        </div>
        <div class="form-group">
              <label class="form-label" >Повторите пароль</label>
               <div class="form-control-wrap">
              <input type="password" name="confirm_password"  class="form-control"  required>
              </div>
        </div>

         <button type="submit" class="btn btn-lg btn-primary mt-1 btn_text_center form-control">Сохранить</button>
         </form>
</div>
</div>
</div>
</div>



<div class="row mb-4">
<div class="col-lg-4 col-md-7 col-sm-10 ">
<div class="card">
    <div class="card-inner">
        <div class="card-title-group pb-3 g-2">
         <div class="card-title ">
          <h5 class="title">Статистика</h5>
              <p>Выберите период по умолчанию для отображения статистики </p>
                </div>
        </div>
        <form id="stat_default_time_form" action="/settings/change_stat_period">
         <div class="form-group">
              <label class="form-label" >Период</label>
               <div class="form-control-select">
               <select name="period" class="form-control">
                    <option <?=($user->stat_time==1?"selected":"")?> value=1>7 дней</option>
                    <option <?=($user->stat_time==2?"selected":"")?> value=2>14 дней</option>
                    <option <?=($user->stat_time==3?"selected":"")?> value=3>1 месяц</option>
                    <option <?=($user->stat_time==4?"selected":"")?> value=4>3 месяца</option>
                    <option <?=($user->stat_time==5?"selected":"")?> value=5>За все время</option>
                </select>
              </div>
        </div>

         <button type="submit" class="btn btn-lg btn-primary mt-1 btn_text_center form-control">Сохранить</button>
         </form>
</div>
</div>
</div>
</div>


<div class="row mb-4">
<div class="col-lg-4 col-md-7 col-sm-10 ">
<div class="card">
    <div class="card-inner">
                <div class="card-title-group pb-3 g-2">
         <div class="card-title ">
          <h5 class="title">API Токен</h5>
              <p>Используется для авторизации запросов для автоматизации выгрузки остатков</p>
                </div>
        </div>
    <form id="api_key_form" action="/settings/create_key">
         <div class="form-group">
              <label class="form-label" >API Токен</label>
               <div class="form-control-wrap">
              <input type="text" class="form-control" name="api_key" value="<?=$api_key?>" readonly>
              </div>
        </div>
         <button type="submit" class="btn btn-lg btn-danger mt-1 btn_text_center form-control">Создать новый</button>
         </form>
</div>
</div>
</div>
</div>

