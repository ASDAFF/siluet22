<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О нас");
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
<div class="column-container history">
	<h1 class="page-title">О нас</h1>
	<h1 class="history__title">История компании</h1>
	<div class="tabs">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"history", 
	array(
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "N",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "12",
		"IBLOCK_TYPE" => "about",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SECTION_CODE" => "",
		"SEF_FOLDER" => "/about/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "history",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "#SECTION_ID#/",
			"detail" => "#SECTION_ID#/#ELEMENT_ID#/",
		)
	),
	false
);?>
	</div>
</div>
    <div class="philosophy" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/pictures/history-philosophy.jpg');">
        <div class="philosophy__inner">
            <span class="philosophy__title">Наша философия</span>
		<p>
			 «СИЛУЭТ» стремится нести новый Образ в&nbsp;понимание Прекрасного: красота должна быть доступной и&nbsp;индивидуальной, модной и&nbsp;постоянной.
		</p>
		<p>
			 Настроение каждого конкретного человека&nbsp;— это ощущение себя в&nbsp;мире&nbsp;— комфортном мире&nbsp;— ярком, свободном и&nbsp;многоликом.
		</p>
		<p>
			 Улыбки, радость и&nbsp;счастье должны быть продуманны, а&nbsp;значит, естественны!
		</p>
	</div>
</div>
<div class="column-container">
	<h1 class="history__title">Наши преимущества</h1>
	<div class="advantages">
		<div class="advantages__item">
			<div class="advantages__icon">
 <img src="/local/templates/letsrock_siluet/img/advantages-1.png" alt="">
			</div>
			<p>
 <strong>Широкий ассортимент</strong> товаров для профессионалов
			</p>
		</div>
		<div class="advantages__item">
			<div class="advantages__icon">
 <img src="/local/templates/letsrock_siluet/img/advantages-2.png" alt="">
			</div>
			<p>
 <strong>Бесплатная доставка</strong> при заказе от 1500 руб. по всему Алтайскому краю. Служба доставки работает 7 дней в неделю.
			</p>
		</div>
		<div class="advantages__item">
			<div class="advantages__icon">
 <img src="/local/templates/letsrock_siluet/img/advantages-3.png" alt="">
			</div>
			<p>
 <strong>Эксклюзивная программа лояльности</strong> для профессиональных покупателей.
			</p>
		</div>
		<div class="advantages__item">
			<div class="advantages__icon">
 <img src="/local/templates/letsrock_siluet/img/advantages-4.png" alt="">
			</div>
			<p>
 <strong>Лучшие цены и гарантия</strong> качества. Все товары имеют необходимые сертификаты
			</p>
		</div>
		<div class="advantages__item">
			<div class="advantages__icon">
 <img src="/local/templates/letsrock_siluet/img/advantages-5.png" alt="">
			</div>
			<p>
 <strong>Сервис</strong> Постоянная поддержка, обучение, акции.
			</p>
		</div>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>