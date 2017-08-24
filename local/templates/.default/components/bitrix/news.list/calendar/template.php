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

<script>

    var items = [];

<?foreach($arResult["ITEMS"] as $kay => $arItem):?>
    <?
    $src = '';
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
            $src = CFile::GetPath($ob["PREVIEW_PICTURE"]);
        }
    }
    ?>
    <?
    $date = $arItem["DISPLAY_PROPERTIES"]["ATT_DATE"]["DISPLAY_VALUE"];
    if ($stmp = MakeTimeStamp($date, "DD.MM.YYYY HH:MI:SS"))
    {
        $date = date("Y-m-d", $stmp);
        $date2 = date("i:s", $stmp);
    }?>

    <?$script='
       
      "Date": "'.$date.'T'.$date2.'",
      "Logo": "'.$src.'",
      "Desc": "'.substr($arItem["PREVIEW_TEXT"], 0, 110).'...",
      "Link": "'.$arItem["DETAIL_PAGE_URL"].'"
    '
    ?>
    items.push({<?=$script?>});
<?endforeach;?>



            for(var i=0; i < items.length; i++) {
                items[i].Date = new Date(items[i].Date);
            }
console.log(document.getElementById('caleandar-city<?echo $arParams["CITY_ID"]?>'));
            var settingBiysk = {};
            caleandar(document.getElementById('caleandar-city<?echo $arParams["CITY_ID"]?>'), items, settingBiysk);

</script>
