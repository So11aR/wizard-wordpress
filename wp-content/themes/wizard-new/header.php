
<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Wizardsoft</title>
    <meta name="keywords" content="Wizardsoft">
    <meta name="description" content="Wizardsoft">
    <meta charset="utf-8" />
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/svg+xml" href="https://www.design-spb.ru/tmp/2022/wizard-site1/favicon.svg">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <script src="https://www.design-spb.ru/tmp/2022/wizard-site1/scripts/jquery-3.6.1.min.js"></script>

    <?php wp_head(); ?>

</head>

<body>
<header>
    <div class="grid v-center">
        <div><a href="/" class="logo"><img src="https://www.design-spb.ru/tmp/2022/wizard-site1/img/logo-w-text-red-2.svg" /></a></div>
        <div class="header-menu">
            <div>+7 (950) 043-18-24<br />+7 (950) 043-18-24</div>
            <!-- <div>
                <div class="window-link"><span class="material-icons">phone_in_talk</span> <span>Заказать звонок</span></div>
                <div class="window callback">
                    <div class="window-modal p40 r5">
                        <h2><span class="material-icons" title="Заказать звонок">phone_in_talk</span> Заказать звонок</h2>
                        <input type="text" name="name" id="name" required placeholder="Ваше имя" class="m-b-20">
                        <input type="text" name="name" id="name" required placeholder="Ваш номер телефона" class="m-b-20">
                        <input type="submit" value="Заказать">
                        <div class="window-close">×</div>
                    </div>
                </div>
            </div> -->
            <div>
                <a href=""><span class="material-icons" title="Поиск по сайту">search</span> <span>Поиск по сайту</span></a>
            </div>
            <div>
                <a href="https://www.design-spb.ru/tmp/2022/wizard-site1/update/update.htm"><span class="material-icons" title="Загрузить обновления">refresh</span> <span>Загрузить обновления</span></a>
            </div>
        </div>
    </div>
</header>
<nav>
    <div>


        <div class="nav-menu-mobile-all">
            <div class="nav-menu-mobile"></div>
            <div class="nav-menu-mobile-block">

                <?php
                wp_nav_menu([
                    'theme_location'  => '',
                    'menu'            => 'mobile-menu',
                    'container'       => 'false',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => '',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul class="mobi-menu">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => new mobile_menu
                ]);

                ?>
            </div>
        </div>

        <?php
        wp_nav_menu([
            'theme_location'  => '',
            'menu'            => 'main-menu',
            'container'       => 'false',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'nav-menu',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul class="nav-menu">%3$s</ul>',
            'depth'           => 0,
            'walker'          => new desktop_menu
        ]);

        ?>

    </div>
</nav>
<div class="bg-black"></div>