
<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>


    <?/* Таблица с пунктами меню */?>
    <!-- Menu Table START -->
    <ul class="navigation">


        <?foreach($arResult as $arItem):?>

            <?/*  Если текущий элемент - не вложенный */?>
            <?if ($arItem["DEPTH_LEVEL"] == 1):?>



                    <!-- Menu Item START -->
                    <li class="navigation__item">
                        <a href="#" class="navigation__link"><?=$arItem["TEXT"]?></a>

                    <!-- Menu Item END -->

                    <?/*  Если текущий пункт меню не выбран */?>

            <?endif?>
        <?if ($arItem["PERMISSION"] > "D"):?>

            <?if ($arItem["DEPTH_LEVEL"] == 2):?>

                    <ul class="sub-nav">
                        <li class="sub-nav__item"><?=$arItem["TEXT"]?></li>
                    </ul>

                </li>


            <?endif?>

<?endif;?>
        <?endforeach?>

    </ul>
    <!-- Menu Table END -->



<?endif?>