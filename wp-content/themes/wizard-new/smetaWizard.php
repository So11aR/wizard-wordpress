<?php get_header(); ?>

<?php

/* Template Name: smetaWizard */

?>

<section>
  <div>
    <!-- <div class="xleb">
      <a href="../">Главная</a>
      <a href="products.htm">Программные продукты</a>
    </div> -->
      <div class="xleb">
          <?php

          true_breadcrumbs();

          ?>
      </div>
    <h1><?php the_title(); ?></h1>
    <div class="grid col2-1 gap40">
      <div><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img" /></div>
      <div>
        <?php echo get_post_meta(get_the_ID(), 'descr1', true); ?>
        <?php echo get_post_meta(get_the_ID(), 'descr2', true); ?>
        <div class="grid col2-1 gap10">
          <a href="https://www.design-spb.ru/tmp/2022/wizard-site1/shop/shop.htm" class="btn2"><span class="material-icons">shopping_cart</span> Приобрести</a>
          <a href="https://www.design-spb.ru/tmp/2022/wizard-site1/services/order-a-demo.htm" class="btn2"><span class="material-icons">desktop_windows</span> Заказать демонстрацию</a></li>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bg-color-grey">
  <div>
    <h2>О программе</h2>
    <div class="grid col2-1 gap40 m-b-20">
      <div>
        <div class="video">
          <iframe src="https://www.youtube.com/embed/U4sg7twFdoc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div>
        <p class="m-b-20"><strong>SmetaWIZARD включена в:</strong></p>
        <ul class="ul1">
          <li>Реестр российских программ для электронных вычислительных машин и баз данных (Приказ Минкомсвязи России от 08.11.2016 №538) с порядковым номером 2254;</li>
          <li>Перечень российского программного обеспечения для субъектов градостроительной деятельности в соответствии с данными единого реестра российского программного обеспечения для ЭВМ на сайте Минстроя РФ;</li>
          <li>Реестр программных продуктов для информационного моделирования на сайте НОСТРОЙ.</li>
        </ul>
      </div>
    </div>
    <p class="m-b-20">В соответствии с положениями Федерального закона от 26 июля 2017 г. № 187-ФЗ "О безопасности критической информационной инфраструктуры Российской Федерации” доступна установка программы под Linuх, а именно операционные системы, входящие в Реестр отечественного ПО, в частности AstraLinux и AltLinux. По вопросам установки программы под Вашу операционную систему обратитесь, пожалуйста, к менеджерам нашей компании.</p>
    <p class="m-b-20">Программа имеет несколько вариантов поставки — локальная, сетевая и портативная версия.</p>
    <p class="m-b-30">Одно из принципиальных отличий SmetaWIZARD от программ конкурентов — возможность работать с документом в том виде, в котором он пойдет на печать. Пользователь легко может настроить программу «под себя» и создавать собственные шаблоны сметных расчетов, а также экспортировать/ импортировать документы из Exсel, буфера обмена и XML формата обмена данными.</p>
    <div class="grid col3-1 gap10">
      <a href="reviews.htm" class="btn1"><span class="material-icons">chat</span> Отзывы о программе</a>
      <a href="questions-and-answers.htm" class="btn1"><span class="material-icons">live_help</span> Вопросы и ответы</a>
      <a href="https://valinta.ru/request" class="btn1" target="_blank"><span class="material-icons">how_to_reg</span> Бесплатный тестовый доступ</a>
    </div>
  </div>
</section>

