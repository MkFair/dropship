<h3>Заказы <a href="/order">Новый заказ</a></h3>
<div class="">
    <div class="">
        <label>Поиск</label>
        <input type=text name="search">
        <label>Период</label>
        <input type=text name="period">
        <label>Статус заказа</label>
        <select name="status">
            <option>Все</option>
            <option>Новый</option>
            <option>В обработке</option>
            <option>Отправлен</option>
            <option>Отменен</option>
        </select>
        <label>Статус доставки</label>
        <select name="delivery_status">
            <option value="" selected="selected"> Все</option>
            <option value="1">Подготовка к отправке</option>
            <option value="2">Отправлен</option>
            <option value="3">Доставлен</option>
            <option value="4">Получен</option>
            <option value="5">Отказ от получения</option>
            <option value="0">Другое</option>
        </select>
    </div>
    <table>
        <tr>
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
