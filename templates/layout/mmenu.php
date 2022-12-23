<div class="menu-res">
    <div class="menu-bar-res">
        <a id="hamburger" href="#menu" title="Menu"><span></span></a>
        <div class="logo-mmenu">
            <a href="" title="<?=trangchu?>">
                <?=$func->getImage(['sizes' => '60x50x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name'.$lang]])?>
            </a>
        </div>

        <div class="search-res">
            <p class="icon-search transition"><i class="fa fa-search"></i></p>
            <div class="search-grid w-clear">
                <input type="text" name="keyword-res" id="keyword-res" placeholder="<?=nhaptukhoatimkiem?>"
                    onkeypress="doEnter(event,'keyword-res');" />
                <p onclick="onSearch('keyword-res');"><i class="fa fa-search"></i></p>
            </div>
        </div>

    </div>

    <nav id="menu">

        <ul>

            <div class="mmenu__logo">
                <a href="" title="<?=trangchu?>" class="peShiner">
                    <?=$func->getImage(['sizes' => '95x80x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name'.$lang]])?>
                </a>
            </div>
 
            <li><a class="<?php if($com=='' || $com=='index') echo 'active'; ?> transition" href=""
                    title="<?=trangchu?>"><?=trangchu?></a></li>
            <li><a class="<?php if($com=='gioi-thieu') echo 'active'; ?> transition" href="gioi-thieu"
                    title="<?=gioithieu?>"><?=gioithieu?></a></li>
            <li>
                <a class="has-child <?php if($com=='dich-vu') echo 'active'; ?> transition" href="dich-vu"
                    title="Dịch vụ">Dịch vụ</a>
                <?php if(count($dichvulist)) { ?>
                <ul>
                    <?php foreach($dichvulist as $klist => $vlist) {
                            ?>
                    <li>
                        <a class="has-child transition" title="<?=$vlist['name'.$lang]?>"
                            href="<?=$vlist[$sluglang]?>"><?=$vlist['name'.$lang]?></a>

                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </li>

            <li>
                <a class="has-child <?php if($com=='san-pham') echo 'active'; ?> transition" href="san-pham"
                    title="Dự án">Dự án</a>
                <?php if(count($productlist)) { ?>
                <ul>
                    <?php foreach($productlist as $klist => $vlist) {
                            $spcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc",array($vlist['id'])); ?>
                    <li>
                        <a class="has-child transition" title="<?=$vlist['name'.$lang]?>"
                            href="<?=$vlist[$sluglang]?>"><?=$vlist['name'.$lang]?></a>

                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </li>

            <li>
                <a class="<?php if($com=='thu-vien-anh') echo 'active'; ?> transition menu-line" href="thu-vien-anh"
                    title="Hình ảnh">Hình ảnh</a>
            </li>
            <li><a class="<?php if($com=='video') echo 'active'; ?> transition menu-line" href="video"
                    title="Video">Video</a></li>
            <li>
                <a class="<?php if($com=='tin-tuc') echo 'active'; ?> transition menu-line" href="tin-tuc"
                    title="Tin tức">Tin tức</a>
            </li>

            <li><a class="<?php if($com=='lien-he') echo 'active'; ?> transition menu-line" href="lien-he"
                    title="<?=lienhe?>"><?=lienhe?></a></li>

                    <div class="footer-mmenu">
                        <?= htmlspecialchars_decode($footer['content' . $lang]) ?>
                    </div>
                </ul>
    </nav>
</div>