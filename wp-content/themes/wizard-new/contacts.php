<?php get_header(); ?>

<?php

/* Template Name: contacts */

?>

<section>
        <div>
            <div class="xleb">
                <?php

                true_breadcrumbs();

                ?>
            </div>
            <h1>Контактная информация</h1>
            <h3><span class="material-icons">location_on</span> Офис в Санкт-Петербурге</h3>
            <div class="grid col3-1 outline gap20 m-b-10 p40">
                <div><strong>Фактический адрес:</strong><br />г. Санкт-Петербург, ул. Возрождения, д. 20а, БЦ «Возрождение»</div>
                <div><strong>Почтовый адрес:</strong><br />198303 г. Санкт-Петербург, а/я 16</div>
                <div><strong>Юридический адрес:</strong><br />192236, г. Санкт-Петербург, ул. Софийская, д. 17. лит. А, пом. 312 А</div>
            </div>
            <div class="contacts grid col2-1 v-center outline">
                <div class="p40">
                    <p class="m-b-20"><strong>ИНН:</strong> 7816054645</p>
                    <p class="m-b-20">
                        Единый многоканальный номер: +7 (812) 655-63-23<br />
                        Отдел продаж по Санкт-Петербургу и ЛО: +7 (812) 655-63-23<br />
                        Отдел продаж по регионам: +7 (812) 655-63-25, +7 (904) 554-79-97<br />
                        Отдел по работе с дилерами: +7 (812) 655-63-25<br />
                        Отдел технической поддержки: +7 (812) 655-63-23
                    </p>
                    <p class="m-b-20">Электронная почта: info@wizardsoft.ru</p>
                    <p class="m-b-20">
                        <strong>Горячая линия в мессенджерах:</strong><br />
                    <div class="grid col3-3">
                        <a href=""><img src="<?php echo get_template_directory_uri() ?>/assets/img/vk.svg" /></a>
                        <a href=""><img src="<?php echo get_template_directory_uri() ?>/assets/img/youtube.svg" /></a>
                        <a href=""><img src="<?php echo get_template_directory_uri() ?>/assets/img/ok.svg" /></a>
                    </div>
                    </p>
                </div>
                <div>
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae0be4dfea31142110db4639c993e5443be84719c2d0c279f40d233e168d507e7&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
            </div>
        </div>
    </section>
<section class="bg-color-grey">
        <div>
            <h2>Контакты представительства</h2>
            <div class="grid col3-1 gap20 contacts">
                <div class="outline p40">
                    <h3><span class="material-icons">location_on</span> Офис в Москве</h3>
                    <p class="m-b-20">В филиале работает отдел технической поддержки, отдел продаж, отдел образовательных услуг.</p>
                    <p>+7 (495) 585-14-12</p>
                    <p>msk@wizardsoft.ru</p>
                </div>
                <div class="outline p40">
                    <h3><span class="material-icons">location_on</span> Офис в Ростове-на-Дону</h3>
                    <p class="m-b-20">В филиале работает отдел технической поддержки, отдел продаж.</p>
                    <p>+7 (863) 221-31-23, 221-51-99</p>
                    <p>Отдел технической поддержки: +7 (863) 221-63-50</p>
                    <p>61@wizardsoft.ru<br />061@wizardsoft.ru<br />manager61@wizardsoft.ru</p>
                </div>
                <div class="outline p40">
                    <h3><span class="material-icons">location_on</span> Офис в Республике Крым</h3>
                    <p class="m-b-20">В филиале работает отдел технической поддержки, отдел продаж.</p>
                    <p>+7 (365) 267-13-18</p>
                    <p>bmd@wizardsoft.ru</p>
                </div>
            </div>
        </div>
    </section>



<?php get_footer(); ?>