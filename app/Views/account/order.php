<h4>Новый заказ</h4>
<div class="row">
<div class="col-lg-7">
    <div class="card">
    <label>Фамилия и имя получателя</label>
    <input type="text" name="full_name">
    <label>Телефон получателя</label>
    <input type="text" name="phone">
    <label>Город доставки</label>
    <select name="city" class="city_select">
        
    </select>
    <label>Отделение НоваПошта</label>
    <select class="warehouse_select" name="novaposhta_warehouse">
        <option>Выберите Город</option>
    </select>
    <label>Плательщик доставки</label>
    <select name="delivery_payeers" class="form-select">
        <option>Отправитель</option>
        <option>Покупатель</option>
    </select>
    <label>Наложенный платеж</label>
    <select name="COD" class="form-select">
        <option>Да</option>
        <option>Нет</option>
    </select>
    <button>Оформить заказ</button>
    <div class="">
        Внимание, при оформлении заказа до 11:00, Ваш заказ будет отправлен тот же день. При оформлении позже — на следующий день после оформления. 
    </div>
    </div>
</div>
<div class="col-lg-5">
    <div class="card">
        <?php if( !empty($cart) ){ ?>
        <div class="cart-list border">
        
        
        </div>
        
        <div class="border mt-3">
            Доставка <span class="float-right">0 грн</span>
        </div>
        <div class="border">
            Всего <span class="float-right">0 грн</span>
        </div>
        <?php }else echo"<h6><center>Ваша корзина пуста</center></h6>"; ?>
    </div>
</div>
<script>
    
</script>
</div>
