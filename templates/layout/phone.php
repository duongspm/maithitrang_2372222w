<!-- <div class="phone_mobi goidienthoai">
    <ul>
        <li class="goidien">
            <a title="title" id="goidien">
                <img src="assets/images/goidien.svg" alt="images">
                Gọi điện
            </a>
        </li>
        <li class="content">
            <a href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>"><?= $optsetting['hotline'] ?></a>
            <a
                href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['dienthoai']); ?>"><?= $optsetting['dienthoai'] ?></a>
        </li>


        <li>
            <a id="chatzalo" href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>"
                title="title">
                <img src="assets/images/chatzalo.svg" alt="images">
                Zalo chat
            </a>
        </li>

        <li>
            <a id="chatfb" href="<?= $optsetting['fanpage'] ?>" title="title">
                <img src="assets/images/icon-t4.png" alt="images">
                Chat facebook
            </a>
        </li>

        <li>
            <a id="chatfb" href="lien-he" title="title">
                <i class="fas fa-map-marker-alt"></i>
                Chỉ đường
            </a>
        </li>

    </ul>
</div> -->

<script type="text/javascript" src="assets/js/jQuery.WCircleMenu-min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    /* Phone circle */
    $('#my-phone-circle').WCircleMenu({
        angle_start: -Math.PI,
        delay: 50,
        distance: 70,
        angle_interval: Math.PI / 4,
        easingFuncShow: "easeOutBack",
        easingFuncHide: "easeInBack",
        step: 5,
        openCallback: false,
        closeCallback: false,
    });

    /* Phone support */
    $('.support-content').hide();
    $('a.btn-support').click(function(e) {
        e.stopPropagation();
        $('.support-content').slideToggle();
    });
    $('.support-content').click(function(e) {
        e.stopPropagation();
    });
    $(document).click(function() {
        $('.support-content').slideUp();
    });
})
</script>