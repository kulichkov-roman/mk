<?
// Меню - http://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/menu.php
$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"main-menu",
	Array(   
		"ROOT_MENU_TYPE"           => "top",     // Тип меню для первого уровня
		"MAX_LEVEL"                => "1",        // Уровень вложенности меню    
		"CHILD_MENU_TYPE"          => "top",     // Тип меню для остальных уровней
		"USE_EXT"                  => "N",        // Подключать файлы с именами вида .тип_меню.menu_ext.php    
		"DELAY"                    => "N",        // Откладывать выполнение шаблона меню    
		"ALLOW_MULTI_SELECT"       => "N",        // Разрешить несколько активных пунктов одновременно    
		"MENU_CACHE_TYPE"          => "N",        // Тип кеширования    
		"MENU_CACHE_TIME"          => "3600",     // Время кеширования (сек.)    
		"MENU_CACHE_USE_GROUPS"    => "Y",        // Учитывать права доступа    
		"MENU_CACHE_GET_VARS"      => "",         // Значимые переменные запроса 
	)
);
?>
