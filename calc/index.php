<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?><section class="four">
<div class="container">
	<div class="row">
 <section class="sus">
		<div class="container">
			<div class="row">
			    <div class="col-md-12">
			        <h1 class="title" style="color: #fff; margin-top: 15px;">Калькулятор</h1>
			    </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="h3">Система контекстной рекламы</div>
					<ul>
                         <input class="checkbox" id="checkbox-1" type="checkbox" name="checkbox" required=""> <label for="checkbox-1">Яндекс.Директ</label> <br>
                         <input class="checkbox" id="checkbox-2" type="checkbox" name="checkbox" required=""> <label for="checkbox-2">Google Adwords</label> <br>
					</ul>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="h3">Выберите кол-во ключевых фраз</div>
				    <ul>
				         <input class="radio" id="radio-seo-1" type="radio" name="radio1" required=""> <label for="radio-seo-1">до 200</label> <br>
                         <input class="radio" id="radio-seo-2" type="radio" name="radio1" required=""> <label for="radio-seo-2">до 1000</label> <br>
                         <input class="radio" id="radio-seo-3" type="radio" name="radio1" required=""> <label for="radio-seo-3">до 3000</label><br>
                         <input class="radio" id="radio-seo-4" type="radio" name="radio1" required=""> <label for="radio-seo-4">свыше 3000 ключевых фраз</label><br>
				    </ul>
                </div>
            </div>
            <div class="row">
               <div class="col-md-12 col-sm-12"><div class="calc-line"></div></div>
                <div class="col-sm-12 col-md-6">
                    <div class="h3 mt-zero">Поисковая реклама</div>
                    <ul>
                        <input class="checkbox" id="checkbox-3" type="checkbox" name="checkbox" required=""> <label for="checkbox-3">Постановка целей рекламной кампании и определение целевой аудитории</label> <br>
                        <input class="checkbox" id="checkbox-4" type="checkbox" name="checkbox" required=""> <label for="checkbox-4">Сбор ключевых слов</label> <br>
                        <input class="checkbox" id="checkbox-5" type="checkbox" name="checkbox" required=""> <label for="checkbox-5">Подбор минус-слов</label> <br>
                        <!-- <input class="checkbox" id="checkbox-6" type="checkbox" name="checkbox" required=""> <label for="checkbox-6">Сбор ключевых слов</label> <br> -->
                        <input class="checkbox" id="checkbox-7" type="checkbox" name="checkbox" required=""> <label for="checkbox-7">Кросс-минусация</label> <br>
                        <input class="checkbox" id="checkbox-8" type="checkbox" name="checkbox" required=""> <label for="checkbox-8">Кластеризация запросов по группам</label> <br>
                        <input class="checkbox" id="checkbox-9" type="checkbox" name="checkbox" required=""> <label for="checkbox-9">Создание структуры рекламного аккаунта</label> <br>
                        <input class="checkbox" id="checkbox-10" type="checkbox" name="checkbox" required=""> <label for="checkbox-10">Создание текстово-графических объявлений</label> <br>
                        <input class="checkbox" id="checkbox-11" type="checkbox" name="checkbox" required=""> <label for="checkbox-11">Настройка геотаргетинга</label> <br>
                        <input class="checkbox" id="checkbox-12" type="checkbox" name="checkbox" required=""> <label for="checkbox-12">Настройка быстрых ссылок</label> <br>
                        <input class="checkbox" id="checkbox-13" type="checkbox" name="checkbox" required=""> <label for="checkbox-13">Настройка отображаемых ссылок</label> <br>
                        <input class="checkbox" id="checkbox-14" type="checkbox" name="checkbox" required=""> <label for="checkbox-14">Настройка визитки компании</label> <br>
                        <input class="checkbox" id="checkbox-15" type="checkbox" name="checkbox" required=""> <label for="checkbox-15">Настройка уточнений</label> <br>
                        <input class="checkbox" id="checkbox-16" type="checkbox" name="checkbox" required=""> <label for="checkbox-16">UTM-разметка</label> <br>
                        <input class="checkbox" id="checkbox-17" type="checkbox" name="checkbox" required=""> <label for="checkbox-17">Деление по регионам (таргетинг по регионам)</label> <br>
                        <input class="checkbox" id="checkbox-18" type="checkbox" name="checkbox" required=""> <label for="checkbox-18">Таргетинг по аудиториям</label> <br>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="h3">Медийная реклама (РСЯ/КМС)</div>
                    <ul>
                        <input class="checkbox" id="checkbox-19" type="checkbox" name="checkbox" required=""> <label for="checkbox-19">Постановка целей рекламной кампании</label> <br>
                        <input class="checkbox" id="checkbox-20" type="checkbox" name="checkbox" required=""> <label for="checkbox-20">Анализ целевой аудитории и определение "портрета покупателя"</label> <br>
                        <input class="checkbox" id="checkbox-21" type="checkbox" name="checkbox" required=""> <label for="checkbox-21">Подбор метода таргетинга (выбор тем/интересов/мест размещений, подбор ключевых слов)</label> <br>
                        <input class="checkbox" id="checkbox-22" type="checkbox" name="checkbox" required=""> <label for="checkbox-22">Создание структуры рекламного аккаунта</label> <br>
                        <input class="checkbox" id="checkbox-23" type="checkbox" name="checkbox" required=""> <label for="checkbox-23">Создание текстово-графических объявлений</label> <br>
                        <input class="checkbox" id="checkbox-24" type="checkbox" name="checkbox" required=""> <label for="checkbox-24">Создание графических объявлений</label> <br>
                        <input class="checkbox" id="checkbox-25" type="checkbox" name="checkbox" required=""> <label for="checkbox-25">Настройка геотаргетинга</label> <br>
                        <input class="checkbox" id="checkbox-26" type="checkbox" name="checkbox" required=""> <label for="checkbox-26">Настройка быстрых ссылок</label> <br>
                        <input class="checkbox" id="checkbox-27" type="checkbox" name="checkbox" required=""> <label for="checkbox-27">Настройка визитки компании</label> <br>
                        <input class="checkbox" id="checkbox-28" type="checkbox" name="checkbox" required=""> <label for="checkbox-28">Настройка уточнений</label> <br>
                        <input class="checkbox" id="checkbox-29" type="checkbox" name="checkbox" required=""> <label for="checkbox-29">UTM-разметка</label> <br>
                        <input class="checkbox" id="checkbox-30" type="checkbox" name="checkbox" required=""> <label for="checkbox-30">Деление по регионам (таргетинг по регионам)</label> <br>
                        <input class="checkbox" id="checkbox-31" type="checkbox" name="checkbox" required=""> <label for="checkbox-31">Добавление минус площадок, исключение категорий сайтов</label> <br>
                        <input class="checkbox" id="checkbox-32" type="checkbox" name="checkbox" required=""> <label for="checkbox-32">Таргетинг по аудиториям</label> <br>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12"><div class="calc-line"></div></div>
                <div class="col-sm-12 col-md-6">
                    <div class="h3">Ретаргетинг/Ремаркетинг</div>
                    <ul>
                        <input class="checkbox" id="checkbox-33" type="checkbox" name="checkbox" required=""> <label for="checkbox-33">Постановка целей рекламной кампании</label> <br>
                        <input class="checkbox" id="checkbox-34" type="checkbox" name="checkbox" required=""> <label for="checkbox-34">Анализ целевой аудитории и определение целевых списков аудиторий</label> <br>
                        <input class="checkbox" id="checkbox-35" type="checkbox" name="checkbox" required=""> <label for="checkbox-35">Настройка сбора аудиторий</label> <br>
                        <input class="checkbox" id="checkbox-36" type="checkbox" name="checkbox" required=""> <label for="checkbox-36">Создание сценария работы РК</label> <br>
                        <input class="checkbox" id="checkbox-37" type="checkbox" name="checkbox" required=""> <label for="checkbox-37">Подбор аудитории ретаргетинга/рематкетинга</label> <br>
                        <input class="checkbox" id="checkbox-38" type="checkbox" name="checkbox" required=""> <label for="checkbox-38">Настройка условий показа</label> <br>
                        <input class="checkbox" id="checkbox-39" type="checkbox" name="checkbox" required=""> <label for="checkbox-39">Создание индивидуальных сегментов для таргетинга</label> <br>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="h3">&nbsp;</div>
                    <ul>
                        <input class="checkbox" id="checkbox-40" type="checkbox" name="checkbox" required=""> <label for="checkbox-40">Настройка корректировок ставок</label> <br>
                        <input class="checkbox" id="checkbox-41" type="checkbox" name="checkbox" required=""> <label for="checkbox-41">Создание подогревающих объявлений</label> <br>
                        <input class="checkbox" id="checkbox-42" type="checkbox" name="checkbox" required=""> <label for="checkbox-42">Настройка посадочных страниц на сайте</label> <br>
                        <input class="checkbox" id="checkbox-43" type="checkbox" name="checkbox" required=""> <label for="checkbox-43">Создание контента для новых посадочных страниц</label> <br>
                        <input class="checkbox" id="checkbox-44" type="checkbox" name="checkbox" required=""> <label for="checkbox-44">UTM-разметка</label> <br>
                        <input class="checkbox" id="checkbox-45" type="checkbox" name="checkbox" required=""> <label for="checkbox-45">Деление по регионам (таргетинг по регионам)</label> <br>
                    </ul>
                </div>
            </div>
            <div class="row">
               <div class="col-md-12 col-sm-12"><div class="calc-line"></div></div>
                <div class="col-sm-12 col-md-6">
                    <div class="h3">Ведение и оптимизация РК</div>
                    <ul>
                        <p class="h2">Поиск</p>
                        <input class="checkbox" id="checkbox-46" type="checkbox" name="checkbox" required=""> <label for="checkbox-46">Анализ поисковых запросов: добавление ключевых слов, минус слов</label> <br>
                        <input class="checkbox" id="checkbox-47" type="checkbox" name="checkbox" required=""> <label for="checkbox-47">Анализ целевой аудитории и определение целевых списков аудиторий</label> <br>
                        <input class="checkbox" id="checkbox-48" type="checkbox" name="checkbox" required=""> <label for="checkbox-48">Написание и тестирование объявлений</label> <br>
                        <input class="checkbox" id="checkbox-49" type="checkbox" name="checkbox" required=""> <label for="checkbox-49">Аналитика трафика и дальнейшая оптимизация (корректировка ставок, приостановка неэффективных элементов)</label> <br>
                        <input class="checkbox" id="checkbox-50" type="checkbox" name="checkbox" required=""> <label for="checkbox-50">Аналитика трафика и стратегическое планирование</label> <br>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="h3">&nbsp;</div>
                    <ul>
                        <p class="h2">РСЯ/КМС/Ретаргетинг</p>
                        <input class="checkbox" id="checkbox-51" type="checkbox" name="checkbox" required=""> <label for="checkbox-51">Анализ мест размещений: добавление минус площадок</label> <br>
                        <input class="checkbox" id="checkbox-52" type="checkbox" name="checkbox" required=""> <label for="checkbox-52">Написание и тестирование объявлений</label> <br>
                        <input class="checkbox" id="checkbox-53" type="checkbox" name="checkbox" required=""> <label for="checkbox-53">Аналитика трафика и дальнейшая оптимизация (корректировка ставок, приостановка неэффективных элементов)</label> <br>
                        <input class="checkbox" id="checkbox-54" type="checkbox" name="checkbox" required=""> <label for="checkbox-54">Аналитика трафика и стратегическое планирование</label> <br>
                    </ul>
                </div>
            </div>
            <div class="row">
               <div class="col-md-12 col-sm-12"><div class="calc-line"></div></div>
                <div class="col-sm-12 col-md-6">
                    <div class="h3">Дополнительные услуги</div>
                    <ul>
                        <input class="checkbox" id="checkbox-55" type="checkbox" name="checkbox" required=""> <label for="checkbox-55">Аудит сайта/лендинга</label> <br>
                        <input class="checkbox" id="checkbox-56" type="checkbox" name="checkbox" required=""> <label for="checkbox-56">Установка Яндекс.Метрики</label> <br>
                        <input class="checkbox" id="checkbox-57" type="checkbox" name="checkbox" required=""> <label for="checkbox-57">Установка Google Analytics</label> <br>
                        <input class="checkbox" id="checkbox-58" type="checkbox" name="checkbox" required=""> <label for="checkbox-58">Установка Google Tag Manager</label> <br>
                        <input class="checkbox" id="checkbox-59" type="checkbox" name="checkbox" required=""> <label for="checkbox-59">Настройка базовых целей в Яндекс.Метрике</label> <br>
                        <input class="checkbox" id="checkbox-60" type="checkbox" name="checkbox" required=""> <label for="checkbox-60">Настройка базовых целей в Google Analytics</label> <br>
                        <input class="checkbox" id="checkbox-61" type="checkbox" name="checkbox" required=""> <label for="checkbox-61">Настройка чата с автоматическим приветствием на сайте</label> <br>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="h3">&nbsp;</div>
                    <ul>
                        <input class="checkbox" id="checkbox-62" type="checkbox" name="checkbox" required=""> <label for="checkbox-62">Управление ставками в рекламном кабинете</label> <br>
                        <input class="checkbox" id="checkbox-63" type="checkbox" name="checkbox" required=""> <label for="checkbox-63">Контроль доступности вашего сайта</label> <br>
                        <input class="checkbox" id="checkbox-64" type="checkbox" name="checkbox" required=""> <label for="checkbox-64">Разработка рекомендаций по повышению конверсии посадочных страниц сайта</label> <br>
                        <input class="checkbox" id="checkbox-65" type="checkbox" name="checkbox" required=""> <label for="checkbox-65">Подключение колл-трекинга</label> <br>
                        <input class="checkbox" id="checkbox-66" type="checkbox" name="checkbox" required=""> <label for="checkbox-66">Подключение и настройка сквозной аналитики Roistat</label> <br>
                        <input class="checkbox" id="checkbox-67" type="checkbox" name="checkbox" required=""> <label for="checkbox-67">Час работы специалиста по вашей разовой задаче</label> <br>
                    </ul>
                </div>
            </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div id="tm_builder_outer_content" class="tm_builder_outer_content" style="text-align: center; padding: 0px;">
                            <a class="tm_pb_button hover-green" id="trigger-fill">Заполнить бриф</a><br class="br-mob"><br class="br-mob"><br class="br-mob"><br class="br-mob">      
                            <a class="tm_pb_button hover-green" id="trigger-get">Получить расчет</a>
                        </div>
                    </div>
                </div>

		</div>
 </section>
	</div>
