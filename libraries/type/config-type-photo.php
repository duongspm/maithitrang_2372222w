<?php
    /* Logo */
    $nametype = "logo";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Logo";
    $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['photo']['photo_static'][$nametype]['images'] = true;
    //Thay đổi kích thước theo hình
    $config['photo']['photo_static'][$nametype]['width'] =  185;
    $config['photo']['photo_static'][$nametype]['height'] = 85;
    $config['photo']['photo_static'][$nametype]['thumb'] = '185x85x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Img */
    $nametype = "image-why";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Hình ảnh tại sao chọn chúng tôi";
    $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['photo']['photo_static'][$nametype]['images'] = true;
    //Thay đổi kích thước theo hình
    $config['photo']['photo_static'][$nametype]['width'] =  360;
    $config['photo']['photo_static'][$nametype]['height'] = 360;
    $config['photo']['photo_static'][$nametype]['thumb'] = '360x360x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Favicon */
    $nametype = "favicon";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Favicon";
    $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 100;
    $config['photo']['photo_static'][$nametype]['height'] = 48;
    $config['photo']['photo_static'][$nametype]['thumb'] = '100x48x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Slideshow */
    $nametype = "slide";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Slideshow";
    $config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => "Hiển thị");
    $config['photo']['man_photo'][$nametype]['number_photo'] = 2;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['name_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 1366;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 513;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '1366x513x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Social */
    //Có nhiều cái thì thêm vào
    $nametype = "social";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Social";
    $config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => "Hiển thị");
    $config['photo']['man_photo'][$nametype]['number_photo'] = 4;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 32;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 32;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '32x32x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Đối tác */
    //Có nhiều cái thì thêm vào
    $nametype = "doi-tac";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Đối tác";
    $config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => "Hiển thị");
    $config['photo']['man_photo'][$nametype]['number_photo'] = 5;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 100;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 100;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '100x100x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif';
    
    /* Video */
    $nametype = "videoclipd";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Video";
    $config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => "Hiển thị");
    $config['photo']['man_photo'][$nametype]['number_photo'] = 4;
    $config['photo']['man_photo'][$nametype]['video_photo'] = true;
    $config['photo']['man_photo'][$nametype]['name_photo'] = true;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 500;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 335;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '500x335x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* imgabout */
    //Có nhiều cái thì thêm vào
    $nametype = "about-image";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Hình ảnh giới thiệu";
    $config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => "Hiển thị");
    $config['photo']['man_photo'][$nametype]['number_photo'] = 4;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 610;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 500;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '610x500x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif';
?>