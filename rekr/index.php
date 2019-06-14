<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?><link rel="stylesheet" href="/rekr/styles.css">
<script type="text/javascript" src="/rekr/js.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/canvg/1.5/canvg.min.js"></script>

<main> 
	<section class="two">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="breadcrumbs">
						<div class="container_v2">
							<div class="breadcrumbs__items">
								<div class="breadcrumbs__content">
									<div class="breadcrumbs__wrap">
										<div class="breadcrumbs__item">
		 <a href="/" class="breadcrumbs__item-link is-home" rel="home" title="�������">�������</a>
										</div>
										<div class="breadcrumbs__item">
											<div class="breadcrumbs__item-sep">
												 |
											</div>
										</div>
										<div class="breadcrumbs__item">
		 <span class="breadcrumbs__item-target">�����������</span>
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


	<section class="tenthre" id="root" style="padding-bottom: 90px">

		<div class="container"><div class="row"><div class="col-md-3 logo"><a href="/"><img src="/bitrix/templates/new_design/assests/logo-new2.png"></a><span>���������������� ��������� �����������, �������� ������ � �������</span></div><div class="col-md-9" style="display: flex;flex-direction: column;justify-content: center;"><h1>������ ���������� ������������� ����������� ������� �� msk.lapkinlab.ru</h1></div></div>
					<br>
					<br>

		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<table border='0' cellspacing='0' cellpadding='2' style='border-top:solid 1px #000000; border-left:solid 1px #000000;'>
						<tr>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000;' rowspan="3"> ������� �� ������.������/Google Ads (�����) ������ �� �������� � ����� </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; text-align:center;' colspan="3"> ������ </td>
						</tr>
						<tr>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #fffcdc;'> <input id="i1" type="text" value=""> <br>&nbsp;</td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #fffcdc;'> <input id="i2" type="text" value=""> <br>&nbsp;</td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #fffcdc;'> <input id="i3" type="text" value=""> <i style="font-size:10px;">* �������� ���������� �� 6 �������</i></td>
						</tr>
						<tr>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000;'> ������ ������ </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000;'> Google Ads </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000;'> SEO </td>
						</tr>
						<tr>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000;'>�������� (������ �������/google)</td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #fffcdc;'> <input id="i4" type="text" value=""> </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #fffcdc;'> <input id="i5" type="text" value=""> </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #fffcdc;'> <input id="i6" type="text" value=""> </td>
						</tr>
						<tr>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000;'> ������� ���������� (������ �������/google) </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #fffcdc;'> <input id="i7" type="text" value=""> </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #fffcdc;'> <input id="i8" type="text" value=""> </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #eaffdc;'> <input id="i9" type="text" value="" readonly> </td>
						</tr>
						<tr>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000;'>��������� ������� � ����� (CTR) </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #eaffdc;'> <input id="i10" type="text" value="" readonly> </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #eaffdc;'> <input id="i11" type="text" value="" readonly> </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #fffcdc;'> <input id="i12" type="text" value="" > </td>
						</tr>
						<tr>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000;'> ������ (�������� �� ����) </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #fffcdc;'> <input id="i13" type="text" value=""> </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #fffcdc;'> <input id="i14" type="text" value=""> </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #eaffdc;'> <input id="i15" type="text" value="" readonly> </td>
						</tr>
						<tr>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000;'> ��������� 1 �����</td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #eaffdc;'> <input id="i16" type="text" value="" readonly> </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #eaffdc;'> <input id="i17" type="text" value="" readonly> </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #eaffdc;'> <input id="i18" type="text" value="" readonly> </td>
						</tr>
						<tr>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000;'> ��������� ������ (��������� �� ����) � ������/����/������ </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #fffcdc;'> <input id="i19" type="text" value=""> </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #fffcdc;'> <input id="i20" type="text" value=""> </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #fffcdc;'> <input id="i21" type="text" value=""> </td>
						</tr>
						<tr>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000;'> �������/�����/������� </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #eaffdc;'> <input id="i22" type="text" value="" readonly> </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #eaffdc;'> <input id="i23" type="text" value="" readonly> </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #eaffdc;'> <input id="i24" type="text" value="" readonly> </td>
						</tr>
						<tr>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000;'> ��������� 1 ������/����/������</td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #eaffdc;'> <input id="i25" type="text" value="" readonly> </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #eaffdc;'> <input id="i26" type="text" value="" readonly> </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #eaffdc;'> <input id="i27" type="text" value="" readonly> </td>
						</tr>
						<tr>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000;'> ��������� �������/�����/������� � ������/������� </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #fffcdc;'> <input id="i28" type="text" value=""> </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #fffcdc;'> <input id="i29" type="text" value=""> </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #fffcdc;'> <input id="i30" type="text" value=""> </td>
						</tr>
						<tr>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000;'> ������ � ����� </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #eaffdc;'> <input id="i31" type="text" value="" readonly> </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #eaffdc;'> <input id="i32" type="text" value="" readonly> </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #eaffdc;'> <input id="i33" type="text" value="" readonly> </td>
						</tr>
						<tr>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000;'> ��������� 1 ������/������� </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #eaffdc;'> <input id="i34" type="text" value="" readonly> </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #eaffdc;'> <input id="i35" type="text" value="" readonly> </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #eaffdc;'> <input id="i36" type="text" value="" readonly> </td>
						</tr>
						<tr>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000;'> ������ � ���� (������� ���) </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #eaffdc;'> <input id="i37" type="text" value="" readonly> </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #eaffdc;'> <input id="i38" type="text" value="" readonly> </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #eaffdc;'> <input id="i39" type="text" value="" readonly> </td>
						</tr>
						<tr>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000;'> ������� ��� ����� ������ </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #fffcdc;'> <input id="i40" type="text" value=""> </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #fffcdc;'> <input id="i41" type="text" value=""> </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #fffcdc;'> <input id="i42" type="text" value=""> </td>
						</tr>
						<tr>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000;'> ����� �� ������� </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #eaffdc;'> <input id="i43" type="text" value="" readonly> </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #eaffdc;'> <input id="i44" type="text" value="" readonly> </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #eaffdc;'> <input id="i45" type="text" value="" readonly> </td>
						</tr>
						<tr>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000;'> ����������� ������� (ROI) </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #eaffdc;'> <input id="i46" type="text" value="" readonly> </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #eaffdc;'> <input id="i47" type="text" value="" readonly> </td>
							<td style='border-bottom:solid 1px #000000; border-right:solid 1px #000000; background: #eaffdc;'> <input id="i48" type="text" value="" readonly> </td>
						</tr>
					</table>
					<br>
					�� ����� �������� ����������� �� ������  <a class="roistat-phone" href="tel:+78003010019">8 (800) 301-00-19</a><br>
					��� ���������� ������ �� ����� ����� <a href="/">/</a>
				</div>
			</div>
		</div>
	</section>
	<section class="tenthre" style="padding-top: 0px">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div style="background: #fffcdc; width:200px; padding: 10px; display: inline-block;">���� ��� ���������� �������������</div>
					<div style="background: #eaffdc; width:200px; padding: 10px; display: inline-block;">������������� ����������� ����</div>

						<div id="tm_builder_outer_content" class="tm_builder_outer_content" style="text-align: center; padding: 0px;">
							<a id="trigger1" class="tm_pb_button hover-green" href=""> ������������ PDF </a> 
								&nbsp;
							<a id="trigger2" class="tm_pb_button hover-green" href=""> ���������� ������ </a>
						</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>