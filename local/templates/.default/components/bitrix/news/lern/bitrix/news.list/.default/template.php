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

    <div class="programs">
        <!--start-->
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
        <div class="program">
            <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="program__img" style="background-image: url('<?=$arItem["DETAIL_PICTURE"]["SRC"]?>')">
										<span class="program__date">
											<i class="icon-calendar program__icon"></i><?
                                            $date = $arItem["DISPLAY_PROPERTIES"]["ATT_DATE"]["DISPLAY_VALUE"];
                                            if ($stmp = MakeTimeStamp($date, "DD.MM.YYYY"))
                                            {
                                                echo date("d/m/y", $stmp);
                                            }?>
										</span>
            </a>
            <div class="program__inner">
                <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="program__title"><?echo $arItem["NAME"]?></a>

                <span class="program__info">
											<span>Бренд:</span>
											<span class="program__brand">
                                                <?
                                                $IBLOCK_ID = "3";
                                                $ID_ELEMENT = $arItem["DISPLAY_PROPERTIES"]["ATT_BRAND"]["VALUE"];
                                                $arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "ACTIVE"=>"Y", "ID"=>$ID_ELEMENT);
                                                if(CModule::IncludeModule("iblock"))
                                                {
                                                    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, Array("ID", "NAME", "PREVIEW_PICTURE", "IBLOK_ID"));
                                                    if($ob = $res->GetNext(false,false))
                                                    {
                                                        echo $CO_NAME = $ob["NAME"];
                                                        $CO_LOGO = $ob["PREVIEW_PICTURE"];
                                                        $CO_ID = $ob["ID"];
                                                    }
                                                }
                                                ?>
                                            </span>
             	</span>

                <span class="program__text"><?echo $arItem["PREVIEW_TEXT"];?></span>
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
