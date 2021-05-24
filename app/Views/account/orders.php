<div class="nk-block-head-content mb-3" style="display: flex; justify-content:space-between;align-items:center;">

       <h3 class="nk-block-title page-title" style="font-weight: normal;">Заказы </h3>

       <button href="/order" class="btn btn-primary" style="font-size: 16px;">+ Новый заказ</button>
    </div>


<div class="row mb-3">
    <div class="col-lg-12 mb-4 ">
    <div class="card h-100">
        <div class="card-inner">
                    <div class="row">

            <div class="form-group col-lg-3">
              <small class="form-label" >Поиск</small> 
               <div class="form-control-wrap">
              <input type=text name="search" class="form-control"  required>
              </div>
            </div>
             <div class="form-group col-lg-3">
              <small class="form-label" >Период</small> 
               <div class="form-control-wrap">
              <input type=text name="period" class="form-control"  required>
              </div>
            </div>

             <div class="form-group col-lg-3">
                <small class="form-label">Статус заказа</small>
                <div class="form-control-select">
                     <select name="status" class="form-control">
                    <option>Все</option>
                    <option>Новый</option>
                    <option>В обработке</option>
                    <option>Отправлен</option>
                     <option>Отменен</option>
                    </select>
              </div>
            </div>

            <div class="form-group col-lg-3">
            <small class="form-label">Статус доставки</small><br>
               <div class="form-control-select">
                            <select name="delivery_status" class="form-control">
                            <option value="" selected="selected"> Все</option>
                                <option value="1">Подготовка к отправке</option>
                                <option value="2">Отправлен</option>
                                <option value="3">Доставлен</option>
                                <option value="4">Получен</option>
                                <option value="5">Отказ от получения</option>
                                <option value="0">Другое</option>
                            </select>
              </div>
            </div>




<div class="col-lg-12" >
    <table class="col-lg-12">
        <tr style="display: flex;justify-content:space-between;align-items:center;">
            <th>#</th>
            <th>Стоимость</th>
            <th>Доставка</th>
            <th>НП</th>
            <th>Получатель</th>
            <th>Адрес</th>
            <th></th>
        </tr>
    
    </table>

</div>







        </div>
    </div>
    </div>
    </div>
</div>


