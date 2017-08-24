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
<div class="column-container">
    <h1 class="page-title"><?=$arResult["NAME"]?></h1>
    <div class="column-container column-container_p0 text">
        <div class="column-container__page column-container__page_vacancy">
            <div class="text__block">
                <span class="text__title">Вакансия:</span>
                <span><?=$arResult["NAME"]?></span>
            </div>
            <div class="text__block">
                <span class="text__title">Заработная плата:</span>
                <span><?echo $arResult["DISPLAY_PROPERTIES"]["ATT_ZP"]["DISPLAY_VALUE"]?></span>
            </div>
            <div class="text__block">
                <span class="text__title">Функционал:</span>
                <p> <?echo $arResult["PREVIEW_TEXT"]?></p>
            </div>
            <div class="text__block">
                <span class="text__title">Навыки и опыт:</span>

                <ul class="ul-list">
                    <?foreach($arResult["DISPLAY_PROPERTIES"]["ATT_NAV"]["DISPLAY_VALUE"] as $prop):?>
                    <li><?echo $prop?></li>
                    <?endforeach;?>
                </ul>
            </div>
            <div class="text__block">
                <span class="text__title">Режим и условия работы:</span>
                <p><?echo $arResult["DETAIL_TEXT"];?></p>
            </div>
            <div class="text__block">
                <span class="text__title">Контакты:</span>
                <p>
                    <span>Тел.:</span>
                    <a href="tel:<?echo $arResult["DISPLAY_PROPERTIES"]["ATT_PHONE"]["DISPLAY_VALUE"]?>" class="text__link"><?echo $arResult["DISPLAY_PROPERTIES"]["ATT_PHONE"]["DISPLAY_VALUE"]?></a>
                </p>

                <p>
                    <span>e-mail:</span>
                    <a href="mailto:<?echo $arResult["DISPLAY_PROPERTIES"]["ATT_MAIL"]["DISPLAY_VALUE"]?>" class="text__link"><?echo $arResult["DISPLAY_PROPERTIES"]["ATT_MAIL"]["DISPLAY_VALUE"]?></a>
                </p>
            </div>
            <div class="view-all-news">
                <a href="/contacts/сareers/" class="button button_fill button_gray">
                    <i class="icon-arrow button__arrow button__arrow_left"></i>
                    <span class="button__inner">Назад</span>
                </a>
            </div>
        </div>
        <div class="column-container__aside">
            <div class="text__block">
                <span class="text__title">Другие вакансии:</span>
            </div>
            <?$APPLICATION->IncludeComponent("bitrix:news.list", "careerslist", Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                "AJAX_MODE" => "N",	// Включить режим AJAX
                "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                "CACHE_TYPE" => "A",	// Тип кеширования
                "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
                "DISPLAY_DATE" => "N",	// Выводить дату элемента
                "DISPLAY_NAME" => "Y",	// Выводить название элемента
                "DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
                "DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
                "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                "FIELD_CODE" => array(	// Поля
                    0 => "NAME",
                    1 => "",
                ),
                "FILTER_NAME" => "",	// Фильтр
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                "IBLOCK_ID" => "8",	// Код информационного блока
                "IBLOCK_TYPE" => "jobs",	// Тип информационного блока (используется только для проверки)
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
                "INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
                "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                "NEWS_COUNT" => "20",	// Количество новостей на странице
                "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                "PAGER_TITLE" => "Новости",	// Название категорий
                "PARENT_SECTION" => "",	// ID раздела
                "PARENT_SECTION_CODE" => "",	// Код раздела
                "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                "PROPERTY_CODE" => array(	// Свойства
                    0 => "",
                    1 => "",
                ),
                "SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
                "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
                "SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
                "SET_STATUS_404" => "N",	// Устанавливать статус 404
                "SET_TITLE" => "Y",	// Устанавливать заголовок страницы
                "SEF_FOLDER" => "/contacts/сareers/",
                "SEF_MODE" => "Y",
                "SEF_URL_TEMPLATES" => array("news"=>"","section"=>"","detail"=>"#ELEMENT_ID#/?v=on",),
                "SHOW_404" => "N",	// Показ специальной страницы
                "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
            ),
                false
            );?>

        </div>
    </div>
</div>