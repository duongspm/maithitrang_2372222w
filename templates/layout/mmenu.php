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
                <a class="has-child <?php if($com=='san-pham') echo 'active'; ?> transition" href="san-pham"
                    title="Sản phẩm">Sản phẩm</a>
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
                <a class="<?php if($com=='cong-nghe') echo 'active'; ?> transition " href="cong-nghe"
                    title="Công nghệ">Công nghệ</a>
            </li>
            <li><a class="<?php if($com=='tin-tuc') echo 'active'; ?> transition " href="tin-tuc" title="Tin tức">Tin
                    tức</a></li>
            <li>
                <a class="<?php if($com=='tin-tuc') echo 'active'; ?> transition " href="tin-tuc" title="Tin tức">Tin
                    tức</a>
            </li>
            <li>
                <a class="<?php if($com=='su-menh') echo 'active'; ?> transition " href="su-menh" title="Sứ mệnh">Sứ
                    mệnh</a>
            </li>
            <li><a class="<?php if($com=='lien-he') echo 'active'; ?> transition " href="lien-he"
                    title="<?=lienhe?>"><?=lienhe?></a></li>

        </ul>
    </nav>
</div>