<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {die();}

// is gallery page
$isGallery = false;
if (strpos($APPLICATION->GetCurPage(true), SITE_DIR.'gallery/') !== false) {
	$isGallery = true;
}
?>
		</div> <!--/wrapper-->
		<div id='hotel-map' class='no-mobile'></div>
		<footer>
			<?$APPLICATION->IncludeComponent(
				'bitrix:main.include',
				'',
				Array(
					'AREA_FILE_SHOW' => 'file',
					'PATH' => '/local/include/site_templates/ft_logo.php',
					'EDIT_TEMPLATE' => ''
				),
				false
			);?>
			<?$APPLICATION->IncludeComponent(
				'bitrix:main.include',
				'',
				Array(
					'AREA_FILE_SHOW' => 'file',
					'PATH' => '/local/include/site_templates/ft_social.php',
					'EDIT_TEMPLATE' => ''
				),
				false
			);?>
			<?$APPLICATION->IncludeComponent(
				'bitrix:main.include',
				'',
				Array(
					'AREA_FILE_SHOW' => 'file',
					'PATH' => '/local/include/site_templates/ft_contacts.php',
					'EDIT_TEMPLATE' => ''
				),
				false
			);?>
		</footer>
	</body>
	<?
	// @todo в шапке не работает
	if($isGallery) {?>
		<script>
			initImagesSlider("#gallery-slider");
		</script>
	<?}?>
</html>
