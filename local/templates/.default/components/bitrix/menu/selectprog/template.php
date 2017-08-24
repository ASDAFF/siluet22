<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <ul class="table__caption classic-tab__caption">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
		continue;
?>
		<?if($arItem["SELECTED"]):?>
    <li class="classic-tab__item"><a href="<?=$arItem["LINK"]?>" class="tabs__link classic-tab__link active"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
    <li class="classic-tab__item"><a href="<?=$arItem["LINK"]?>" class="tabs__link classic-tab__link"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?endforeach?>

</ul>
<?endif?>