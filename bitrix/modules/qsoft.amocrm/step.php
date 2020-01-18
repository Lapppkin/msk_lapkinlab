<?
	if(!check_bitrix_sessid()) 
		return;
?>
<?
IncludeModuleLangFile(__FILE__);
    echo CAdminMessage::ShowNote(GetMessage("AMOCRM_STEP_MODULE_INSTALLED"));
?>
