<?php get_header(); ?>

<?php

/* Template Name: partners */

?>

    <section class="carousel">
        <div>
            <div class="xleb">
                <?php

                true_breadcrumbs();

                ?>
            </div>

            <h1>Наши партнеры</h1>

            <div>
                <div class="swiper mySwiper2 swiper-initialized swiper-horizontal partners">
                    <div class="swiper-wrapper ">
                        <?php

                        // параметры по умолчанию
                        $my_posts = get_posts(array(
                            'numberposts' => -1,
                            'category'    => 0,
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'include'     => array(),
                            'exclude'     => array(),
                            'meta_key'    => '',
                            'meta_value'  => '',
                            'post_type'   => 'partners-block',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ));

                        global $post;

                        foreach ($my_posts as $post) {
                            setup_postdata($post);

                            ?>

                            <div class="swiper-slide" role="">
                                <a href="" target="_blank"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img" /></a>
                            </div>

                            <?php

                            // формат вывода the_title() ...
                        }

                        wp_reset_postdata(); // сброс

                        ?>

                    </div>
                    <div class="swiper-button-next swiper-button-disabled" style="top: 50%; transform:translateY(-50%)" tabindex="-1" role="button"></div>
                    <div class="swiper-button-prev" style="top: 50%; transform:translateY(-50%)" tabindex="0" role="button"></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>

        </div>
    </section>
    <section class="bg-color-grey">
        <div>
            <h2>Список дилеров компании «ВИЗАРДСОФТ»</h2>
            <p class="m-b-20">Центральный офис «ВИЗАРДСОФТ» находится в Санкт-Петербурге. Официальные представительства компании работают в городах:</p>
            <ul class="ul1 m-b-40">
                <li>Москва: +7 (495) 585-14-12</li>
                <li>Ростов-на-Дону: +7 (863) 221-51-99, +7 (863) 221-63-50</li>
            </ul>
            <p class="m-b-20">Дилеры компании «ВИЗАРДСОФТ» работают в ряде городов следующих федеральных округов Российской Федерации:</p>
            <div class="tabs tabs-style-2 m-b-30">
                <ul class="tabs__caption grid col5-2">
                    <li class="active">Центральный</li>
                    <li>Северо-Западный</li>
                    <li>Приволжский</li>
                    <li>Южный</li>
                    <li>Сибирский</li>
                    <li>Уральский</li>
                    <li>Дальневосточный</li>
                    <li>Северо-Кавказский</li>
                    <li>Крымский</li>
                </ul>
                <div class="tabs__content active">
                    <table class="table1 td-center dealers-list">
                        <thead>
                        <tr>
                            <th>Город</th>
                            <th>Организация</th>
                            <th>Телефон</th>
                        </tr>
                        </thead>
                        <tr>
                            <td rowspan="3">Белгород</td>
                            <td>Гарантия, ООО</td>
                            <td>(4722) 27-44-45</td>
                        </tr>
                        <tr>
                            <td>«ЛВА», ООО</td>
                            <td>(4722) 53-62-77</td>
                        </tr>
                        <tr>
                            <td>Программист, ООО</td>
                            <td>(4722) 34-42-49, (919) 430-22-10</td>
                        </tr>
                        <tr>
                            <td>Белгород</td>
                            <td>Гарантия, ООО</td>
                            <td>(4722) 27-44-45</td>
                        </tr>
                        <tr>
                            <td rowspan="4">Москва</td>
                            <td>ПРЕДСТАВИТЕЛЬСТВО</td>
                            <td>(495) 585-14-12</td>
                        </tr>
                        <tr>
                            <td>ИНЖСОФТ.РФ</td>
                            <td>(495) 644-62-56</td>
                        </tr>
                        <tr>
                            <td>"<a href="http://www.softway.ru/category/wizardsoft/">Софтвей</a>", ООО</td>
                            <td>(495) 987-10-50</td>
                        </tr>
                        <tr>
                            <td>"<a href="https://www.syssoft.ru/wizardsoft/">Системный софт</a>", ООО</td>
                            <td>(495) 646-14-71</td>
                        </tr>
                    </table>
                </div>
                <div class="tabs__content">
                    <table class="table1 td-center dealers-list">
                        <thead>
                        <tr>
                            <th>Город</th>
                            <th>Организация</th>
                            <th>Телефон</th>
                        </tr>
                        </thead>
                        <tr>
                            <td rowspan="3">Белгород</td>
                            <td>Гарантия, ООО</td>
                            <td>(4722) 27-44-45</td>
                        </tr>
                        <tr>
                            <td>«ЛВА», ООО</td>
                            <td>(4722) 53-62-77</td>
                        </tr>
                        <tr>
                            <td>Программист, ООО</td>
                            <td>(4722) 34-42-49, (919) 430-22-10</td>
                        </tr>
                    </table>
                </div>
                <div class="tabs__content">
                    3
                </div>
                <div class="tabs__content">
                    4
                </div>
                <div class="tabs__content">
                    5
                </div>
                <div class="tabs__content">
                    6
                </div>
                <div class="tabs__content">
                    7
                </div>
                <div class="tabs__content">
                    8
                </div>
                <div class="tabs__content">
                    9
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>