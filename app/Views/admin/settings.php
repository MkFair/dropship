<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <form method=post action="/admin/settings/handler">
                    <div class="form-group">
                        <label>Liqpay public key</label>
                        <input type=text name="liqpay_public_key" class="form-control" value="<?=(!empty($s->liqpay_public_key)?$s->liqpay_public_key:"")?>">
                    </div>
                    <div class="form-group">
                        <label>Liqpay private key</label>
                        <input type=text name="liqpay_private_key" class="form-control" value="<?=(!empty($s->liqpay_private_key)?$s->liqpay_private_key:"")?>">
                    </div>
                    <div class="form-group">
                        <label>NovaPoshta private key</label>
                        <input type=text name="novaposhta_private_key" class="form-control" value="<?=(!empty($s->novaposhta_private_key)?$s->novaposhta_private_key:"")?>">
                    </div>
                    <button class="btn btn-primary mt-3">Сохранить</button>
                </form>
            </div>
        </div>
    </div>
</div>
