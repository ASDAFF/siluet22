<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
    <h1 class="page-title"><?=$arResult["NAME"]?></h1>
<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
    <span class="view-date"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
<?endif;?>
<div class="slider-block">

	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"]) && ($arResult['DISPLAY_PROPERTIES']['MORE_PHOTO'] == NULL)):?>
    <div class="news-page-slider news-page-slider_main">
        <div class="news-page-slider__cell" style="background-image: url('<?=$arResult["DETAIL_PICTURE"]["SRC"]?>');"></div>
    </div>
    <?endif?>
    <?if($arResult['DISPLAY_PROPERTIES']['MORE_PHOTO'] != NULL):?>
        <div class="news-page-slider news-page-slider_main">
    <?foreach($arResult['DISPLAY_PROPERTIES']['MORE_PHOTO']["FILE_VALUE"] as $ar => $arProperty):?>
        <div class="news-page-slider__cell" style="background-image: url('<?=$arProperty['SRC']?>');"></div>
    <?endforeach?>
        </div>
        <div class="news-page-slider news-page-slider_nav">
        <?foreach($arResult['DISPLAY_PROPERTIES']['MORE_PHOTO']["FILE_VALUE"] as $ar => $arProperty):?>
            <div class="news-page-slider__cell" style="background-image: url('<?=$arProperty['SRC']?>');"></div>
        <?endforeach?>
        </div>
    <?endif?>
</div>

	<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
	<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
		<?echo $arResult["DETAIL_TEXT"];?>
	<?endif?>

	<?
	if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
	{
		?>
		<div class="news-detail-share">
			<noindex>
			<?
			$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["~NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
			?>
			</noindex>
		</div>
		<?
	}
	?>