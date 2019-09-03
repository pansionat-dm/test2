<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?>

<?
$el = new CIBlockElement;
CModule::IncludeModule("iblock");
$arSelect = Array("IBLOCK_ID", "ID", "NAME", "PROPERTY_PANSIONAT_ID", "PROPERTY_PANSIONAT_ID_2");
$arOrder = Array( "SORT"=>"ASC", "ID"=>"DESC");
$arFilter = Array("IBLOCK_ID"=>39);
$res = CIBlockElement::GetList($arOrder, $arFilter, false, Array("nTopCount"=>2), $arSelect);
while($arFields = $res->Fetch())
{
	$id = $arFields["PROPERTY_PANSIONAT_ID_VALUE"];
	$id2 = $arFields["PROPERTY_PANSIONAT_ID_2_VALUE"];
	//pru($arFields);
	
	$fields = Array(
	  "NAME"           => $id."-".$id2,
	  "CODE"           => $id."-".$id2
    );

	//$result = $el->Update($arFields["ID"], $fields);
	//echo $result." ".$arFields["ID"]."<br>";
}
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>