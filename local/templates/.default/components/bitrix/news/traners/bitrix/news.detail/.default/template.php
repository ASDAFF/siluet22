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
<div class="column-container">
    <div class="column-container__aside">
        <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="" />
    </div>
    <div class="column-container__page column-container__page_vacancy">
        <h1 class="page-title"><?=$arResult["NAME"]?></h1>
        <div class="text__block">
            <span class="text__title">Должность:</span>
            <span><?=$arResult["DISPLAY_PROPERTIES"]["ATT_VAC"]["DISPLAY_VALUE"]?></span>
        </div>
        <div class="text__block">
            <span class="text__title">Опыт работы:</span>
            <span><?=$arResult["DISPLAY_PROPERTIES"]["ATT_OP"]["DISPLAY_VALUE"]?></span>
        </div>
        <div class="text__block">
            <?if(($arResult["DISPLAY_PROPERTIES"]["ATT_BRAND"]["DISPLAY_VALUE"] != NULL) && $arResult["DISPLAY_PROPERTIES"]["ATT_BRAND"]["DISPLAY_VALUE"] > 1):?>
            <span class="text__title">Бренды:</span>
                <?foreach($arResult["DISPLAY_PROPERTIES"]["ATT_BRAND"]["VALUE"] as $arProperty):?>
                    <?
                    $IBLOCK_ID = "3";
                    $ID_ELEMENT = $arProperty;
                    $arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "ACTIVE"=>"Y", "ID"=>$ID_ELEMENT);
                    if(CModule::IncludeModule("iblock"))
                    {
                        $res = CIBlockElement::GetList(Array(), $arFilter, false, false, Array("ID", "NAME", "PREVIEW_PICTURE", "IBLOK_ID"));
                        if($ob = $res->GetNext(false,false))
                        {?>
                            <span><? echo $CO_NAME = $ob["NAME"];?></span>
                            <?
                            $CO_LOGO = $ob["PREVIEW_PICTURE"];
                            $CO_ID = $ob["ID"];
                        }
                    }
                    ?>
                <?endforeach?>
            <?endif;?>
            <?if(($arResult["DISPLAY_PROPERTIES"]["ATT_BRAND"]["DISPLAY_VALUE"] != NULL) && $arResult["DISPLAY_PROPERTIES"]["ATT_BRAND"]["DISPLAY_VALUE"] < 2):?>
                <span class="text__title">Бренд:</span>
                <?
                $IBLOCK_ID = "3";
                $ID_ELEMENT = $arResult["DISPLAY_PROPERTIES"]["ATT_BRAND"]["VALUE"];
                $arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "ACTIVE"=>"Y", "ID"=>$ID_ELEMENT);
                if(CModule::IncludeModule("iblock"))
                {
                    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, Array("ID", "NAME", "PREVIEW_PICTURE", "IBLOK_ID"));
                    if($ob = $res->GetNext(false,false))
                    {?>
                        <span><? echo $CO_NAME = $ob["NAME"];?></span>
                        <?
                        $CO_LOGO = $ob["PREVIEW_PICTURE"];
                        $CO_ID = $ob["ID"];
                    }
                }
                ?>
            <?endif;?>
        </div>
        <span class="text__block text__title">Достижения:</span>
        <ul class="ul-list">
            <?foreach($arResult["DISPLAY_PROPERTIES"]["ATT_STATUS"]["DISPLAY_VALUE"] as $arProperty):?>
            <li><? echo $arProperty?></li>
            <?endforeach?>
        </ul>

        <div class="text__block">
            <p><?echo $arResult["DETAIL_TEXT"];?></p>
        </div>
        <blockquote class="blockquote">
            <p class="blockquote__text"><?echo $arResult["DISPLAY_PROPERTIES"]["ATT_Q"]["DISPLAY_VALUE"]?></p>

            <p class="blockquote__author"><?=$arResult["NAME"]?></p>
        </blockquote>
    </div>
</div>
<div class="column-container train-portf">
    <span class="train-portf__title">Портфолио</span>

    <div class="train-portf__slider">
        <?foreach($arResult['DISPLAY_PROPERTIES']['MORE_PHOTO']["FILE_VALUE"] as $ar => $arProperty):?>
            <div class="train-portf__item" style="background-image: url(<?=$arProperty['SRC']?>)"></div>
        <?endforeach?>
    </div>