<?
if($INCLUDE_FROM_CACHE!='Y')return false;
$datecreate = '001503480310';
$dateexpire = '001506072310';
$ser_content = 'a:2:{s:7:"CONTENT";s:0:"";s:4:"VARS";a:1:{s:13:"FORM_TEMPLATE";s:819:"<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?=$FORM->ShowFormHeader();?><span class="contact__title">Напишите нам:</span> 
<div class="contact-form__inner"> 	 
  <div class="contact-form__cell"><?=$FORM->ShowInput(\'name\')?> 		</div>
 
  <div class="contact-form__cell"><?=$FORM->ShowInput(\'phone\')?></div>
 		</div>
 		 
<div class="contact-form__inner"> 			 
  <div class="contact-form__cell"><?=$FORM->ShowInput(\'email\')?></div>
 			 
  <div class="contact-form__cell"><?=$FORM->ShowInput(\'citysel\')?></div>
 		</div>
 
<div class="contact-form__inner"><?=$FORM->ShowInput(\'text\')?></div>
 		 
<div class="contact-form__inner contact-form__inner_center"><?=$FORM->ShowSubmitButton("Отправить","button button_gray")?></div>
 <?=$FORM->ShowFormFooter();?>";}}';
return true;
?>