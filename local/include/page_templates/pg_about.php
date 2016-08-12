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
<div class='page-wrapper'>
    <div class='page-header'>
        <div style='background-image: url(/local/images/pages-id49-cover.jpg);'>
            <div class=''>
                <h1>Об Отеле</h1>
            </div>
            <a class='page-back-button' href='/'></a>
        </div>
    </div>
    <div class='page-content'>
        <ul class='breadcrumbs clearfix'>
            <li><a href='/'>Главная</a></li>
            <li>Об отеле</li>
        </ul>
        <?$APPLICATION->IncludeComponent('bitrix:main.include', '',
            Array(
                'AREA_FILE_SHOW' => 'file',
                'PATH' => '/local/include/page_templates/pg_about_text.php',
                'EDIT_TEMPLATE' => ''
            ),
            false
        );?>
    </div>
    <!-- page-content -->
</div>
