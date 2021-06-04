<div class="row">
<?php if( !empty($products) ){
    foreach( $products as $product ){?>
        <div class="col-lg-3  mt-2">
            <div class="border p-2">
                <center>
                    <img style="width:100%;height:150px;object-fit:cover;" src="/static/images/nophoto.jpeg">
                </center>
                <span><?=$product->name?></span>
                <span><?=$product->price?> грн</span>
                <button class="btn btn-primary" onclick="add_to_cart(<?=$product->id?>)">В корзину</button>
            </div>
        </div>
<?php }}else{ ?>
    <div class="col-lg-12"><center>Нет товаров для отображения</center></div>
<?php }?>
</div>
<script>
    function add_to_cart(product_id){
        $.get("/products/add_to_cart",{product_id:product_id})
        NioApp.Toast('Товар успешно добавлен в корзину', 'info', {
          position: 'bottom-center'
        });
    }

</script>
