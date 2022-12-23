<div class="footer bg">
    <div class="wrapper">
        <div class="footerr">
            <div class="footer-item">
                <div class="footer-title">
                    <span>Thông tin liên hệ</span>
                </div>
                <div class="footer-name">
                    <span><?=$setting['name'.$lang]?></span>
                </div>
                <div class="footer-info"><?= htmlspecialchars_decode($footer['content' . $lang]) ?></div>


            </div>
            <div class="footer-item">
                <div class="footer-title">
                    <span>truy cập nhanh</span>
                    <div class="footer_line"></div>
                </div>
                <div class="footer__list">
                    <ul>
                        <li><a href="" title="Giới thiệu">Trang chủ</a></li>
                        <li><a href="gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>

                        <li><a href="dich-vu" title="Dịch vụ">Dịch vụ</a></li>

                        <li><a href="san-pham" title="Dự án">Dự án</a></li>

                        <li><a href="thu-vien-anh" title="Hình ảnh">Hình ảnh</a></li>

                        <li><a href="video" title="Video">Video</a></li>

                        <li><a href="tin-tuc" title="Tin tức">Tin tức</a></li>
                        <li><a href="lien-he" title="Liên hệ">Liên hệ</a></li>

                    </ul>
                </div>
            </div>
            <div class="footer-item">
                <div class="footer-title">
                    <span>Fanpage facebook</span>
                    <div class="footer_line"></div>
                </div>
                <div class="footer-fb">
                    <div class="fb-page" data-href="<?=$optsetting['fanpage']?>" data-tabs="timeline" data-width="500"
                        data-height="250" data-small-header="true" data-adapt-container-width="true"
                        data-hide-cover="false" data-show-facepile="true">
                        <div class="fb-xfbml-parse-ignore">
                            <blockquote cite="<?=$optsetting['fanpage']?>">
                                <a href="<?=$optsetting['fanpage']?>">Facebook</a>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="wrapper copyrightt">
            <div class="copyright-left">
                <span>Copyright © <span class="settingname">
                        <?=$setting['name'.$lang]?>
                    </span>. Powered by Nina Co.,Ltd</span>
            </div>
            <div class="copyright-right">
                <span><?= dangonline ?>: <?= $online ?></span>
                <span>|</span>
                <span><?= homnay ?>: <?= $counter['today'] ?></span>
                <span>|</span>
                <span><?= trongthang ?>: <?= $counter['month'] ?></span>
                <span>|</span>
                <span><?= tongtruycap ?>: <?= $counter['total'] ?></span>
            </div>
        </div>
    </div>
</div>

<?= $addons->set('footer-map', 'footer-map', 6); ?>
<?= $addons->set('messages-facebook', 'messages-facebook', 2); ?>

<a class="btn-zalo btn-frame text-decoration-none" target="_blank"
    href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'zl.png', 'alt' => 'Zalo']) ?></i>
</a>
<a class="btn-phone btn-frame text-decoration-none"
    href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'hl.png', 'alt' => 'Hotline']) ?></i>
</a>