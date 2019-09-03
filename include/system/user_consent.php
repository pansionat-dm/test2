<?
if ($_POST["user_consent"] == "on" || COption::GetOptionString('ms.ubershop', "user_consent_check_default_".SITE_ID, "N", SITE_ID)) {
	$consent_checked = "checked";
}
else {
	$consent_checked = "";
}
?>
<div class="form-user-consent">
	<label>
		<input class="js_user_consent_checkbox" type="checkbox" name="user_consent" <?=$consent_checked?>>
		<i class="checkbox-btn"></i>
		<span class="checkbox-text">
			Я согласен на <a href="/policy/" target="_blank">обработку персональных данных</a>
		</span>
	</label>
</div>

<div class="form-user-consent-error">
	Согласитесь с условиями обработки персональных данных.
</div>
