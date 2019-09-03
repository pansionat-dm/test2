<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>

<?$APPLICATION->IncludeComponent(
	"ms:ubershop.buy1click",
	"",
	Array(
		"DESCRIPTION" => "Менеджер перезвонит вам для уточнения деталей заказа",
		"OK_MESSAGE" => "Заказ успешно оформлен",
    "TITLE" => "Купить в 1 клик",
    "AJAX_MODE" => "Y",
		"AJAX_OPTION_SHADOW" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"AJAX_OPTION_HISTORY" => "N",
	)
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>