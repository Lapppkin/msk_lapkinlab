<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "�������� �� ������� - LapkinLAb");
$APPLICATION->SetPageProperty("description", "�������� �� ������� - LapkinLAb");

$APPLICATION->SetTitle("�������� �� ������� - LapkinLAb");
?>
<main id="main" class="site-main" role="main">		
	<section class="error-404 not-found">
		<header class="page-header">
			<h3 class="page-title">������ 404.</h3>
		</header>
		<div class="page-content" style="text-align:center;">
			<h3>����� �������� �� ����������.</h3>
			<p>
				<a class="btn" href="/">������� �� ������� ��������</a>
			</p>
	
	</div>
	</section>
</main>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
