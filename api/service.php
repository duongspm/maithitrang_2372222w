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
$pageLink = "api/service.php?perpage=" . $pagingAjax->perpage;
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
$sql = "select name$lang, desc$lang, slugvi, slugen, id, photo, type from #_news where type='dich-vu' $where and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc";
$sqlCache = $sql . " limit $start, $pagingAjax->perpage";
$items = $cache->get($sqlCache, $params, 'result', 7200);

/* Count all data */
$countItems = count($cache->get($sql, $params, 'result', 7200));

/* Get page result */
$pagingItems = $pagingAjax->getAllPageLinks($countItems, $pageLink, $eShow);
?>
<?php if ($countItems) { ?>
<div class="grid-page w-clear service__list">
		<?php 
			foreach ($items as $k => $v) { ?>
			<div class="service__item">
				<a class="box-service text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
					<div class="service__item-top">
						<div class="service-img effect10 scale-img">
							<?= $func->getImage(['sizes' => '390x306x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
						</div>
						<div class="service__title">
							<span class="service-title"><?= $v['name'.$lang] ?></span>
						</div>
					</div>
					<div class="service__desc">
						<span>
							<?=$v['desc'.$lang]?>
						</span> 
					</div>
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