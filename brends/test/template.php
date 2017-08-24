<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>
<?$file = CFile::ResizeImageGet($arResult["DETAIL_PICTURE"]['ID'], array('width'=>1280, 'height'=>455), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
<div class="about--intro">
	<h1><?=$arResult["NAME"]?></h1>
	<img src="<?=$file['src']?>" class="img-cover" alt="">
</div>
<div class="about__row">
	<div class="about__lc">
		<div class="about--event">
			<?=$arResult['~DETAIL_TEXT'] ?>
		</div>
		<div class="about--slogan">
			<?if($arResult['PROPERTIES']['SLOGAN']['~VALUE']){?><h4><?=$arResult['PROPERTIES']['SLOGAN']['~VALUE']['TEXT']?></h4><?}?>
		</div>
		<?if($arResult['PROPERTIES']['BUTTON']['~VALUE']){?><div class="about--entry">
			<button>Записаться на тренинг</button>
		</div><?}?>
	</div>
	<div class="about__rc">
		<div class="event-info">
			<p class="event-info--time"><?=$arResult['PROPERTIES']['DATA']['~VALUE']?> <?if($arResult['PROPERTIES']['START']['~VALUE']){?><span>с <?=$arResult['PROPERTIES']['START']['~VALUE']?><sup><?=$arResult['PROPERTIES']['START']['~DESCRIPTION']?></sup> до <?=$arResult['PROPERTIES']['END']['~VALUE']?><sup><?=$arResult['PROPERTIES']['END']['~DESCRIPTION']?></sup></span><?}?> <?=$arResult['PROPERTIES']['CITY']['~VALUE']?></p>
			<img src="<?=SITE_TEMPLATE_PATH?>/pic/event-info-1.jpg" width="420" height="225" class="img-cover" alt="">
		</div>
		<?
		global $ff;
		$ff['ID']=$arResult['PROPERTIES']['GID']['VALUE']?$arResult['PROPERTIES']['GID']['VALUE']:'0';
		$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"event_trener",
			Array(
				"FILTER_NAME" => "ff",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"FIELD_CODE" => array("NAME","DETAIL_TEXT"),
				"IBLOCK_ID" => "3",
				"IBLOCK_TYPE" => "people",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"INCLUDE_SUBSECTIONS" => "Y",
				"NEWS_COUNT" => "1",
				"PAGER_TEMPLATE" => "hidden",
				"PROPERTY_CODE" => array(),
				"SET_BROWSER_TITLE" => "N",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "N",
				"SHOW_404" => "N",
				"SORT_BY1" => "SORT",
				"SORT_BY2" => "ID",
				"SORT_ORDER1" => "ASC",
				"SORT_ORDER2" => "DESC"
			)
		);
		?>
		<div class="event-info">
			<p class="event-info--discount">Для учениц школы <strong>скидка!</strong></p>
			<img src="<?=SITE_TEMPLATE_PATH?>/pic/event-info-3.jpg" class="img-cover" alt="">
		</div>
	</div>
</div>