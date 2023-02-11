<meta http-equiv="Content-Type" content="text/html; charset="<?=LANG_CHARSET?>">
<title><?$APPLICATION->ShowTitle()?></title>

<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="theme-color" content="#fff">
<meta name="format-detection" content="telephone=no">


<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<meta name="msapplication-TileImage" content="<?=SITE_TEMPLATE_PATH?>/assets/img/fav/ms-icon-144x144.png">


<!-- favicon-->
<link rel="apple-touch-icon" href="<?=SITE_TEMPLATE_PATH?>/assets/img/fav/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?=SITE_TEMPLATE_PATH?>/assets/img/fav/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?=SITE_TEMPLATE_PATH?>/assets/img/fav/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?=SITE_TEMPLATE_PATH?>/assets/img/fav/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?=SITE_TEMPLATE_PATH?>/assets/img/fav/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?=SITE_TEMPLATE_PATH?>/assets/img/fav/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?=SITE_TEMPLATE_PATH?>/assets/img/fav/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?=SITE_TEMPLATE_PATH?>/assets/img/fav/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?=SITE_TEMPLATE_PATH?>/assets/img/fav/apple-icon-180x180.png">
<link rel="apple-touch-icon" href="<?=SITE_TEMPLATE_PATH?>/assets/img/fav/apple-icon.png">
<link rel="icon" type="image/png" sizes="36x36" href="<?=SITE_TEMPLATE_PATH?>/assets/img/fav/android-icon-36x36.png">
<link rel="icon" type="image/png" sizes="48x48" href="<?=SITE_TEMPLATE_PATH?>/assets/img/fav/android-icon-48x48.png">
<link rel="icon" type="image/png" sizes="72x72" href="<?=SITE_TEMPLATE_PATH?>/assets/img/fav/android-icon-72x72.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?=SITE_TEMPLATE_PATH?>/assets/img/fav/android-icon-96x96.png">
<link rel="icon" type="image/png" sizes="144x144" href="<?=SITE_TEMPLATE_PATH?>/assets/img/fav/android-icon-144x144.png">
<link rel="icon" type="image/png" sizes="192x192" href="<?=SITE_TEMPLATE_PATH?>/assets/img/fav/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?=SITE_TEMPLATE_PATH?>/assets/img/fav/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?=SITE_TEMPLATE_PATH?>/assets/img/fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?=SITE_TEMPLATE_PATH?>/assets/img/fav/favicon-96x96.png">
<link rel="icon" type="image/png" href="<?=SITE_TEMPLATE_PATH?>/assets/img/fav/favicon.png">
<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/assets/img/fav/favicon.ico">

    
<!-- seo meta-->
<meta name="author" content="minisol.ru">

<!-- og meta-->
<meta property="og:title" content="<?=$APPLICATION->ShowProperty('og_title')?>">
<meta property="og:url" content="<?=$APPLICATION->ShowProperty('og_url')?>">
<meta property="og:image" content="<?=$APPLICATION->ShowProperty('og_image')?>">
<meta property="og:description" content="<?=$APPLICATION->ShowProperty('og_description')?>">
<meta property="twitter:title" content="<?=$APPLICATION->ShowProperty('og_title')?>">
<meta property="twitter:url" content="<?=$APPLICATION->ShowProperty('og_url')?>">
<meta property="twitter:image" content="<?=$APPLICATION->ShowProperty('og_image')?>">
<meta property="twitter:description" content="<?=$APPLICATION->ShowProperty('og_description')?>">



<?
//$lstScripts = [
//        P_JS.'/vendor.js'
//    ];
//if (APPLICATION_ENV == 'dev') {
//    $lstScripts[] = '/local/sources/src/js'.'/80.plagins.js';
//    $lstScripts[] = '/local/sources/src/js'.'/99.main.js';
//} else {
//    $lstScripts[] = P_JS.'/app.js';
//}
?>

<?$APPLICATION->IncludeComponent(
        'x:js.app',
        '',
        Array(
                'CONFIG' => ['mobileMaxWidth' => 760],
                'SCRIPTS' => $lstScripts,
                'EXTENSIONS' => []
            )
    );?>



<?if(APPLICATION_ENV == 'dev'):?><meta name="robots" content="noindex"><?endif?>


<!--[if lt IE 9]><script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script><script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

<?
//$asset = \Bitrix\Main\Page\Asset::getInstance();
//
//$asset->addJS(P_JS.'/vendor.js');
//
//if (APPLICATION_ENV == 'dev') {
//    $asset->addJS('/local/assets/src/js'.'/80.plagins.js');
//    $asset->addJS('/local/assets/src/js'.'/99.main.js');
//} else {
//    $asset->addJS(P_JS.'/app.js');
//}



$APPLICATION->ShowHead();