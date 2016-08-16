<style>
    #wrapper {
        text-align: center;
    }
    h1 {
        padding-top:25px;
        color: #000;
    }
    p {
        color:#000;
        padding-left: 10px;
        padding-right: 10px;
    }
</style>
<h1 class='mobile-only'>Отель-бутик &laquo;Морской клуб&raquo;. Фотогалерея</h1>
<div class='skyslider' id='gallery-slider'>
    <a class='skyslider-prev'></a>
    <a class='skyslider-next'></a>
    <?// Список новостей - http://dev.1c-bitrix.ru/user_help/content/iblock/components_2/news/news_list.php
    $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider-gallery",
	array(
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "dynamic_content",
		"IBLOCK_ID" => "4",
		"NEWS_COUNT" => "99",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "",
		"SORT_ORDER2" => "",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_NOTES" => "",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>
</div>
<?$APPLICATION->IncludeComponent('bitrix:main.include', '',
    Array(
        'AREA_FILE_SHOW' => 'file',
        'PATH' => '/local/include/page_templates/pg_gallery_mobile_text.php',
        'EDIT_TEMPLATE' => ''
    ),
    Array('HIDE_ICONS' => 'Y')
);?>
