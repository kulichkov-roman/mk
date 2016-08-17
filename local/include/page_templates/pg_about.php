<?$environment = \YT\Environment\EnvironmentManager::getInstance();?>
<style>
    html, body {
        height: auto;
        overflow: auto;
    }
    footer {
        position: fixed;
        bottom:0;
    }
    .wrapper-inner {
        position: relative;
        height: auto;
    }
    #wrapper {
        position: relative;
        height: auto;
        min-height: 100%;
    }
    #hotel-map {
        display: none;
    }
</style>
<script>
    var showMapEnabled=false;
</script>
<div class="page-wrapper">
    <?$APPLICATION->ShowViewContent('roomsDetail');?>
    <div class="page-content">
        <?
        $APPLICATION->IncludeComponent(
            "bitrix:breadcrumb",
            "breadcrumb",
            array(
                "START_FROM" => "0",
                "PATH" => "/",
                "SITE_ID" => "s1",
                "COMPONENT_TEMPLATE" => "breadcrumb"
            ),
            false
        );
        $APPLICATION->IncludeComponent(
	        "bitrix:news.detail",
        	"detail-elem",
        	array(
        		"AJAX_MODE" => "N",
        		"IBLOCK_TYPE" => "dynamic_content",
        		"IBLOCK_ID" => "8",
        		"ELEMENT_ID" => "47",
        		"ELEMENT_CODE" => "",
        		"CHECK_DATES" => "Y",
        		"FIELD_CODE" => array(
        			0 => "",
        			1 => "",
        		),
        		"PROPERTY_CODE" => array(
        			0 => "",
        			1 => "",
        		),
        		"IBLOCK_URL" => "",
        		"META_KEYWORDS" => "-",
        		"META_DESCRIPTION" => "-",
        		"BROWSER_TITLE" => "-",
        		"SET_TITLE" => "N",
        		"SET_STATUS_404" => "N",
        		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        		"ADD_SECTIONS_CHAIN" => "Y",
        		"ACTIVE_DATE_FORMAT" => "d.m.Y",
        		"USE_PERMISSIONS" => "N",
        		"CACHE_TYPE" => "A",
        		"CACHE_TIME" => "36000000",
        		"CACHE_NOTES" => "",
        		"CACHE_GROUPS" => "Y",
        		"DISPLAY_TOP_PAGER" => "N",
        		"DISPLAY_BOTTOM_PAGER" => "N",
        		"PAGER_TITLE" => "Страница",
        		"PAGER_TEMPLATE" => "",
        		"PAGER_SHOW_ALL" => "N",
        		"AJAX_OPTION_JUMP" => "N",
        		"AJAX_OPTION_STYLE" => "Y",
        		"AJAX_OPTION_HISTORY" => "N",
        		"AJAX_OPTION_ADDITIONAL" => "",
        		"COMPONENT_TEMPLATE" => "detail-elem",
        		"DETAIL_URL" => "",
        		"SET_CANONICAL_URL" => "N",
        		"SET_BROWSER_TITLE" => "N",
        		"SET_META_KEYWORDS" => "N",
        		"SET_META_DESCRIPTION" => "N",
        		"SET_LAST_MODIFIED" => "N",
        		"ADD_ELEMENT_CHAIN" => "Y",
        		"DISPLAY_DATE" => "Y",
        		"DISPLAY_NAME" => "Y",
        		"DISPLAY_PICTURE" => "Y",
        		"DISPLAY_PREVIEW_TEXT" => "Y",
        		"USE_SHARE" => "N",
        		"PAGER_BASE_LINK_ENABLE" => "N",
        		"SHOW_404" => "N",
        		"MESSAGE_404" => ""
        	),
        	false
        );
        ?>
    </div>
</div>
