<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Бренды");
?><div class="breadcrumbs">
	<div class="small-container breadcrumbs__inner">
		<div class="breadcrumbs__cell">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"navcase",
	Array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?>
		</div>
	</div>
</div>
<div class="column-container">
				<div class="column-container__right">
 <?
GLOBAL $arrFilter;
if (!is_array($arFilterLetter))
  $arFilterLetter = array(
[NAME] => a,
[NAME] => b,
[NAME] => c,
[NAME] => d,
[NAME] => e,
[NAME] => f,
[NAME] => g,
[NAME] => h,
[NAME] => i,
[NAME] => k,
[NAME] => l,
[NAME] => m,
[NAME] => n,
[NAME] => o,
[NAME] => p,
[NAME] => q,
[NAME] => r,
[NAME] => s,
[NAME] => t,
[NAME] => u,
[NAME] => v,
[NAME] => w,
[NAME] => x,
[NAME] => y,
[NAME] => z,
[NAME] => а,
[NAME] => б,
[NAME] => в,
[NAME] => г,
[NAME] => д,
[NAME] => е,
[NAME] => ё,
[NAME] => ж,
[NAME] => з,
[NAME] => и,
[NAME] => й,
[NAME] => к,
[NAME] => л,
[NAME] => м,
[NAME] => н,
[NAME] => о,
[NAME] => п,
[NAME] => р,
[NAME] => с,
[NAME] => т,
[NAME] => у,
[NAME] => ф,
[NAME] => х,
[NAME] => ц,
[NAME] => ч,
[NAME] => ш,
[NAME] => щ,
[NAME] => ы,
[NAME] => э,
[NAME] => ю,
[NAME] => я
  );
?>
 <?
$cur_letter = $_REQUEST['letter'];
$GLOBALS['arFilterLetter'] = array('NAME'=>$cur_letter.'%');
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"brandslist", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "brandslist",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DETAIL_PICTURE",
			4 => "",
		),
		"FILTER_NAME" => "arFilterLetter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "brands",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "12",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "hidden",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "ATT_DESC",
			1 => "ATT_LOGO",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
);?>
</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>