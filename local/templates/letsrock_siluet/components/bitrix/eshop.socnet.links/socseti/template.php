<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

$this->setFrameMode(true);

if (is_array($arResult["SOCSERV"]) && !empty($arResult["SOCSERV"]))
{
?>

		<ul class="social-list">
			<?foreach($arResult["SOCSERV"] as $socserv):?>
			<li class="social-list__item"><a class="<?=htmlspecialcharsbx($socserv["CLASS"])?> social-button social-button__icon" target="_blank" href="<?=htmlspecialcharsbx($socserv["LINK"])?>"></a></li>
			<?endforeach?>
		</ul>


<?
}
?>