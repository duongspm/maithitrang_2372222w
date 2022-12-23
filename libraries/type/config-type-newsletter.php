<?php
    /* Đăng ký nhận tin */
    $nametype = "dangkynhantin";
    $config['newsletter'][$nametype]['title_main'] = "Đăng ký nhận tin";
    $config['newsletter'][$nametype]['is_send'] = true;
    $config['newsletter'][$nametype]['fullname'] = true;
    $config['newsletter'][$nametype]['phone'] = true;
    $config['newsletter'][$nametype]['content'] = true;
    $config['newsletter'][$nametype]['confirm_status'] = array("1" => "Đã xem", "2" => "Đã liên hệ", "3" => "Đã thông báo");
    $config['newsletter'][$nametype]['show_name'] = true;
    $config['newsletter'][$nametype]['show_phone'] = true;
    $config['newsletter'][$nametype]['show_date'] = true;
?>