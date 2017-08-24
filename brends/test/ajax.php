<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");?>
<?CModule::IncludeModule("iblock");?>
<?
  $IBLOCK_ID=4;

  $arSelect = Array("ID", "NAME","IBLOCK_SECTION_ID");
  $arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "SECTION_ID"=>$_GET["id"]);
  $res = CIBlockElement::GetList(Array("NAME"=>"ASC"), $arFilter, false, false, $arSelect);
        
  $arResult = "<select name=\"ELEMENT_ID\">";
  $arResult .="<option value=\"empty\">All</option>";
  
  while($ob = $res->GetNextElement())
    {
     $arFields = $ob->GetFields();
     $arResult .= "<option value=".$arFields ['ID'].">".$arFields ['NAME']."</option>";                    
    }
    $arResult .="</select>";  

	echo $arResult;
?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/epilog_after.php");?>