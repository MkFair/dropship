<div class="">
    <form method=post action="/admin/bankdetails/handler">
    <div class="">
        <label>Наименование</label>
        <input type=text name="name" value="<?=$bankdetails->name?>">
    </div>
    <div class="">
        <label>Код ЄДРПОУ(ОКПО)</label>
        <input type=text name="code" value="<?=$bankdetails->code?>">
    </div>
    <div class="">
        <label>Счет</label>
        <input type=text name="invoice" value="<?=$bankdetails->invoice?>">
    </div>
    <div class="">
        <label>Счет(IBAN)</label>
        <input type=text name="IBAN" value="<?=$bankdetails->IBAN?>">
    </div>
    <div class="">
        <label>Код банка(МФО)</label>
        <input type=text name="bank_code" value="<?=$bankdetails->bank_code?>">
    </div>
    <div class="">
        <label>Наименование банка</label>
        <input type=text name="bank_name" value="<?=$bankdetails->bank_name?>">
    </div>
    <button>Сохранить</button>
    </form>
</div>
