<style type="text/css">
  @media(max-width: 900px){
    td{
      padding-left: 0rem!important;
      padding-right: 1rem!important;
    }
  }
</style>

<div class="">
	<div class="nk-block-head-content mb-3">
       <h4 class="nk-block-title page-title" style="font-weight: normal;">ПОПОЛНЕНИЕ СЧЕТА </h4>
         </div>

  <div class="nk-block">
        <div class="row g-gs">
            <div class="col-lg-6 col-xs-12">
                <div class="card h-100">
              <div class="card-inner">
                 <div class="card-title-group pb-3 g-2">
                   <div class="card-title ">
                    <h5 class="title">Пополнение по реквизитам</h5>
                      <p>
                    Такой перевод будет зачислен в течении 3-х рабочих дней  </p>

                   </div>
            
                </div>
                <table class="table" style="overflow-wrap:anywhere;">
  <tbody>
    <tr>
      <td>Наименование</td>
      <td><?=$bankdetails->name?></td>
    </tr>
    <tr>
      <td>Код ЄДРПОУ(ОКПО)</td>
      <td><?=$bankdetails->code?></td>
    </tr>
    <tr>
      <td>Счет</td>
      <td><?=$bankdetails->invoice?></td>
    </tr>
     <tr>
      <td>Счет(IBAN)</td>
      <td><?=$bankdetails->IBAN?></td>
    </tr>
     <tr>
      <td>Код банка(МФО)</td>
      <td><?=$bankdetails->bank_code?></td>
    </tr>
     <tr>
      <td>Наименование банка</td>
      <td><?=$bankdetails->bank_name?></td>
    </tr>
  </tbody>
</table>
            </div>
          </div>
          </div>
          <div class="col-lg-6 col-xs-12">
            <div class="card h-100">
              <div class="card-inner">
                 <div class="card-title-group pb-3 g-2">
                   <div class="card-title ">
                    <h5 class="title">Пополнение картой VISA/Mastercard</h5>
                      <p>
                    Такой перевод будет зачислен в течении 30 минут </p>

                   </div>
            
                </div>
<form method=post action="/replenishment/handler">
<div class="group-control">
	<small >Укажите сумму</small>
    <input type=text name="amount" class="form-control">
    <small >Счет будет выставлен в грн.<br>
    Комиссия 2,5% за платеж. </small>
    <br>
    <button class="form-control btn btn-primary mt-2" style="justify-content: center;">Перейти к оплате</button>
</div>
</form>
             </div>
         </div><!-- .card -->
     </div><!-- .col -->                                
 </div>
 </div>
</div>
