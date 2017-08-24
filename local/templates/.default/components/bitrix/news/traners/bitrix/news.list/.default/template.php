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
<div class="treners">
<!--start-->
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <div class="trener">
        <div class="trener__img" style="background-image: url('<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>')"></div>
        <div class="trener__inner">
            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="trener__title"><?echo $arItem["NAME"]?></a>
            <span class="trener__info"><?echo $arItem["PREVIEW_TEXT"];?></span>
            <span class="trener__info">
									<span>Бренд:</span>

                <?if(($arItem["DISPLAY_PROPERTIES"]["ATT_BRAND"]["DISPLAY_VALUE"] != NULL) && $arItem["DISPLAY_PROPERTIES"]["ATT_BRAND"]["DISPLAY_VALUE"] > 1):?>
                <?foreach($arItem["DISPLAY_PROPERTIES"]["ATT_BRAND"]["VALUE"] as $arProperty):?>
                        <?
                        $IBLOCK_ID = "3";
                        $ID_ELEMENT = $arProperty;
                        $arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "ACTIVE"=>"Y", "ID"=>$ID_ELEMENT);
                        if(CModule::IncludeModule("iblock"))
                        {
                            $res = CIBlockElement::GetList(Array(), $arFilter, false, false, Array("ID", "NAME", "PREVIEW_PICTURE", "IBLOK_ID"));
                            if($ob = $res->GetNext(false,false))
                            {
                            $CO_NAME = $ob["NAME"];
                            $CO_LOGO = $ob["PREVIEW_PICTURE"];
                            $CO_ID = $ob["ID"];
?>
							<span class="trener__brand" title="<?echo $CO_NAME?>"><? echo substr($CO_NAME, 0, 5)?></span>
<?
                            }
                        }
                        ?>
                <?endforeach?>
                <?endif;?>
                <?if(($arItem["DISPLAY_PROPERTIES"]["ATT_BRAND"]["DISPLAY_VALUE"] != NULL) && $arItem["DISPLAY_PROPERTIES"]["ATT_BRAND"]["DISPLAY_VALUE"] < 2):?>
                    <?
                    $IBLOCK_ID = "3";
                    $ID_ELEMENT = $arItem["DISPLAY_PROPERTIES"]["ATT_BRAND"]["VALUE"];
                    $arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "ACTIVE"=>"Y", "ID"=>$ID_ELEMENT);
                    if(CModule::IncludeModule("iblock"))
                    {
                        $res = CIBlockElement::GetList(Array(), $arFilter, false, false, Array("ID", "NAME", "PREVIEW_PICTURE", "IBLOK_ID"));
                        if($ob = $res->GetNext(false,false))
                        {
                            $CO_NAME = $ob["NAME"];
                            $CO_LOGO = $ob["PREVIEW_PICTURE"];
                            $CO_ID = $ob["ID"];
?>
							<span class="trener__brand" title="<?echo $CO_NAME?>"><? echo substr($CO_NAME, 0, 5)?></span>
<?
                        }
                    }
                    ?>
                <?endif;?>
								</span>
        </div>
    </div>
<?endforeach;?>
    <!--end-->
</div>
    <div class="pagination">
        <div class="pagination__inner">
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
    </div>