</div>
 </section>

<section id="box" class="four2" style="display:none;color:#fff; background-color: #000000e6;background-image: url('../assests/bgg.png');background-repeat: no-repeat;background-size: cover;">
<div class="container">
											<div class="row tm_pb_row tm_pb_row_1">
                                              <div class="tm_pb_column tm_pb_column_1_2 tm_pb_column_1 col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                <p style="font-size: 24px; margin: 10px 0  10px 0;">Оставьте ваши контактные данные для связи:</p>
                                                <form action="/mail_post.php" method="post" class="wpcf7-form">
                                                  <div style="display: none;">
                                                  	<input type="hidden" name="url" value="https://msk.lapkinlab.ru/calc/">
                                                  </div>
                                                  <p>
                                     				<label> Ваше имя (обязательно)<br>
                                     				<span class="wpcf7-form-control-wrap your-name"><input style="width: 350px;" type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" required=""></span> </label>
                                                  </p>
                                                  <p>
                                     				<label> Телефон (обязательно)<br>
                                     				<span class="wpcf7-form-control-wrap your-phone"><input style="width: 350px;" type="text" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" required=""></span> </label>
                                                  </p>
                                                  <p>
                                     				<label> Ваш e-mail (обязательно)<br>
                                     				<span class="wpcf7-form-control-wrap your-email"><input style="width: 350px;" type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" required=""></span> </label>
                                                  </p>
                                      			  <p style="display:none;"><input type="text" name="name" value=""></p>
                                                  <p>
                                     				<span class="wpcf7-form-control-wrap your-calc">
														<textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" id="foocalc" required=""></textarea>
													</span>
                                                  </p>
                                                  <div style="width:100%; height: 25px; clear: both;">
                                                  </div>
												  <p><span class="wpcf7-form-control-wrap acceptance-check">
													<input type="checkbox" name="acceptance-check" value="1" class="wpcf7-form-control wpcf7-acceptance" required=""></span>
													<label style="float: left;padding-bottom: 10px;">Я принимаю <a style="color: #fff; text-decoration:underline;" href="/privacy-policy" target="_blank">условия передачи информации</a></label>
												  </p>
                                                  <p class="widget_text">
                                     				<input type="submit" value="Заказать" class="wpcf7-form-control tm_pb_button wpcf7-submit" onclick="ym(45994323, 'reachGoal', 'kalkulrash'); return true;"><span class="ajax-loader"></span>
                                                  </p>
                                                  <div class="wpcf7-response-output wpcf7-display-none">
                                                  </div>
                                                </form>
                                              </div>
                                              <div class="tm_pb_column tm_pb_column_1_2 tm_pb_column_1 col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                <p style="font-size: 24px; margin: 10px 0  10px 0;">Вы выбрали:</p>
                                                <p style="font-size: 20px;margin: 10px 0 10px 0;" id="h1_itogo">Янедкс.Директ</p> <br>
                                                <p style="font-size: 20px;margin: 10px 0 10px 0;" id="h2_itogo">Количество ключевых фраз - до 200</p> <br>
                                                <p style="font-size: 20px;margin: 10px 0 10px 0;" id="h3_itogo">Настройка РК - <span id="result_itogo3" style="font-weight:bold; font-size: 20px; display: inline-block;"> 1 000 </span> &#8381;</p>
                                                <p style="font-size: 20px;margin: 10px 0 10px 0;" id="h4_itogo">Ведение и оптимизация РК - <span id="result_itogo4" style="font-weight:bold; font-size: 20px; display: inline-block;"> 1 000 </span> &#8381;</p>
												<p style="font-size: 20px;margin: 10px 0 10px 0;" id="h5_itogo">Дополнительные услуги - <span id="result_itogo5" style="font-weight:bold; font-size: 20px; display: inline-block;"> 1 000 </span> &#8381;</p> <br>
												<p style="font-size: 20px;margin: 10px 0 10px 0;" id="h6_itogo"><b>Итого: </b><span id="result_itogo6" style="font-weight:bold; font-size: 20px; display: inline-block;"> 1 000 </span> &#8381;</p>
													<p id="h5_itogo" style="display: inline-block;font-size: 20px;margin: 10px 0 10px 0;"> </p> 
													<span id="result_itogo2" style="font-size: 36px; display: inline-block;"> </span> 
													<p id="h6_itogo" style="display: inline-block;font-size: 18px;margin: 10px 0 10px 0;"> </p> <br>
												<div style="display:block;">* Расчет является приблизительным. Для уточнения стоимости с Вами свяжется наш менеджер.</div>
                                              </div>
											</div>
