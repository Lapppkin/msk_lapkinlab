<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Страница не найдена - LapkinLAb");
$APPLICATION->SetPageProperty("description", "Страница не найдена - LapkinLAb");

$APPLICATION->SetTitle("Страница не найдена - LapkinLAb");
?>
<main id="main" class="site-main" role="main">		
	<section class="error-404 not-found">
		<header class="page-header">
			<h3 class="page-title">Ошибка 404.</h3>
		</header>
		<div class="page-content" style="text-align:center;">
			<h3>Такой страницы не существует.</h3>
			<p>
				<a class="btn" href="/">Перейти на главную страницу</a>
			</p>
	
	</div>
	</section>
</main>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
