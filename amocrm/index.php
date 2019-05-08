<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("amoCRM");
?>
<style>
body, h1 {
    background-color: unset !important;
	}
.nav { 
    font-size: 14px  !important;
	}
.nav li:hover .navffff2 {
    z-index: 999;
}
	.main-title{
		font-size: 23px;
	}
</style>

 		<link rel="stylesheet" href="//msk.lapkinlab.ru/bitrix/templates/new_design/css/styles.css">
		<link rel="stylesheet" href="//msk.lapkinlab.ru/bitrix/templates/new_design/css/fontello.css">
		<link rel="stylesheet" href="//msk.lapkinlab.ru/bitrix/templates/new_design/fonts/fonts.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Document CSS -->
	<link rel="stylesheet" href="/amocrm/css/style.css">

	<!--  Слайдер  -->
	<section class="amocrm-top"><div class="amocrm-top__slider slider-top" id="top-slider">


    <div class="amocrm-top__slide amocrm-top__slide-1">
<div class="container">
  <div class="amocrm-top__wrap">
      <div class="desc-1" id="desc-1-1"><span class="desc-1__unvisible">Контролируйте скорость обработки заявок и конверсию продаж с amoCRM</span></div>
      <div class="desc-1__sub">Выжимайте из отдела продаж максимум</div>
  </div>
</div>
</div>        
    <div class="amocrm-top__slide amocrm-top__slide-2">
<div class="container">
  <div class="amocrm-top__wrap">
      <div class="desc-1" id="desc-1-2"><span class="desc-1__unvisible">Перестаньте терять клиентов из-за забывчивости менеджеров и дыр в воронке продаж</span></div>
      <div class="desc-1__sub">Контролируйте и корректируйте все показатели, не вставая с кресла</div>
  </div>
</div>
</div>        
    <div class="amocrm-top__slide amocrm-top__slide-3">
<div class="container">
  <div class="amocrm-top__wrap">
      <div class="desc-1" id="desc-1-2"><span class="desc-1__unvisible">Повышайте число дополнительных продаж с цифровой воронкой</span></div>
      <div class="desc-1__sub">Подогревайте клиентов на автопилоте</div>
  </div>