</div>
</section>


<style>



.sus{
         /**
         * Для эксплорера
         */
        -ms-user-select: none;

        /**
         * Для мозилы
         */
        -moz-user-select: none;

        /**
         * Для конкверора
         */
        -khtml-user-select: none;

        /**
         * Для Сафари и Хрома
         */
        -webkit-user-select: none;
}
@media (max-width: 1200px){
    ul{
      width: 450px !important;
    }
    label{
      width: 450px: !important;    
    }
}
@media (max-width: 992px){
    .four{
        display: block;
    }
    ul{
      width: 350px !important;
    }
    label{
      width: 350px !important;    
    }
}
@media (max-width: 768px){
    ul{
        width: 100% !important;
        margin: 0 auto;
    }
    label{
        width: 100% !important;
    }
    .mt-zero{
        margin-top: 25px !important;   
    }
}
@media (max-width: 580px){
    .br-mob{
        display: block !important;
    }
    #trigger-fill{
        margin-right: 0 !important;
    }
}
    .calc-line{
        width: 100%;
        height: 2px;
        background-color: rgba(255,255,255,0.1);
        margin-top: 40px;
        margin-bottom: 30px;
    }
.br-mob{
    display: none;
}
.radio,.checkbox{
    border: none;
    outline: none;
}
#trigger-fill{
    background: transparent;
    border: 1px solid #fa3a5e;
    border-radius: 5px;
    color: #ffffff;
    font-family: "Proxima Nova Lt";
    font-size: 20px;
    font-weight: bold;
    letter-spacing: 0.22px;
    margin-bottom: 15px;
    margin-right: 15px;
    padding: 15px 30px;
    text-decoration: none;
    cursor: pointer;
}
#trigger-get{
    background: #fa3a5e;
    border: 1px solid #fa3a5e;
    border-radius: 5px;
    color: #ffffff;
    font-family: "Proxima Nova Lt";
    font-size: 20px;
    font-weight: bold;
    letter-spacing: 0.22px;
    margin-bottom: 15px;
    padding: 15px 30px;
    text-decoration: none;
    cursor: pointer;
}
.radio{
  vertical-align: top;
  width: 17px;
  height: 17px;
  margin: 0 5px 0 0;
  border: none !important;
  outline: none !important;
}
.sus ul{
  width: 500px;
    }
