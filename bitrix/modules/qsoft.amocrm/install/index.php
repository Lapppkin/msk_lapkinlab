<?
IncludeModuleLangFile(__FILE__);
Class qsoft_amocrm extends CModule
{
	var $MODULE_ID = "qsoft.amocrm"; 
	public $MODULE_VERSION;
	public $MODULE_VERSION_DATE;
	public $MODULE_NAME;
	public $MODULE_DESCRIPTION;
	public $MODULE_CSS;
	public $strError = '';
	const MODULE_ID = "qsoft.amocrm";
	
	function qsoft_amocrm()
	{
		$arModuleVersion = array();
		include(dirname(__FILE__)."/version.php");
		$this->MODULE_VERSION = $arModuleVersion["VERSION"];
		$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
		$this->MODULE_NAME = GetMessage("qsoft.amocrm_MODULE_NAME");
		$this->MODULE_DESCRIPTION = GetMessage("qsoft.amocrm_MODULE_DESC");

		$this->PARTNER_NAME = GetMessage("qsoft.amocrm_PARTNER_NAME");
		$this->PARTNER_URI = GetMessage("qsoft.amocrm_PARTNER_URI");
	}

	function InstallDB($arParams = array())
	{
		RegisterModuleDependences("form", "onAfterResultAdd", self::MODULE_ID, "CQSoftAmoCRM", "onAfterResultAddCRM");
		RegisterModuleDependences("main", "OnBeforeProlog", self::MODULE_ID, self::MODULE_ID, "ShowPanel");
		return true;
	}

	function UnInstallDB($arParams = array())
	{
		UnRegisterModuleDependences("form", "onAfterResultAdd", self::MODULE_ID, "CQSoftAmoCRM", "onAfterResultAddCRM");
		UnRegisterModuleDependences("main", "OnBeforeProlog", self::MODULE_ID, self::MODULE_ID, "ShowPanel");
		return true;
	}

	function InstallEvents()
	{
		return true;
	}

	function UnInstallEvents()
	{
		return true;
	}

	function InstallFiles($arParams = array())
	{
		if (is_dir($p = $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/'.self::MODULE_ID.'/admin'))
		{
			if ($dir = opendir($p))
			{
				while (false !== $item = readdir($dir))
				{
					if ($item == '..' || $item == '.' || $item == 'menu.php')
						continue;
					file_put_contents($file = $_SERVER['DOCUMENT_ROOT'].'/bitrix/admin/'.self::MODULE_ID.'_'.$item,
					'<'.'? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/'.self::MODULE_ID.'/admin/'.$item.'");?'.'>');
				}
				closedir($dir);
			}
		}
		if (is_dir($p = $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/'.self::MODULE_ID.'/install/components'))
		{
			if ($dir = opendir($p))
			{
				while (false !== $item = readdir($dir))
				{
					if ($item == '..' || $item == '.')
						continue;
					CopyDirFiles($p.'/'.$item, $_SERVER['DOCUMENT_ROOT'].'/bitrix/components/'.$item, $ReWrite = True, $Recursive = True);
				}
				closedir($dir);
			}
		}
		return true;
	}

	function UnInstallFiles()
	{
		if (is_dir($p = $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/'.self::MODULE_ID.'/admin'))
		{
			if ($dir = opendir($p))
			{
				while (false !== $item = readdir($dir))
				{
					if ($item == '..' || $item == '.')
						continue;
					unlink($_SERVER['DOCUMENT_ROOT'].'/bitrix/admin/'.self::MODULE_ID.'_'.$item);
				}
				closedir($dir);
			}
		}
		if (is_dir($p = $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/'.self::MODULE_ID.'/install/components'))
		{
			if ($dir = opendir($p))
			{
				while (false !== $item = readdir($dir))
				{
					if ($item == '..' || $item == '.' || !is_dir($p0 = $p.'/'.$item))
						continue;

					$dir0 = opendir($p0);
					while (false !== $item0 = readdir($dir0))
					{
						if ($item0 == '..' || $item0 == '.')
							continue;
						DeleteDirFilesEx('/bitrix/components/'.$item.'/'.$item0);
					}
					closedir($dir0);
				}
				closedir($dir);
			}
		}
		return true;
	}

	function DoInstall()
	{
		global $APPLICATION;
		$this->InstallFiles();
		$this->InstallDB();
		RegisterModule(self::MODULE_ID);
	}

	function DoUninstall()
	{
		global $APPLICATION;
		UnRegisterModule(self::MODULE_ID);
		$this->UnInstallDB();
		$this->UnInstallFiles();
	}
}
?>