</div>
</div>  </div>
</section><!--  /Слайдер -->
<!-- Форма -->
<section class="section-form">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
					<h1 style="display:none;">Внедрение amoCRM под ключ</h1>
                    <div class="form-title">Хотите продавать больше?</div>
                </div>
                <div class="col-md-12">
                        <form action="/mail_post.php" method="post" class="form" id="form2">
                            <div class="container-fluid">
                                    <div class="row">
                                            <div class="col-xl-4 col-sm-12">
                                              <input type="text" name="your-name" class="form-control" placeholder="Имя" required>
                                            </div>
                                            <div class="col-xl-4 col-sm-12">
                                              <input type="tel" name="your-phone" class="form-control" placeholder="Телефон" required>
                                            </div>
								<p style="display:none;"><input type="text" name="name" value=""></p>
                                            <div class="col-xl-4 col-sm-12">
                                                <div class="row">
                                                        <div class="col-xl-6 col-sm-12">
                                                                <button type="submit" class="btn form-btn">Хочу!</button>
                                                        </div>
                                                        <div class="col-xl-6 col-sm-12">
                                                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfTqL6tOA92Y3SRrYWDoJ7wWNHEr-DFMXv6YWUgaY6DhBRmkw/viewform" target="_blank" class="btn form-btn">Заполнить бриф</a>
                                                        </div>
                                                </div>
                                                    
                                            </div>
                                          </div>
                            </div>
                            
                        </form>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Второй блок -->
    <section class="section-block section-two">
        <div class="section-row">            
            <div class="section-row__block">
                <div class="section-two__block">
                        <div class="main-title main-title_blue">Основные термины</div>
                        <ul class="main-list">
                            <li class="main-list__item"><span class="item-span">Лид</span> - потенциальный клиент, проявивший интерес к продукту</li>
                            <li class="main-list__item"><span class="item-span">Лидогенерация</span> - процесс создания лидов</li>
                            <li class="main-list__item"><span class="item-span">Лидменеджмент</span> - доведение лида до покупки</li>
                        </ul>
                        <p class="paragraph">Задача CRM-системы - автоматизировать лидменеджмент, тем самым сократив его себестоимость и повысив конверсию.</p>
                </div>
                <div class="section-two__block">
                    <div class="main-title main-title_blue">Виды CRM-систем</div>
                    <p class="paragraph">По целям:</p>
                    <ul class="main-list">
                            <li class="main-list__item">Для автоматизации программ лояльности</li>
                            <li class="main-list__item">Для управления проектами</li>
                            <li class="main-list__item main-list__item_arrow-one">Для отделов продаж (учёт сделок,<br class=none> клиентов, продаж)</li>
                        </ul>
                        <p class="paragraph">По типу внедрения:</p>
                        <ul class="main-list">
                                <li class="main-list__item">Требующие внедрения</li>                                
                                <li class="main-list__item main-list__item_arrow-two">Само внедряемые</li>
                            </ul>    
                </div>                
            </div>
            <div class="section-row__block section-row__block_white">
                    <div class="section-two__block section-two__block_black-text">
                            <div class="main-title main-title_blue">Преимущества <span class="span-title">amo</span>CRM</div>
                            <p class="paragraph paragraph_pdn">Специализация на универсальных задачах отделов продаж:</p>
                            <ul class="main-list main-list_right">
                                <li class="main-list__item">уникальная Digital воронка;</li>
                                <li class="main-list__item">автоматизация процесса лидогенерации и учёта лидов;</li>
                                <li class="main-list__item">универсальная воронка продаж;</li>
                                <li class="main-list__item">управление менеджерами по продажам;</li>
                                <li class="main-list__item">единый источник получения всех статистических данных по продажам;</li>
                                <li class="main-list__item">гибкий API: возможность любых доработок системы;</li>
                                <li class="main-list__item">работа с покупателями;</li>
                            </ul>
                            <p class="paragraph">Простота внедрения и интуитивно понятный интерфейс</p>
                            <p class="paragraph">Лёгкая интеграция с большинством популярных сервисов</p>
                    </div>
            </div>
        </div>
    </section>

    <!-- третий блок -->
    <section class="section-three">
        <div class="section__title section__title_blue section__title_section-three">Рабочий стол</div>
        <p class="section-three__paragraph">Отслеживайте текущую ситуацию по каждому этапу воронки продаж, краткую анатилику по задачам и менеджерам, а также прогноз продаж.</p>
    </section>

    <!-- Четвертый блок -->
    <section class="section-block section-four">
            <div class="section-row">
                    <div class="section-row__block section-row__block_light">
                            <div class="section__title section__title_blue">Воронка <br>продаж</div>
                            <p class="paragraph paragraph__image">это последовательность этапов, которые будет проходить потенциальный клиент прежде, чем он у нас купит или откажется от покупки</p>
                            <ul class="main-list">
                                    <li class="main-list__item"><span class="item-span">Упрощает процесс продажи:</span> на каждом этапе менеджер продаёт только следующий этап воронки, а не весь продукт/услугу. </li>
                                    <li class="main-list__item"><span class="item-span">Помогает расставить приоритеты:</span> больше ресурсов на правую часть воронки.</li>
                                    <li class="main-list__item"><span class="item-span">Точнее данные</span> для контроля и прогноза результата (видим на каком этапе находится каждый клиент)</li>
                                    <li class="main-list__item"><span class="item-span">Позволяет определять события</span> (триггеры), по которым клиенты переходят из одного этапа в другой, и устанавливать оптимальное время нахождения клиента на каждом этапе воронки.</li>
                                </ul>
                                       
                    </div>
                    <div class="section-row__block section-row__block_deep-blue">
                        <div class="lidgen-wrapper">
                                <div class="lidgen">
                                        <div class="lidgen__block">
                                            <div class="lidgen__image">
                                                <img src="img/1-1.jpg" alt="">
                                            </div>
                                            <div class="lidgen__text">
                                                <p>Первый контакт</p>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="line">
                                        <div class="line__text">
                                            <p>Отправили КП</p>
                                        </div>
                                        <div class="line__image">
                                            <img src="img/line.jpg" alt="">
                                        </div>
                                        <div class="line__picture">
                                            <img src="img/6-6.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="lidgen">
                                            <div class="lidgen__block">
                                                <div class="lidgen__image">
                                                    <img src="img/2-2.jpg" alt="">
                                                </div>
                                                <div class="lidgen__text">
                                                    <p>Изучает КП</p>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="line">
                                            <div class="line__text">
                                                <p>Получена ОС</p>
                                            </div>
                                            <div class="line__image">
                                                <img src="img/line.jpg" alt="">
                                            </div>
                                            <div class="line__picture">
                                                <img src="img/7-7.jpg" alt="">
                                            </div>
                                        </div>  
                                        <div class="lidgen">
                                                <div class="lidgen__block">
                                                    <div class="lidgen__image">
                                                        <img src="img/3-3.jpg" alt="">
                                                    </div>
                                                    <div class="lidgen__text">
                                                        <p>Переговоры</p>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="line">
                                                <div class="line__text">
                                                    <p>Подписание договора</p>
                                                </div>
                                                <div class="line__image">
                                                    <img src="img/line.jpg" alt="">
                                                </div>
                                                <div class="line__picture">
                                                    <img src="img/8-8.jpg" alt="">
                                                </div>
                                            </div> 
                                            <div class="lidgen">
                                                    <div class="lidgen__block">
                                                        <div class="lidgen__image">
                                                            <img src="img/4-4.jpg" alt="">
                                                        </div>
                                                        <div class="lidgen__text">
                                                            <p>Договор подписан</p>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="line">
                                                    <div class="line__text">
                                                        <p>Выставлен счёт</p>
                                                    </div>
                                                    <div class="line__image">
                                                        <img src="img/line.jpg" alt="">
                                                    </div>
                                                    <div class="line__picture">
                                                        <img src="img/9-9.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="lidgen">
                                                        <div class="lidgen__block">
                                                            <div class="lidgen__image">
                                                                <img src="img/5-5.jpg" alt="">
                                                            </div>
                                                            <div class="lidgen__text">
                                                                <p>Оплачен счёт</p>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    
                        </div>
                             
                    </div>
                </div>
    </section>

    <!-- Пятый блок -->
    <section class="section-five">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                        <div class="section__title section__title_blue section__title_five">Воронка<br> продаж <br>в <span class="span-title">amo</span>CRM </div>
                </div>
                <div class="col-lg-7 col-md-12">
                        <ul class="main-list main-list_five">
                                <li class="main-list__item main-list__item_five">настраивайте воронку продаж самостоятельно под свои задачи</li>
                                <li class="main-list__item main-list__item_five">Добавляйте, называйте и меняйте местами этапы своей воронки </li>
                                <li class="main-list__item main-list__item_five">Настраивайте автоматический переход от этапа к этапу или переносите клиентов на другой этап вручную</li>
                                <li class="main-list__item main-list__item_five">Помечайте разными цветами каждый этап </li>
                            </ul>
                </div>
            </div>
        </div>        
        <div class="section-five__block">
            <div class="section-five__image">
                <img src="img/4.jpg" alt="">
            </div>
        </div>   
        </section>

        <!-- Шестой блок -->
        <section class="section-five">
                <div class="section__title section__title_blue">Настройка прав <br> пользователей </div>  
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-5 col-md-12">
                                <ul class="main-list main-list_section-six">
                                        <li class="main-list__item">Настраивайте права пользователей аккаунта (ваших коллег и сотрудников) как индивидуально (на каждого сотрудника), так и на группы (отделы) в любых сочетаниях режимов видимости и редактирования</li>
                                        <li class="main-list__item">Если ваш сотрудник уволился, вы легко можете удалить его из системы </li>
                                        <li class="main-list__item">При удалении amoCRM автоматически предложит Вам перенести всю информацию на другого менеджера</li>
                                        
                                    </ul>
                        </div>
                        <div class="col-lg-7 col-md-12">
                                <div class="section-five__image">
                                        <img src="img/5.jpg" alt="">
                                    </div>
                        </div>
                    </div>
                </div>
            </section>

        <!-- Седьмой блок -->    
        <section class="section-seven">
                <div class="section__title section__title_white">Digital воронка </div>
                <p class="paragraph paragraph_seven-white">amoCRM сама умеет утеплять заявки и доводить их до покупки. Система сама напишет письмо от имени менеджера, сама сменит статус сделки при наступлении того или иного события, сама уведомит вас и поставит задачу, сама подпишет или отпишет клиента от листа рассылки, а также будет каждому клиенту показывать индивидуальную рекламу на разных этапах продажи.</p>
                <div class="section-seven__image">
                        <img src="img/6.png" alt="">
                    </div>
            </section> 

            <!-- Восьмой блок -->
            <section class="section-seven">                    
                    <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
                                        <div class="section__title section__title_white section__title_seven">Все письма в <span class="span-title">amo</span>CRM </div>
                                        <p class="paragraph paragraph_eight-white">Ведите всю переписку прямо в amoCRM - пишите письма, создавайте типовые шаблоны и на их основе отправляйте письма и планируйте автоматическую рассылку. Подключайте неограниченное количество ящиков: общих, корпоративных или личных, и ваша переписка отобразится в amoCRM с учётов прав доступа. При этом на каждое новое письмо от клиента amoCRM автоматически создаст новую сделку и сохранит всю историю переписки.</p>    
                                </div>
                                <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
                                        <div class="section-five__image">
                                                <img src="img/7.png" alt="">
                                            </div>
                                </div>
                            </div>
                        </div>
                </section> 

                <!-- Девятый блок -->
                <section class="section-seven">
                        <div class="section__title section__title_white">Интеграция с сайтом </div>
                        <p class="paragraph paragraph_seven-white">Подключение специальных виджетов избавит вас от необходимости вручную переносить лиды и контакты в систему! Создавайте специальные формы на вашем сайте. После заполнения их клиентом контакт или сделка будут автоматически попадать в amoCRM.</p>
                        <div class="section-seven__image">
                                <img src="img/8.jpg" alt="">
                            </div>
                    </section> 
    
    <!-- Десятый блок -->                
    <section class="section-ten">
            <div class="section__title section__title_no-pdn">Интеграция с вашей <br> телефонией</div>
            <p class="paragraph paragraph_ten">amoCRM станет незаменимым помощником в совершении и переадресации звонков. С ее помощью вы сможете "помнить" имена всех ваших клиентов. В программе хранится вся статистика ваших входящих и исходящих звонков. И самое интересное - настройки всего этого не требуют никаких усилий или технических знаний.</p>
    </section>  
    
    <!-- Одиннадцатый блок -->
    <section class="section-eleven">
            <div class="section__title section__title_pdn">Задачи и напоминания</div>
            <p class="paragraph paragraph_eleven">amoCRM помогает следить за тем, чтобы по каждой сделке было запланировано действие. Если задачи не поставлены - система сигнализирует об этом. Конечно, нет ничего проще, чем поставить задачу в amoCRM - вы указываете когда, кому и что надо выполнить, а системные напоминания никогда не дадут забыть о поставленной задаче.</p>
    </section>

   <!-- Двенадцатый блок -->
    <section class="section-twelve">
            <div class="section__title section__title_blue section__title_twelve">Аналитика</div>
            <p class="paragraph paragraph_twelve">В amoCRM предусмотрены диаграммы распределения всех сделок по статусам воронки продаж, менеджерам или другом удобном для вас разрезе. Вы можете увидеть все значимые данные на одном экране или углубиться в анализ ситуации по конкретному менеджеру или сделке.</p>
    </section> 
    
    <!-- Тринадцатый блок -->
    <section class="section-thirteen">
            <div class="container-fluid">
                <div class="row">
                        <div class="hidden-desktop col-md-12">
                                <div class="section-thirteen__title">Аналитика <br>по воронке</div>
                                <p class="paragraph section-thirteen__paragraph">Аналитика по воронке продаж позволит увидеть на каких этапах вы теряете клиентов и предоставит достаточное количество данных, чтобы принять верные управленческие решения.</p>
                            </div>
                        <div class="col-xl-7 col-md-12">
                                <div class="section-thirteen__image">
                                    <img src="img/11-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 hidden-mobile">
                                <div class="section-thirteen__title">Аналитика <br>по воронке</div>
                                <p class="paragraph section-thirteen__paragraph">Аналитика по воронке продаж позволит увидеть на каких этапах вы теряете клиентов и предоставит достаточное количество данных, чтобы принять верные управленческие решения.</p>
                            </div>
                </div>
                 
            </div>
    </section>  
    
    <!-- Четырнадцатый блок -->
    <section class="section-fourteen">
            <div class="section-fourteen__title">Аналитика по сотруднику</div>
            <p class="paragraph section-fourteen__paragraph">Аналитика по каждому сотруднику покажет успехи, проблемные зоны и загруженность по каждому сотруднику - во всех деталях.</p>
    </section> 
    
    <!-- Пятнадцатый блок -->
    <section class="section-fifteen">
            <div class="section-fifteen__title">Аналитика по целям</div>
            <p class="paragraph section-fifteen__paragraph">Аналитика по целям позволяет поставить KPI сотрудников, отделов и компании в целом и в реальном времени видеть, кто и как приближает компанию к ключевым показателям.</p>
            <div class="section-fifteen__image">
                <img src="img/13.jpg" alt="">
            </div>
    </section>

    <!-- Шестнадцатый блок -->
    <section class="section-sixteen">
            <div class="section__title section__title_pdn">API, расширения <br> и виджеты</div>
            <p class="paragraph paragraph_ten paragraph_sixteen">Экономьте время ваших специалистов - сделайте работу с amoCRM привычной и комфортной. Ведь в amoCRM есть десятки готовых интеграций, с помощью которых можно в два клика создать email-рассылки, интегрировать систему с телефонией, хранить файлы в удобном облачном хранилище Dropbox и многое другое. А благодаря открытому API вы можете изменить интерфейс под себя, создать собственные виджеты, чтобы расширить возможности amoCRM.</p>
    </section>
    
    <!-- Семнадцатый блок -->
    <section class="section-seventeen">
            <div class="container-fluid">
                <div class="row">
                        <div class="col-xl-7 col-md-12">                                
                                        <div class="section__title section__title_seventeen">Сканер визиток</div>
                                        <p class="paragraph section-seventeen__paragraph">Мобильное приложение amoCRM научилось распознавать визитки. Все, что нужно -  скачать приложение amoCRM, запустить его, взять визитку и нажать на кнопку "распознавание". amoCRM создаст карточку сделки, внесет все контактные данные, данные о компании и сохранит запись в базе.</p>
                                        <p class="paragraph section-seventeen__paragraph">Вам потребуется буквально несколько минут, чтобы оцифровать стопку новых визиток после очередной конференции. но самое главное, вы не потеряете ни одного потенциального клиента - самого ценного клиента, с которым вы пообщались лично, пожали друг другу руки, обменялись контактами. Визитки это здорово, а с amoCRM еще и удобно!</p>
                                    
                                
                            </div>
                            <div class="col-xl-5 col-md-12">
                                    <div class="section-seventeen__image">
                                            <img src="img/15.png" alt="">
                                    </div>
                                    
                            </div> 
                </div>
            </div>
    </section> 

    <!-- ОВосемнадцатый блок -->
    <section class="section-eighteen">
            <div class="container-fluid">
                <div class="row">
                        <div class="col-md-7 col-sm-12">                                
                                        <div class="section__title section__title_eighteen">Iphone и Android</div>
                                        <p class="paragraph section-eighteen__paragraph">С мобильными приложениями amoCRM можно работать где и когда вам удобно. Приложения работают онлайн и позволяют просматривать актуальные данные без задержек. Но самое главное - теперь все функции веб-версии доступны в вашем телефоне!</p>
                                        <div class="content-block__links mobile-app-links">
                                                <a href="https://itunes.apple.com/ru/app/amocrm-2.0/id1128315486?mt=8" target="_blank" class="mobile-app-links_item icon icon-appstore-ru"></a>
                                                <a href="https://play.google.com/store/apps/details?id=com.amocrm.amocrmv2" target="_blank" class="mobile-app-links_item icon icon-google-play-ru"></a>
                                            </div>
                            </div>                             
                </div>
            </div>
    </section> 

    <!-- Девятнадцатый блок -->
    <section class="section-nineteen">
            <div class="section__title section__title_pdn">Кастомизируемая <br>карточка сделки</div>
            <p class="paragraph paragraph_ten paragraph_sixteen">amoCRM сама умеет создавать портрет вашего покупателя на основе полной статистики по каждому клиенту и всех обращений в компанию. В карточке по-прежнему фиксируется любое изменение, а обновленная лента событий тесно интегрирована с внутренними и внешними сообщениями. Но самое главное - карточку можно дорабатывать, добавлять свои блоки и подстаивать под себя.</p>
    </section> 
    
    <!-- Двадцатый блок -->
    <section class="section-twenty">
            <div class="section__title section__title_twenty">Платформа amoCRM</div>
            <div class="container-fluid">
                <div class="row">
                        <div class="col-xl-6 col-md-12">                           
                            <p class="paragraph section-twenty_paragraph">Больше не нужны дополнительные приложения для общения с коллегами - теперь вы можете общаться прямо в amoCRM! И самое главное, всё это интегрировано с карточкой клиента. Ваш коллега сразу же получит уведомление на телефон и внутри аккаунта, перейдёт в карточку и сможет ответить. А если такой возможности нет, то в центре нотификаций можно прочесть все уведомления из разных источников. И да, все отлично работает на iPhone и Android.</p>
                        </div>  
                        <div class="col-xl-6 col-md-12">
                            <div class="section-twenty__iamge">
                                <img src="img/17.jpg" alt="">
                            </div>
                        </div> 
                </div>
            </div>
    </section> 

    <!-- Двадцать первый блок -->
    <section class="section-twentyone">
            <div class="section__title section__title_twenty">Бесплатные<br> пользователи</div>
            <div class="container-fluid">
                <div class="row">
                        <div class="col-xl-6 col-md-12">                           
                            <p class="paragraph section-twenty_paragraph">Теперь вы сможете переписываться с любым человеком прямо в amoCRM и не важно есть у него доступ или нет. Указываете любой email, и ваш коллега получает приглашение, переходит в карточку и может общаться с вами - все просто и удобно.</p>
                            <p class="paragraph section-twenty_paragraph section-twenty_paragraph-nopdn">Самое интересное: всё это абсолютно бесплатно.</p>
                        </div>  
                        <div class="col-xl-6 col-md-12">
                            <div class="section-twenty__iamge">
                                <img src="img/18.jpg" alt="">
                            </div>
                        </div> 
                </div>
            </div>
    </section> 

    <!-- Двадцать второй блок -->
    <section class="section-twenty">
            <div class="section__title section__title_twenty">Уникальный <br>salesbot</div>
            <div class="container-fluid">
                <div class="row">
                        <div class="col-xl-6 col-md-12">                           
                            <p class="paragraph section-twenty_paragraph">Больше не нужны дополнительные приложения для общения с коллегами - теперь вы можете общаться прямо в amoCRM! И самое главное, всё это интегрировано с карточкой клиента. Ваш коллега сразу же получит уведомление на телефон и внутри аккаунта, перейдёт в карточку и сможет ответить. А если такой возможности нет, то в центре нотификаций можно прочесть все уведомления из разных источников. И да, все отлично работает на iPhone и Android.</p>
                        </div>  
                        <div class="col-xl-6 col-md-12">
                            <div class="section-twenty__iamge">
                                <img src="img/19.jpg" alt="">
                            </div>
                        </div> 
                </div>
            </div>
    </section>   

    <!-- Двадцать третий блок -->
    <section class="section-twentytwo">
            <div class="section__title section__title_white">Покупатели и воронка<br> покупателей </div>
            <p class="paragraph paragraph_seven-white paragraph_twentytwo">Воронка покупателей создана для работы с постоянными клиентами. Теперь вы можете видеть покупателей, которым пора вернуться и купить, и тех, кто припозднился. Вы можете в нужный момент напомнить клиенту о себе - позвонить, отправить смс или написать сообщение. Воронка покупателей идеально подходит бизнесам по подписке.</p>
            <div class="section-seven__image">
                    <img src="img/20.png" alt="">
                </div>
        </section>

        <!-- Двадцать четвертый блок -->
        <section class="section-twentythree">
                <div class="section__title section__title_white">Digital воронка<br> покупателя </div>
                <p class="paragraph paragraph_seven-white paragraph_twentytwo">amoCRM сама возвращает клиентов и доводит их до повторной покупки. Система сделает всё, чтобы случайный посетитель стал постоянным покупателем, сама проследить когда покупателю пришло время совершить покупку, сама напишет письмо или другое сообщение от имени менеджера, покажет персональную рекламу в нужный момент, поставит задачу связаться с клиентом и многое другое.</p>
                <div class="section-seven__image">
                        <img src="img/21.jpg" alt="">
                    </div>
            </section>

            <!-- Двадцать пятый блок -->
            <section class="section-block section-two">
                    <div class=" section-row section-row_two"> 
                        <div class="section-row__block section-row__block_left">
                                <div class="section__title section__title_price">Цены и тарифы</div> 
                            <div class="section-two__block section-two__block_black section-two__block_black-one">
                                <div class="price-block">
                                    <h2 class="price-block__title">Базовый</h2>
                                    <div class="price-block__cost">
                                        <p>499</p>
                                        <div class="image">
                                                <img src="img/icon_rub.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <p class="paragraph">Для больших компаний с небольшим отделом продаж</p>                                    
                                    <ul class="main-list main-list_nopdn">
                                        <li class="main-list__item main-list__item_icon">Создание сделок и контактов</li>
                                        <li class="main-list__item main-list__item_icon">Интеграция с сайтом и Google Universal</li>
                                        <li class="main-list__item main-list__item_icon">Поиск и объединение дубликатов</li>
                                            <li class="main-list__item main-list__item_icon">Настройка этапов продаж и работа с воронкой</li>
                                    </ul>
                            </div>
                            <div class="section-two__block section-two__block_black section-two__block_black-two">
                                    <div class="price-block">
                                        <h2 class="price-block__title">Расширенный</h2>
                                        <div class="price-block__cost">
                                            <p>999</p>
                                            <div class="image">
                                                    <img src="img/icon_rub.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="paragraph">Для тех, кто хочет оптимизировать конверсию</p>                                    
                                        <ul class="main-list main-list_nopdn">
                                            <li class="main-list__item main-list__item_icon">Бизнес процессы с автоматическим созданием задач</li>
                                            <li class="main-list__item main-list__item_icon">Обязательность заполнения полей</li>
                                            <li class="main-list__item main-list__item_icon">KPI и план продаж для менеджеров</li>
                                                <li class="main-list__item main-list__item_icon">Возможность доработки рабочего стола</li>
                                        </ul>
                                </div>
                                <div class="section-two__block section-two__block_black section-two__block_black-three">
                                        <div class="price-block">
                                            <div class="price-block__title">Профессиональный</div>
                                            <div class="price-block__cost">
                                                <p>1 499</p>
                                                <div class="image">
                                                        <img src="img/icon_rub.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <p class="paragraph">Для тех, кто занимается обработкой большого количества лидов</p>                                    
                                            <ul class="main-list main-list_nopdn">
                                                <li class="main-list__item main-list__item_icon">Скоринг лидов</li>
                                                <li class="main-list__item main-list__item_icon">Периодический данных с отправкой архива на почту</li>
                                            </ul>
                                    </div>
                        </div>
                        <div class="section-row__block section-row__block_white section-row__block_right">
                                <div class="section-two__block section-two__block_new section-two__block_first">
                                        <div class="price-block__title price-block__title_white">Пакет <br> Микро-Бизнес</div>  
                                        <p class="paragraph paragraph_white">Для тех, кто только открыл свой бизнес и начинает привлекать своих первых клиентов</p> 
                                        <div class="block-price">
                                            <div class="block-price__cost">4 990</div>
                                            <div class="block-price__text">
                                                <p class="par">руб/год</p>
                                                <p class="par">за 2 пользователей</p>
                                            </div>
                                        </div>
                                </div>
                                <div class="section-two__block section-two__block_new">
                                        <div class="price-block__title price-block__title_white">Пакет <br> Старт-ап</div>  
                                        <p class="paragraph paragraph_white">Для молодого бизнеса, где все вокруг друзья и не нужен контроль сотрудников</p> 
                                        <div class="block-price">
                                            <div class="block-price__cost">14 990</div>
                                            <div class="block-price__text">
                                                <p class="par">руб/год</p>
                                                <p class="par">за 5 пользователей</p>
                                            </div>
                                        </div>
                                </div>
                        </div>
                    </div>
                </section>  

                <!-- Двадцать шестой блок -->
                <section class="section-last">
                        <div class="main-title main-title_blue">УСЛУГИ ПО ВНЕДРЕНИЮ <span class="span-title">amo</span>CRM ДЛЯ ВАШЕГО БИЗНЕСА</div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-6 col-md-12">
                                        <h2 class="main-title main-title_little">amoCRM-стандарт:</h2>
                                        <ul class="main-list main-list_white">
                                                <li class="main-list__item">Презентация amoCRM клиенту в офисе или в онлайн-режиме</li>
                                                <li class="main-list__item">Обучение работе с amoCRM, аттестация персонала</li>
                                                <li class="main-list__item">Интеграция с почтой, телефонией и заявками с сайта в amoCRM</li>
                                                    <li class="main-list__item">Настройка воронки продаж</li>
                                                    <li class="main-list__item">Digital — маркетинг (автоматическая интеграция рекламы в соц.сетях (Facebook, Вконтакте) с воронкой продаж amoCR</li>
                                                    <li class="main-list__item">Создание групп пользователей, настройка прав, разграничение видимости клиентской базы)</li>
                                                    <li class="main-list__item">Настройка аккаунта в amoCRM под специфику Вашего бизнеса (персонификация полей, фильтры, дополнительные обозначения)</li>
                                            </ul>
                                            <h2 class="main-title main-title_little main-title_little-white">Стоимость:</h2>
                                            <ul class="main-list main-list_white">
                                                    <li class="main-list__item">от 55 000р. (для Москвы и городов-миллионников);</li>
                                                    <li class="main-list__item">от 37 000р. (для небольших городов).</li>
                                                    
                                                </ul>
                                                <h2 class="main-title main-title_little">amoCRM - консалтинг:</h2>
                                                <ul class="main-list main-list_white">
                                                        <li class="main-list__item">Аудит отдела продаж.</li>
                                                        <li class="main-list__item">Построение отдела продаж.</li>
                                                        <li class="main-list__item">Разработка системы мотивации, бизнес-процессов продажи, обучение персонала.</li>
                                                            <li class="main-list__item">Разработка инструментов продаж (маркетинг-кит, КП, каталоги).</li>
                                                            <li class="main-list__item">Создание скриптов, модулей, сценариев работы, корпоративной книги продаж.</li>
                                                            
                                                    </ul>
                                                    <h2 class="main-title main-title_little main-title_little-white">Стоимость: <span class="thin">зависит от объема работ и рассчитывается индивидуально.</span></h2>
                                </div>
                                <div class="col-xl-6 col-md-12">
                                        <h2 class="main-title main-title_little">amoCRM — интернет-продвижение:</h2>
                                        <ul class="main-list main-list_white">
                                                <li class="main-list__item">Создание сайтов, Landing page</li>
                                                <li class="main-list__item">Рекламные кампании</li>
                                                <li class="main-list__item">SEO-продвижение сайт</li>
                                            </ul>
                                            <h2 class="main-title main-title_little main-title_little-white">Стоимость: <span class="thin">зависит от объема работ и рассчитывается индивидуально.</span></h2>
                                            <h2 class="main-title main-title_little">amoCRM — IT-проект:</h2>
                                            <ul class="main-list main-list_white">
                                                    <li class="main-list__item">Сквозная аналитика каналов продаж, колтрекинг, подсчет ROI</li>
                                                    <li class="main-list__item">Интеграция с 1С-бухгалтерией.</li>
                                                    <li class="main-list__item">Интеграция с программами по управлению складом и логистикой.</li>
                                                    <li class="main-list__item">Интеграция со службой технической поддержки.</li>
                                                    <li class="main-list__item">Интеграция с сервисами аналитики.</li>
                                                    <li class="main-list__item">Программирование индивидуальных отраслевых решений и настройка amoCRM под них.</li>
                                                        
                                                </ul>
                                                <h2 class="main-title main-title_little main-title_little-white">Стоимость: <span class="thin">зависит от объема работ и рассчитывается индивидуально.</span></h2>                  
                                                 
                                </div>
                            </div>
                        </div>    
        </section> 
        <!--  Слайдер  -->