.sus label{
  font-weight: 400 !important;
  width: 500px;
  background-color: rgba(255,255,255,0.1);
  padding: 5px;
  padding-right: 30px !important;
  border: 1px solid rgba(255,255,255,0.1);
  -webkit-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
}
    .sus label:hover{
        border: 1px solid #fa3a5e;
    }
.radio + label {
  cursor: pointer;
}
.radio:not(checked) {
  position: absolute;
  z-index: -1;
  opacity: 0;
  margin: 10px 0 0 7px;
  border: none !important;
  outline: none !important;
}
.radio:not(checked) + label {
  position: relative;
  padding: 5px;
  padding: 10px;
}
.radio:not(checked) + label:before {
  content: '';
  position: absolute;
  right: 0;
  width: 25px;
  height: 50%;
  top: 10px;
  background: url("../assests/kisspng-check-mark2.png");
  background-repeat: no-repeat;
  background-size: auto;
  background-position-y: bottom;
  background-position-x: left;
  filter: grayscale(100%);
}
.radio:not(checked) + label:after {
  content: '';
  position: absolute;
  top: 10px;
  right: 0;
  width: 25px;
  height: 50%;
  background: url("../assests/kisspng-check-mark2.png");
  background-repeat: no-repeat;
  background-size: auto;
  background-position-y: bottom;
  background-position-x: left;
  opacity: 0;
  transition: .2s;
}
.radio:checked + label:after {
  opacity: 1;
}
.radio:checked + label{
  border: 1px solid #fa3a5e;
}
.radio:checked{
     border: none !important;
     outline: none !important;
}
.checkbox:checked + label{
  border: 1px solid #fa3a5e;
}
.checkbox:checked{
      border: none !important;
      outline: none !important;
}
.radio:focus + label:before {
  box-shadow: 0 0 0 0px rgba(255,255,0,.7);
}
.checkbox{
  vertical-align: top;
  width: 17px;
  height: 17px;
  margin: 0 5px 0 0;
  border: none !important;
  outline: none !important;
}
.checkbox + label {
  cursor: pointer;
}
.checkbox:not(checked) {
  position: absolute;
  z-index: -1;
  opacity: 0;
  margin: 10px 0 0 7px;
  border: none !important;
  outline: none !important;
}
.checkbox:not(checked) + label {
  position: relative;
  padding: 10px;
}
.h2{
    font-family: "Proxima Nova Lt";
    font-size: 16px;
    font-weight: 600;
    color: #fff;
}
.checkbox:not(checked) + label:before {
  content: '';
  position: absolute;
  right: 0;
  width: 25px;
  height: 50%;
  background: url("../assests/kisspng-check-mark2.png");
  background-repeat: no-repeat;
  background-size: auto;
  top: 10px;
  background-position-y: bottom;
  background-position-x: left;
  filter: grayscale(100%);
}
.checkbox:not(checked) + label:after {
  content: '';
  position: absolute;
  right: 0;
  width: 25px;
  height: 50%;
  top: 10px;
  background: url("../assests/kisspng-check-mark2.png");
  background-repeat: no-repeat;
  background-size: auto;
  background-position-y: bottom;
  background-position-x: left;
  opacity: 0;
  transition: .2s;
}
.checkbox:checked + label:after {
  opacity: 1;
}
.checkbox:focus + label:before {
  box-shadow: 0 0 0 0px rgba(255,255,0,.7);
}
    .h3{
        font-family: "Proxima Nova Lt";
        font-size: 24px;
        font-weight: 700;
        letter-spacing: 0.24px;
        color: #fff;
    }
</style>

<script src="sss.js"></script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>