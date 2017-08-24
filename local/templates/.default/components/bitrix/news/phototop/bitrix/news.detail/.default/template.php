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
        <span class="view-date"><?
            $date = $arResult["DISPLAY_PROPERTIES"]["ATT_DATA"]["DISPLAY_VALUE"];
            if ($stmp = MakeTimeStamp($date, "DD.MM.YYYY"))
            {
                echo date("d/m/y", $stmp);
            }?>
            </span>
        <div class="report-h">
            <div class="report-h__poster">
                <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="" />
            </div>

            <div class="report-h__info">
                <div class="report-h__text"><?echo $arResult["DETAIL_TEXT"];?></div>
            </div>
        </div>
        <div class="b-report__contents">
            <?foreach($arResult['DISPLAY_PROPERTIES']['MORE_PHOTO']["FILE_VALUE"] as $ar => $arProperty):?>
                <a href="<?=$arProperty['SRC']?>" class="b-report__item" style="background-image: url(<?=$arProperty['SRC']?>);" data-lightbox="example-set" data-title="">
                </a>
            <?endforeach?>
        </div>
