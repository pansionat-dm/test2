<?
global $uberShopSettings;
?>

<ul class="social-icons list-unstyled">
  <?if(!empty($uberShopSettings["soc_twitter"]["current"])):?>
    <li><a target="_blank" href="<?=$uberShopSettings["soc_twitter"]["current"]?>" title="Twitter" class="si si-twitter"><i class="fa fa-twitter"></i></a></li>
  <?endif?>

  <?if(!empty($uberShopSettings["soc_facebook"]["current"])):?>
    <li><a target="_blank" href="<?=$uberShopSettings["soc_facebook"]["current"]?>" title="Facebook" class="si si-facebook"><i class="fa fa-facebook"></i></a></li>
  <?endif?>

  <?if(!empty($uberShopSettings["soc_rss"]["current"])):?>
    <li><a target="_blank" href="<?=$uberShopSettings["soc_rss"]["current"]?>" title="RSS" class="si si-rss"><i class="fa fa-rss"></i></a></li>
  <?endif?>

  <?if(!empty($uberShopSettings["soc_vimeo"]["current"])):?>
    <li><a target="_blank" href="<?=$uberShopSettings["soc_vimeo"]["current"]?>" title="Vimeo" class="si si-vimeo"><i class="fa fa-vimeo"></i></a></li>
  <?endif?>

  <?if(!empty($uberShopSettings["soc_vk"]["current"])):?>
    <li><a target="_blank" href="<?=$uberShopSettings["soc_vk"]["current"]?>" title="ВКонтакте" class="si si-vk"><i class="fa fa-vk"></i></a></li>
  <?endif?>

  <?if(!empty($uberShopSettings["soc_instagram"]["current"])):?>
    <li><a target="_blank" href="<?=$uberShopSettings["soc_instagram"]["current"]?>" title="Instagram" class="si si-instagram"><i class="fa fa-instagram"></i></a></li>
  <?endif?>

  <?if(!empty($uberShopSettings["soc_odnoklassniki"]["current"])):?>
    <li><a target="_blank" href="<?=$uberShopSettings["soc_odnoklassniki"]["current"]?>" title="Одноклассники" class="si si-odnoklassniki"><i class="fa fa-odnoklassniki"></i></a></li>
  <?endif?>

  <?if(!empty($uberShopSettings["soc_youtube"]["current"])):?>
    <li><a target="_blank" href="<?=$uberShopSettings["soc_youtube"]["current"]?>" title="Youtube" class="si si-youtube-play"><i class="fa fa-youtube-play"></i></a></li>
  <?endif?>

  <?if(!empty($uberShopSettings["soc_linkedin"]["current"])):?>
    <li><a target="_blank" href="<?=$uberShopSettings["soc_linkedin"]["current"]?>" title="LinkedIn" class="si si-linkedin"><i class="fa fa-linkedin"></i></a></li>
  <?endif?>

  <?if(!empty($uberShopSettings["soc_reddit"]["current"])):?>
    <li><a target="_blank" href="<?=$uberShopSettings["soc_reddit"]["current"]?>" title="reddit" class="si si-reddit-alien"><i class="fa fa-reddit-alien"></i></a></li>
  <?endif?>

  <?if(!empty($uberShopSettings["soc_pinterest"]["current"])):?>
    <li><a target="_blank" href="<?=$uberShopSettings["soc_pinterest"]["current"]?>" title="Pinterest" class="si si-pinterest-p"><i class="fa fa-pinterest-p"></i></a></li>
  <?endif?>
</ul>
