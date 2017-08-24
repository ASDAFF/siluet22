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

    <div class="setting">
<form name="<?echo $arResult["FILTER_NAME"]."_form"?>" action="<?echo $arResult["FORM_ACTION"]?>" method="get">

		<?foreach($arResult["ITEMS"] as $arItem):?>

			<?if(!array_key_exists("HIDDEN", $arItem)):?>
        <div class="setting__cell">
            <span class="setting__title"><?=$arItem["NAME"]?>:</span>

            <?=$arItem["INPUT"]?>

        </div>
			<?endif?>
		<?endforeach;?>
    <div class="setting__cell">
				<input type="submit" name="set_filter" class="setting__button" value="<?=GetMessage("IBLOCK_SET_FILTER")?>" />
    </div>

</form>
    </div>

