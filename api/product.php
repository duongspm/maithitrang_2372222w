<?php
include "config.php";

/* Paginations */
include LIBRARIES . "class/class.PaginationsAjax.php";
$pagingAjax = new PaginationsAjax();
$pagingAjax->perpage = (!empty($_GET['perpage'])) ? htmlspecialchars($_GET['perpage']) : 1;
$eShow = htmlspecialchars($_GET['eShow']);
$idList = (!empty($_GET['idList'])) ? htmlspecialchars($_GET['idList']) : 0;
$idCat = (!empty($_GET['idCat'])) ? htmlspecialchars($_GET['idCat']) : 0;
$p = (!empty($_GET['p'])) ? htmlspecialchars($_GET['p']) : 1;
$start = ($p - 1) * $pagingAjax->perpage;
$pageLink = "api/product.php?perpage=" . $pagingAjax->perpage;
$tempLink = "";
$where = "";
$params = array();

/* Math url */
if ($idList) {
	$tempLink .= "&idList=" . $idList;
	$where .= " and id_list = ?";
	array_push($params, $idList);
}
if ($idCat) {
	$tempLink .= "&idCat=" . $idCat;
	$where .= " and id_Cat = ?";
	array_push($params, $idCat);
}
$tempLink .= "&p=";
$pageLink .= $tempLink;

/* Get data */
$sql = "select name$lang, slugvi, slugen, id, photo, regular_price, sale_price, discount, type from #_product where type='san-pham' $where and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc";
$sqlCache = $sql . " limit $start, $pagingAjax->perpage";
$items = $cache->get($sqlCache, $params, 'result', 7200);

/* Count all data */
$countItems = count($cache->get($sql, $params, 'result', 7200));

/* Get page result */
$pagingItems = $pagingAjax->getAllPageLinks($countItems, $pageLink, $eShow);
?>
<?php if ($countItems) { ?>
<div class="your-class">
    <?php foreach ($items as $k => $v) { ?>
    <div class="product">
        <a class="box-product text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
            <p class="pic-product zoom_hinh hover_sang">
                <?= $func->getImage(['sizes' => '220x220x1', 'isWatermark' => false, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
            </p>
            <h3 class="name-product text-split"><?= $v['name' . $lang] ?></h3>

        </a>
    </div>
    <?php } ?>
</div>

<div class="pagination-ajax"><?= $pagingItems ?></div>
<?php } else { ?>
<div class="alert alert-warning" role="alert">
    <strong><?= khongtimthayketqua ?></strong>
</div>
<?php } ?>