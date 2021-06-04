

<style type="text/css">
    body{
        font-weight: normal;
    }
    .btn_go{
        justify-content: center;
        font-size: 16px;
        font-weight: normal;
    }
    .link_block{
        background-color: #f7f7f9;
        border-radius: 5px;
        padding: 14px;
        border: 0px;
        height: auto;
        font-size: 15px;
        text-align: left;
        display: none;
    }
    .card{
        min-height: 450px;
    }
    p{
        font-size: 16px;
    }
</style>
<div class="nk-block-head-content mb-3" style="display: flex; justify-content:space-between;align-items:center;">

       <h3 class="nk-block-title page-title" style="font-weight: normal;">Остатки и изображения </h3>
</div>
<div class="row mb-3">
    <div class="col-lg-4 mb-4 ">
    <div class="card h-100">
        <div class="card-inner text-center">
        <h4 class="mb-5" style="font-weight: normal;">JSON</h4>
        <p class="mb-5"> Данные в фомате JSON<br>
            Актуальные остатки и изображения<br>
            Управление перечнем и ценами в <a href="/settings">настройках</a><br>
          <span class="text-success"> Не теряет актуальность</span> 
        </p>
        <button class="btn btn-primary form-control btn_go mb-3" onclick="window.open('<?=site_url("export/".$api_key."/json")?>')">Перейти</button>
        <p>Данные доступны по ссылке: </p>
               <div class="show_block">
         <button class="btn btn-dark form-control btn_go mb-3" >Показать</button>
         <span class="form-control link_block ">
             <?=site_url("export/".$api_key."/json")?>

         </span>
        </div>
    </div>
   </div> 
   </div>
    <div class="col-lg-4 mb-4 ">
    <div class="card h-100">
        <div class="card-inner text-center">
        <h4 class="mb-5" style="font-weight: normal;">XML</h4>
        <p class="mb-5"> Данные в фомате XML<br>
            Актуальные остатки и изображения<br>
            Управление перечнем и ценами в <a href="/settings">настройках</a><br>
            <span class="text-success"> Не теряет актуальность</span> 
        </p>
        <button class="btn btn-primary form-control btn_go mb-3" onclick="window.open('<?=site_url("export/".$api_key."/xml")?>')">Перейти</button>
        <p>Данные доступны по ссылке: </p>
         <div class="show_block">
         <button class="btn btn-dark form-control btn_go mb-3" >Показать</button>
         <span class="form-control link_block ">
             <?=site_url("export/".$api_key."/xml")?>
         </span>
        </div>
       </div>
   </div> 
   </div>
       <div class="col-lg-4 mb-4 ">
    <div class="card h-100">
        <div class="card-inner text-center">
        <h4 class="mb-5" style="font-weight: normal;">CSV</h4>
        <p class="mb-5"> Данные в фомате CSV<br>
            Актуальные остатки и изображения<br>
            Управление перечнем и ценами в <a href="/settings">настройках</a><br>
            <span class="text-success"> Не теряет актуальность</span> 
        </p>
        <button class="btn btn-primary form-control btn_go mb-3" onclick="window.open('<?=site_url("export/".$api_key."/csv")?>')">Перейти</button>
        <p>Данные доступны по ссылке: </p>
        <div class="show_block">
         <button class="btn btn-dark form-control btn_go mb-3" >Показать</button>
         <span class="form-control link_block ">
             <?=site_url("export/".$api_key."/csv")?>
         </span>
        </div>
          </div>
   </div> 
   </div>

</div>
<script type="text/javascript">


</script>
