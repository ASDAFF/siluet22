<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <ul class="mobile-nav__list">

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
    <li class="mobile-nav__item"><a href="<?=$arItem["LINK"]?>" class="mobile-nav__link <?if($arItem["SELECTED"]):?>active<?endif?>"><?=$arItem["TEXT"]?></a>
    <ul class="sub-mob">
		<?else:?>
    <li class="mobile-nav__item"><a href="<?=$arItem["LINK"]?>" class="mobile-nav__link <?if($arItem["SELECTED"]):?>active<?endif?>"><?=$arItem["TEXT"]?></a>
     <ul class="sub-mob">
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
                <?if($arItem["SELECTED"]):?>
                    <li class="mobile-nav__item"><a href="<?=$arItem["LINK"]?>" class="mobile-nav__link active"><?=$arItem["TEXT"]?></a></li>
                <?else:?>
                    <li class="mobile-nav__item"><a href="<?=$arItem["LINK"]?>" class="mobile-nav__link"><?=$arItem["TEXT"]?></a></li>
                <?endif?>

			<?else:?>
			<li class="sub-mob__item">
                <a href="<?=$arItem["LINK"]?>"  class="sub-mob__link <?if($arItem["SELECTED"]):?>active<?endif?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
                <li class="mobile-nav__item"><a href="" class="" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
                <li class="mobile-nav__item"><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
<?endif?>