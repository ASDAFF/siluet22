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

<?
$infoblock = 12; // Инфоблок с ID ХХХ (необходимо установить ID нужного инфоблока)
$rs_Section = CIBlockSection::GetList(array('left_margin' => 'asc'), array('IBLOCK_ID' => $infoblock));
while ( $ar_Section = $rs_Section->Fetch() ) {
    $ar_Resu[] = array(  // собираем массив того, что нам нужно
        'ID' => $ar_Section['ID'], // id раздела
        'NAME' => $ar_Section['NAME'], // имя раздела (что нас, собственно, интересует)
        'IBLOCK_SECTION_ID' => $ar_Section['IBLOCK_SECTION_ID'],
        'LEFT_MARGIN' => $ar_Section['LEFT_MARGIN'],
        'RIGHT_MARGIN' => $ar_Section['RIGHT_MARGIN'],
        'DEPTH_LEVEL' => $ar_Section['DEPTH_LEVEL'],
    );

}
global $ar_Resu;
foreach ($ar_Resu as $section) {

}
?>


    <div class="history__inner">
<?foreach($arResult["ITEMS"] as $arItem):?>

	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
            <div class="history-item">
                <a href="#" class="history-item__img" style="background-image: url('<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>');"></a> <a href="#" class="history-item__content"><?echo $arItem["NAME"]?></a>
            </div>

<?endforeach;?>
    </div>
