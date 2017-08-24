<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';

//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()
$css = $APPLICATION->GetCSSArray();
if(!is_array($css) || !in_array("/bitrix/css/main/font-awesome.css", $css))
{
	$strReturn .= '<link href="'.CUtil::GetAdditionalFileURL("/bitrix/css/main/font-awesome.css").'" type="text/css" rel="stylesheet" />'."\n";
}

$strReturn .= '
<ul class="breadcrumbs__list">
';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
    if (($arResult[$index]["TITLE"]!='top')&&($arResult[$index]["TITLE"]!='Архив фотоотчетов')&&($arResult[$index]["TITLE"]!='Косметология')) {
        $title = htmlspecialcharsex($arResult[$index]["TITLE"]);

        $nextRef = ($index < $itemSize - 2 && $arResult[$index + 1]["LINK"] <> "" ? ' itemref="bx_breadcrumb_' . ($index + 1) . '"' : '');
        $child = ($index > 0 ? ' itemprop="child"' : '');
        $arrow = ($index > 0 ? '<i class=""></i>' : '');

        if ($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1) {
            $strReturn .= '
			
				' . $arrow . '
				<li class="breadcrumbs__item"><a href="' . $arResult[$index]["LINK"] . '" class="breadcrumbs__link" title="' . $title . '" itemprop="url">
					' . $title . '
				</a></li>
			';
        } else {
            $strReturn .= '
			
    ' . $arrow . '
				<li class="breadcrumbs__item"><a href="' . $arResult[$index]["LINK"] . '" class="breadcrumbs__link active">' . $title . '</a></li>
			';
        }
    }
}

$strReturn .= '</ul>';

return $strReturn;
