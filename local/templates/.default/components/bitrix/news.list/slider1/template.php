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
    <div class="mail-slider">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <div class="main-slider__item" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)">
        <div class="small-container main-slider__inner">
            <div class="main-slider__cell">
            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="main-slider__m-img" alt="" />
                            <div class="main-slider__content">
								<?if($arItem["PREVIEW_TEXT"] != NULL):?>
                                <span class="main-slider__title"><?echo $arItem["PREVIEW_TEXT"]?></span>
								<?endif;?>
								<?if($arItem['DISPLAY_PROPERTIES']['ATT_URL_MAT']['VALUE'] != NULL):?>
                                <a href="<?=$arItem['DISPLAY_PROPERTIES']['ATT_URL_MAT']['VALUE']?>" class="button button_fill">
                                    <span class="button__inner">Узнать больше</span>
                                    <i class="icon-arrow button__arrow"></i>
                                </a>
								<?endif?>
                            </div>
            </div>
        </div>
        </div>
<?endforeach;?>
    </div>

