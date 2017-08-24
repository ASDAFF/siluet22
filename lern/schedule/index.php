<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Расписание");
?>
    <div class="breadcrumbs">
        <div class="small-container breadcrumbs__inner">
            <div class="breadcrumbs__cell">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:breadcrumb",
                    "navcase",
                    Array(
                        "COMPONENT_TEMPLATE" => "navcase",
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
            <h1 class="page-title">Расписание</h1>
            <div class="tabs classic-tab classic-tab_small">
                <ul class="table__caption classic-tab__caption">
                    <li class="tabs__item classic-tab__item">
                        <a href="#city1" class="tabs__link classic-tab__link event active">Барнаул</a>
                    </li>

                    <li class="tabs__item classic-tab__item">
                        <a href="#city2" class="tabs__link classic-tab__link event">Бийск</a>
                    </li>
                </ul>

                <div class="tabs__content active" id="city1">
                    <div class="caleandar" id="caleandar-city1">
                    </div>
                </div>

                <div class="tabs__content" id="city2">
                    <div class="caleandar" id="caleandar-city2"></div>
                </div>
                <?
                global $ff;
                $ff["PROPERTY_ATT_CITY_VALUE"] = "Барнаул";
                $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "calendar",
                    Array(
                        "CITY_ID" => "1",
                        "FILTER_NAME" => "ff",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "FIELD_CODE" => array("NAME","PREVIEW_TEXT"),
                        "IBLOCK_ID" => "5",
                        "IBLOCK_TYPE" => "lern",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "NEWS_COUNT" => "",
                        "PAGER_TEMPLATE" => "hidden",
                        "PROPERTY_CODE" => array("ATT_BRAND", "ATT_DATE"),
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "SORT",
                        "SORT_BY2" => "ID",
                        "SORT_ORDER1" => "ASC",
                        "SORT_ORDER2" => "DESC"
                    )
                );
                ?>
                <?
                global $ff2;
                $ff2["PROPERTY_ATT_CITY_VALUE"] = "Бийск";
                $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "calendar",
                    Array(
                        "CITY_ID" => "2",
                        "FILTER_NAME" => "ff2",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "FIELD_CODE" => array("NAME","PREVIEW_TEXT"),
                        "IBLOCK_ID" => "5",
                        "IBLOCK_TYPE" => "lern",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "NEWS_COUNT" => "",
                        "PAGER_TEMPLATE" => "hidden",
                        "PROPERTY_CODE" => array("ATT_BRAND", "ATT_DATE"),
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "SORT",
                        "SORT_BY2" => "ID",
                        "SORT_ORDER1" => "ASC",
                        "SORT_ORDER2" => "DESC"
                    )
                );
                ?>
            </div>
        </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>