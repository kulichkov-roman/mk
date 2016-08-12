<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("TITLE", "Бутик-отель Морской Клуб (Sea Club Boutique Hotel) – приглашаем Вас на лучший элитный отдых на Черном море");
$APPLICATION->SetPageProperty("description", "Бутик-отель Морской Клуб (Sea Club Boutique Hotel) – приглашаем Вас на лучший элитный отдых на Черном море. Лучшие места для отдыха в окрестностях Геленджика возле моря. Бары, рестораны, бассейн, семейный отдых, морские прогулки, развлекательная программа.");
$APPLICATION->SetTitle("Бутик-отель Морской Клуб (Sea Club Boutique Hotel) – приглашаем Вас на лучший элитный отдых на Черном море");
?>
<?$APPLICATION->IncludeComponent('bitrix:main.include', '',
    Array(
        'AREA_FILE_SHOW' => 'file',
        'PATH' => '/local/include/page_templates/pg_slider_main.php',
        'EDIT_TEMPLATE' => ''
    ),
    false
);?>
<?$APPLICATION->IncludeComponent('bitrix:main.include', '',
    Array(
        'AREA_FILE_SHOW' => 'file',
        'PATH' => '/local/include/page_templates/pg_banners_main.php',
        'EDIT_TEMPLATE' => ''
    ),
    false
);?>
<?$APPLICATION->IncludeComponent('bitrix:main.include', '',
    Array(
        'AREA_FILE_SHOW' => 'file',
        'PATH' => '/local/include/page_templates/pg_advantages_main.php',
        'EDIT_TEMPLATE' => ''
    ),
    false
);?>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
