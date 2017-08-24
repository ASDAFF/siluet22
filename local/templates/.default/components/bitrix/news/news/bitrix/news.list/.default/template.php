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
CComponentEngine::ParseComponentPath('/news_site/',
										array('SECTION_CODE' => '#SECTION_CODE#/'),$arVariables);
//  $cDirPa = "/news_site/".$arVariables["SECTION_CODE"]."/";
//  $res = CIBlockSection::GetList($arVariables["SECTION_CODE"]);
//  $ar_res = $res->GetNext();
//      echo $ar_res['NAME'];
//      if($arVariables["SECTION_CODE"] == NULL)
			//          echo 'Все новости';
//
//
if($arVariables["SECTION_CODE"] == NULL){
?>
	<h1 class="page-title">Все новости</h1>
<?}?>

<div class="news-items">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="news-item">
        <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="news-item__image" style="background-image: url('<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>');">

            <span class="label">
                <?
                $res = CIBlockSection::GetByID($arItem["IBLOCK_SECTION_ID"]);
                $ar_res = $res->GetNext();
                echo $ar_res['NAME'];
                ?>
            </span>
        </a>
            <span class="view-date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="news-item__title"><?echo $arItem["NAME"]?></a>
			<?endif;?>
		<?endif;?>
		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<small>
			<?=$arProperty["NAME"]?>:&nbsp;
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
			</small><br />
		<?endforeach;?>
	</div>
<?endforeach;?>
</div>

<div class="pagination">
    <div class="pagination__inner">
<?=$arResult["NAV_STRING"]?>
    </div>
</div>


