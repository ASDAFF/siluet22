<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
</div>
<footer class="footer">
    <div class="footer__inner small-container">
        <div class="footer__cell footer__cell_logo">
			<a href="/" class="logo">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt="" />
            </a>
        </div>

        <div class="footer__cell">
            <ul class="footer-contact">
                <li class="footer-contact__item">
                    <i class="icon-email footer-contact__icon"></i>
					<a href="mailto:barnaul@siluet22.ru" class="footer-contact__value">
                        <?$APPLICATION->IncludeFile(
                            SITE_DIR."edittext/footer1.php",
                            array(),
                            array(
                                "MODE" => "text"
                            )
                        );?>
                    </a>
                </li>

                <li class="footer-contact__item">
                    <i class="icon-phone footer-contact__icon"></i>
                    <a href="tel:+7 (3852) 72-33-00" class="footer-contact__value">
                        <?$APPLICATION->IncludeFile(
                            SITE_DIR."edittext/footer2.php",
                            array(),
                            array(
                                "MODE" => "text"
                            )
                        );?>
                    </a>
                </li>
            </ul>
        </div>

        <div class="footer__cell">
            <a href="javascript:void(0);" class="button" data-modal="WeWillCall">Обратный звонок</a>
        </div>

        <div class="footer__cell footer__cell_right">
            <ul class="social-list">
                <li class="social-list__item">
                    <a href="http://vk.com/clubsiluet" class="social-button" target="_blank"><i class="icon-vk social-button__icon"></i></a>
                </li>

                <li class="social-list__item">
                    <a href="http://instagram.com/siluet_barnaul/" class="social-button" target="_blank"><i class="icon-instagram social-button__icon"></i></a>
                </li>

                <li class="social-list__item">
                    <a href="http://twitter.com/Siluet_barnaul" class="social-button" target="_blank"><i class="icon-tw social-button__icon"></i></a>
                </li>

                <li class="social-list__item">
                    <a href="http://facebook.com/Siluet22" class="social-button" target="_blank"><i class="icon-facebook social-button__icon"></i></a>
                </li>

                <li class="social-list__item">
                    <a href="http://ok.ru/clubsiluet" class="social-button" target="_blank"><i class="icon-ok social-button__icon"></i></a>
                </li>

                <li class="social-list__item">
                    <a href="http://youtube.com/channel/UC2V0ijtzxeHQFtsx612wRsQ" class="social-button" target="_blank"><i class="icon-youtube-symbol social-button__icon"></i></a>
                </li>
            </ul>
        </div>
    </div>
</footer>

<div class="g-modal" data-modal="SeminarRecording">
    <div class="g-modal__view">
        <div class="g-modal__inner">
            <div class="modal m-seminar">
                <a href="javascript:void(0);" class="modal__close"><i class="icon-clear"></i></a>
                <span class="m-seminar__title">Запись на семинар</span>
				<span class="form_op"></span>

			<?$APPLICATION->IncludeComponent(
                        "bitrix:form",
                        ".default",
                        array(
                            "AJAX_MODE" => "Y",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "CACHE_TIME" => "3600",
                            "CACHE_TYPE" => "A",
                            "CHAIN_ITEM_LINK" => "",
                            "CHAIN_ITEM_TEXT" => "",
                            "EDIT_ADDITIONAL" => "N",
                            "EDIT_STATUS" => "Y",
                            "IGNORE_CUSTOM_TEMPLATE" => "N",
                            "NOT_SHOW_FILTER" => array(
                                0 => "",
                                1 => "",
                            ),
                            "NOT_SHOW_TABLE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "RESULT_ID" => $_REQUEST[RESULT_ID],
                            "SEF_MODE" => "N",
                            "SHOW_ADDITIONAL" => "N",
                            "SHOW_ANSWER_VALUE" => "N",
                            "SHOW_EDIT_PAGE" => "N",
                            "SHOW_LIST_PAGE" => "N",
                            "SHOW_STATUS" => "Y",
                            "SHOW_VIEW_PAGE" => "N",
                            "START_PAGE" => "new",
                            "SUCCESS_URL" => "",
                            "USE_EXTENDED_ERRORS" => "N",
                            "WEB_FORM_ID" => "3",
                            "COMPONENT_TEMPLATE" => ".default",
                            "VARIABLE_ALIASES" => array(
                                "action" => "action",
                            )
                        ),
                        false
                    );?>
               
            </div>
        </div>
    </div>

    <div class="g-modal__bg"></div>
</div>

<div class="g-modal" data-modal="WeWillCall">
    <div class="g-modal__view">
        <div class="g-modal__inner">
            <div class="modal m-seminar">
                <a href="javascript:void(0);" class="modal__close"><i class="icon-clear"></i></a>
                <span class="m-seminar__title">Мы вам перезвоним</span>

                <span class="m-seminar__subtext form_op">Оставьте нам номер вашего телефона, и в ближайшее время мы свяжемся с вами</span>


				<?$APPLICATION->IncludeComponent(
	"bitrix:form", 
	".default", 
	array(
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"EDIT_ADDITIONAL" => "N",
		"EDIT_STATUS" => "Y",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"NOT_SHOW_FILTER" => array(
			0 => "",
			1 => "",
		),
		"NOT_SHOW_TABLE" => array(
			0 => "",
			1 => "",
		),
		"RESULT_ID" => $_REQUEST[RESULT_ID],
		"SEF_MODE" => "N",
		"SHOW_ADDITIONAL" => "N",
		"SHOW_ANSWER_VALUE" => "N",
		"SHOW_EDIT_PAGE" => "N",
		"SHOW_LIST_PAGE" => "N",
		"SHOW_STATUS" => "Y",
		"SHOW_VIEW_PAGE" => "N",
		"START_PAGE" => "new",
		"SUCCESS_URL" => "",
		"USE_EXTENDED_ERRORS" => "N",
		"WEB_FORM_ID" => "4",
		"COMPONENT_TEMPLATE" => ".default",
		"VARIABLE_ALIASES" => array(
			"action" => "action",
		)
	),
	false
);?>        
            </div>
        </div>
    </div>

    <div class="g-modal__bg"></div>
</div>

<div class="copyright">
    <div class="copyright__inner small-container">
        <div class="copyright__cell">
            <?$APPLICATION->IncludeFile(
                SITE_DIR."edittext/copy.php",
                array(),
                array(
                    "MODE" => "text"
                )
            );?>
        </div>

        <div class="copyright__cell copyright__cell_right">
            <a href="http://letsrock.pro/" class="copyright__text" target="_blank">Разработка сайта <img src="<?=SITE_TEMPLATE_PATH?>/img/letsrock.svg" class="copyright__logo" alt="" /></a>
        </div>
    </div>
</div>
</div>

<?
$APPLICATION->AddHeadScript('https://api-maps.yandex.ru/2.0/?load=package.standard&lang=ru-RU');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/libs.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/plugins.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/script.js');

?>
</body>
</html>