<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "������ �������� ����-��������: ��������� ���������� �� LapkinLab");
$APPLICATION->SetPageProperty("description", "���������� ��������� �������� ����-�������� �� �������� LapkinLab &#9997;���������� landing page ��� ���� &#9997;���� �������� �������� � ������");
$APPLICATION->SetTitle("������ �������� ����-��������: ��������� ���������� �� LapkinLab");
?>

 <META HTTP-EQUIV="REFRESH" CONTENT="1; URL=https://lapkinlab.ru/kalkulyator-stoimosti-sajtov/raschet-stoimosti-minilendinga">

    <main>
        <div class="breadcrumbs">
            <div class="container_v2">
                <div class="breadcrumbs__items">
                    <div class="breadcrumbs__content">
                        <div class="breadcrumbs__wrap">
                            <div class="breadcrumbs__item">
                                <a href="/" class="breadcrumbs__item-link is-home" rel="home"
                                    title="�������">�������</a>
                            </div>
                            <div class="breadcrumbs__item">
                                <div class="breadcrumbs__item-sep">
                                    |
                                </div>
                            </div>
                            <div class="breadcrumbs__item">
								<a href="/kalkulyator-stoimosti-sajtov" class="breadcrumbs__item-link"
                                    rel="tag" title="����������� ��������� ������">����������� ��������� ������</a>
                            </div>
                            <div class="breadcrumbs__item">
                                <div class="breadcrumbs__item-sep">
                                    |
                                </div>
                            </div>
                            <div class="breadcrumbs__item">
                                <span class="breadcrumbs__item-target">������ ��������� �������� ����-��������</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <section class="calculator_block">
            <div class="container_v2">
                <h1>������ ��������� �������� ����-��������</h1>
                <div class="calculator">
                    
                        	<form action="/mail_post.php" method="post" class="wpcf7-form">
							<div style="display: none;">
							<input type="hidden" name="url" value="http://<?=$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']?>">
							</div>
                        <input type="hidden" name="your-email" value="������ ��������� �������� ����� ��������-��������">
                        <p></p>
                        <div class="total-up">
                            <div class="site-price">��������� �� <p></p>
                                <div class="price-number">10 000</div>
                                <p> <sup>*</sup> ���</p>
                            </div>
                        </div>
                        <div class="calculate">
                                <div class="calc-price-block calc-price-block-base">
                                <div class="calc-title">������� ����������</div>
                                <div class="calc-price-item">
                                              <label for="check1" class="label_check disabled chked c_on"><br>
                                                <input id="check1" checked="true" disabled="true" type="checkbox" name="d1" value="40000"><span>CMS</span><br>
                                              </label>
                                            </div>
                                <div class="calc-price-item">
                                              <label for="check2" class="label_check disabled chked c_on"><br>
                                                <input id="check2" checked="true" disabled="true" type="checkbox" name="d2" value="0"><span>�������</span><br>
                                              </label>
                                            </div>
                                <div class="calc-price-item">
                                              <label for="check3" class="label_check disabled chked c_on"><br>
                                                <input id="check3" checked="true" disabled="true" type="checkbox" name="d3" value="0"><span>����������� ���������</span><br>
                                              </label>
                                            </div>
                                <div class="calc-price-item">
                                              <label for="check6" class="label_check disabled chked c_on"><br>
                                                <input id="check6" checked="true" disabled="true" type="checkbox" name="d5" value="0"><span>�����������������</span><br>
                                              </label>
                                            </div>
                                <div class="calc-price-item">
                                              <label for="checkd4" class="label_check disabled chked c_on"><br>
                                                 <input id="checkd4" checked="true" disabled="true" type="checkbox" name="d4" value="0"><span>���������� �������</span><br>
                                              </label>
                                           </div>
                                <div class="calc-price-item">
                                              <label for="checkd4" class="label_check disabled chked c_on"><br>
                                                 <input id="checkd4" checked="true" disabled="true" type="checkbox" name="d4" value="0"><span>��������� ������ ����</span><br>
                                              </label>
                                           </div>
                                <p></p></div>
                                <p>
                                            <input type="hidden" name="1" value="40000">
                                          </p>
                                <div class="calc-price-block calc-price-block-other">
                                <div class="calc-title">������</div>
                                <div class="calc-price-item">
                                              <label for="check7" class="label_check"><br>
                                                <input id="check7" type="checkbox" name="6" value="3000"><span style="background-position: -5px -5px;">�������</span><span class="calc-price-plus">+3000</span><br>
                                              </label>
                                            </div>
                                <p></p></div>
                                <div class="calc-price-block calc-price-block-other">
                                <div class="calc-title">�������</div>
                                <div class="calc-price-item">
                                              <label for="check13" class="label_check c_on"><br>
                                                <input id="check13" type="checkbox" name="12" value="4500"><span style="background-position: -5px -5px;">�������</span><span class="calc-price-plus">+4500</span><br>
                                              </label>
                                            </div>
                                <div class="calc-price-item">
                                              <label for="check14" class="label_check"><br>
                                                <input id="check14" type="checkbox" name="13" value="5000"><span style="background-position: -5px -5px;">��������</span><span class="calc-price-plus">+5000</span><br>
                                              </label>
                                            </div>
                                <p></p></div>
                                <div class="calc-price-block">
                                <div class="calc-title">���������� (������)</div>
                                <div class="calc-price-item">
                                              <label for="check19" class="label_check"><br>
                                                <input id="check19" type="checkbox" name="18" value="3000"><span style="background-position: -5px -5px;">����� �������� �����</span><span class="calc-price-plus">+3000</span><br>
                                              </label>
                                            </div>
                                <div class="calc-price-item">
                                              <label for="check20" class="label_check"><br>
                                                <input id="check20" type="checkbox" name="19" value="2000"><span style="background-position: -5px -5px;">��������� �����</span><span class="calc-price-plus">+2000</span><br>
                                              </label>
                                            </div>
                                <div class="calc-price-item">
                                              <label for="check30" class="label_check"><br>
                                                <input id="check30" type="checkbox" name="29" value="5000"><span style="background-position: -5px -5px;">��������� ����� (��������)</span><span class="calc-price-plus">+5000</span><br>
                                              </label>
                                            </div>
                                <p></p></div>
                                <div class="calc-price-block">
                                <div class="calc-title">����������</div>
                                <div class="calc-price-item">
                                              <label for="check34" class="label_check"><br>
                                                <input id="check34" type="checkbox" name="33" value="15000"><span style="background-position: -5px -5px;">����� � ��������� �����������</span><span class="calc-price-plus">+15000</span><br>
                                              </label>
                                            </div>
                                <p></p></div>
                                <div class="calc-price-block">
                                <div class="calc-title">�����������</div>
                                <div class="calc-price-item">
                                              <label for="check38" class="label_check"><br>
                                                <input id="check38" type="checkbox" name="37" value="20000"><span style="background-position: -5px -5px;">SEO � ����������� (���������)</span><span class="calc-price-plus">+20000</span><br>
                                              </label>
                                            </div>
                                <div class="calc-price-item">
                                              <label for="check39" class="label_check"><br>
                                                <input id="check39" type="checkbox" name="38" value="7000"><span style="background-position: -5px -5px;">����������� �����������</span><span class="calc-price-plus">+7000</span><br>
                                              </label>
                                            </div>
                                <div class="calc-price-item">
                                              <label for="check40" class="label_check"><br>
                                                <input id="check40" type="checkbox" name="39" value="250"><span style="background-position: -5px -5px;">�����������</span><span class="calc-price-plus">+250 �� 1000 ��.</span><br>
                                              </label>
                                            </div>
                                <div class="calc-price-item">
                                              <label for="check41" class="label_check"><br>
                                                <input id="check41" type="checkbox" name="40" value="10000"><span style="background-position: -5px -5px;">����������� �������</span><span class="calc-price-plus">+10000</span><br>
                                              </label>
                                            </div>
                                <div class="calc-price-item">
                                              <label for="check42" class="label_check"><br>
                                                <input id="check42" type="checkbox" name="41" value="12500"><span style="background-position: -5px -5px;">���������� ����</span><span class="calc-price-plus">+12500</span><br>
                                              </label>
                                            </div>
                                <div class="calc-price-item">
                                              <label for="check43" class="label_check"><br>
                                                <input id="check43" type="checkbox" name="42" value="10000"><span style="background-position: -5px -5px;">���������</span><span class="calc-price-plus">+10000</span><br>
                                              </label>
                                            </div>
                                <p></p></div>
                                <div class="calc-price-block">
                                <div class="calc-title">������������� (� �����)</div>
                                <div class="calc-price-item">
                                              <label for="check44" class="label_check"><br>
                                                <input id="check44" type="checkbox" name="43" value="15000"><span style="background-position: -5px -5px;">�����������</span><span class="calc-price-plus">+15000</span><br>
                                              </label>
                                            </div>
                                <div class="calc-price-item">
                                              <label for="check45" class="label_check"><br>
                                                <input id="check45" type="checkbox" name="44" value="10000"><span style="background-position: -5px -5px;">��������������</span><span class="calc-price-plus">+10000</span><br>
                                              </label>
                                            </div>
                                <div class="calc-price-item">
                                              <label for="check46" class="label_check"><br>
                                                <input id="check46" type="checkbox" name="45" value="8000"><span style="background-position: -5px -5px;">� ���������� �����</span><span class="calc-price-plus">+8000</span><br>
                                              </label>
                                            </div>
                                <div class="calc-price-item">
                                              <label for="check47" class="label_check"><br>
                                                <input id="check47" type="checkbox" name="46" value="45000"><span style="background-position: -5px -5px;">����������� �������</span><span class="calc-price-plus">+45000</span><br>
                                              </label>
                                            </div>
                                <div class="calc-price-item">
                                              <label for="check48" class="label_check"><br>
                                                <input id="check48" type="checkbox" name="47" value="5000"><span style="background-position: -5px -5px;">��������� �����������</span><span class="calc-price-plus">+5000</span><br>
                                              </label>
                                            </div>
                                <div class="calc-price-item">
                                              <label for="check49" class="label_check"><br>
                                                <input id="check49" type="checkbox" name="48" value="10000"><span style="background-position: -5px -5px;">������������ �����</span><span class="calc-price-plus">+10000</span><br>
                                              </label>
                                            </div>
                                <p></p></div>
                                <p></p></div>
                        <div class="total-bottom">
                            <div class="site-price">��������� ��<p></p>
                                <div class="price-number">10 000</div>
                                <p> <sup>*</sup> ���</p>
                            </div>
                            <p>
                                <input class="price-hidden" type="hidden" name="your-site" value="60000">
                            </p>
                            <p></p>
                        </div>
                        <div class="calc-order">
                            <div>����������, ��������� ����� ��� ������. ��� ���� �������� �������������.</div>
                            <p><input type="text" name="your-name" required="required" placeholder="��� *"> <input type="tel"
                                    name="your-phone" required="required" placeholder="������� *"></p>
                            <div class="calc-price-item">
                                <label for="privacy" class="label_check1"> <input name="privacy" id="privacy" type="checkbox"
                                         required="required" value="0">
	<p style="display:none;"><input type="text" name="name" value=""></p>
                                    <span>� ��������
                                        <a class="hover_line" href="/privacy-policy" target="_blank">������� ��������
                                            ����������</a>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <p>
                            <input type="submit" class="calc-order-btn" value="��������">
                            <a class="tm_pb_button" href="https://docs.google.com/forms/d/e/1FAIpQLSfJdbhwnd0miOtpYpRLAql5bCsU4b5_VSk8R8lKEkRpvLMkdQ/viewform"
                                target="_blank">���� �� �������� �����</a>
                        </p>
                        <div class="calc-annotation"><sup>*</sup> ������ �������� ���������������. ��� ���������
                            ��������� � ���� �������� ��� ��������.</div>
                    </form>
                    <p></p>
                </div>
            </div>
        </section>
    </main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>