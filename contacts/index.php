<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
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
<div class="column-container contact">
	<h1 class="page-title">Контакты</h1>
	<div class="contact-items">
		<div class="contact-items__row">
			<div class="contact-items__cell">
				<div class="contact-item">
					<div class="contact-item__icon">
 <i class="icon-phone"></i>
					</div>
					<div class="contact-item__cell">
						<div class="contact-item__inner">
 <span class="contact-item__title">Барнаул</span>
							<p>
 <span class="contact-item__phone">
								<?$APPLICATION->IncludeFile(
                                             SITE_DIR."edittext/brncontphon.php",
                                             array(),
                                             array(
                                                 "MODE" => "text"
                                             )
                                         );?> </span>
							</p>
						</div>
						<div class="contact-item__inner">
 <span class="contact-item__title">Бийск</span>
							<p>
 <span class="contact-item__phone">
								<?$APPLICATION->IncludeFile(
                                             SITE_DIR."edittext/biscontphon.php",
                                             array(),
                                             array(
                                                 "MODE" => "text"
                                             )
                                         );?> </span>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="contact-items__cell">
				<div class="contact-item">
					<div class="contact-item__icon">
 <i class="icon-email"></i>
					</div>
					<div class="contact-item__cell">
 <span class="contact-item__title">Почта</span>
						<?$APPLICATION->IncludeFile(
                                SITE_DIR."edittext/mailcont.php",
                                array(),
                                array(
                                    "MODE" => "text"
                                )
                            );?>
					</div>
				</div>
			</div>
		</div>
		<div class="contact-items__row">
			<div class="contact-items__cell">
				<div class="contact-item">
					<div class="contact-item__icon">
 <i class="icon-location2"></i>
					</div>
					<div class="contact-item__cell">
 <span class="contact-item__title">Адреса магазинов</span> <a href="/shops/" class="button button_gray button_small">Барнаул</a> <a href="/shops/?m=bis" class="button button_gray button_small">Бийск</a>
					</div>
				</div>
			</div>
			<div class="contact-items__cell">
				<div class="contact-item">
					<div class="contact-item__icon">
 <i class="icon-case"></i>
					</div>
					<div class="contact-item__cell">
 <span class="contact-item__title">Актуальные вакансии</span> <a href="/contacts/сareers/">Смотреть вакансии</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="contact__social">
 <span class="contact__title">Мы в соцсетях</span>
        <ul class="social-list">
            <li class="social-list__item">
                <a href="http://vk.com/clubsiluet" class="social-button"><i class="icon-vk social-button__icon"></i></a>
            </li>

            <li class="social-list__item">
                <a href="http://instagram.com/siluet_barnaul/" class="social-button"><i class="icon-instagram social-button__icon"></i></a>
            </li>

            <li class="social-list__item">
                <a href="http://twitter.com/Siluet_barnaul" class="social-button"><i class="icon-tw social-button__icon"></i></a>
            </li>

            <li class="social-list__item">
                <a href="http://facebook.com/Siluet22" class="social-button"><i class="icon-facebook social-button__icon"></i></a>
            </li>

            <li class="social-list__item">
                <a href="http://ok.ru/clubsiluet" class="social-button"><i class="icon-ok social-button__icon"></i></a>
            </li>

            <li class="social-list__item">
                <a href="http://youtube.com/channel/UC2V0ijtzxeHQFtsx612wRsQ" class="social-button"><i class="icon-youtube-symbol social-button__icon"></i></a>
            </li>
        </ul>
	</div>
<div class="contact-form">
	<span class="form_op"></span>
        <?$APPLICATION->IncludeComponent("bitrix:form", "formcont", Array(
	"AJAX_MODE" => "Y",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHAIN_ITEM_LINK" => "",	// Ссылка на дополнительном пункте в навигационной цепочке
		"CHAIN_ITEM_TEXT" => "",	// Название дополнительного пункта в навигационной цепочке
		"EDIT_ADDITIONAL" => "N",	// Выводить на редактирование дополнительные поля
		"EDIT_STATUS" => "N",	// Выводить форму смены статуса
		"IGNORE_CUSTOM_TEMPLATE" => "N",	// Игнорировать свой шаблон
		"NOT_SHOW_FILTER" => array(	// Коды полей, которые нельзя показывать в фильтре
			0 => "",
			1 => "",
		),
		"NOT_SHOW_TABLE" => array(	// Коды полей, которые нельзя показывать в таблице
			0 => "",
			1 => "",
		),
		"RESULT_ID" => $_REQUEST[RESULT_ID],	// ID результата
		"SEF_MODE" => "N",	// Включить поддержку ЧПУ
		"SHOW_ADDITIONAL" => "N",	// Показать дополнительные поля веб-формы
		"SHOW_ANSWER_VALUE" => "N",	// Показать значение параметра ANSWER_VALUE
		"SHOW_EDIT_PAGE" => "N",	// Показывать страницу редактирования результата
		"SHOW_LIST_PAGE" => "N",	// Показывать страницу со списком результатов
		"SHOW_STATUS" => "Y",	// Показать текущий статус результата
		"SHOW_VIEW_PAGE" => "N",	// Показывать страницу просмотра результата
		"START_PAGE" => "new",	// Начальная страница
		"SUCCESS_URL" => "",	// Страница с сообщением об успешной отправке
		"USE_EXTENDED_ERRORS" => "N",	// Использовать расширенный вывод сообщений об ошибках
		"WEB_FORM_ID" => "1",	// ID веб-формы
		"COMPONENT_TEMPLATE" => ".default",
		"VARIABLE_ALIASES" => array(
			"action" => "action",
		)
	),
	false
);?>
</div>
</div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>