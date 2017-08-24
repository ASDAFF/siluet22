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
<div class="small-container slider">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <div class="slider__item">
        <div class="slider__inner">
            <div class="slider__cell slider__cell_photo" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);"></div>
            <div class="slider__cell">
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                <span class="slider__title"><?echo $arItem["NAME"]?></span>
			<?endif;?>
		<?endif;?>
		<?if($arParams["DISPLAY_DETAIL_TEXT"]!="N" && $arItem["DETAIL_TEXT"]):?>
            <p class="slider__text"><?echo substr($arItem["DETAIL_TEXT"], 0, 500);?>...</p>
		<?endif;?>
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="button button_fill button_gray slider__button">
                    <span class="button__inner">Читать далее</span>
                    <i class="icon-arrow button__arrow"></i>
                </a>
            </div>
        </div>
    </div>
<?endforeach;?>
</div>
