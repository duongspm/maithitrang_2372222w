<!-- Js Config -->
<script type="text/javascript">
    var NN_FRAMEWORK = NN_FRAMEWORK || {};
    var CONFIG_BASE = '<?=$configBase?>';
    var ASSET = '<?=ASSET?>';
    var WEBSITE_NAME = '<?=(!empty($setting['name'.$lang])) ? addslashes($setting['name'.$lang]) : ''?>';
    var TIMENOW = '<?=date("d/m/Y",time())?>';
    var SHIP_CART = <?=(!empty($config['order']['ship'])) ? 'true' : 'false'?>;
    var RECAPTCHA_ACTIVE = <?=(!empty($config['googleAPI']['recaptcha']['active'])) ? 'true' : 'false'?>;
    var RECAPTCHA_SITEKEY = '<?=$config['googleAPI']['recaptcha']['sitekey']?>';
    var GOTOP = ASSET + 'assets/images/top.png';
    var LANG = {
        'no_keywords': '<?=chuanhaptukhoatimkiem?>',
        'delete_product_from_cart': '<?=banmuonxoasanphamnay?>',
        'no_products_in_cart': '<?=khongtontaisanphamtronggiohang?>',
        'ward': '<?=phuongxa?>',
        'back_to_home': '<?=vetrangchu?>',
    };
</script>

<!-- Js Files -->
<?php
    $js->set("js/jquery.min.js");
    $js->set("js/lazyload.min.js");
    $js->set("bootstrap/bootstrap.js");
    $js->set("js/wow.min.js");
    // $js->set("js/peshiner.js");
    $js->set("confirm/confirm.js");
    $js->set("holdon/HoldOn.js");
    $js->set("mmenu/mmenu.js");
    $js->set("easyticker/easy-ticker.js");
    $js->set("fotorama/fotorama.js");
    $js->set("owlcarousel2/owl.carousel.js");
    $js->set("magiczoomplus/magiczoomplus.js");
    $js->set("slick/slick.js");
    $js->set("js/jquery.flipster.js");
    $js->set("fancybox3/jquery.fancybox.js");
    $js->set("photobox/photobox.js");
    $js->set("simplenotify/simple-notify.js");
    $js->set("fileuploader/jquery.fileuploader.min.js");
    $js->set("datetimepicker/php-date-formatter.min.js");
    $js->set("datetimepicker/jquery.mousewheel.js");
    $js->set("datetimepicker/jquery.datetimepicker.js");
    $js->set("js/functions.js");
    $js->set("comment/comment.js");
    $js->set("js/apps.js");
    echo $js->get();
?>

<?php if(!empty($config['googleAPI']['recaptcha']['active'])) { ?>
    <!-- Js Google Recaptcha V3 -->
    <script src="https://www.google.com/recaptcha/api.js?render=<?=$config['googleAPI']['recaptcha']['sitekey']?>"></script>
    <script type="text/javascript">
        grecaptcha.ready(function () {
            /* Newsletter */
            generateCaptcha('Newsletter', 'recaptchaResponseNewsletter');

            <?php if($source == 'contact') { ?>
                /* Contact */
                generateCaptcha('contact', 'recaptchaResponseContact');
            <?php } ?>
        });
    </script>
<?php } ?>

<?php if(!empty($config['oneSignal']['active'])) { ?>
    <!-- Js OneSignal -->
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script type="text/javascript">
        var OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "<?=$config['oneSignal']['id']?>"
            });
        });
    </script>
<?php } ?>

<!-- Js Structdata -->
<?php include TEMPLATE.LAYOUT."strucdata.php"; ?>

<!-- Js Addons -->
<?=$addons->set('script-main', 'script-main', 2);?>
<?=$addons->get();?>

<!-- Js Body -->
<?=htmlspecialchars_decode($setting['bodyjs'])?>