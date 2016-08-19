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
	<div class="page-header">
		<div style="background-image: url('/local/images/bg-reviews.jpg');">
			<a class="page-back-button" href="/"></a>
		</div>
	</div>
    <div class="page-content">
        <?$APPLICATION->IncludeComponent(
            "bitrix:breadcrumb",
            "breadcrumb",
            array(
                "START_FROM" => "0",
                "PATH" => "/",
                "SITE_ID" => "s1",
                "COMPONENT_TEMPLATE" => "breadcrumb"
            ),
            false
        );?>
	    <div class="reviews">
		    <h1>Отзывы клиентов</h1>
		    <div class="reviews__list clearfix">
			    <div class="reviews__sizer"></div>
	            <?$APPLICATION->IncludeComponent(
					"bitrix:news.list",
					"list-reviews",
					array(
						"AJAX_MODE" => "N",
						"IBLOCK_TYPE" => "dynamic_content",
						"IBLOCK_ID" => "9",
						"NEWS_COUNT" => "99",
						"SORT_BY1" => "ACTIVE_FROM",
						"SORT_ORDER1" => "DESC",
						"SORT_BY2" => "SORT",
						"SORT_ORDER2" => "ASC",
						"FILTER_NAME" => "",
						"FIELD_CODE" => array(
							0 => "",
							1 => "",
						),
						"PROPERTY_CODE" => array(
							0 => "RATING",
							1 => "",
						),
						"CHECK_DATES" => "Y",
						"DETAIL_URL" => "",
						"PREVIEW_TRUNCATE_LEN" => "",
						"ACTIVE_DATE_FORMAT" => "j F Y",
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
						"PAGER_SHOW_ALWAYS" => "Y",
						"PAGER_TEMPLATE" => "",
						"PAGER_DESC_NUMBERING" => "N",
						"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
						"PAGER_SHOW_ALL" => "N",
						"AJAX_OPTION_JUMP" => "N",
						"AJAX_OPTION_STYLE" => "Y",
						"AJAX_OPTION_HISTORY" => "N",
						"AJAX_OPTION_ADDITIONAL" => "",
						"COMPONENT_TEMPLATE" => "list-reviews",
						"SET_BROWSER_TITLE" => "N",
						"SET_META_KEYWORDS" => "N",
						"SET_META_DESCRIPTION" => "N",
						"SET_LAST_MODIFIED" => "Y",
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
		</div>
    </div>
	<div class="reviews-form">
		<div class="container">
			<?$APPLICATION->IncludeComponent(
				"yt:iblock.element.add.form",
				"reviews",
				array(
					"SEF_MODE" => "N",
					"IBLOCK_TYPE" => "dynamic_content",
					"IBLOCK_ID" => "9",
					"PROPERTY_CODES" => array(
						0 => "2",
						1 => "3",
						2 => "NAME",
						3 => "PREVIEW_TEXT",
					),
					"PROPERTY_CODES_REQUIRED" => array(
						0 => "NAME",
						1 => "PREVIEW_TEXT",
					),
					"GROUPS" => array(
						0 => "2",
					),
					"STATUS_NEW" => "NEW",
					"STATUS" => "ANY",
					"LIST_URL" => "",
					"ELEMENT_ASSOC" => "CREATED_BY",
					"MAX_USER_ENTRIES" => "100",
					"MAX_LEVELS" => "100",
					"LEVEL_LAST" => "Y",
					"USE_CAPTCHA" => "N",
					"USER_MESSAGE_EDIT" => "",
					"USER_MESSAGE_ADD" => "",
					"DEFAULT_INPUT_SIZE" => "30",
					"RESIZE_IMAGES" => "N",
					"MAX_FILE_SIZE" => "0",
					"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
					"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
					"CUSTOM_TITLE_NAME" => "",
					"CUSTOM_TITLE_TAGS" => "",
					"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
					"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
					"CUSTOM_TITLE_IBLOCK_SECTION" => "",
					"CUSTOM_TITLE_PREVIEW_TEXT" => "",
					"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
					"CUSTOM_TITLE_DETAIL_TEXT" => "",
					"CUSTOM_TITLE_DETAIL_PICTURE" => "",
					"SEF_FOLDER" => "",
					"COMPONENT_TEMPLATE" => ".default",
					"PREFIX_FORM" => ""
				),
				false
			);?>
		</div>
	</div> <!-- reviews-form -->
</div>
