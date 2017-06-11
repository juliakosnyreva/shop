<div class="col-sm-9 padding-right">
    <div class="features_items">
        <h2 class="title text-center">Товары</h2>

        <?php
        foreach ($data as $product) { ?>

            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="#" alt=""/>
                            <h2 id='1'> <?= $product["price"] ?> руб. </h2>
                            <p> <?= $product["name"] ?> </p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                        </div>
                    </div>
                </div>
            </div>
            <?
            $i++;
        }
        ?>
    </div>
</div>

