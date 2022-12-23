<div class="title-main"><span><?=$rowDetail['name'.$lang]?></span></div>
<div class="content-main album-gallery form-row w-clear">
    <?php if(!empty($rowDetailPhoto)) { foreach($rowDetailPhoto as $k => $v) { ?>
        <div class="album col-6 col-md-4 col-lg-3 col-xl-3">
            <a class="album-image scale-img mb-0" rel="album-<?=$rowDetail['id']?>" href="<?=ASSET.UPLOAD_PRODUCT_L.$v['photo']?>" title="<?=$rowDetail['name'.$lang]?>">
                <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '480x360x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $rowDetail['name'.$lang]])?>
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