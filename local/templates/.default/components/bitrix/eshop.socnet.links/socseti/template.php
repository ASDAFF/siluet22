<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

$this->setFrameMode(true);

if (is_array($arResult["SOCSERV"]) && !empty($arResult["SOCSERV"]))
{
?>
    <div class="footer__cell footer__cell_right">
        <ul class="social-list">
			<?foreach($arResult["SOCSERV"] as $socserv):?>
                <li class="social-list__item"><a class="social-button" target="_blank" href="<?=htmlspecialcharsbx($socserv["LINK"])?>"></a></li>
			<?endforeach?>
		</ul>
	</div>

<?
}
?>