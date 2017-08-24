<?
if($INCLUDE_FROM_CACHE!='Y')return false;
$datecreate = '001503480303';
$dateexpire = '001506072303';
$ser_content = 'a:2:{s:7:"CONTENT";s:0:"";s:4:"VARS";a:1:{s:13:"FORM_TEMPLATE";s:575:"<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?=$FORM->ShowFormHeader();?> 
<div class="m-seminar__row"> <?=$FORM->ShowInput(\'name\')?> </div>
 
<div class="m-seminar__row"> <?=$FORM->ShowInput(\'email\')?> </div>
 
<div class="m-seminar__row"><?=$FORM->ShowInput(\'phone\')?></div>
 
<div class="m-seminar__row" style="display: none;"> <?=$FORM->ShowInput(\'semin\')?> </div>
 
<div class="m-seminar__row"><?=$FORM->ShowSubmitButton("Отправить","button button_fill button_gray m-seminar__button")?> </div>
 <?=$FORM->ShowFormFooter();?>";}}';
return true;
?>