<section class="amocrm-top"><div class="amocrm-top__slider slider-top" id="top-slider2">
    
      
    <div class="amocrm-top__slide amocrm-top__slide-1">
<div class="container">
  <div class="amocrm-top__wrap">
      <div class="desc-1" id="desc-2-1"><span class="desc-1__unvisible">Контролируйте скорость обработки заявок и конверсию продаж с amoCRM</span></div>
      <div class="desc-1__sub">Выжимайте из отдела продаж максимум</div>
  </div>
</div>
</div>        
    <div class="amocrm-top__slide amocrm-top__slide-2">
<div class="container">
  <div class="amocrm-top__wrap">
      <div class="desc-1" id="desc-2-2"><span class="desc-1__unvisible">Перестаньте терять клиентов из-за забывчивости менеджеров и дыр в воронке продаж</span></div>
      <div class="desc-1__sub">Контролируйте и корректируйте все показатели, не вставая с кресла</div>
  </div>
</div>
</div>        
    <div class="amocrm-top__slide amocrm-top__slide-3">
<div class="container">
  <div class="amocrm-top__wrap">
      <div class="desc-1" id="desc-2-3"><span class="desc-1__unvisible">Повышайте число дополнительных продаж с цифровой воронкой</span></div>
      <div class="desc-1__sub">Подогревайте клиентов на автопилоте</div>
  </div>
