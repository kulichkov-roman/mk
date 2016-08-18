<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}

IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html class="no-js" lang="<?=LANGUAGE_ID?>">
<head>
	<meta name="ktoprodvinul" content="f23be9b2b6271327">
	<meta name="cmsmagazine" content="38d2170328e981e4d60ee986faaa509f">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<title><?$APPLICATION->ShowTitle()?></title>
	<?
	CJSCore::Init();

	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/normalize.css');
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/swiper.min.css');
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/fancybox/jquery.fancybox.css');
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/fancybox/helpers/jquery.fancybox-buttons.css');
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/main.css');
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/skyslider.css');
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/fonts/hagin/stylesheet.css');
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/fonts/helvetica/stylesheet.css');
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/developers.css');

	// is main page
	$isMain = false;
	if ($APPLICATION->GetCurPage(true)==SITE_DIR.'index.php') {
		$isMain = true;
	}
	// is gallery page
	$isGallery = false;
	if (strpos($APPLICATION->GetCurPage(true), SITE_DIR.'gallery/') !== false) {
		$isGallery = true;
	}

	$APPLICATION->AddHeadString('
		<script>
            var map_contacts_lat=44.49168119827027;
            var map_contacts_lng=38.1343515497681;
            var map_contacts_zoom=12;
            var map_contacts_from_lat=44.508675;
            var map_contacts_from_lng=38.136072;
        </script>

	');

	$APPLICATION->AddHeadString('
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>window.jQuery || document.write(\''.SITE_TEMPLATE_PATH .'<script src="/js/vendor/jquery-1.11.3.min.js"><\/script>\')</script>
	');

	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/plugins.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/vendor/touchswipe.jquery.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/skyslider.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.fancybox.pack.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/swiper.min.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/css/fancybox/helpers/jquery.fancybox-buttons.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/main.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/vendor/modernizr-2.8.3.min.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/vendor/masonry.pkgd-4.0.0.min.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/developers.js');

	$APPLICATION->AddHeadString('
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAckPfKH6q-sp1kl2JaQih7CEFWMocSMf0&sensor=false"></script>
	');
	$APPLICATION->AddHeadString('
		<!-- BEGIN CLICKTEX CODE {literal} -->
			<script type="text/javascript" charset="utf-8" async="async" src="//www.clicktex.ru/code/26346"></script>
		<!-- {/literal} END CLICKTEX CODE -->
	');
	?>
	<?$APPLICATION->ShowHead()?>
	<?$APPLICATION->IncludeComponent('bitrix:main.include', '',
		Array(
			'AREA_FILE_SHOW' => 'file',
			'PATH' => '/local/include/site_templates/hd_ga.php',
			'EDIT_TEMPLATE' => ''
		),
		false
	);?>
</head>
<body>
	<?$APPLICATION->IncludeComponent('bitrix:main.include', '',
		Array(
			'AREA_FILE_SHOW' => 'file',
			'PATH' => '/local/include/site_templates/hd_ya.php',
			'EDIT_TEMPLATE' => ''
		),
		false
	);?>
	<div class="panel">
		<?$APPLICATION->ShowPanel();?>
	</div>
	<div class="header clearfix">
		<div class="header-logo">
			<a href="/" class="header-logo__link">
				<?$APPLICATION->IncludeComponent('bitrix:main.include', '',
					Array(
						'AREA_FILE_SHOW' => 'file',
						'PATH' => '/local/include/site_templates/hd_logo.php',
						'EDIT_TEMPLATE' => ''
					),
					false
				);?>
			</a>
		</div>
		<div class="header-main">
			<div class="header-phone">
				<?$APPLICATION->IncludeComponent('bitrix:main.include', '',
					Array(
						'AREA_FILE_SHOW' => 'file',
						'PATH' => '/local/include/site_templates/hd_phone.php',
						'EDIT_TEMPLATE' => ''
					),
					false
				);?>
			</div>
			<div class="header-btns">
				<?$APPLICATION->IncludeComponent('bitrix:main.include', '',
					Array(
						'AREA_FILE_SHOW' => 'file',
						'PATH' => '/local/include/site_templates/hd_btns.php',
						'EDIT_TEMPLATE' => ''
					),
					false
				);?>
			</div>
			<?$APPLICATION->IncludeComponent('bitrix:main.include', '',
				Array(
					'AREA_FILE_SHOW' => 'file',
					'PATH' => '/local/include/site_templates/hd_menu.php',
					'EDIT_TEMPLATE' => ''
				),
				false
			);?>
		</div>
		<a href="javascript:void(0)" class="header__btn-menu-toggle js__header-menu-toggle"></a>
	</div>
	<div id="mobile-mode"></div>
	<div id="wrapper">
