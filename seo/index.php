<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "SEO-аудит сайта | Заказать поисковый аудит сайта в Москве");
$APPLICATION->SetPageProperty("description", "Профессиональный SEO аудит сайта - цены от 10 000 рублей &#8730; срок от 2 рабочий дней &#8730;. Заказать проведение комплексного поискового СЕО аудита веб-сайта для продвижения в Москве и всей России");
$APPLICATION->SetTitle("SEO-аудит сайта");

$APPLICATION->AddChainItem($APPLICATION->GetTitle(), $APPLICATION->GetCurDir());
?>

<section class="page page-seo">
    <div class="container">
	    <div class="row">
			<h1 class="col-12"><?= $APPLICATION->GetTitle() ?></h1>

    		<div class="col-md-6">
    			<p>Для обеспечения тщательного анализа сайта в рамках определения технических и поисковых ошибок принято проводить SEO-аудит. Эта процедура повышает качество ресурса, обеспечивает удобство пользователей и способствует положительному восприятию со стороны поисковых систем.</p>
			    <p>Наша компания предлагает выполнить SEO-аудит по лучшим ценам в Москве. Эта услуга позволит определить:</p>
			    <ul>
				    <li>готовность ресурса к продвижению;</li>
				    <li>препятствия, которые мешают более успешному ранжированию;</li>
				    <li>причины, по которым пользователи отказываются покупать товары на сайте.</li>
			    </ul>
			    <p>Подобный анализ позволяет определить основные проблемы ресурса и проверить его с учетом требований поисковых систем. На основании данных анализа наши клиенты получают квалифицированную консультацию специалистов.</p>
		    </div>

            <div class="col-md-6">
                <img src="seo-audit.png" class="img-fluid" alt="seo-audit">
		    </div>

            <div class="col-12">
			    <h2>Задачи аудита </h2>
			    <ul>
				    <li>исправление найденных ошибок и технических недочетов для повышения конверсии;</li>
				    <li>получение заключения эксперта относительно качества продвижения ресурса. </li>
			    </ul>

                <h2>Основные этапы</h2>
			    <h3><?= renderSprite('check-mark') ?> Анализ рынка и конкурентов</h3>
			    <p>Наши специалисты тщательно изучают нишу, в которой работает заказчик. Мы также выполняем оценку конкурентов, анализируем данные метрик и определяем потенциал конкретного ресурса.</p>
			    <h3><?= renderSprite('check-mark') ?> Технический аудит</h3>
                <p>На этом этапе выполняется проверка качества работы сайта: скорости загрузки страниц и корректности их индексации. Наши специалисты определяют некачественные и дублированные страницы, а также выполняют проверку кода на валидность. На основании выполненной проверки мы предоставляем рекомендации относительно оптимальных способов устранения найденных проблем.</p>
			    <h3><?= renderSprite('check-mark') ?> Коммерческий аудит</h3>
                <p>SEO-аудит также предусматривает проверку коммерческих факторов, которые могут повлиять на ранжирование сайта в поисковиках. В ходе коммерческого аудита наши специалисты оценивают удобства навигации и размещения основных блоков сайта. Полученные данные дополнительно сравниваются с показателями конкурентов.</p>
			    <h3><?= renderSprite('check-mark') ?> Проверка контента</h3>
                <p>На этом этапе выполняется оптимизация контента под семантическое ядро и проверка его уникальности. Также проводится анализ мета-тегов и заголовков.</p>
			    <h3><?= renderSprite('check-mark') ?> Анализ внешней оптимизации</h3>
			    <p>Одним из важнейших этапов считается оценка внешней оптимизации, предусматривающая анализ ссылок и проверку правильности анкор-листа. Полученные данные позволят спрогнозировать вероятность наложения санкций со стороны поисковых систем.</p>
			    <h3><?= renderSprite('check-mark') ?> Разработка стратегии продвижения</h3>
			    <p>Полученная информация позволит сформировать список рекомендаций, соблюдение которых позволит улучшить ранжирование в поисковиках.</p>
			    <p>Услуги расширенного аудита предусматривают:</p>
                <ul>
				    <li>анализ данных метрик;</li>
				    <li>оценку контента;</li>
				    <li>проверку структуры сайта.</li>
			    </ul>

                <h2>Зачем необходим SEO-аудит</h2>
			    <ul>
                    <li>отсутствие роста позиций ресурса в поисковой выдаче;</li>
                    <li>проблемы с индексацией;</li>
                    <li>резкое проседание рейтинга в поисковых системах;</li>
                    <li>проблемы с внешними ссылками;</li>
                    <li>желание выполнить проверку качества работы оптимизатора;</li>
                    <li>выявление причин отсутствия продаж, несмотря на высокий рейтинг ресурса.</li>
			    </ul>
			    <p>Стоимость услуг нашей компании позволяет воспользоваться ими даже владельцам небольших молодых сайтов.</p>

    			<h2>Стоимость SEO аудита</h2>
            </div>

			<div class="col-md-4 offset-md-2 col-sm-12 offset-sm-0">
                <div class="seo-price-item">
                    <h3 class="text-center">Комплексный аудит сайта</h3>
                    <ul>
                        <li><?= renderSprite('check-mark') ?>&nbsp; Технический аудит</li>
                        <li><?= renderSprite('check-mark') ?>&nbsp; Анализ внутренней оптимизации</li>
                        <li><?= renderSprite('check-mark') ?>&nbsp; Анализ внешней оптимизации</li>
                        <li><?= renderSprite('check-mark') ?>&nbsp; Анализ поведенческих факторов</li>
                        <li><?= renderSprite('check-mark') ?>&nbsp; Внешние факторы</li>
                        <li><?= renderSprite('check-mark') ?>&nbsp; Рекомендации</li>
                        <li><?= renderSprite('check-mark') ?>&nbsp; Отчет</li>
                        <li><?= renderSprite('check-mark') ?>&nbsp; Перенос сайта на другой хостинг</li>
                        <li><?= renderSprite('check-mark') ?>&nbsp; Быстрое время реакции на обращение</li>
                    </ul>
                    <p class="price text-center">от 15 000 &#8381;</p>
                    <p class="text-center">
                        <button class="btn js-open-modal">Заказать аудит</button>
                    </p>
                </div>
            </div>

            <div class="col-md-4 col-sm-12">
                <div class="seo-price-item active">
                    <h3 class="text-center">Часы поддержки/обслуживания сайта клиента</h3>
                    <ul>
                        <li><?= renderSprite('check-mark') ?>&nbsp; Техподдержка 24/7</li>
                        <li><?= renderSprite('check-mark') ?>&nbsp; Обеспечение стабильной работы сайта</li>
                        <li><?= renderSprite('check-mark') ?>&nbsp; Экстренное восстановление работы сайта</li>
                        <li><?= renderSprite('check-mark') ?>&nbsp; Корректировки на сайте</li>
                        <li><?= renderSprite('check-mark') ?>&nbsp; Оперативное устранение ошибок</li>
                        <li><?= renderSprite('check-mark') ?>&nbsp; Диагностика и лечение вирусов</li>
                        <li><?= renderSprite('check-mark') ?>&nbsp; Перенос сайта на другой хостинг</li>
                        <li><?= renderSprite('check-mark') ?>&nbsp; Быстрое время реакции на обращение</li>
                    </ul>
                    <p class="price text-center">10 000 &#8381; / за 10 часов</p>
                    <p class="text-center">
                        <button class="btn js-open-modal">Заказать 10 часов</button>
                    </p>
                </div>
            </div>

            <div class="col-md-10 offset-md-1 col-sm-12 offset-sm-0">
			    <p class="text-center">Клиенты компании «LapkinLAb» могут рассчитывать на достижение следующих результатов:</p>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>Услуга</td>
                            <td>Результат</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Внутренняя оптимизация сайта</td>
                            <td>Приведение ресурса в соответствие с требованиями поисковых систем</td>
                        </tr>
                        <tr>
                            <td>Работа с ключами и мета-тегами</td>
                            <td>Предоставление подробных рекомендаций</td>
                        </tr>
                        <tr>
                            <td>Перелинковка</td>
                            <td>Исправление допущенных ранее ошибок</td>
                        </tr>
                        <tr>
                            <td>Создание графического и текстового наполнения</td>
                            <td>Подготовка или оптимизация текстов и графических элементов для продвижения</td>
                        </tr>
                        <tr>
                            <td>Анализ внутренних показателей</td>
                            <td>Выявление несоответствий требованиям поисковиков, проверка кода, индексации, обнаружение «битых» ссылок</td>
                        </tr>
                        <tr>
                            <td>Анализ юзабилити сайта и ресурсов конкурентов</td>
                            <td>Предоставление рекомендаций по применению новых функций</td>
                        </tr>
                        <tr>
                            <td>Анализ ссылок</td>
                            <td>Формирование отчета о качестве и эффективности исходящих и внешних ссылок</td>
                        </tr>
                    </tbody>
                </table>

                <h2>Где заказать SEO-аудит в Москве?</h2>
                <p>«LapkinLAb» - это компания, которая оказывает профессиональные услуги комплексного SEO-аудита в Москве. Наши клиенты могут рассчитывать на заметное увеличение посещаемости сайта и, соответственно, рост продаж. Услуги компании «LapkinLAb» позволят вам оптимизировать бюджет и обеспечить бесперебойную и, главное, эффективную работу своего сайта.</p>
            </div>

		</div>
	</div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
