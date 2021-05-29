<style type="text/css">
    body{font-size: 1rem;}
 table tr{  
background-color: #fff;
box-shadow: 0 4px 20px 0 rgba(0,0,0,.05);
cursor: pointer;
-webkit-transition: all .3s ease;
transition: all .3s ease;

}
table{
    border-collapse: separate !important;
            border-spacing: 0 .75rem;
            padding: 0 .7rem; word-wrap: break-word;
}
table td,th{
padding: 14px;
}

.tr_colors td:first-child{
    border-left: 10px solid #c3e6cb;
}
.tr_colors2 td:first-child{
    border-left: 10px solid #f9cfcf;
}
.dollars_color{
color: #b8c2cc !important;}


@media(max-width: 900px){
    table{
        padding: 0rem!important;
    }
    .pad{
        padding: 0px!important;
        font-size: 12px;
    }
    table td{
    padding: 5px!important;
    padding-right: 0px!important;
    }
    .btn_pay{
        font-size: 12px!important;
    }
    .page-title{
        font-size: 17px;
    }

}
</style>


<div class="nk-block-head-content mb-3" style="display: flex; justify-content:space-between;align-items:center;">

       <h3 class="nk-block-title page-title" style="font-weight: normal;">Взаиморасчеты </h3>

       <a href="/replenishment" class="btn btn-primary btn_pay" style="font-size: 16px;">+ Пополнить счет</a>
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
                <small class="form-label">Тип операции</small>
                <div class="form-control-select">
                    <select name="status" class="form-control">
                    <option>Все</option>
                    <option>Списания</option>
                    <option>Зачисления</option>
                    </select>
              </div>
            </div>

            <div class="col-lg-12 pad" >
                <table class="col-lg-12" style="padding-left: 0px; padding-right: 0px;">
                    <tr style="">
                         <th>#</th>
                            <th>Дата</th>
                            <th>Сумма</th>
                            <th>Описание</th>
                    </tr>   

                    <tr class="tr_colors">
                            <td>1</td>
                            <td>18.03.2021 10:40</td>
                            <td>17.50 <span class="dollars_color">$</span></td>
                            <td>Пополнение лицевого счета ТТН: 20450358479564 </td>
                    </tr>
                    <tr class="tr_colors2">
                            <td>2</td>
                            <td>12.03.2021 10:35</td>
                            <td>-20.50 <span class="dollars_color">$</span></td>
                            <td>Оплата заказа №27560 </td>
                    </tr>
                    <tr class="tr_colors">
                            <td>3</td>
                            <td>11.03.2021 13:32</td>
                            <td>5.90 <span class="dollars_color">$</span></td>
                            <td>Пополнение лицевого счета ТТН: 20450358479564 </td>
                    </tr>
                    <tr class="tr_colors">
                            <td>4</td>
                            <td>08.03.2021 10:14</td>
                            <td>14.87 <span class="dollars_color">$</span></td>
                            <td>Пополнение лицевого счета ТТН: 20450358479564 </td>
                    </tr>
                    <tr class="tr_colors2">
                            <td>5</td>
                            <td>18.03.2021 10:40</td>
                            <td>-8.53 <span class="dollars_color">$</span></td>
                            <td>Оплата заказа №27560  </td>
                    </tr>
                    <tr class="tr_colors">
                            <td>6</td>
                            <td>03.03.2021 09:49</td>
                            <td>23.36 <span class="dollars_color">$</span></td>
                            <td>Пополнение лицевого счета ТТН: 20450358479564 </td>
                    </tr>
                    <tr class="tr_colors2">
                            <td>7</td>
                            <td>18.03.2021 10:40</td>
                            <td>-19.50 <span class="dollars_color">$</span></td>
                            <td>Оплата заказа №27560  </td>
                    </tr>
                
                </table>
            </div>

        </div>
    </div>
    </div>
    </div>
</div>






