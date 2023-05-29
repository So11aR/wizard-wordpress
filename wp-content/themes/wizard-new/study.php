<?php get_header(); ?>

<?php

/* Template Name: study */

?>

    <section>
        <div>

            <div class="xleb">
                <?php

                true_breadcrumbs();

                ?>
            </div>

            <h1><?php the_title(); ?></h1>
            <div class="tabs tabs-style-2">
                <ul class="tabs__caption grid col2-1">
                    <li class="active">Учебные центры</li>
                    <li>Реестр сметчика</li>
                </ul>
                <div class="tabs__content active">
                    <table class="table1 td-center study-list">
                        <thead>
                        <tr>
                            <th>Название</th>
                            <th>Контакты</th>
                        </tr>
                        </thead>
                        <tr>
                            <td>Название 1</td>
                            <td>Контакты 1</td>
                        </tr>
                        <tr>
                            <td>Название 1</td>
                            <td>Контакты 1</td>
                        </tr>
                        <tr>
                            <td>Название 1</td>
                            <td>Контакты 1</td>
                        </tr>
                        <tr>
                            <td>Название 1</td>
                            <td>Контакты 1</td>
                        </tr>
                        <tr>
                            <td>Название 1</td>
                            <td>Контакты 1</td>
                        </tr>
                        <tr>
                            <td>Название 1</td>
                            <td>Контакты 1</td>
                        </tr>
                        <tr>
                            <td>Название 1</td>
                            <td>Контакты 1</td>
                        </tr>
                    </table>
                </div>
                <div class="tabs__content">
                    <div class="grid gap10 re-list-search m-b-20">
                        <div><input type="text" name="number" id="number" required placeholder="№ сертификата"></div>
                        <div><input type="submit" value="Найти"></div>
                    </div>
                    <div class="outline">
                        <div class="shop-table1 shop-col3">
                            <div>
                                <div>ФИО</div>
                                <div>Номер сертификата</div>
                                <div>Дата прохождения</div>
                                <div>Cрок действия</div>
                            </div>
                            <div>
                                <div><strong><span class="material-icons">save</span> Данные не найдены</strong></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                            <div>
                                <div>Иванов Иван Иванович</div>
                                <div>12324234</div>
                                <div>12.12.1900</div>
                                <div>до 31.12.2022</div>
                            </div>
                            <div>
                                <div>Иванов Иван Иванович</div>
                                <div>12324234</div>
                                <div>12.12.1900</div>
                                <div>до 31.12.2022</div>
                            </div>
                            <div>
                                <div>Иванов Иван Иванович</div>
                                <div>12324234</div>
                                <div>12.12.1900</div>
                                <div>до 31.12.2022</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

<?php get_footer(); ?>