<div class="header__top">
    <div class="wrapper">
        <div class="header__info">
            <div class="header__info-item">
                <div class="marquee">
                    <div>
                        <span>
                            <?=$sloganheader['name'.$lang]?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="header__info-item">
                <div class="header__icon">
                    <img src="assets/images/icon--02.png" alt="<?=$setting['name'.$lang]?>">
                </div>
                <span>Hotline hỗ trợ:
                    <a
                        href="tel:<?=$func->formatPhone($optsetting['phone'])?>"><?=$func->formatPhone($optsetting['phone'])?></a></span>
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
    </div>
</div>