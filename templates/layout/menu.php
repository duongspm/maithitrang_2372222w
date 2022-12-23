<div class="menu">
    <div class="wrap-content menuuu">
        <div class="menu__logo">
            <a href="" title="<?=trangchu?>" class="peShiner">
                <?=$func->getImage(['sizes' => '95x80x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name'.$lang]])?>
            </a>
        </div>
        <ul class="menu-list">

            <li><a class="<?php if($com=='' || $com=='index') echo 'active'; ?> transition menu-line" href=""
                    title="<?=trangchu?>"><?=trangchu?></a></li>


            <li><a class="<?php if($com=='gioi-thieu') echo 'active'; ?> transition menu-line" href="gioi-thieu"
                    title="<?=gioithieu?>"><?=gioithieu?></a></li>

            <li><a class="<?php if($com=='dich-vu') echo 'active'; ?> transition menu-line" href="dich-vu"
                    title="Dịch vụ">Dịch vụ</a>
                <?php if(count($dichvulist)) { ?>
                <ul>
                    <?php foreach($dichvulist as $klist => $vlist) {?>
                    <li>
                        <a class="has-child transition" title="<?=$vlist['name'.$lang]?>"
                            href="<?=$vlist[$sluglang]?>"><?=$vlist['name'.$lang]?></a>
                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </li>


            <li>
                <a class="has-child <?php if($com=='san-pham') echo 'active'; ?> transition menu-line" href="san-pham"
                    title="Dự án">Dự án</a>
                <?php if(count($productlist)) { ?>
                <ul>
                    <?php foreach($productlist as $klist => $vlist) {?>
                    <li>
                        <a class="has-child transition" title="<?=$vlist['name'.$lang]?>"
                            href="<?=$vlist[$sluglang]?>"><?=$vlist['name'.$lang]?></a>
                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </li>
            <li><a class="<?php if($com=='thu-vien-anh') echo 'active'; ?> transition menu-line" href="thu-vien-anh"
                    title="Hình ảnh">Hình ảnh</a></li>

            <li><a class="<?php if($com=='video') echo 'active'; ?> transition menu-line" href="video"
                    title="Video">Video</a></li>
            <li>
                <a class="<?php if($com=='tin-tuc') echo 'active'; ?> transition menu-line" href="tin-tuc"
                    title="Tin tức">Tin tức</a>
            </li>

            <li><a class="<?php if($com=='lien-he') echo 'active'; ?> transition menu-line" href="lien-he"
                    title="Liên hệ">Liên hệ</a></li>
        </ul>
        <div class="menu__search">
            <div class="search w-clear">
                <input type="text" id="keyword" placeholder="Nhập từ khóa ..." onkeypress="doEnter(event,'keyword');" />
                <p onclick="onSearch('keyword');"><i class="fas fa-search"></i></p>
            </div>
        </div>
    </div>
</div>