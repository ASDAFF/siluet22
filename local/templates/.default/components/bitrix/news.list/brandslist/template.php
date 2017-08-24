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

        <h1 class="page-title">Бренды</h1>
        <ul class="marker">

            <?if($_GET['letter'] == NULL && $_GET['heter'] != rus || $_GET['heter'] == angl):?>
                <li class="marker__item"><a href="/brends/" class="marker__link <?if($_GET['letter'] == NULL || $_GET['heter'] != angl):?>active<?endif?>">Все</a></li>
            <li class="marker__item"><a href="/brends/?heter=rus" class="marker__link">А – Я</a></li>
            <li class="marker__item"><a href="/brends/?heter=angl&letter=a" class="marker__link <?if($_GET['letter'] == a):?>active<?endif?>">a</a></li>
            <li class="marker__item"><a href="/brends/?heter=angl&letter=b" class="marker__link <?if($_GET['letter'] == b):?>active<?endif?>">b</a></li>
            <li class="marker__item"><a href="/brends/?heter=angl&letter=c" class="marker__link <?if($_GET['letter'] == c):?>active<?endif?>">c</a></li>
            <li class="marker__item"><a href="/brends/?heter=angl&letter=d" class="marker__link <?if($_GET['letter'] == d):?>active<?endif?>">d</a></li>
            <li class="marker__item"><a href="/brends/?heter=angl&letter=e" class="marker__link <?if($_GET['letter'] == e):?>active<?endif?>">e</a></li>
            <li class="marker__item"><a href="/brends/?heter=angl&letter=f" class="marker__link <?if($_GET['letter'] == f):?>active<?endif?>">f</a></li>
            <li class="marker__item"><a href="/brends/?heter=angl&letter=g" class="marker__link <?if($_GET['letter'] == g):?>active<?endif?>">g</a></li>
            <li class="marker__item"><a href="/brends/?heter=angl&letter=h" class="marker__link <?if($_GET['letter'] == h):?>active<?endif?>">h</a></li>
            <li class="marker__item"><a href="/brends/?heter=angl&letter=i" class="marker__link <?if($_GET['letter'] == i):?>active<?endif?>">i</a></li>
            <li class="marker__item"><a href="/brends/?heter=angl&letter=k" class="marker__link <?if($_GET['letter'] == k):?>active<?endif?>">k</a></li>
            <li class="marker__item"><a href="/brends/?heter=angl&letter=l" class="marker__link <?if($_GET['letter'] == l):?>active<?endif?>">l</a></li>
            <li class="marker__item"><a href="/brends/?heter=angl&letter=m" class="marker__link <?if($_GET['letter'] == m):?>active<?endif?>">m</a></li>
            <li class="marker__item"><a href="/brends/?heter=angl&letter=n" class="marker__link <?if($_GET['letter'] == n):?>active<?endif?>">n</a></li>
            <li class="marker__item"><a href="/brends/?heter=angl&letter=o" class="marker__link <?if($_GET['letter'] == o):?>active<?endif?>">o</a></li>
            <li class="marker__item"><a href="/brends/?heter=angl&letter=p" class="marker__link <?if($_GET['letter'] == p):?>active<?endif?>">p</a></li>
            <li class="marker__item"><a href="/brends/?heter=angl&letter=q" class="marker__link <?if($_GET['letter'] == q):?>active<?endif?>">q</a></li>
            <li class="marker__item"><a href="/brends/?heter=angl&letter=r" class="marker__link <?if($_GET['letter'] == r):?>active<?endif?>">r</a></li>
            <li class="marker__item"><a href="/brends/?heter=angl&letter=s" class="marker__link <?if($_GET['letter'] == s):?>active<?endif?>">s</a></li>
            <li class="marker__item"><a href="/brends/?heter=angl&letter=t" class="marker__link <?if($_GET['letter'] == t):?>active<?endif?>">t</a></li>
            <li class="marker__item"><a href="/brends/?heter=angl&letter=u" class="marker__link <?if($_GET['letter'] == u):?>active<?endif?>">u</a></li>
            <li class="marker__item"><a href="/brends/?heter=angl&letter=v" class="marker__link <?if($_GET['letter'] == v):?>active<?endif?>">v</a></li>
            <li class="marker__item"><a href="/brends/?heter=angl&letter=w" class="marker__link <?if($_GET['letter'] == w):?>active<?endif?>">w</a></li>
            <li class="marker__item"><a href="/brends/?heter=angl&letter=x" class="marker__link <?if($_GET['letter'] == x):?>active<?endif?>">x</a></li>
            <li class="marker__item"><a href="/brends/?heter=angl&letter=y" class="marker__link <?if($_GET['letter'] == y):?>active<?endif?>">y</a></li>
            <li class="marker__item"><a href="/brends/?heter=angl&letter=z" class="marker__link <?if($_GET['letter'] == z):?>active<?endif?>">z</a></li>
    <?elseif($_GET['heter'] == rus):?>
                <li class="marker__item"><a href="/brends/?heter=rus" class="marker__link <?if($_GET['letter'] == NULL || $_GET['heter'] != rus):?>active<?endif?>">Все</a></li>
                <li class="marker__item"><a href="/brends/?heter=angl" class="marker__link">A – Z</a></li>
                <li class="marker__item"><a href="/brends/?heter=rus&letter=а" class="marker__link <?if($_GET['letter'] == а):?>active<?endif?>">а</a></li>
                <li class="marker__item"><a href="/brends/?heter=rus&letter=б" class="marker__link <?if($_GET['letter'] == б):?>active<?endif?>">б</a></li>
                <li class="marker__item"><a href="/brends/?heter=rus&letter=в" class="marker__link <?if($_GET['letter'] == в):?>active<?endif?>">в</a></li>
                <li class="marker__item"><a href="/brends/?heter=rus&letter=г" class="marker__link <?if($_GET['letter'] == г):?>active<?endif?>">г</a></li>
                <li class="marker__item"><a href="/brends/?heter=rus&letter=д" class="marker__link <?if($_GET['letter'] == д):?>active<?endif?>">д</a></li>
                <li class="marker__item"><a href="/brends/?heter=rus&letter=е" class="marker__link <?if($_GET['letter'] == е):?>active<?endif?>">е</a></li>
                <li class="marker__item"><a href="/brends/?heter=rus&letter=ё" class="marker__link <?if($_GET['letter'] == ё):?>active<?endif?>">ё</a></li>
                <li class="marker__item"><a href="/brends/?heter=rus&letter=ж" class="marker__link <?if($_GET['letter'] == ж):?>active<?endif?>">ж</a></li>
                <li class="marker__item"><a href="/brends/?heter=rus&letter=з" class="marker__link <?if($_GET['letter'] == з):?>active<?endif?>">з</a></li>
                <li class="marker__item"><a href="/brends/?heter=rus&letter=и" class="marker__link <?if($_GET['letter'] == и):?>active<?endif?>">и</a></li>
                <li class="marker__item"><a href="/brends/?heter=rus&letter=й" class="marker__link <?if($_GET['letter'] == й):?>active<?endif?>">й</a></li>
                <li class="marker__item"><a href="/brends/?heter=rus&letter=к" class="marker__link <?if($_GET['letter'] == к):?>active<?endif?>">к</a></li>
                <li class="marker__item"><a href="/brends/?heter=rus&letter=л" class="marker__link <?if($_GET['letter'] == л):?>active<?endif?>">л</a></li>
                <li class="marker__item"><a href="/brends/?heter=rus&letter=м" class="marker__link <?if($_GET['letter'] == м):?>active<?endif?>">м</a></li>
                <li class="marker__item"><a href="/brends/?heter=rus&letter=н" class="marker__link <?if($_GET['letter'] == н):?>active<?endif?>">н</a></li>
                <li class="marker__item"><a href="/brends/?heter=rus&letter=о" class="marker__link <?if($_GET['letter'] == о):?>active<?endif?>">о</a></li>
                <li class="marker__item"><a href="/brends/?heter=rus&letter=п" class="marker__link <?if($_GET['letter'] == п):?>active<?endif?>">п</a></li>
                <li class="marker__item"><a href="/brends/?heter=rus&letter=р" class="marker__link <?if($_GET['letter'] == р):?>active<?endif?>">р</a></li>
                <li class="marker__item"><a href="/brends/?heter=rus&letter=с" class="marker__link <?if($_GET['letter'] == с):?>active<?endif?>">с</a></li>
                <li class="marker__item"><a href="/brends/?heter=rus&letter=т" class="marker__link <?if($_GET['letter'] == т):?>active<?endif?>">т</a></li>
                <li class="marker__item"><a href="/brends/?heter=rus&letter=у" class="marker__link <?if($_GET['letter'] == у):?>active<?endif?>">у</a></li>
                <li class="marker__item"><a href="/brends/?heter=rus&letter=ф" class="marker__link <?if($_GET['letter'] == ф):?>active<?endif?>">ф</a></li>
                <li class="marker__item"><a href="/brends/?heter=rus&letter=х" class="marker__link <?if($_GET['letter'] == х):?>active<?endif?>">х</a></li>
                <li class="marker__item"><a href="/brends/?heter=rus&letter=ц" class="marker__link <?if($_GET['letter'] == ц):?>active<?endif?>">ц</a></li>
                <li class="marker__item"><a href="/brends/?heter=rus&letter=ч" class="marker__link <?if($_GET['letter'] == ч):?>active<?endif?>">ч</a></li>
                <li class="marker__item"><a href="/brends/?heter=rus&letter=ш" class="marker__link <?if($_GET['letter'] == ш):?>active<?endif?>">ш</a></li>
                <li class="marker__item"><a href="/brends/?heter=rus&letter=щ" class="marker__link <?if($_GET['letter'] == щ):?>active<?endif?>">щ</a></li>
                <li class="marker__item"><a href="/brends/?heter=rus&letter=ы" class="marker__link <?if($_GET['letter'] == ы):?>active<?endif?>">ы</a></li>
                <li class="marker__item"><a href="/brends/?heter=rus&letter=э" class="marker__link <?if($_GET['letter'] == э):?>active<?endif?>">э</a></li>
                <li class="marker__item"><a href="/brends/?heter=rus&letter=ю" class="marker__link <?if($_GET['letter'] == ю):?>active<?endif?>">ю</a></li>
                <li class="marker__item"><a href="/brends/?rus&letter=я" class="marker__link <?if($_GET['letter'] == я):?>active<?endif?>">я</a></li>
    <?endif?>
        </ul>
<div class="b-brand">
<!--start-->
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

    <div class="brand">
        <div class="brand__hover">
            <div class="brand">
                <a class="brand__img" style="background-image: url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>);">
                </a>

                <div class="brand__content">
                    <a class="brand__title"><?echo $arItem["NAME"]?></a>
                    <span class="brand__label"><?=$arItem['DISPLAY_PROPERTIES']['ATT_DESC']['DISPLAY_VALUE']?></span>
                    <p class="brand__text"><?echo $arItem["PREVIEW_TEXT"];?></p>
                </div>
            </div>
        </div>
        <div class="brand__inner">
            <a class="brand__img" style="background-image: url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>);">
								
            </a>

            <div class="brand__content">
                <a class="brand__title"><?echo $arItem["NAME"]?></a>
                <span class="brand__label"><?=$arItem['DISPLAY_PROPERTIES']['ATT_DESC']['DISPLAY_VALUE']?></span>
            </div>
        </div>
	</div>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>
    <!--end-->
</div>

