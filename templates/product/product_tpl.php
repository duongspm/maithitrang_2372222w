<div class="title-main"><span>Dự án</span></div>
<div class="content-main w-clear">
    <div class="row">
        <div class="productlistss">
            <?php if(!empty($product)) { foreach($product as $k => $v) { ?>
            <div class="product">
                <a class="box-product text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                    <p class="pic-product scale-img hover_sang">
                        <?=$func->getImage(['sizes' => '336x290x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                    </p>
                    <h3 class="name-product text-split"><?=$v['name'.$lang]?></h3>
                    <p class="price-product">
                        <span
                            class="price-new"><?=lienhe?></span>
                    </p>
                </a>
            </div>
            <?php } } else { ?>
            <div class="col-12">
                <div class="alert alert-warning w-100" role="alert">
                    <strong><?=khongtimthayketqua?></strong>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="clear"></div>
    <div class="col-12">
        <div class="pagination-home w-100"><?=(!empty($paging)) ? $paging : ''?></div>
    </div>
</div>