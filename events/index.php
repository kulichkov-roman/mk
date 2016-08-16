<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("description", "Бутик-отель Морской Клуб (Sea Club Boutique Hotel) – приглашаем Вас на лучший элитный отдых на Черном море. Лучшие места для отдыха в окрестностях Геленджика возле моря. Бары, рестораны, бассейн, семейный отдых, морские прогулки, развлекательная программа.");
$APPLICATION->SetPageProperty("TITLE", "Бутик-отель Морской Клуб (Sea Club Boutique Hotel) – приглашаем Вас на лучший элитный отдых на Черном море.");
$APPLICATION->SetTitle("Бутик-отель Морской Клуб (Sea Club Boutique Hotel) – приглашаем Вас на лучший элитный отдых на Черном море");
?>
<?$APPLICATION->IncludeComponent('bitrix:main.include', '',
    Array(
        'AREA_FILE_SHOW' => 'file',
        'PATH' => '/local/include/page_templates/pg_events.php',
        'EDIT_TEMPLATE' => ''
    ),
    Array('HIDE_ICONS' => 'Y')
);?>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
