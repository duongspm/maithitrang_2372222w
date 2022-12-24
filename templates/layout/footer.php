<div class="footer bg">
    <div class="wrapper">
        <div class="footerr">
            <div class="footer-item">
                <div class="footer__heading">
                    <span class="heading heading--white"><?=$setting['name'.$lang]?></span>
                    <span class="slogan__footer slogan--ft">
                        <?=$sloganfooter['name'.$lang]?>
                    </span>
                </div>

                <div class="footer-title">
                    <span>Thông tin liên hệ</span>
                    <div class="footer__line"></div>
                </div>
                <div class="footer-info"><?= htmlspecialchars_decode($footer['content' . $lang]) ?></div>
            </div>
            <div class="footer-item footer-item02">
                <div class="footer-title">
                    <span>Chính sách khách hàng</span>
                    <div class="footer__line"></div>
                </div>
                <div class="footer__list">
                    <?php if(!empty($policy)){?>
                    <ul>
                        <?php foreach($policy as $v) {?>
                        <li><a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a></li>
                        <?php }?>
                    </ul>
                    <?php }?>
                </div>
            </div>
            <div class="footer-item footer-item03">
                <div class="dangky-frame">
                    <div class="dangky__heading">
                        <span>đăng ký nhận tin</span>
                        <p>Nhập thông tin của bạn để nhận tin mới nhất</p>
                    </div>
                    <div class="dangky-form">
                        <form class="validation-newsletter" novalidate method="post" action=""
                            enctype="multipart/form-data">
                            <div class="dangky-form">
                                <div class="newsletter-input">
                                    <input type="text" class="form-controld form-d1 text-sm" id="fullname-newsletter"
                                        name="dataNewsletter[fullname]" placeholder="Nhập họ tên" required />
                                    <div class="invalid-tooltip">Vui lòng nhập họ tên</div>
                                </div>

                                <div class="newsletter-input">
                                    <input type="number" class="form-controld form-d1 text-sm" id="phone-newsletter"
                                        name="dataNewsletter[phone]" placeholder="Nhập điện thoại" required />
                                    <div class="invalid-tooltip">Vui lòng nhập số điện thoại</div>
                                </div>

                                <div class="newsletter-input">
                                    <textarea rows="5" cols="50" class="form-textarea text-sm" id="content-newsletter"
                                        name="dataNewsletter[content]" placeholder="Nhập nội dung" required></textarea>
                                    <div class="invalid-tooltip">Vui lòng nhập nội dung</div>
                                </div>

                                <div class="formgroup">
                                    <div class="newsletter-button">
                                        <input type="submit" class="btn-f btn btn-danger w-100" name="submit-newsletter"
                                            value="ĐĂNG KÝ NGAY" disabled>
                                        <input type="hidden" class="btn btn-sm btn-danger w-100"
                                            name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter">
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright mr-top">
        <div class="wrapper copyrightt">
            <div class="copyright-left">
                <span>Copyright © 2022 <span class="settingname">
                        <?=$setting['name'.$lang]?>
                    </span>. Design by Nina.,Ltd</span>
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