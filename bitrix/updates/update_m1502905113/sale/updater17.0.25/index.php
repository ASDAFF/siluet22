<?
if(IsModuleInstalled('sale'))
{
	$updater->CopyFiles("install/components", "components");
	$updater->CopyFiles("install/themes", "themes");
	//Following copy was parsed out from module installer
	$updater->CopyFiles("install/tools", "tools");
}
if(IsModuleInstalled('sale') && $updater->CanUpdateDatabase())
{
	RegisterModuleDependences("sale", "onBuildDiscountActionInterfaceControls", "sale", "CSaleCumulativeAction", "onBuildDiscountActionInterfaceControls", 1000);

	$connection = \Bitrix\Main\Application::getConnection();
	$cumulativeCount = $connection->query('SELECT COUNT(*) as cnt FROM b_catalog_discount d WHERE d.TYPE = 1')->fetch();
	$cumulativeCount = isset($cumulativeCount['cnt'])? $cumulativeCount['cnt'] : 0;

	if ($cumulativeCount > 0 && \Bitrix\Main\Config\Option::get('sale', 'use_sale_discount_only') === 'Y')
	{
		$languages = \Bitrix\Main\Localization\LanguageTable::getList(
			array(
				'select' => array('ID', 'DEF'),
				'filter' => array('=ACTIVE' => 'Y')
			)
		);
		while ($row = $languages->fetch())
		{
			if ($row['DEF'] == 'Y')
			{
				$defaultLang = $row['ID'];
			}
			$languageId = $row['ID'];
			\Bitrix\Main\Localization\Loc::loadLanguageFile(
				__FILE__,
				$languageId
			);
			$messages[$languageId] = \Bitrix\Main\Localization\Loc::getMessage(
				'SALE_ADDED_CUMULATIVE_PRESET',
				array(
					'#HREF#' => "/bitrix/admin/sale_discount_preset_detail.php?from_list=preset&PRESET_ID=Sale%5CHandlers%5CDiscountPreset%5CCumulative&lang={$languageId}",
				)
			);
		}

		CAdminNotify::Add(
			array(
				'MODULE_ID' => 'sale',
				'TAG' => 'sale_added_cumulative_preset',
				'MESSAGE' => $messages[$defaultLang],
				'LANG' => $messages
			)
		);
	}
}
if ($updater->CanUpdateDatabase() && $updater->TableExists('b_sale_auxiliary'))
{
	if ($DB->type == "MYSQL")
	{
		if ($updater->TableExists("b_sale_discount"))
		{
			if (!$DB->IndexExists("b_sale_discount", array("PRESET_ID", )))
			{
				$DB->Query("CREATE INDEX IX_PRESET_ID ON b_sale_discount(PRESET_ID)");
			}
		}
	}
}


?>
