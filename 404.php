<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Страница не найдена - LapkinLAb");
$APPLICATION->SetPageProperty("description", "Страница не найдена - LapkinLAb");
$APPLICATION->SetTitle("Страница не найдена - LapkinLAb");

$asset->addCss('/local/templates/LapkinLab_krd/css/main.css');
?>
<main id="main" class="site-main" role="main">
    <section class="error-404 not-found">
        <div class="container">
            <div class="row">
                <header class="page-header text-center col-12">
                    <h3 class="h1 page-title">Ошибка 404.</h3>
                </header>
                <div class="page-content text-center col-12">
                    <h3>Такой страницы не существует.</h3>
                    <p>
                        <br>
                        <a class="btn" href="/">Перейти на главную страницу</a>
                    </p>
                </div>

            </div>
        </div>
    </section>
</main>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
