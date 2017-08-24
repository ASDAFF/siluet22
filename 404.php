<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
//include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");
?>
<div class="small-container not-found">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/404.png" alt="" />
				<p class="not-found__message">Такой страницы не существует. Возможно, она была удалена или адрес набран неверно. <br> Попробуйте вернуться на главную или воспользуйтесь поиском.</p>

				<a href="/" class="button button_fill button_gray">
					<i class="icon-arrow button__arrow button__arrow_left"></i>
					<span class="button__inner">На главную</span>
				</a>
			</div>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>