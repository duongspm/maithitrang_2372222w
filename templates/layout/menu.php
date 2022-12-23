<div class="menu">
    <div class="wrap-content menuuu">
        <div class="menu__logo">
            <a href="" title="<?=trangchu?>" class="peShiner">
                <?=$func->getImage(['sizes' => '185x85x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name'.$lang]])?>
            </a>
        </div>
        <ul class="menu-list">

            <li><a class="<?php if($com=='' || $com=='index') echo 'active'; ?> transition menu-line" href=""
                    title="<?=trangchu?>"><?=trangchu?></a></li>


            <li><a class="<?php if($com=='gioi-thieu') echo 'active'; ?> transition menu-line" href="gioi-thieu"
                    title="<?=gioithieu?>"><?=gioithieu?></a></li>

            <li>
                <a class="has-child <?php if($com=='san-pham') echo 'active'; ?> transition menu-line" href="san-pham"
                    title="Sản phẩm">Sản phẩm</a>
                <?php if(!empty($productlist)) { ?>
                <ul>
                    <?php foreach($productlist as $klist => $vlist) {?>
                    <li>
                        <a class="has-child transition" title="<?=$vlist['name'.$lang]?>"
                            href="<?=$vlist[$sluglang]?>"><?=$vlist['name'.$lang]?></a>
                        <?php if(!empty($spcat)) { ?>
                        <ul>
                            <?php foreach($spcat as $kcat => $vcat) {
                                            $spitem = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc",array($vcat['id'])); ?>
                            <li>
                                <a class="has-child transition" title="<?=$vcat['name'.$lang]?>"
                                    href="<?=$vcat[$sluglang]?>"><?=$vcat['name'.$lang]?></a>
                                <?php if(!empty($spitem)) { ?>
                                <ul>
                                    <?php foreach($spitem as $kitem => $vitem) {
                                                            $spsub = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_sub where id_item = ? and find_in_set('hienthi',status) order by numb,id desc",array($vitem['id'])); ?>
                                    <li>
                                        <a class="has-child transition" title="<?=$vitem['name'.$lang]?>"
                                            href="<?=$vitem[$sluglang]?>"><?=$vitem['name'.$lang]?></a>

                                    </li>
                                    <?php } ?>
                                </ul>
                                <?php } ?>
                            </li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </li>
            <li><a class="<?php if($com=='cong-nghe') echo 'active'; ?> transition menu-line" href="cong-nghe"
                    title="Công nghệ">Công nghệ</a></li>

            <li>
                <a class="<?php if($com=='tin-tuc') echo 'active'; ?> transition menu-line" href="tin-tuc"
                    title="Tin tức">Tin tức</a>
            </li>

            <li><a class="<?php if($com=='su-menh') echo 'active'; ?> transition menu-line" href="su-menh"
                    title="Sứ mệnh">Sứ mệnh</a></li>

            <li><a class="<?php if($com=='lien-he') echo 'active'; ?> transition menu-line" href="lien-he"
                    title="Liên hệ">Liên hệ</a></li>
            <li class="menu__search">
                <div class="search-res">
                    <p class="icon-search transition"><i class="fa fa-search"></i></p>
                    <div class="search-grid w-clear">
                        <input type="text" name="keyword-res" id="keyword-res" placeholder="<?=nhaptukhoatimkiem?>"
                            onkeypress="doEnter(event,'keyword-res');" />
                        <p onclick="onSearch('keyword-res');"><i class="fa fa-search"></i></p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>