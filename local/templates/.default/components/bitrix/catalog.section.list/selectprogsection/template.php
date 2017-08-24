<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
$arViewModeList = $arResult['VIEW_MODE_LIST'];
$arViewStyles = array(
	'LIST' => array(
		'CONT' => 'bx_sitemap',
		'TITLE' => 'bx_sitemap_title',
		'LIST' => 'bx_sitemap_ul',
	),
	'LINE' => array(
		'CONT' => 'bx_catalog_line',
		'TITLE' => 'bx_catalog_line_category_title',
		'LIST' => 'bx_catalog_line_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/line-empty.png'
	),
	'TEXT' => array(
		'CONT' => 'bx_catalog_text',
		'TITLE' => 'bx_catalog_text_category_title',
		'LIST' => 'bx_catalog_text_ul'
	),
	'TILE' => array(
		'CONT' => 'bx_catalog_tile',
		'TITLE' => 'bx_catalog_tile_category_title',
		'LIST' => 'bx_catalog_tile_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/tile-empty.png'
	)
);
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];
$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
?>
<ul class="table__caption classic-tab__caption">
<?
global $sectiondef;
$counttabs = 0;
foreach ($arResult['SECTIONS'] as $key => &$value) {
	if($value['SECTION_PAGE_URL']==$APPLICATION->GetCurPage()){
		$counttabs++;
		break;
	}
}
			foreach ($arResult['SECTIONS'] as $key => &$arSection)
			{
				if (false === $arSection['PICTURE'])
					$arSection['PICTURE'] = array(
						'SRC' => $arCurView['EMPTY_IMG'],
						'ALT' => (
							'' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
							? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
							: $arSection["NAME"]
						),
						'TITLE' => (
							'' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
							? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
							: $arSection["NAME"]
						)
					);
				?>
				<?if($arSection['SECTION_PAGE_URL']==$APPLICATION->GetCurPage()):?>
                <li class="classic-tab__item">
                    <a href="<?=$arSection["SECTION_PAGE_URL"]; ?>"  class="tabs__link classic-tab__link active">
			<? echo $arSection['NAME']; ?></a>
				</li>

				<?elseif($key == 0 && $counttabs==0):
				$sectiondef= $arSection['ID'];
				?>
     	<li class="classic-tab__item">
                    <a href="<?=$arSection["SECTION_PAGE_URL"]; ?>"  class="tabs__link classic-tab__link active">
			<? echo $arSection['NAME']; ?></a>
				</li>
	<?else:?>
    <li class="classic-tab__item">
                    <a href="<?=$arSection["SECTION_PAGE_URL"]; ?>"  class="tabs__link classic-tab__link">
			<? echo $arSection['NAME']; ?></a>
				</li>
	<?endif?>
	<?
			}
			unset($arSection);
			
?>
    </ul>
