<div class="title-main"><span><?=(!empty($titleCate)) ? $titleCate : @$titleMain?></span></div>
<div class="dichvu_tpl">
    <?php if(!empty($dichvu)) { foreach($dichvu as $k => $v) { ?>
    <div class="dichvu__tpl--item">
        <div class="dichvu__tpl--left">
            <div class="dichvu__tpl--left-img">
                <div class="linhvuc__img">
                    <?= $func->getImage(['class' => '', 'sizes' => '69x69x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo2'], 'alt' => $v['name'.$lang]]) ?>
                </div>
            </div>
            <div class="dichvu__tpl--left-name">
                <a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>" class="linhvuc__name">
                    <?=$v['name'.$lang]?>
                </a>
            </div>
            <div class="dichvu__tpl--left-desc">
                <span class="linhvuc__desc">
                    <?=$v['desc'.$lang]?>
                </span>
            </div>
            <div class="dichvu__tpl--left-btn">
                <div class="linhvuc__xemthem">
                    <a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                        <div class="dichvu__tpl--btn">
                            <span>Xem Thêm</span>
                        </div>
                        <div class="linhvuc-btn-right">
                            <div class="linhvuc__xemthem-icon">
                                <img src="assets/images/linhvuc-icon.png" alt="<?=$v['name'.$lang]?>">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="dichvu__tpl--right">
            <a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '760x500x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
            </a>
        </div>
    </div>
    <?php } } else { ?>
    <div class="col-12">
        <div class="alert alert-warning w-100" role="alert">
            <strong><?=khongtimthayketqua?></strong>
        </div>
    </div>
    <?php } ?>
</div>
<div class="content-main row">
    <div class="clear"></div>
    <div class="col-12">
        <div class="pagination-home w-100"><?=(!empty($paging)) ? $paging : ''?></div>
    </div>
</div>