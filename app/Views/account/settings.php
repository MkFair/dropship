<div class="">
    <form id="password_change_form">
        <label>Новый пароль</label>
        <input type=password name="password">
        <label>Повтор пароля</label>
        <input type=password name="confirm_password">
        <button>Сохранить</button>
    </form>
    
</div>
<div class="">
    <form id="stat_default_time_form">
        Выберите период по умолчанию для отображения статистики 
        <label>Период </label>
        <select name="period">
            <option value=1>7 дней</option>
            <option value=2>14 дней</option>
            <option value=3>1 месяц</option>
            <option value=4>3 месяца</option>
            <option value=5>За все время</option>
        </select>
        <button>Сохранить</button>
    </form>
    
</div>
<div class="">
    <form id="api_key_form">
         Используется для авторизации запросов для автоматизации выгрузки остатков
        <label>API Токен </label>
        <input type=text name="api_key" readonly>
        <button>Создать новый</button>
    </form>
    
</div>

