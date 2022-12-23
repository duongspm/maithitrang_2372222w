<div class="about">
    <div class="wrapper">
        <div class="aboutt pd">
            <?php if(!empty($about)){?>
            <div class="about__buttom">
                <div class="about__left">
                    <div class="about__left-top">
                        <div class="heading--about">
                            <span class="heading heading--white">
                                <?=$about[0]['name'.$lang]?>
                            </span>
                            <div class="slogan-about">
                                <div class="item-line"></div>
                                <span class="slogan__footer">
                                    <?=$sloganfooter['name'.$lang]?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="about__left-buttom">
                        <span>
                            <?=$about[0]['desc'.$lang]?>
                        </span>
                    </div>
                    <div class="about__btn">
                        <div class="xemthem-btn">
                            <a href="gioi-thieu" title="Giới thiệu">Xem Thêm</a>
                        </div>
                    </div>
                </div>
                <div class="about__right">
                    <?php if(!empty($aboutimg)){?>
                    <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:10" data-sm-items="1:10"
                        data-md-items="1:10" data-lg-items="1:10" data-xlg-items="1:10" data-rewind="1"
                        data-autoplay="0" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1"
                        data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="0" data-navtext=""
                        data-navcontainer="">
                        <?php foreach($aboutimg as $v){?>
                        <div>
                            <a href="<?=$v['link']?>" class="about__img hover_sang">
                                <?= $func->getImage(['class' => 'lazy', 'sizes' => '610x500x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $setting['name'.$lang]]) ?>
                            </a>
                        </div>
                        <?php }?>
                    </div>
                    <?php }?>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>
<div class="productnb pd">
    <div class="wrapper">
        <div class="productnbb ">
            <div class="heading_top">
                <div class="heading heading--green">
                    <span>sản phẩm nổi bật</span>
                </div>
                <div class="heading__slogan">
                    <span>
                        <?=$slogan['name'.$lang]?>
                    </span>
                </div>
                <div>
                    <img src="assets/images/images_new/line.png" alt="<?=$setting['name'.$lang]?>">
                </div>
            </div>
            <div class="productnb__list">
                <div class="paging-product"></div>
            </div>
        </div>
    </div>
</div>
<div class="why">
    <div class="wrapper">
        <div class="heading_top">
            <div class="heading heading--white">
                <span><a href="why" title="<?=$setting['name'.$lang]?>">Tại sao chọn trúc việt</a> </span>
            </div>

            <span class="heading__slogan heading__slogan--white">
                <?=$slogan['name'.$lang]?>
            </span>
            <div>
                <img src="assets/images/images_new/line02.png" alt="<?=$setting['name'.$lang]?>">
            </div>
        </div>
        <div class="why__list">
            <div class="why__left">
                <?php if(count($why)>1){ ?>
                <div class="why__item why__item--01">
                    <div class="why__item--content why__item--content01">
                        <a href="<?=$why[0][$sluglang]?>" title="<?=$why[0]['name'.$lang]?>">
                            <span class="why__item--name"><?=$why[0]['name'.$lang]?></span>
                            <span class="why__item--desc"><?=$why[0]['desc'.$lang]?></span>
                        </a>
                    </div>
                    <div class="why__item--img why__item--img01">
                        <a href="<?=$why[0][$sluglang]?>" title="<?=$why[0]['name'.$lang]?>">
                            <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '98x98x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $why[0]['photo2'], 'alt' => $why[0]['name'.$lang]])?>
                        </a>
                    </div>
                </div>
                <?php } ?>
                <?php if(count($why)>2){ ?>
                <div class="why__item why__item--02">
                    <div class="why__item--content why__item--content02">
                        <a href="<?=$why[1][$sluglang]?>" title="<?=$why[1]['name'.$lang]?>">
                            <span class="why__item--name"><?=$why[1]['name'.$lang]?></span>
                            <span class="why__item--desc"><?=$why[1]['desc'.$lang]?></span>
                        </a>
                    </div>
                    <div class="why__item--img why__item--img02">
                        <a href="<?=$why[1][$sluglang]?>" title="<?=$why[1]['name'.$lang]?>">
                            <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '98x98x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $why[1]['photo2'], 'alt' => $why[1]['name'.$lang]])?>
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="why__middle">
                <?php if(!empty($imgwhy)){?>
                <div class="why__middle--img">
                    <?= $func->getImage(['class' => 'lazy', 'sizes' => '360x360x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $imgwhy['photo'], 'alt' => $setting['name'.$lang]]) ?>
                </div>
                <?php }?>
            </div>
            <div class="why__right">
                <?php if(count($why)>3){ ?>
                <div class="why__item why__item--03">
                    <div class="why__item--img why__item--img03">
                        <a href="<?=$why[2][$sluglang]?>" title="<?=$why[2]['name'.$lang]?>">
                            <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '98x98x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $why[2]['photo2'], 'alt' => $why[2]['name'.$lang]])?>
                        </a>
                    </div>
                    <div class="why__item--content why__item--content03">
                        <a href="<?=$why[2][$sluglang]?>" title="<?=$why[2]['name'.$lang]?>">
                            <span class="why__item--nameright"><?=$why[2]['name'.$lang]?></span>
                            <span class="why__item--descright"><?=$why[2]['desc'.$lang]?></span>
                        </a>
                    </div>
                </div>
                <?php } ?>
                <?php if(count($why)>3){ ?>
                <div class="why__item why__item--04">
                    <div class="why__item--img why__item--img04">
                        <a href="<?=$why[3][$sluglang]?>" title="<?=$why[3]['name'.$lang]?>">
                            <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '98x98x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $why[3]['photo2'], 'alt' => $why[3]['name'.$lang]])?>
                        </a>
                    </div>
                    <div class="why__item--content why__item--content03">
                        <a href="<?=$why[3][$sluglang]?>" title="<?=$why[3]['name'.$lang]?>">
                            <span class="why__item--nameright"><?=$why[3]['name'.$lang]?></span>
                            <span class="why__item--descright"><?=$why[3]['desc'.$lang]?></span>
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="bg-white">

</div>
<div class="khachhang pd">
    <div class="wrapper">
        <div class="khachhangg">
            <div class="heading_top">
                <div class="heading heading--green">
                    <span>khách hàng trúc việt</span>
                </div>
                <span class="heading__slogan heading__slogan--black">
                    <?=$slogan['name'.$lang]?>
                </span>

                <div>
                    <img src="assets/images/images_new/line.png" alt="<?=$setting['name'.$lang]?>">
                </div>
            </div>
            <div class="khachhang__list">
                <?php if(!empty($thuvienanh)) {?>
                <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:10" data-sm-items="2:10"
                    data-md-items="3:30" data-lg-items="4:40" data-xlg-items="4:40" data-rewind="1" data-autoplay="0"
                    data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500"
                    data-autoplayspeed="3500" data-dots="0" data-nav="0" data-navtext="" data-navcontainer="">
                    <?php foreach($thuvienanh as $v){?>
                    <div>
                        <div class="albumd__item">
                            <div class="album">
                                <a class="album-image scale-img" href="<?=$v[$sluglang]?>"
                                    title="<?=$v['name'.$lang]?>">
                                    <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '260x400x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                                    <span class="album__name"><?=$v['name'.$lang]?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>
<div class="chungnhan pd">
    <div class="wrapper">
        <div class="chungnhann">
            <div class="heading_top">
                <div class="heading heading--green">
                    <span>khách hàng trúc việt</span>
                </div>
                <span class="heading__slogan heading__slogan--black">
                    <?=$slogan['name'.$lang]?>
                </span>

                <div>
                    <img src="assets/images/images_new/line.png" alt="<?=$setting['name'.$lang]?>">
                </div>
            </div>
            <?php if(!empty($congnghenb)) {?>
            <div class="chungnhan__list">
                <?php foreach($congnghenb as $v){?>
                <div class="chungnhan__item">
                    <div class="chungnhan__item--left">
                        <a class="effect10" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                            <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '570x380x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                        </a>
                    </div>
                    <div class="chungnhan__item--right">
                        <div class="chungnhan__right--content">
                            <?=htmlspecialchars_decode($v['desc'.$lang])?>
                        </div>
                        <div class="chungnhan__right--btn">
                            <a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                                Xem thêm
                            </a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <?php }?>
            <?php if(!empty($doitac)) {?>
            <div class="doitac mr-top">
                <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:10" data-sm-items="3:10"
                    data-md-items="4:10" data-lg-items="5:10" data-xlg-items="5:10" data-rewind="1" data-autoplay="0"
                    data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500"
                    data-autoplayspeed="3500" data-dots="0" data-nav="0" data-navtext="" data-navcontainer="">
                    <?php foreach($doitac as $v){?>
                    <div>
                        <a href="<?=$v['link']?>" class="doitac__img hover_sang">
                            <?= $func->getImage(['class' => 'lazy', 'sizes' => '100x100x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $setting['name'.$lang]]) ?>
                        </a>
                    </div>
                    <?php }?>
                </div>
            </div>
            <?php }?>

        </div>
    </div>
</div>
<div class="blogvideo pd">
    <div class="wrapper">
        <div class="blogvideoo">
            <div class="blogg">
                <div class="heading_top">
                    <span class="heading heading-green">Ống hút giấy - bạn cần biết</span>
                </div>
                <div class="blog__list">
                    <?php if(!empty($newsnb)){?>
                    <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:10" data-sm-items="1:10"
                        data-md-items="2:10" data-lg-items="2:10" data-xlg-items="3:10" data-rewind="1"
                        data-autoplay="0" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1"
                        data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="0" data-navtext=""
                        data-navcontainer="">
                        <?php foreach($newsnb as $v){?>
                        <div>
                            <a href="<?=$v['link']?>" class="blog__item">
                                <div class="blog__item--img">
                                    <?= $func->getImage(['class' => 'lazy', 'sizes' => '325x220x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                                </div>
                                <div class="blog__item--content">
                                    <span class="blog__item--name">
                                        <?=$v['name'.$lang]?>
                                    </span>
                                    <span class="blog__item--date">
                                        <?=date("j F Y",$v['date_created'])?>
                                    </span>
                                    <span class="blog__item--desc">
                                        <?=$v['desc'.$lang]?>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <?php }?>
                    </div>
                    <?php }?>
                </div>
            </div>
            <div class="videoo">

            </div>
        </div>
    </div>
</div>
<div class="blog pd">
    <div class="wrapper">
        <div class="blogg">
            <div class="heading_top">
                <span class="heading heading-green">Ống hút giấy - bạn cần biết</span>
            </div>
            <div class="blog__list">
                <?php if (!empty($newsnb)) { ?>
                <div class="blog__right">
                    <a class="blog__right-item" href="<?=$newsnb[0][$sluglang]?>">
                        <div class="blog__right-img hover_sang">
                            <?= $func->getImage(['class' => 'lazy', 'sizes' => '580x355x1', 'upload' => UPLOAD_NEWS_L, 'image' => $newsnb[0]['photo'], 'alt' => $newsnb[0]['name' . $lang]]) ?>
                        </div>
                        <div class="blog__right-content">
                            <span class="blog__name">
                                <?=$newsnb[0]['name'.$lang]?>
                            </span>
                            <div class="blog__right-date">
                                <div>
                                    <img src="assets/images/icon-blog.png" alt="<?=$newsnb[0]['name'.$lang]?>">
                                </div>
                                <span class="blog__right-date1"><?=date("j F Y",$newsnb[0]['date_created'])?></span>
                                <span class="blog__right-date2">
                                    Tin tức
                                </span>
                            </div>
                            <span class="blog__desc">
                                <?=$v['desc'.$lang]?>
                            </span>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="albumd pd">
    <div class="wrapper">
        <div class="albumdd">
            <div class="heading_top">
                <div class="heading">
                    <span>Album ảnh</span>
                </div>
                <div class="slogan">
                    <span>
                        <?=$slogan['name'.$lang]?>
                    </span>
                </div>
                <div>
                    <img src="assets/images/line.png" alt="<?=$setting['name'.$lang]?>">
                </div>
            </div>
            <div class="albumd__list">
                <div class="albumd__top">
                    <?php if(count($thuvienanh)>1){ ?>
                    <div class="albumd__item">
                        <div class="album">
                            <a class="album-image scale-img" href="<?=$thuvienanh[0][$sluglang]?>"
                                title="<?=$thuvienanh[0]['name'.$lang]?>">
                                <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '390x300x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[0]['photo'], 'alt' => $thuvienanh[0]['name'.$lang]])?>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if(count($thuvienanh)>2){ ?>
                    <div class="albumd__item">
                        <div class="album">
                            <a class="album-image scale-img" href="<?=$thuvienanh[1][$sluglang]?>"
                                title="<?=$thuvienanh[1]['name'.$lang]?>">
                                <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '390x300x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[1]['photo'], 'alt' => $thuvienanh[1]['name'.$lang]])?>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if(count($thuvienanh)>3){ ?>
                    <div class="albumd__item">
                        <div class="album">
                            <a class="album-image scale-img" href="<?=$thuvienanh[2][$sluglang]?>"
                                title="<?=$thuvienanh[2]['name'.$lang]?>">
                                <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '390x300x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[2]['photo'], 'alt' => $thuvienanh[2]['name'.$lang]])?>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="albumd__buttom">
                    <?php if(count($thuvienanh)>4){ ?>
                    <div class="albumd__item">
                        <div class="album">
                            <a class="album-image scale-img" href="<?=$thuvienanh[3][$sluglang]?>"
                                title="<?=$thuvienanh[3]['name'.$lang]?>">
                                <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '590x350x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[3]['photo'], 'alt' => $thuvienanh[3]['name'.$lang]])?>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if(count($thuvienanh)>5){ ?>
                    <div class="albumd__item">
                        <div class="album">
                            <a class="album-image scale-img" href="<?=$thuvienanh[4][$sluglang]?>"
                                title="<?=$thuvienanh[4]['name'.$lang]?>">
                                <?=$func->getImage(['class' => 'lazy', 'sizes' => '590x350x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $thuvienanh[4]['photo'], 'alt' => $thuvienanh[4]['name'.$lang]])?>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <?php if(!empty($thuvienanh)){?>
            <div class="albumd__list-mobile">
                <?php foreach($thuvienanh as $v){?>
                <div class="albumd__mobile-item">
                    <a class="album-image scale-img" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                        <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '390x300x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                    </a>
                </div>
                <?php } ?>

            </div>
            <?php } ?>


            <?php if (count($thuvienanh)>5){?>
            <div class="albumd__btn">
                <a href="thi-vien-anh">Xem thêm công trình</a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="videoo pd">
    <div class="wrap">
        <div class="videoo">
            <div class="heading_top">
                <div class="heading">
                    <span>Video clip</span>
                </div>
                <div class="slogan">
                    <span>
                        <?=$slogan['name'.$lang]?>
                    </span>
                </div>
                <div>
                    <img src="assets/images/line.png" alt="<?=$setting['name'.$lang]?>">
                </div>
            </div>
            <?php if(!empty($videoclipd)) {?>
            <div class="videoo__list">
                <div class="flipstervideo">
                    <ul>
                        <?php foreach($videoclipd as $v){?>
                        <li class="viddeoo__item">
                            <div class="video" data-fancybox="video" data-src="<?=$v['link_video']?>">
                                <div class="video-image scale-img">
                                    <?=$func->getImage(['class' => '', 'sizes' => '635x308x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                                </div>
                                <div class="video__info">
                                    <span class="video__name"><?=$v['name'.$lang]?></span>
                                    <span class="video__desc"><?=$v['desc'.$lang]?></span>
                                </div>
                            </div>
                        </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>