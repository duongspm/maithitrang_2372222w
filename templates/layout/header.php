<div class="header__top">
    <div class="wrapper">
        <div class="header__info">
            <div class="header__left">
                <div class="header__info-item">
                    <div class="header__icon">
                        <img src="assets/images/f-icon.png" alt="<?=$setting['name'.$lang]?>">
                    </div>
                    <span><?=$optsetting['address']?></span>
                </div>
                <div class="header__info-item">
                    <div class="header__icon">
                        <img src="assets/images/icon-.png" alt="<?=$setting['name'.$lang]?>">
                    </div>
                    <span>Email:
                        <?=$optsetting['email']?>
                    </span>
                </div>
            </div>
            <div class="header__right">
                <div class="header__right--social">
                    <?php if(!empty($social)){foreach($social as $v){?>
                    <a class="social-item" href="<?=$v['link']?>">
                        <?=$func->getImage(['class' => '', 'sizes' => '32x32x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $setting['name'.$lang]])?>
                    </a>
                    <?php }}?>
                </div>
            </div>
        </div>
    </div>
</div>