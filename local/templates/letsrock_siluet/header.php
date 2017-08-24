<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?echo LANG_CHARSET?>">
    <title>Силуэт — профессиональная красота</title>
    <link rel="icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon.ico">
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.css")?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <?$APPLICATION->ShowHead();?>


</head>
<body>
<?$APPLICATION->ShowPanel()?>
<div class="container">
    <div class="header-top">
        <div class="header-top__inner small-container">
<div class="header-top__cell header-top__cell_mobile">
<a href="javascript:void(0);" class="mobile-link"><i class="icon-menu"></i></a>
</div>
            <div class="header-top__cell">
                <div class="login">
                    <a href="javascript:void(0)" class="login__link">
                        Войти <i class="icon-vertical-arrow login__icon"></i>
                    </a>

                    <div class="login__modal">
                        <form class="login__form">
                            <label class="login__label">
                                <input type="text" name="login" class="login__input" placeholder="Логин">
                            </label>

                            <label class="login__label">
                                <input type="password" name="password" class="login__input" placeholder="••••••••">
                                <button class="login__button" type="submit">Войти</button>
                            </label>

                            <div class="login__links">
                                <a href="#" class="login__other login__cell">Регистрация</a>
                                <a href="#" class="login__other login__cell">Вспомнить пароль</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="header-top__cell header-top__cell_right">
                <form action="/search/" class="search" method="GET">
                    <input type="text" class="search__input" name="q" placeholder="Поиск" />
                    <button type="submit" class="search__button"><i class="icon-search"></i></button>
                </form>
            </div>
        </div>
    </div>
<div class="mobile-nav">
	<a href="javascript:void(0);" class="mobile-nav__clear"><i class="icon-clear"></i></a>
<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"toptest2", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "top_poup",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "toptest2"
	),
	false
);?>

	<!--<a href="#" class="button" >Интернет-магазин</a>-->

	<ul class="social-list mobile-nav__social">
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

    <header class="header">
        <div class="header__inner small-container">
            <div class="header__cell header__cell_logo">
				<a href="/" class="logo">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt="" />
                </a>
            </div>

            <div class="header__cell">
                <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"toptest", 
	array(
		"ALLOW_MULTI_SELECT" => "Y",
		"CHILD_MENU_TYPE" => "top_poup",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "toptest"
	),
	false
);?>
            </div>

            <div class="header__cell header__cell_right">
                <!--<a href="#" class="button">Интернет-магазин</a>-->
            </div>
        </div>
    </header>
    <div class="container__thick">
<div class="m-logo">
	<a href="/" class="logo"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt="" /></a>
			</div>
