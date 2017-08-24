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
<ul class="history__timeline timeline">
    <li class="timeline__item"><span class="timeline__edge">1998</span></li>
<?
foreach($arResult["ITEMS"] as $arItem1):?>

	<?
	$this->AddEditAction($arItem1['ID'], $arItem1['EDIT_LINK'], CIBlock::GetArrayByID($arItem1["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem1['ID'], $arItem1['DELETE_LINK'], CIBlock::GetArrayByID($arItem1["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    $res = CIBlockSection::GetByID($arItem1["IBLOCK_SECTION_ID"]); // Получаем ID раздела инфоблока, в котором лежит проект

    ?>

    <li class="timeline__item">
        <a href="?h=<?echo $arItem1["DISPLAY_ACTIVE_FROM"];?>" class="tabs__link timeline__link">
            <?echo $arItem1["DISPLAY_ACTIVE_FROM"];?>
            </a>
    </li>
<?global $arItem1?>
<?endforeach;?>
    <li class="timeline__item"><span class="timeline__edge"><?echo date('Y')?></span></li>
</ul>
