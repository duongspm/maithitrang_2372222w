<?php

    /* Tin tức */
    $nametype = "tin-tuc";
    $config['news'][$nametype]['title_main'] = "Tin tức";
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['copy_image'] = true;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['desc'] = true;
    $config['news'][$nametype]['schema'] = true;
    $config['news'][$nametype]['content'] = true;
    $config['news'][$nametype]['content_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 580;
    $config['news'][$nametype]['height'] = 355;
    $config['news'][$nametype]['thumb'] = '580x355x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Công nghệ - chứng nhận*/
    $nametype = "cong-nghe";
    $config['news'][$nametype]['title_main'] = "Công nghệ";
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['copy_image'] = true;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['desc'] = true;
    $config['news'][$nametype]['desc_cke'] = true;
    $config['news'][$nametype]['schema'] = true;
    $config['news'][$nametype]['content'] = true;
    $config['news'][$nametype]['content_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 570;
    $config['news'][$nametype]['height'] = 380;
    $config['news'][$nametype]['thumb'] = '570x380x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';
    
    $nametype = "su-menh";
    $config['news'][$nametype]['title_main'] = "Sứ mệnh";
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['copy_image'] = true;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['desc'] = true;
    $config['news'][$nametype]['desc_cke'] = true;
    $config['news'][$nametype]['schema'] = true;
    $config['news'][$nametype]['content'] = true;
    $config['news'][$nametype]['content_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 570;
    $config['news'][$nametype]['height'] = 380;
    $config['news'][$nametype]['thumb'] = '570x380x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';
    
    
    /* why */
    $nametype = "why";
    $config['news'][$nametype]['title_main'] = "Tại sao chọn chúng tôi";
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['copy_image'] = true;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['images2'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['desc'] = true;
    $config['news'][$nametype]['schema'] = true;
    $config['news'][$nametype]['content'] = true;
    $config['news'][$nametype]['content_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 570;
    $config['news'][$nametype]['height'] = 380;
    $config['news'][$nametype]['thumb'] = '570x380x1';
    $config['news'][$nametype]['width2'] = 98;
    $config['news'][$nametype]['height2'] = 98;
    $config['news'][$nametype]['thumb2'] = '98x98x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* chinh-sach */
    $nametype = "chinh-sach";
    $config['news'][$nametype]['title_main'] = "Chính sách";
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['news'][$nametype]['desc'] = true;
    $config['news'][$nametype]['schema'] = true;
    $config['news'][$nametype]['content'] = true;
    $config['news'][$nametype]['content_cke'] = true;
    
    /* Quản lý mục (Không cấp) */
    if (isset($config['news'])) {
        foreach ($config['news'] as $key => $value) {
            if (!isset($value['dropdown']) || (isset($value['dropdown']) && $value['dropdown'] == false)) {
                $config['shownews'] = 1;
                break;
            }
        }
    }
?>