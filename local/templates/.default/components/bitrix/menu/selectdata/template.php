<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <ul class="history__timeline timeline">
        <li class="timeline__item"><span class="timeline__edge">1998</span></li>

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
    <li class="timeline__item"><a href="<?=$arItem["LINK"]?>" class="tabs__link timeline__link active"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
    <li class="timeline__item"><a href="<?=$arItem["LINK"]?>" class="tabs__link timeline__link"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?endforeach?>

        <li class="timeline__item"><span class="timeline__edge"><?echo date('Y')?></span></li>
    </ul>
<?endif?>