<section class="section-line">
  <div>
    <h2>Модули SmetaWizard</h2>
    <p class="m-b-20">Для расширения функциональных возможностей сметной программы SmetaWIZARD разработаны дополнительные модули:</p>
    <div class="grid col3-1 gap10 products-list2">
      <a href=""><span class="material-icons">dashboard_customize</span>ПНР - составление смет на пусконаладочные работы</a>
      <a href=""><span class="material-icons">dashboard_customize</span>ПИР - расчет проектно-изыскательских работ и составления проектной документации</a>
      <a href=""><span class="material-icons">dashboard_customize</span>УНЦС - сметный расчет стоимости строительства по государственным укрупненным нормативам цены строительства</a>
      <a href=""><span class="material-icons">dashboard_customize</span>НМЦК - автоматизация расчета начальной максимальной цены контракта</a>
      <a href=""><span class="material-icons">dashboard_customize</span>Дорожный - создание сметной документации по содержанию дорог федерального значения</a>
      <a href=""><span class="material-icons">bolt</span>Энергоаудит - расчет стоимости проведения энергетических обследований</a>
    </div>
  </div>
</section>

<section>
  <div class="details">
    <h2>Дополнительная информация</h2>
    <details>
      <summary>Преимущества</summary>
      <div>
        <ul class="ul1 m-b-30">
          <li>Работа с документом в том виде, в котором он пойдет на печать, интуитивно понятный и удобный интерфейс, возможность контролировать документацию на любом этапе ее формирования;</li>
          <li>Возможность настроить программу «под себя», сохранять и использовать шаблоны настроек/смет/документов/начислений;</li>
          <li>Экспорт/импорт xml ГлавГосЭкспертизы (gge), BIM модели (xml), документов из Excel, arp, импорт контракта из «ЕИС закупки», данных из электронных таблиц через буфер обмена Windows, а также, экспорт в форматы Word, PDF;</li>
          <li>Взаимодействие с популярными BIM-системами через формат xml при использовании BIM WIZARD, экспертиза смет по BIM модели;</li>
          <li>Совместимость с ОС Linux;</li>
          <li>Возможность работы со всеми типами сметно-нормативных баз (Государственные, федеральные, территориальные, укрупненные, отраслевые, ведомственные, персональные) и быстрый поиск по ним;</li>
          <li>Автоматическое составление смет на основе дефектной ведомости, автоматизация проведения конъюнктурного анализа, выпуск всего набора сметной документации, от сводки затрат и ССРСС, до форм КС, М-29, ресурсных смет и др.;</li>
          <li>Низкий входной порог: стоимость ПП от 8000 руб. (включены услуги технической поддержки, удаленные и очные консультации/обучения, гарантия и.</li>
        </ul>
      </div>
    </details>
    <details>
      <summary>Возможности программы</summary>
      <div>
        <p class="m-b-5">При работе со SmetaWIZARD Вы получаете возможность:</p>
        <ul class="ul1 m-b-30">
          <li>Определять сметную стоимость строительства, реконструкции, капитального ремонта, реставрации, сноса объектов капитального строительства, работ по сохранению объектов культурного наследия (памятников истории и культуры) народов Российской Федерации, всеми методами, предусмотренными актуальными нормативными документами и методиками;</li>
          <li>Работать с базами ФЕР (2017, 2020) и ГЭСН (2001, 2020, 2022), УНЦС, ТЕР, ТНЦС, СН, ТСН, ОЕР, СБЦ, Ведомственными сборниками, прейскурантами актуальных редакций и техническими частями к ним, а также, с персональными сборниками расценок и цен. Быстрая система автоматического обновления сметно-нормативных баз на рабочем месте и пересчета сметы в актуальный уровень цен;</li>
          <li>Автоматически создавать формы, предусмотренные актуальными нормативными документами и методиками, а также формы КС-2, КС-3, КС-6а, М-29, исполнительные сметы, ВОР, дефектные ведомости и другие востребованные формы, вывод их в печатные форматы, а также в XML и arp;</li>
          <li>Подключать пакет дополнительных форм и функционала для расчета стоимости по BIM-моделям, ПИР, ПНР, УНЦС, Энергоаудита, составления смет контракта и определения НМЦК а также специализированного модуля для автомобильно-дорожного строительства;</li>
          <li>Осуществлять автоматическую привязку коэффициентов из технических частей сборников расценок, значений коэффициентов индексации и косвенных затрат по видам работ, вести расчет стоимости с применением индексов на СМР/Элементы прямых затрат по письму Минстроя, использование базы преднастроенных коэффициентов дополнительных затрат;</li>
          <li>Работать в локальном, терминальном, сетевом режиме. Возможность использования портативной (flash) версии;</li>
          <li>Одновременно расчитывать смет любой сложности по разделам базисно-индексным и ресурсным методами с использованием разных сметно-нормативных баз;</li>
          <li>Автоматически переводить сметы, рассчитанные базисно-индексным методом, в ресурсный метод и обратно;</li>
          <li>Вести весь проект в рамках одного файла. Все документы проекта динамически и функционально связаны между собой;</li>
          <li>Автоматически получать суммарную стоимость неучтенных материалов и оборудования, собирать стоимости ресурсов, стоимость которых принята по результатам конъюнктурного анализа, возврат материалов, транспортных затрат, распределять стоимости по видам затрат строительства во всей иерархии форм объекта;</li>
          <li>Осуществлять проверку и экспертизу смет на соответствие нормативным показателям из ФРСН, проверку объемов в смете по BIM-модели, определение элементов сметы/модели, не имеющих связи с моделью/сметой.</li>
          <li>И многое другое. С подробным функционалом Вы можете ознакомиться, заказав бесплатную онлайн-презентацию.</li>
        </ul>
      </div>
    </details>
    <details>
      <summary>Системные требования</summary>
      <div>
        <ul class="ul1 m-b-30">
          <li>Операционная система: Windows 7/8/10/11, Linux (Astra, Alt);</li>
          <li>Установочный пакет: Windows Installer (кроме версии SmetaWIZARD Portable);</li>
          <li>WINE (только для ОС Linux);</li>
          <li>Процессор архитектуры х86;</li>
          <li>Видео: XGA 1024×768;</li>
          <li>Оперативная память: не менее 4 Gb;</li>
          <li>Место на жестком диске: не менее 1 Gb. (только для версии SmetaWIZARD);</li>
          <li>USB 2.0;</li>
          <li>Клавиатура, мышь.</li>
        </ul>
      </div>
    </details>
    <details>
      <summary>Комплект поставки</summary>
      <div>
        <ul class="ul1 m-b-30">
          <li>Руководство пользователя (предоставляется только в электронном виде);</li>
          <li>Регистрационная карта на осуществление технической поддержки;</li>
          <li>Лицензионное соглашение и Ограниченная гарантия;</li>
          <li>Компакт-диск с программным продуктом SmetaWIZARD (кроме версии SmetaWIZARD Portable);</li>
          <li>Электронный ключ-диск с программным продуктом SmetaWIZARD (с картой памяти 16 Гб). Карта предоставляется бесплатно и на нее гарантия не распространяется (только для версии SmetaWIZARD Portable);</li>
          <li>Аппаратный защитный ключ (кроме версии SmetaWIZARD Portable);</li>
          <li>Коробка.</li>
        </ul>
      </div>
    </details>
    <details>
      <summary>Материалы и документация по программе</summary>
      <div>
        <ul class="ul1 m-b-30">
          <li><a href="">Руководство пользователя по программе SmetaWIZARD (21 Мб)</a></li>
          <li><a href="">Обучающий видеокурс по программе SmetaWIZARD</a></li>
        </ul>
      </div>
    </details>
    <details>
      <summary>Архив изменений</summary>
      <div>
        <ul class="ul1">
          <li><a href="">Изменения в ПП SW версии 5.1.0.61 сборка от 07.10.2022</a></li>
          <li><a href="">Изменения в ПП SW версии 4.0.8.0 сборка от 11.07.2014</a></li>
        </ul>
      </div>
    </details>
  </div>
</section>

<?php get_footer(); ?>