<?php get_header(); ?>

<?php

/* Template Name: services */

?>

<section>
  <div>
    <div class="xleb">
      <a href="../">Главная</a>
    </div>
    <h1><?php the_title(); ?></h1>
    <p class="m-b-30"><?php echo get_post_meta(get_the_ID(), 'descr1', true); ?></p>
    <div class="grid gap40 col1 services-list">
      <div class="p40">
        <div class="grid gap40">
          <div><img src="<?php echo get_template_directory_uri() ?>/assets/img/product-icon6.svg" /></div>
          <div>
            <h2>Техническая поддержка и консультация</h2>
            <p class="m-b-20">Приглашаем всех клиентов на бесплатные консультации каждую ПЕРВУЮ ПЯТНИЦУ месяца. Вам необходимо оставить <a href="">заявку</a>. В течение всего срока действующей лицензии компания ЗАО «ВИЗАРДСОФТ» предоставляет комплексное сопровождение лицензий в рамках заключенных договоров:</p>
            <ul class="ul1">
              <li>Online-консультант;</li>
              <li>Возможность задать вопросы online прямо на нашем сайте или через Интернет-мессенджеры: Telegram, Viber, Whatsapp;</li>
              <li>Заявка в техническую поддержку;</li>
              <li>Сервис Заявка в техподдержку предназначен для консультаций по любому интересующему Вас вопросу с нашими специалистами через личный кабинет на нашем сайте;</li>
              <li>Горячая линия по телефонам: +7 (812) 655-63-23, +7 (950) 043-18-24 и электронной почте tp@wizardsoft.ru;</li>
              <li>Удаленный онлайн-доступ к рабочему месту пользователя;</li>
              <li>Услуга Удаленная техподдержка обеспечивает удаленный доступ нашего специалиста к Вашему компьютеру для быстрой установки, настройки и обновления всей линейки наших программных продуктов;</li>
              <li>Уведомления в программе;</li>
              <li>С помощью уведомлений в программе мы информируем Вас о новых выпусках баз данных, версий программы, а также проводимых нами обучающих интенсивах, мастер-классах, вебинарах и тренингах;</li>
              <li>Загрузка обновлений СНБ прямо из программы;</li>
              <li>Возможность в программе проверять актуальность баз данных и загружать последние обновления для Вашей программы;</li>
              <li>Выезды наших специалистов;</li>
              <li>По Вашей заявке наши специалисты приезжают к Вам для обучения Ваших сотрудников.</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="p40">
        <div class="grid gap40">
          <div><img src="<?php echo get_template_directory_uri() ?>/assets/img/product-icon3.svg" /></div>
          <div>
            <h2>Обучение</h2>
            <p>Наша компания всегда идет в ногу со временем и предугадывает запросы профессионалов. В любое время и в любом месте Вы можете посмотреть обучающие видео-уроки и вебинары на <a href="">нашем канале YouTube</a>. Пройти обучение сметному делу и повысить квалификацию — для Вас предусмотрен <a href="">комплекс программ обучения специалистов</a> с использованием программных продуктов компании «ВИЗАРДСОФТ».</p>
          </div>
        </div>
      </div>

      <div class="p40">
        <div class="grid gap40">
          <div><img src="<?php echo get_template_directory_uri() ?>/assets/img/product-icon1.svg" /></div>
          <div>
            <h2>Презентация программных продуктов</h2>
            <p>Для того, чтобы познакомиться с возможностями наших программных продуктов — SmetaWIZARD, PlanWIZARD, BIM WIZARD — Вы можете <a href="">заказать презентацию</a>, как на Вашем рабочем месте, так и удаленно через Интернет.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>