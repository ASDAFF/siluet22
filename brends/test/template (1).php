<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
if(!empty($arResult["ITEMS"])) {
$script='';?>
<div class="contacts">
    <h2>Адреса магазинов</h2>
    <div class="contacts__row">
        <div class="shops--list">
            <ul>
            <?foreach($arResult["ITEMS"] as $key=>$arItem):
                $arItem["PROPERTIES"]['STATION']['~VALUE']=str_replace('" ', '» ', str_replace(' "', '«', str_replace(" '", '» ', str_replace("' ", '»', $arItem["PROPERTIES"]['STATION']['~VALUE']))));
                $arItem["NAME"]=str_replace('" ', '» ', str_replace(' "', '«', str_replace(" '", '» ', str_replace("' ", '»', $arItem["NAME"]))));
                $script.='{
                    id: '.($key+1).',
                    name: "'.$arItem['NAME'].'",
                    position: new google.maps.LatLng('.$arItem["PROPERTIES"]['MAP']['~VALUE'].'),
                    content:    "<div class=\'map--info\'><h3>'.$arItem['NAME'].'</h3>';
                    if($arItem["PROPERTIES"]['LOCAL']['~VALUE']){ $script.='<p><span>Адрес:</span> '.$arItem["PROPERTIES"]['LOCAL']['~VALUE'].'</p>';}
                    if($arItem["PROPERTIES"]['TIME']['~VALUE']){ $script.='<p><span>Режим работы:</span> '.$arItem["PROPERTIES"]['TIME']['~VALUE'].'</p>';}
                    if($arItem["PROPERTIES"]['PHONE']['~VALUE']){ $script.='<p><span>Т.</span> '.$arItem["PROPERTIES"]['PHONE']['~VALUE'].'</p>';}
                    if($arItem["PROPERTIES"]['BUS']['~VALUE']||$arItem["PROPERTIES"]['STATION']['~VALUE']||$arItem["PROPERTIES"]['TROLL']['~VALUE']||$arItem["PROPERTIES"]['TAXI']['~VALUE']){ $script.='<h6><span>Как добраться?</span></h6><div class=\'drop\'>';
                        if($arItem["PROPERTIES"]['STATION']['~VALUE']){ $script.='<p><span>Остановка транспорта:</span> '.$arItem["PROPERTIES"]['STATION']['~VALUE'].'</p>';}
                        if($arItem["PROPERTIES"]['BUS']['~VALUE']){ $script.='<p><span>Автобус:</span> '.$arItem["PROPERTIES"]['BUS']['~VALUE'].'</p>';}
                        if($arItem["PROPERTIES"]['TROLL']['~VALUE']){ $script.='<p><span>Троллейбус:</span> '.$arItem["PROPERTIES"]['TROLL']['~VALUE'].'</p>';}
                        if($arItem["PROPERTIES"]['TAXI']['~VALUE']){ $script.='<p><span>Маршрутное такси:</span> '.$arItem["PROPERTIES"]['TAXI']['~VALUE'].'</p>';}
                        }
                    $script.='</div></div>"';
                $script.=' },';?>
                <?$file = CFile::ResizeImageGet($arItem["PROPERTIES"]['FILE']['~VALUE'], array('width'=>94, 'height'=>94), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
                <li data="<?=($key+1)?>"  data="<?=($key+1)?>">
                    <div class="main">
                        <div class="pic">
                            <?if(!empty($file)){?><img src="<?=$file['src']?>" class="img-cover" alt=""><?}?>                    
                        </div>
                        <h3><?=$arItem["NAME"]?></h3>
                        <?if($arItem["PROPERTIES"]['LOCAL']['~VALUE']){?><p><span>Адрес:</span> <?=$arItem["PROPERTIES"]['LOCAL']['~VALUE']?></p><?}?>
                        <?if($arItem["PROPERTIES"]['TIME']['~VALUE']){?><p><span>Режим работы:</span> <?=$arItem["PROPERTIES"]['TIME']['~VALUE']?></p><?}?>
                        <?if($arItem["PROPERTIES"]['PHONE']['~VALUE']){?><p><span>Т.</span> <?=$arItem["PROPERTIES"]['PHONE']['~VALUE']?></p><?}?>
                        <?if($arItem["PROPERTIES"]['BUS']['~VALUE']||$arItem["PROPERTIES"]['STATION']['~VALUE']||$arItem["PROPERTIES"]['TROLL']['~VALUE']||$arItem["PROPERTIES"]['TAXI']['~VALUE']){?><p class="route"><a href="#">Как добраться?</a></p><?}?>
                    </div>
                    <div class="drop">
                        <?if($arItem["PROPERTIES"]['STATION']['~VALUE']){?><p><span>Остановка транспорта:</span> <?=$arItem["PROPERTIES"]['STATION']['~VALUE']?></p><?}?>
                        <?if($arItem["PROPERTIES"]['BUS']['~VALUE']){?><p><span>Автобус:</span> <?=$arItem["PROPERTIES"]['BUS']['~VALUE']?></p><?}?>
                        <?if($arItem["PROPERTIES"]['TROLL']['~VALUE']){?><p><span>Троллейбус:</span> <?=$arItem["PROPERTIES"]['TROLL']['~VALUE']?></p><?}?>
                        <?if($arItem["PROPERTIES"]['TAXI']['~VALUE']){?><p><span>Маршрутное такси:</span> <?=$arItem["PROPERTIES"]['TAXI']['~VALUE']?></p><?}?>
                    </div>
                </li>
            <?endforeach;?>
            </ul>
        </div>
        <div class="shops__map"></div>
    </div>
    <div class="contacts--map-m"></div>
    <ul class="contacts__grid">
                    <li>
                        <h4>Главный офис</h4>
                        <div class="contacts__grid--col">
                            <div class="contacts__grid--group">
                                <i class="icon icon_email"></i>
                                <p><a href="#">info@gold-smile.ru</a></p>
                            </div>
                            <div class="contacts__grid--group">
                                <i class="icon icon_phone"></i>
                                <p>+7 (3852) 538-836</p>
                                <p>+7 (3852) 538-837</p>
                                <p>+7 (3852) 538-838</p>
                            </div>
                        </div>
                        <div class="contacts__grid--col">
                            <p>Почтовый адрес: 656019,<br> г. Барнаул, ул. Юрина, 206Е</p>
                        </div>
                    </li>
                    <li>
                        <h4>Менеджер проекта</h4>
                        <div class="contacts__grid--col">
                            <p>Прокопьева Яна Григорьевна</p>
                            <div class="contacts__grid--group">
                                <i class="icon icon_email"></i>
                                <p><a href="#">info@gold-smile.ru</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
<?}
$this->SetViewTarget('map');?>
<script>
    function initMap() {
        var barnaul = {lat: 53.362614, lng: 83.741845};
        var shops = [
                <?=substr($script, 0, -1)?>
            ];
            var iconBase = '/local/templates/gs/img/map-marker.png';
            var map = new google.maps.Map(document.getElementsByClassName('shops__map')[0], {
                zoom: 12,
                center: barnaul
            });
            var infowindow = null;
            function closeInfoWindow() {
                google.maps.event.clearInstanceListeners(infowindow);
                infowindow.close();
                infowindow = null;
            }
            shops.forEach(function(shop) {
                var marker = new google.maps.Marker({
                    position: shop.position,
                    icon: iconBase,
                    map: map
                });
                google.maps.event.addListener(marker, 'mouseover', function() {
                    $('.contacts__row .shops--list li[data="'+shop.id+'"]').addClass('is-active').siblings().removeClass('is-active');
                    if ( infowindow !== null ) {
                        closeInfoWindow();
                    }
                    infowindow = new google.maps.InfoWindow({
                        content: shop.content
                    });
                    infowindow.open(map, marker);
                    $(document).off('click').on('click', '.contacts__row .map--info h6 span', function() {
                        $(this).parent().toggleClass('is-dropped');
                        infowindow.open(map, marker);
                    });
                    google.maps.event.addListener(infowindow, 'closeclick', function() {
                        $('.contacts__row .shops--list li').removeClass('is-active');
                    });
                });
                $('.contacts__row .shops--list [data="'+shop.id+'"] h3, .contacts__row .shops--list [data="'+shop.id+'"] .pic').off('click').on('click', function() {
                    new google.maps.event.trigger(marker, 'mouseover');
                    $(this).parents('li').addClass('is-active').siblings().removeClass('is-active');
                });
                google.maps.event.addListener(map, 'click', function() {
                    infowindow.close();
                    $('.contacts__row .shops--list li').removeClass('is-active');
                });
                <?if(isset($_GET['shops_id'])) {?>
                    $(document).find('.shops--list [data="<?=$_GET['shops_id']?>"] h3').click();
                <?}?>
            });
            var mapm = new google.maps.Map(document.getElementsByClassName('contacts--map-m')[0], {
                zoom: 12,
                center: shops[0].position
            });
            var markersMobile = [];
            markersMobile.push(new google.maps.Marker({
                position: shops[0].position,
                icon: iconBase,
                map: mapm
            }));
            $(document).on('change', '.contacts--select', function() {
                var id = $(this).val()-1;
                for (var i = 0; i < markersMobile.length; i++) {
                    markersMobile[i].setMap(null);
                }
                markersMobile.push(new google.maps.Marker({
                    position: shops[id].position,
                    icon: iconBase,
                    map: mapm
                }));
                mapm.panTo(shops[id].position);
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBzO4Pl0RQoqEzdb-WFd1kN5DdsKO7QI0&callback=initMap" type="text/javascript"></script>
<?$this->EndViewTarget();