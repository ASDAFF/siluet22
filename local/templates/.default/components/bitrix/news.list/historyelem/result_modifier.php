<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
foreach ($arResult['ITEMS'] as $key => $arItem)
{
    $arSectionList = array();
    $rsSections = CIBlockElement::GetElementGroups($arItem['ID']);
    while ($arSection = $rsSections->GetNext()) {
        $arSectionList[] = array(
            'ID' => $arSection['ID'],
            'NAME' => $arSection['NAME'],
            'SECTION_PAGE_URL' => $arSection['SECTION_PAGE_URL'],
            'PICTURE' => $arSection['PICTURE'],
            'DESCRIPTION' => $arSection['DESCRIPTION'],
        );
    }
    $arItem['SECTION_LIST'] = $arSectionList;
    $arResult['ITEMS'][$key] = $arItem;
}
?>