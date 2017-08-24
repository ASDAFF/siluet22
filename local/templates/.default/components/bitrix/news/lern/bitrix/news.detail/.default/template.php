<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="column-container text">
    <h1 class="page-title semin_h"><?=$arResult["NAME"]?></h1>
    <p class="text__lead"><?echo $arResult["PREVIEW_TEXT"];?></p>
    <div class="event-head">
        <div class="event-head__poster" style="background-image: url('<?=$arResult["DETAIL_PICTURE"]["SRC"]?>');">
            <span class="event-head__label"><i class="icon-calendar"></i>
            <?$date = $arResult["DISPLAY_PROPERTIES"]["ATT_DATE"]["DISPLAY_VALUE"];
                                            if ($stmp = MakeTimeStamp($date, "DD.MM.YYYY"))
                                            {
                                                echo date("d/m/y", $stmp);
                                            }?>
            </span>
            <span class="event-head__label"><i class="icon-location"></i><? echo $arResult["DISPLAY_PROPERTIES"]["ATT_CITY"]["DISPLAY_VALUE"]?></span>
            <span class="event-head__label event-head__label_free">
							<?
                            $IBLOCK_ID = "3";
                            $ID_ELEMENT = $arResult["DISPLAY_PROPERTIES"]["ATT_BRAND"]["VALUE"];
                            $arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "ACTIVE"=>"Y", "ID"=>$ID_ELEMENT);
                            if(CModule::IncludeModule("iblock"))
                            {
                                $res = CIBlockElement::GetList(Array(), $arFilter, false, false, Array("ID", "NAME", "PREVIEW_PICTURE", "IBLOK_ID"));
                                if($ob = $res->GetNext(false,false))
                                {
                                    $CO_NAME = $ob["NAME"];
                                    $CO_LOGO = $ob["PREVIEW_PICTURE"];
                                    $CO_ID = $ob["ID"];
                                    ?>
                                    <img src="<?=CFile::GetPath($ob["PREVIEW_PICTURE"]);?>">
                                    <?
                                }
                            }
                            ?>
						</span>
        </div>
        <div class="event-head__map">
			<script type="text/javascript">

ymaps.ready(init);

function init() {
    // Поиск координат центра Нижнего Новгорода.
    ymaps.geocode('<? echo $arResult["DISPLAY_PROPERTIES"]["ATT_CITY"]["DISPLAY_VALUE"]?>', { results: 1 }).then(function (res) {
        // Выбираем первый результат геокодирования.
        var firstGeoObject = res.geoObjects.get(0),
        // Создаем карту с нужным центром.
            myMap = new ymaps.Map("map", {
                center: firstGeoObject.geometry.getCoordinates(),
                zoom: 11
            });

        myMap.container.fitToViewport();
        attachReverseGeocode(myMap);

        // Поиск станций метро.
        // Делаем запрос на обратное геокодирование.
        var myGeocoder = ymaps.geocode('<? echo $arResult["DISPLAY_PROPERTIES"]["ATT_POSITION"]["DISPLAY_VALUE"]?>');
myGeocoder.then(
    function (res) {
        var coords = res.geoObjects.get(0).geometry.getCoordinates();
        var myGeocoder = ymaps.geocode(coords, {kind: 'street'});
        myGeocoder.then(
            function (res) {
                var street = res.geoObjects.get(0);
                var name = street.properties.get('name');
            }
        );
}).then(function (res) {
            // Задаем изображение для иконок меток.
            res.geoObjects.options.set('preset', 'twirl#street');
            // Добавляем полученную коллекцию на карту.
            myMap.geoObjects.add(res.geoObjects);
        });
    }, function (err) {
        // Если геокодирование не удалось, сообщаем об ошибке.
        alert(err.message);
    });

    // При щелчке левой кнопкой мыши выводится
    // информация о месте, на котором щёлкнули.
    function attachReverseGeocode(myMap) {
        myMap.events.add('click', function (e) {
            var coords = e.get('coordPosition');

            // Отправим запрос на геокодирование.
            ymaps.geocode(coords).then(function (res) {
                var names = [];
                // Переберём все найденные результаты и
                // запишем имена найденный объектов в массив names.
                res.geoObjects.each(function (obj) {
                    names.push(obj.properties.get('name'));
                });
                // Добавим на карту метку в точку, по координатам
                // которой запрашивали обратное геокодирование.
                myMap.geoObjects.add(new ymaps.Placemark(coords, {
                    // В качестве контента иконки выведем
                    // первый найденный объект.
                    iconContent:names[0],
                    // А в качестве контента балуна - подробности:
                    // имена всех остальных найденных объектов.
                    balloonContent:names.reverse().join(', ')
                }, {
                    preset:'twirl#redStretchyIcon',
                    balloonMaxWidth:'250'
                }));
            });
        });
    }

}

</script>
 <style type="text/css">
        html, body, #map {
            width: 100%;
            height: 450px;
            margin: 0;
            padding: 0;
        }
    </style>
<div id="map"></div>
        </div>
    </div>
    <div class="event-wrap">
        <div class="event-wrap__info">
            <table class="event-table">
                <tr>
                    <td>Категория:</td>
                    <td>
                        <?
                        $IBLOCK_ID2 = "13";
                        $ID_ELEMENT2 = $arResult["DISPLAY_PROPERTIES"]["ATT_KAT"]["VALUE"];

                        $arFilter3 = Array("IBLOCK_ID"=>$IBLOCK_ID2, "ACTIVE"=>"Y", "ID"=>$ID_ELEMENT2);
                        if(CModule::IncludeModule("iblock"))
                        {
                            $res2 = CIBlockElement::GetList(Array(), $arFilter3, false, false, Array("ID", "NAME", "IBLOK_ID"));
                            if($ob2 = $res2->GetNext(false,false))
                            {
                                echo $CO_NAME2 = $ob2["NAME"];
                                $CO_ID = $ob2["ID"];

                            }
                        }
                        ?>
                    </td>
                </tr>

                <tr>
                    <td>Начало:</td>
                    <td>
                        <?
                        $date = $arResult["DISPLAY_PROPERTIES"]["ATT_DATE"]["DISPLAY_VALUE"];
                        if ($stmp = MakeTimeStamp($date, "DD.MM.YYYY HH:MI:SS"))
                        {
                            echo date("i:s", $stmp);
                        }?>
                    </td>
                </tr>

                <tr>
                    <td>Стоимость:</td>
                    <td><? echo $arResult["DISPLAY_PROPERTIES"]["ATT_PRICE"]["DISPLAY_VALUE"]?></td>
                </tr>

                <tr>
                    <td>Место:</td>
                    <td><? echo $arResult["DISPLAY_PROPERTIES"]["ATT_POSITION"]["DISPLAY_VALUE"]?></td>
                </tr>
            </table>

            <a href="javascript:void(0);" data-modal="SeminarRecording" class="button">Записаться на семинар</a>
        </div>

        <div class="event-wrap__content">
            <?echo $arResult["DETAIL_TEXT"];?>
        </div>
    </div>
</div>