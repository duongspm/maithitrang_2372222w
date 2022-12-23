<div class="title-main"><span><?=$titleMain?></span></div>
<div class="content-main form-row">
    <?php if(!empty($product)) { foreach($product as $k => $v) { ?>
        <div class="album col-6 col-md-4 col-lg-3 col-xl-3">
            <a class="album-image scale-img" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '480x360x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
            </a>
            <h3 class="album-name"><a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a></h3>
        </div>
    <?php } } else { ?>
        <div class="col-12">
            <div class="alert alert-warning w-100" role="alert">
                <strong><?=khongtimthayketqua?></strong>
            </div>
        </div>
    <?php } ?>
    <div class="clear"></div>
    <div class="col-12">
        <div class="pagination-home w-100"><?=(!empty($paging)) ? $paging : ''?></div>
    </div>
</div>