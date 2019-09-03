<?
global $uberShopSettings;
$blockBgClass = 'page-block-bg-' . $uberShopSettings['home_blocks']['current']['settings']['home_block_text']['bg'];
?>
<div class="page-block <?=$blockBgClass?>">
	<div class="page-block-in sc-maxwidth clearfix">
		<div class="page-block-title">
		<?
		$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			Array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => SITE_DIR."include/home_page/home_page_text/title.php",
				"AREA_FILE_RECURSIVE" => "N",
				"EDIT_MODE" => "html",
			),
			false,
			Array('HIDE_ICONS' => $hideIconText)
		);
		?>
		</div>
		<div class="js-readmore readmore page-block-content" data-readmore-show="Показать целиком" data-readmore-hide="Скрыть">
			<?
			$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."include/home_page/home_page_text/text.php",
					"AREA_FILE_RECURSIVE" => "N",
					"EDIT_MODE" => "html",
				),
				false,
				Array('HIDE_ICONS' => $hideIconText)
			);
			?>
		</div>
	</div>
</div>
