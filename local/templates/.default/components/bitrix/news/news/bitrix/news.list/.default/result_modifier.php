<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arFilter = Array("IBLOCK_ID"=>13);
$db_list = CIBlockSection::GetList(Array("NAME"=>"ASC"), $arFilter, false);
while ($arr = $db_list->GetNext()) {
    $arResult["SECTIONS"][$arr["ID"]]["NAME"] = $arr["NAME"];
}
?>