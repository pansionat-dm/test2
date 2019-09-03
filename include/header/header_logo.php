<?
global $headerLogo;
?>

<?if($headerLogo):?>
  <img src="<?=$headerLogo?>" alt="">
<?else:?>
  <img class="logo-default" src="<?=SITE_TEMPLATE_PATH?>/img/logo_default.png" alt="">
<?endif?>
