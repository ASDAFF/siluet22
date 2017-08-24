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
<div class="photo-report-inner">

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <div class="photo-report photo-report_big">
        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>?p=on1" class="photo-report__img" style="background-image: url('<?=$arItem["DETAIL_PICTURE"]["SRC"]?>');">
							<span class="photo-report__date">
								<i class="icon-calendar photo-report__icon"></i><?
                                $date = $arItem["DISPLAY_PROPERTIES"]["ATT_DATA"]["DISPLAY_VALUE"];
                                if ($stmp = MakeTimeStamp($date, "DD.MM.YYYY"))
                                {
                                    echo date("d/m/y", $stmp);
                                }?>
							</span>
        </a>
        <div class="photo-report__content">
            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>?p=on1" class="photo-report__title"><?echo $arItem["NAME"]?></a>
            <span class="photo-raport__text"><?echo $arItem["PREVIEW_TEXT"];?></span>
        </div>
    </div>
<?endforeach;?>
</div>
