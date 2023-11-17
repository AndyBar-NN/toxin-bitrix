<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/><!<![endif]-->
    <link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon.ico">
    <?
    $Asset = \Bitrix\Main\Page\Asset::getInstance();
    $Asset->addCss("https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap");
    $Asset->addCss("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap");
    $Asset->addCss("https://unpkg.com/swiper/swiper-bundle.min.css");

    $Asset->addCss(SITE_TEMPLATE_PATH . "/css/datepicker.css");
    $Asset->addCss(SITE_TEMPLATE_PATH . "/css/nouislider.css");
    $Asset->addCss(SITE_TEMPLATE_PATH . "/template_styles.css");

    $Asset->addJs("https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js");
    $Asset->addJs("https://unpkg.com/swiper/swiper-bundle.min.js");
    $Asset->addJs(SITE_TEMPLATE_PATH . "/js/plagins/datepicker.js");
    $Asset->addJs(SITE_TEMPLATE_PATH . "/js/plagins/jquery.mask.min.js");
    $Asset->addJs(SITE_TEMPLATE_PATH . "/js/plagins/nouislider.js");
    $Asset->addJs(SITE_TEMPLATE_PATH . "/js/plagins/wNumb.min.js");
    $Asset->addJs(SITE_TEMPLATE_PATH . "/js/main.js");

    ?>
    <title><?=$APPLICATION->ShowTitle();?></title>
    <?=$APPLICATION->ShowHead();?>
</head>
<body>
<div id="panel"><?=$APPLICATION->ShowPanel();?></div>
<header class="header">
    <div class="container">
        <div class="menu">
            <a href="/" id="logo" class="menu__logo"><img src="<?=SITE_TEMPLATE_PATH?>/img/icons/logo.svg" alt=""></a>
            <div class="nav">
                <a href="#" class="menu__nav">О нас</a>
                <a href="#" class="menu__nav">Услуги<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/arrow_down.svg" class="menu__arrow" alt=""></a>
                <a href="#" class="menu__nav">Вакансии</a>
                <a href="#" class="menu__nav">Новости</a>
                <a href="#" class="menu__nav">Соглашения<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/arrow_down.svg" class="menu__arrow" alt=""></a>
                <div class="buttons">
                    <a href="/auth.php" class="button button__login">Войти</a>
                    <a href="/auth.php" class="button button__reg">Зарегестрироваться</a>
                </div>

                <div class="menu__name">
                    <span class="menu__name--login">Andy</span>
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/edit.svg" class="menu__edit"></img>
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/close.svg" class="menu__exit"></img>
                </div>

                <form class="edit__form">
                    <h2 class="edit__title">Редактирование</h2>
                    <input class="edit__name" type="text" placeholder="Логин" minlength="2">
                    <button class="search edit__btn">Применить</button>
                </form>
            </div>
            <!-- /.nav -->
        </div>
        <!-- /.menu -->
    </div>
    <!-- /.container -->
</header>
<!-- /.header -->
