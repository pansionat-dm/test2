<?
global $uberShopSettings;

global $homeCategoriesFilter;
$homeCategoriesFilter = array(
	"UF_POPULAR_CAT" => true,
);

$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"home.categories",
	array(
		"SECTION_USER_FIELDS" => array('UF_*'),
		"FILTER_NAME" => "homeCategoriesFilter",
		"PARAMS" => array(
			"BG" => $uberShopSettings['home_blocks']['current']['settings']['home_block_categories']['bg'],
		),
		"IBLOCK_TYPE" => "ubershop_catalog",
		"IBLOCK_ID" => "4",
		"SECTION_ID" => "SECTION_ID",
		"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"COUNT_ELEMENTS" => "N",
		"TOP_DEPTH" => "100",
		"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
		"CATEGORIES_PER_LINE" => "5",
		"SHOW_PARENT_NAME" => "N",
		"HIDE_SECTION_NAME" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
	),
	$component,
	array("HIDE_ICONS" => "N")
);?>
