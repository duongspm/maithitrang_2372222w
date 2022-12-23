<div class="title-main"><span><?=@$titleMain?></span></div>
<div class="content-main form-row">
    <?php if(!empty($video)) { foreach($video as $k => $v) { ?>
        <div class="video col-6 col-md-4 col-lg-3 col-xl-3" data-fancybox="video" data-src="<?=$v['link_video']?>">
            <div class="video-image scale-img">
                <?=$func->getImage(['class' => 'lazy w-100', 'size-error' => '480x360x1', 'url' => 'https://img.youtube.com/vi/'.$func->getYoutube($v['link_video']).'/0.jpg', 'alt' => $v['name'.$lang]])?>
            </div>
            <h3 class="video-name text-split"><?=$v['name'.$lang]?></h3>
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