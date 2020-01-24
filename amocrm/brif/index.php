<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Опросный лист на внедрение amoCRM");
$APPLICATION->SetTitle("Заполните Бриф");

$APPLICATION->AddChainItem('amoCRM', '/amocrm/');
?>
<section class="page page-amo">
    <div class="container">
        <div class="row">
            <h1 class="col-12" hidden>Бриф на внедрение amoCRM</h1>
            <div class="col-12 text-center">
                <iframe src="https://docs.google.com/forms/d/1DAzYezKmZQh-xRXmXxnjsCuu0KCLaSAB4pM5FoT_CIw/viewform?embedded=true" marginheight="0" marginwidth="0" style="opacity: 1; visibility: visible;" width="100%" height="900" frameborder="0">Загрузка...</iframe>
            </div>
        </div>
    </div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