</div>
</div>  </div>
</section><!--  /Слайдер -->
<!-- Форма -->
<section class="section-form">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-title">Хотите продавать больше?</div>
                </div>
                <div class="col-md-12">
                        <form action="/mail_post.php" method="post" class="form" id="form2">
                            <div class="container-fluid">
                                    <div class="row">
                                            <div class="col-xl-4 col-sm-12">
                                              <input type="text" name="your-name" class="form-control" placeholder="Имя" required>
                                            </div>
                                            <div class="col-xl-4 col-sm-12">
                                              <input type="tel" name="your-phone" class="form-control" placeholder="Телефон" required>
                                            </div>
								<p style="display:none;"><input type="text" name="name" value=""></p>
                                            <div class="col-xl-4 col-sm-12">
                                                <div class="row">
                                                        <div class="col-xl-6 col-sm-12">
                                                                <button type="submit" class="btn form-btn">Хочу!</button>
                                                        </div>
                                                        <div class="col-xl-6 col-sm-12">
                                                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfTqL6tOA92Y3SRrYWDoJ7wWNHEr-DFMXv6YWUgaY6DhBRmkw/viewform" target="_blank" class="btn form-btn">Заполнить бриф</a>
                                                        </div>
                                                </div>
                                                    
                                            </div>
                                          </div>
                            </div>
                            
                        </form>
                </div>
                
            </div>
        </div>
    </section>
        <script src="/amocrm/js/jquery.js"></script>
        <script src="/amocrm/js/slick.js"></script>
        <script src="/amocrm/js/custom.js"></script>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>