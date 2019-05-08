<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("title", "Отзывы о работе LapkinLab");
$APPLICATION->SetPageProperty("description", "Отзывы клиентов о работе веб-студии LapkinLab");
$APPLICATION->SetTitle("Отзывы о работе LapkinLab");
$APPLICATION->SetPageProperty("keywords", "отзывы,lapkinlab");
?><style type="text/css">
.breadcrumbs{
  width: 100%;
}
.two {
    padding: 30px 0px;
}
.breadcrumbs__content{
  display: inline;
}
.breadcrumbs__item{
  display: inline-block;
  padding: 0px 5px;
  font-family: "Proxima Nova Lt";
  font-size: 16px;
  font-weight: bold;
  letter-spacing: 0.16px;
}

.breadcrumbs__item a{
color: #fa3a5e;
}

</style> <section class="two">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="breadcrumbs">
				<div class="container_v2">
					<div class="breadcrumbs__items">
						<div class="breadcrumbs__content">
							<div class="breadcrumbs__wrap">
								<div class="breadcrumbs__item">
 <a href="/" class="breadcrumbs__item-link is-home" rel="home" title="Главная">Главная</a>
								</div>
								<div class="breadcrumbs__item">
									<div class="breadcrumbs__item-sep">
										 |
									</div>
								</div>
								<div class="breadcrumbs__item">
 <span class="breadcrumbs__item-target">Отзывы</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 </section>
<h1 class="title" style=" padding-bottom: 70px;padding-top: 50px; font-size: 36px; line-height: 36px; text-align: center; font-weight: bold; color: #000; background: transparent;">Отзывы о нашей работе</h1>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.min.css">
<div class="video-reviews-block" style="margin-top: 50px; justify-content: center !important;">
	<div class="video-review">
		<div class="circle-video-block">
 <a class="video-popup" href="https://www.youtube.com/embed/jX8QZG4JXHY"></a>
			<img src="//msk.lapkinlab.ru/assests/kalinza.jpg" style="position: absolute;left: -195px;top: -65px;">
		</div>
		<div class="vr-title">
			 Сеть оптик Kalinza.ru
		</div>
		<p class="comp-work">
			 Разработка сайта на CMS Bitrix
		</p>
	</div>
	<div class="video-review">
		<div class="circle-video-block">
 <a class="video-popup" href="https://www.youtube.com/embed/XaxNwe8O6Vw"></a>
			<img src="//msk.lapkinlab.ru/assests/trillion.jpg" style="position: absolute;left: -195px;top: -65px;">
		</div>
		<div class="vr-title">
			 Кредитный брокер Trillion-ug.ru
		</div>
		<p class="comp-work">
			 Доработка сайта и SEO продвижение сайта с нуля
		</p>
	</div>
</div>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.min.js"></script> <script src="/bitrix/templates/LapkinLab_krd/js/video-fancy.js"></script> <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>