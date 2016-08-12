<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
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
</html>
