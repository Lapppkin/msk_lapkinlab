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

	<!--  �������  -->
	<section class="amocrm-top"><div class="amocrm-top__slider slider-top" id="top-slider">


    <div class="amocrm-top__slide amocrm-top__slide-1">
<div class="container">
  <div class="amocrm-top__wrap">
      <div class="desc-1" id="desc-1-1"><span class="desc-1__unvisible">������������� �������� ��������� ������ � ��������� ������ � amoCRM</span></div>
      <div class="desc-1__sub">��������� �� ������ ������ ��������</div>
  </div>
</div>
</div>        
    <div class="amocrm-top__slide amocrm-top__slide-2">
<div class="container">
  <div class="amocrm-top__wrap">
      <div class="desc-1" id="desc-1-2"><span class="desc-1__unvisible">����������� ������ �������� ��-�� ������������ ���������� � ��� � ������� ������</span></div>
      <div class="desc-1__sub">������������� � ������������� ��� ����������, �� ������� � ������</div>
  </div>
</div>
</div>        
    <div class="amocrm-top__slide amocrm-top__slide-3">
<div class="container">
  <div class="amocrm-top__wrap">
      <div class="desc-1" id="desc-1-2"><span class="desc-1__unvisible">��������� ����� �������������� ������ � �������� ��������</span></div>
      <div class="desc-1__sub">������������ �������� �� ����������</div>
  </div>
</div>
</div>  </div>
</section><!--  /������� -->
<!-- ����� -->
<section class="section-form">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
					<h1 style="display:none;">��������� amoCRM ��� ����</h1>
                    <div class="form-title">������ ��������� ������?</div>
                </div>
                <div class="col-md-12">
                        <form action="/mail_post.php" method="post" class="form" id="form2">
                            <div class="container-fluid">
                                    <div class="row">
                                            <div class="col-xl-4 col-sm-12">
                                              <input type="text" name="your-name" class="form-control" placeholder="���" required>
                                            </div>
                                            <div class="col-xl-4 col-sm-12">
                                              <input type="tel" name="your-phone" class="form-control" placeholder="�������" required>
                                            </div>
								<p style="display:none;"><input type="text" name="name" value=""></p>
                                            <div class="col-xl-4 col-sm-12">
                                                <div class="row">
                                                        <div class="col-xl-6 col-sm-12">
                                                                <button type="submit" class="btn form-btn">����!</button>
                                                        </div>
                                                        <div class="col-xl-6 col-sm-12">
                                                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfTqL6tOA92Y3SRrYWDoJ7wWNHEr-DFMXv6YWUgaY6DhBRmkw/viewform" target="_blank" class="btn form-btn">��������� ����</a>
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
    <!-- ������ ���� -->
    <section class="section-block section-two">
        <div class="section-row">            
            <div class="section-row__block">
                <div class="section-two__block">
                        <div class="main-title main-title_blue">�������� �������</div>
                        <ul class="main-list">
                            <li class="main-list__item"><span class="item-span">���</span> - ������������� ������, ���������� ������� � ��������</li>
                            <li class="main-list__item"><span class="item-span">�������������</span> - ������� �������� �����</li>
                            <li class="main-list__item"><span class="item-span">�������������</span> - ��������� ���� �� �������</li>
                        </ul>
                        <p class="paragraph">������ CRM-������� - ���������������� �������������, ��� ����� �������� ��� ������������� � ������� ���������.</p>
                </div>
                <div class="section-two__block">
                    <div class="main-title main-title_blue">���� CRM-������</div>
                    <p class="paragraph">�� �����:</p>
                    <ul class="main-list">
                            <li class="main-list__item">��� ������������� �������� ����������</li>
                            <li class="main-list__item">��� ���������� ���������</li>
                            <li class="main-list__item main-list__item_arrow-one">��� ������� ������ (���� ������,<br class=none> ��������, ������)</li>
                        </ul>
                        <p class="paragraph">�� ���� ���������:</p>
                        <ul class="main-list">
                                <li class="main-list__item">��������� ���������</li>                                
                                <li class="main-list__item main-list__item_arrow-two">���� ����������</li>
                            </ul>    
                </div>                
            </div>
            <div class="section-row__block section-row__block_white">
                    <div class="section-two__block section-two__block_black-text">
                            <div class="main-title main-title_blue">������������ <span class="span-title">amo</span>CRM</div>
                            <p class="paragraph paragraph_pdn">������������� �� ������������� ������� ������� ������:</p>
                            <ul class="main-list main-list_right">
                                <li class="main-list__item">���������� Digital �������;</li>
                                <li class="main-list__item">������������� �������� ������������� � ����� �����;</li>
                                <li class="main-list__item">������������� ������� ������;</li>
                                <li class="main-list__item">���������� ����������� �� ��������;</li>
                                <li class="main-list__item">������ �������� ��������� ���� �������������� ������ �� ��������;</li>
                                <li class="main-list__item">������ API: ����������� ����� ��������� �������;</li>
                                <li class="main-list__item">������ � ������������;</li>
                            </ul>
                            <p class="paragraph">�������� ��������� � ���������� �������� ���������</p>
                            <p class="paragraph">˸���� ���������� � ������������ ���������� ��������</p>
                    </div>
            </div>
        </div>
    </section>

    <!-- ������ ���� -->
    <section class="section-three">
        <div class="section__title section__title_blue section__title_section-three">������� ����</div>
        <p class="section-three__paragraph">������������ ������� �������� �� ������� ����� ������� ������, ������� ��������� �� ������� � ����������, � ����� ������� ������.</p>
    </section>

    <!-- ��������� ���� -->
    <section class="section-block section-four">
            <div class="section-row">
                    <div class="section-row__block section-row__block_light">
                            <div class="section__title section__title_blue">������� <br>������</div>
                            <p class="paragraph paragraph__image">��� ������������������ ������, ������� ����� ��������� ������������� ������ ������, ��� �� � ��� ����� ��� ��������� �� �������</p>
                            <ul class="main-list">
                                    <li class="main-list__item"><span class="item-span">�������� ������� �������:</span> �� ������ ����� �������� ������ ������ ��������� ���� �������, � �� ���� �������/������. </li>
                                    <li class="main-list__item"><span class="item-span">�������� ���������� ����������:</span> ������ �������� �� ������ ����� �������.</li>
                                    <li class="main-list__item"><span class="item-span">������ ������</span> ��� �������� � �������� ���������� (����� �� ����� ����� ��������� ������ ������)</li>
                                    <li class="main-list__item"><span class="item-span">��������� ���������� �������</span> (��������), �� ������� ������� ��������� �� ������ ����� � ������, � ������������� ����������� ����� ���������� ������� �� ������ ����� �������.</li>
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
                                                <p>������ �������</p>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="line">
                                        <div class="line__text">
                                            <p>��������� ��</p>
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
                                                    <p>������� ��</p>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="line">
                                            <div class="line__text">
                                                <p>�������� ��</p>
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
                                                        <p>����������</p>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="line">
                                                <div class="line__text">
                                                    <p>���������� ��������</p>
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
                                                            <p>������� ��������</p>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="line">
                                                    <div class="line__text">
                                                        <p>��������� ����</p>
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
                                                                <p>������� ����</p>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    
                        </div>
                             
                    </div>
                </div>
    </section>

    <!-- ����� ���� -->
    <section class="section-five">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                        <div class="section__title section__title_blue section__title_five">�������<br> ������ <br>� <span class="span-title">amo</span>CRM </div>
                </div>
                <div class="col-lg-7 col-md-12">
                        <ul class="main-list main-list_five">
                                <li class="main-list__item main-list__item_five">������������ ������� ������ �������������� ��� ���� ������</li>
                                <li class="main-list__item main-list__item_five">����������, ��������� � ������� ������� ����� ����� ������� </li>
                                <li class="main-list__item main-list__item_five">������������ �������������� ������� �� ����� � ����� ��� ���������� �������� �� ������ ���� �������</li>
                                <li class="main-list__item main-list__item_five">��������� ������� ������� ������ ���� </li>
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

        <!-- ������ ���� -->
        <section class="section-five">
                <div class="section__title section__title_blue">��������� ���� <br> ������������� </div>  
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-5 col-md-12">
                                <ul class="main-list main-list_section-six">
                                        <li class="main-list__item">������������ ����� ������������� �������� (����� ������ � �����������) ��� ������������� (�� ������� ����������), ��� � �� ������ (������) � ����� ���������� ������� ��������� � ��������������</li>
                                        <li class="main-list__item">���� ��� ��������� ��������, �� ����� ������ ������� ��� �� ������� </li>
                                        <li class="main-list__item">��� �������� amoCRM ������������� ��������� ��� ��������� ��� ���������� �� ������� ���������</li>
                                        
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

        <!-- ������� ���� -->    
        <section class="section-seven">
                <div class="section__title section__title_white">Digital ������� </div>
                <p class="paragraph paragraph_seven-white">amoCRM ���� ����� �������� ������ � �������� �� �� �������. ������� ���� ������� ������ �� ����� ���������, ���� ������ ������ ������ ��� ����������� ���� ��� ����� �������, ���� �������� ��� � �������� ������, ���� �������� ��� ������� ������� �� ����� ��������, � ����� ����� ������� ������� ���������� �������������� ������� �� ������ ������ �������.</p>
                <div class="section-seven__image">
                        <img src="img/6.png" alt="">
                    </div>
            </section> 

            <!-- ������� ���� -->
            <section class="section-seven">                    
                    <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
                                        <div class="section__title section__title_white section__title_seven">��� ������ � <span class="span-title">amo</span>CRM </div>
                                        <p class="paragraph paragraph_eight-white">������ ��� ��������� ����� � amoCRM - ������ ������, ���������� ������� ������� � �� �� ������ ����������� ������ � ���������� �������������� ��������. ����������� �������������� ���������� ������: �����, ������������� ��� ������, � ���� ��������� ����������� � amoCRM � ������ ���� �������. ��� ���� �� ������ ����� ������ �� ������� amoCRM ������������� ������� ����� ������ � �������� ��� ������� ���������.</p>    
                                </div>
                                <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
                                        <div class="section-five__image">
                                                <img src="img/7.png" alt="">
                                            </div>
                                </div>
                            </div>
                        </div>
                </section> 

                <!-- ������� ���� -->
                <section class="section-seven">
                        <div class="section__title section__title_white">���������� � ������ </div>
                        <p class="paragraph paragraph_seven-white">����������� ����������� �������� ������� ��� �� ������������� ������� ���������� ���� � �������� � �������! ���������� ����������� ����� �� ����� �����. ����� ���������� �� �������� ������� ��� ������ ����� ������������� �������� � amoCRM.</p>
                        <div class="section-seven__image">
                                <img src="img/8.jpg" alt="">
                            </div>
                    </section> 
    
    <!-- ������� ���� -->                
    <section class="section-ten">
            <div class="section__title section__title_no-pdn">���������� � ����� <br> ����������</div>
            <p class="paragraph paragraph_ten">amoCRM ������ ����������� ���������� � ���������� � ������������� �������. � �� ������� �� ������� "�������" ����� ���� ����� ��������. � ��������� �������� ��� ���������� ����� �������� � ��������� �������. � ����� ���������� - ��������� ����� ����� �� ������� ������� ������ ��� ����������� ������.</p>
    </section>  
    
    <!-- ������������ ���� -->
    <section class="section-eleven">
            <div class="section__title section__title_pdn">������ � �����������</div>
            <p class="paragraph paragraph_eleven">amoCRM �������� ������� �� ���, ����� �� ������ ������ ���� ������������� ��������. ���� ������ �� ���������� - ������� ������������� �� ����. �������, ��� ������ �����, ��� ��������� ������ � amoCRM - �� ���������� �����, ���� � ��� ���� ���������, � ��������� ����������� ������� �� ����� ������ � ������������ ������.</p>
    </section>

   <!-- ����������� ���� -->
    <section class="section-twelve">
            <div class="section__title section__title_blue section__title_twelve">���������</div>
            <p class="paragraph paragraph_twelve">� amoCRM ������������� ��������� ������������� ���� ������ �� �������� ������� ������, ���������� ��� ������ ������� ��� ��� �������. �� ������ ������� ��� �������� ������ �� ����� ������ ��� ���������� � ������ �������� �� ����������� ��������� ��� ������.</p>
    </section> 
    
    <!-- ����������� ���� -->
    <section class="section-thirteen">
            <div class="container-fluid">
                <div class="row">
                        <div class="hidden-desktop col-md-12">
                                <div class="section-thirteen__title">��������� <br>�� �������</div>
                                <p class="paragraph section-thirteen__paragraph">��������� �� ������� ������ �������� ������� �� ����� ������ �� ������� �������� � ����������� ����������� ���������� ������, ����� ������� ������ �������������� �������.</p>
                            </div>
                        <div class="col-xl-7 col-md-12">
                                <div class="section-thirteen__image">
                                    <img src="img/11-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 hidden-mobile">
                                <div class="section-thirteen__title">��������� <br>�� �������</div>
                                <p class="paragraph section-thirteen__paragraph">��������� �� ������� ������ �������� ������� �� ����� ������ �� ������� �������� � ����������� ����������� ���������� ������, ����� ������� ������ �������������� �������.</p>
                            </div>
                </div>
                 
            </div>
    </section>  
    
    <!-- ������������� ���� -->
    <section class="section-fourteen">
            <div class="section-fourteen__title">��������� �� ����������</div>
            <p class="paragraph section-fourteen__paragraph">��������� �� ������� ���������� ������� ������, ���������� ���� � ������������� �� ������� ���������� - �� ���� �������.</p>
    </section> 
    
    <!-- ����������� ���� -->
    <section class="section-fifteen">
            <div class="section-fifteen__title">��������� �� �����</div>
            <p class="paragraph section-fifteen__paragraph">��������� �� ����� ��������� ��������� KPI �����������, ������� � �������� � ����� � � �������� ������� ������, ��� � ��� ���������� �������� � �������� �����������.</p>
            <div class="section-fifteen__image">
                <img src="img/13.jpg" alt="">
            </div>
    </section>

    <!-- ������������ ���� -->
    <section class="section-sixteen">
            <div class="section__title section__title_pdn">API, ���������� <br> � �������</div>
            <p class="paragraph paragraph_ten paragraph_sixteen">��������� ����� ����� ������������ - �������� ������ � amoCRM ��������� � ����������. ���� � amoCRM ���� ������� ������� ����������, � ������� ������� ����� � ��� ����� ������� email-��������, ������������� ������� � ����������, ������� ����� � ������� �������� ��������� Dropbox � ������ ������. � ��������� ��������� API �� ������ �������� ��������� ��� ����, ������� ����������� �������, ����� ��������� ����������� amoCRM.</p>
    </section>
    
    <!-- ����������� ���� -->
    <section class="section-seventeen">
            <div class="container-fluid">
                <div class="row">
                        <div class="col-xl-7 col-md-12">                                
                                        <div class="section__title section__title_seventeen">������ �������</div>
                                        <p class="paragraph section-seventeen__paragraph">��������� ���������� amoCRM ��������� ������������ �������. ���, ��� ����� -  ������� ���������� amoCRM, ��������� ���, ����� ������� � ������ �� ������ "�������������". amoCRM ������� �������� ������, ������ ��� ���������� ������, ������ � �������� � �������� ������ � ����.</p>
                                        <p class="paragraph section-seventeen__paragraph">��� ����������� ��������� ��������� �����, ����� ���������� ������ ����� ������� ����� ��������� �����������. �� ����� �������, �� �� ��������� �� ������ �������������� ������� - ������ ������� �������, � ������� �� ���������� �����, ������ ���� ����� ����, ���������� ����������. ������� ��� �������, � � amoCRM ��� � ������!</p>
                                    
                                
                            </div>
                            <div class="col-xl-5 col-md-12">
                                    <div class="section-seventeen__image">
                                            <img src="img/15.png" alt="">
                                    </div>
                                    
                            </div> 
                </div>
            </div>
    </section> 

    <!-- �������������� ���� -->
    <section class="section-eighteen">
            <div class="container-fluid">
                <div class="row">
                        <div class="col-md-7 col-sm-12">                                
                                        <div class="section__title section__title_eighteen">Iphone � Android</div>
                                        <p class="paragraph section-eighteen__paragraph">� ���������� ������������ amoCRM ����� �������� ��� � ����� ��� ������. ���������� �������� ������ � ��������� ������������� ���������� ������ ��� ��������. �� ����� ������� - ������ ��� ������� ���-������ �������� � ����� ��������!</p>
                                        <div class="content-block__links mobile-app-links">
                                                <a href="https://itunes.apple.com/ru/app/amocrm-2.0/id1128315486?mt=8" target="_blank" class="mobile-app-links_item icon icon-appstore-ru"></a>
                                                <a href="https://play.google.com/store/apps/details?id=com.amocrm.amocrmv2" target="_blank" class="mobile-app-links_item icon icon-google-play-ru"></a>
                                            </div>
                            </div>                             
                </div>
            </div>
    </section> 

    <!-- ������������� ���� -->
    <section class="section-nineteen">
            <div class="section__title section__title_pdn">��������������� <br>�������� ������</div>
            <p class="paragraph paragraph_ten paragraph_sixteen">amoCRM ���� ����� ��������� ������� ������ ���������� �� ������ ������ ���������� �� ������� ������� � ���� ��������� � ��������. � �������� ��-�������� ����������� ����� ���������, � ����������� ����� ������� ����� ������������� � ����������� � �������� �����������. �� ����� ������� - �������� ����� ������������, ��������� ���� ����� � ����������� ��� ����.</p>
    </section> 
    
    <!-- ��������� ���� -->
    <section class="section-twenty">
            <div class="section__title section__title_twenty">��������� amoCRM</div>
            <div class="container-fluid">
                <div class="row">
                        <div class="col-xl-6 col-md-12">                           
                            <p class="paragraph section-twenty_paragraph">������ �� ����� �������������� ���������� ��� ������� � ��������� - ������ �� ������ �������� ����� � amoCRM! � ����� �������, �� ��� ������������� � ��������� �������. ��� ������� ����� �� ������� ����������� �� ������� � ������ ��������, ������� � �������� � ������ ��������. � ���� ����� ����������� ���, �� � ������ ����������� ����� �������� ��� ����������� �� ������ ����������. � ��, ��� ������� �������� �� iPhone � Android.</p>
                        </div>  
                        <div class="col-xl-6 col-md-12">
                            <div class="section-twenty__iamge">
                                <img src="img/17.jpg" alt="">
                            </div>
                        </div> 
                </div>
            </div>
    </section> 

    <!-- �������� ������ ���� -->
    <section class="section-twentyone">
            <div class="section__title section__title_twenty">����������<br> ������������</div>
            <div class="container-fluid">
                <div class="row">
                        <div class="col-xl-6 col-md-12">                           
                            <p class="paragraph section-twenty_paragraph">������ �� ������� �������������� � ����� ��������� ����� � amoCRM � �� ����� ���� � ���� ������ ��� ���. ���������� ����� email, � ��� ������� �������� �����������, ��������� � �������� � ����� �������� � ���� - ��� ������ � ������.</p>
                            <p class="paragraph section-twenty_paragraph section-twenty_paragraph-nopdn">����� ����������: �� ��� ��������� ���������.</p>
                        </div>  
                        <div class="col-xl-6 col-md-12">
                            <div class="section-twenty__iamge">
                                <img src="img/18.jpg" alt="">
                            </div>
                        </div> 
                </div>
            </div>
    </section> 

    <!-- �������� ������ ���� -->
    <section class="section-twenty">
            <div class="section__title section__title_twenty">���������� <br>salesbot</div>
            <div class="container-fluid">
                <div class="row">
                        <div class="col-xl-6 col-md-12">                           
                            <p class="paragraph section-twenty_paragraph">������ �� ����� �������������� ���������� ��� ������� � ��������� - ������ �� ������ �������� ����� � amoCRM! � ����� �������, �� ��� ������������� � ��������� �������. ��� ������� ����� �� ������� ����������� �� ������� � ������ ��������, ������� � �������� � ������ ��������. � ���� ����� ����������� ���, �� � ������ ����������� ����� �������� ��� ����������� �� ������ ����������. � ��, ��� ������� �������� �� iPhone � Android.</p>
                        </div>  
                        <div class="col-xl-6 col-md-12">
                            <div class="section-twenty__iamge">
                                <img src="img/19.jpg" alt="">
                            </div>
                        </div> 
                </div>
            </div>
    </section>   

    <!-- �������� ������ ���� -->
    <section class="section-twentytwo">
            <div class="section__title section__title_white">���������� � �������<br> ����������� </div>
            <p class="paragraph paragraph_seven-white paragraph_twentytwo">������� ����������� ������� ��� ������ � ����������� ���������. ������ �� ������ ������ �����������, ������� ���� ��������� � ������, � ���, ��� ������������. �� ������ � ������ ������ ��������� ������� � ���� - ���������, ��������� ��� ��� �������� ���������. ������� ����������� �������� �������� �������� �� ��������.</p>
            <div class="section-seven__image">
                    <img src="img/20.png" alt="">
                </div>
        </section>

        <!-- �������� ��������� ���� -->
        <section class="section-twentythree">
                <div class="section__title section__title_white">Digital �������<br> ���������� </div>
                <p class="paragraph paragraph_seven-white paragraph_twentytwo">amoCRM ���� ���������� �������� � ������� �� �� ��������� �������. ������� ������� ��, ����� ��������� ���������� ���� ���������� �����������, ���� ���������� ����� ���������� ������ ����� ��������� �������, ���� ������� ������ ��� ������ ��������� �� ����� ���������, ������� ������������ ������� � ������ ������, �������� ������ ��������� � �������� � ������ ������.</p>
                <div class="section-seven__image">
                        <img src="img/21.jpg" alt="">
                    </div>
            </section>

            <!-- �������� ����� ���� -->
            <section class="section-block section-two">
                    <div class=" section-row section-row_two"> 
                        <div class="section-row__block section-row__block_left">
                                <div class="section__title section__title_price">���� � ������</div> 
                            <div class="section-two__block section-two__block_black section-two__block_black-one">
                                <div class="price-block">
                                    <h2 class="price-block__title">�������</h2>
                                    <div class="price-block__cost">
                                        <p>499</p>
                                        <div class="image">
                                                <img src="img/icon_rub.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <p class="paragraph">��� ������� �������� � ��������� ������� ������</p>                                    
                                    <ul class="main-list main-list_nopdn">
                                        <li class="main-list__item main-list__item_icon">�������� ������ � ���������</li>
                                        <li class="main-list__item main-list__item_icon">���������� � ������ � Google Universal</li>
                                        <li class="main-list__item main-list__item_icon">����� � ����������� ����������</li>
                                            <li class="main-list__item main-list__item_icon">��������� ������ ������ � ������ � ��������</li>
                                    </ul>
                            </div>
                            <div class="section-two__block section-two__block_black section-two__block_black-two">
                                    <div class="price-block">
                                        <h2 class="price-block__title">�����������</h2>
                                        <div class="price-block__cost">
                                            <p>999</p>
                                            <div class="image">
                                                    <img src="img/icon_rub.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="paragraph">��� ���, ��� ����� �������������� ���������</p>                                    
                                        <ul class="main-list main-list_nopdn">
                                            <li class="main-list__item main-list__item_icon">������ �������� � �������������� ��������� �����</li>
                                            <li class="main-list__item main-list__item_icon">�������������� ���������� �����</li>
                                            <li class="main-list__item main-list__item_icon">KPI � ���� ������ ��� ����������</li>
                                                <li class="main-list__item main-list__item_icon">����������� ��������� �������� �����</li>
                                        </ul>
                                </div>
                                <div class="section-two__block section-two__block_black section-two__block_black-three">
                                        <div class="price-block">
                                            <div class="price-block__title">����������������</div>
                                            <div class="price-block__cost">
                                                <p>1 499</p>
                                                <div class="image">
                                                        <img src="img/icon_rub.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <p class="paragraph">��� ���, ��� ���������� ���������� �������� ���������� �����</p>                                    
                                            <ul class="main-list main-list_nopdn">
                                                <li class="main-list__item main-list__item_icon">������� �����</li>
                                                <li class="main-list__item main-list__item_icon">������������� ������ � ��������� ������ �� �����</li>
                                            </ul>
                                    </div>
                        </div>
                        <div class="section-row__block section-row__block_white section-row__block_right">
                                <div class="section-two__block section-two__block_new section-two__block_first">
                                        <div class="price-block__title price-block__title_white">����� <br> �����-������</div>  
                                        <p class="paragraph paragraph_white">��� ���, ��� ������ ������ ���� ������ � �������� ���������� ����� ������ ��������</p> 
                                        <div class="block-price">
                                            <div class="block-price__cost">4 990</div>
                                            <div class="block-price__text">
                                                <p class="par">���/���</p>
                                                <p class="par">�� 2 �������������</p>
                                            </div>
                                        </div>
                                </div>
                                <div class="section-two__block section-two__block_new">
                                        <div class="price-block__title price-block__title_white">����� <br> �����-��</div>  
                                        <p class="paragraph paragraph_white">��� �������� �������, ��� ��� ������ ������ � �� ����� �������� �����������</p> 
                                        <div class="block-price">
                                            <div class="block-price__cost">14 990</div>
                                            <div class="block-price__text">
                                                <p class="par">���/���</p>
                                                <p class="par">�� 5 �������������</p>
                                            </div>
                                        </div>
                                </div>
                        </div>
                    </div>
                </section>  

                <!-- �������� ������ ���� -->
                <section class="section-last">
                        <div class="main-title main-title_blue">������ �� ��������� <span class="span-title">amo</span>CRM ��� ������ �������</div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-6 col-md-12">
                                        <h2 class="main-title main-title_little">amoCRM-��������:</h2>
                                        <ul class="main-list main-list_white">
                                                <li class="main-list__item">����������� amoCRM ������� � ����� ��� � ������-������</li>
                                                <li class="main-list__item">�������� ������ � amoCRM, ���������� ���������</li>
                                                <li class="main-list__item">���������� � ������, ���������� � �������� � ����� � amoCRM</li>
                                                    <li class="main-list__item">��������� ������� ������</li>
                                                    <li class="main-list__item">Digital � ��������� (�������������� ���������� ������� � ���.����� (Facebook, ���������) � �������� ������ amoCR</li>
                                                    <li class="main-list__item">�������� ����� �������������, ��������� ����, ������������� ��������� ���������� ����)</li>
                                                    <li class="main-list__item">��������� �������� � amoCRM ��� ��������� ������ ������� (�������������� �����, �������, �������������� �����������)</li>
                                            </ul>
                                            <h2 class="main-title main-title_little main-title_little-white">���������:</h2>
                                            <ul class="main-list main-list_white">
                                                    <li class="main-list__item">�� 55 000�. (��� ������ � �������-������������);</li>
                                                    <li class="main-list__item">�� 37 000�. (��� ��������� �������).</li>
                                                    
                                                </ul>
                                                <h2 class="main-title main-title_little">amoCRM - ����������:</h2>
                                                <ul class="main-list main-list_white">
                                                        <li class="main-list__item">����� ������ ������.</li>
                                                        <li class="main-list__item">���������� ������ ������.</li>
                                                        <li class="main-list__item">���������� ������� ���������, ������-��������� �������, �������� ���������.</li>
                                                            <li class="main-list__item">���������� ������������ ������ (���������-���, ��, ��������).</li>
                                                            <li class="main-list__item">�������� ��������, �������, ��������� ������, ������������� ����� ������.</li>
                                                            
                                                    </ul>
                                                    <h2 class="main-title main-title_little main-title_little-white">���������: <span class="thin">������� �� ������ ����� � �������������� �������������.</span></h2>
                                </div>
                                <div class="col-xl-6 col-md-12">
                                        <h2 class="main-title main-title_little">amoCRM � ��������-�����������:</h2>
                                        <ul class="main-list main-list_white">
                                                <li class="main-list__item">�������� ������, Landing page</li>
                                                <li class="main-list__item">��������� ��������</li>
                                                <li class="main-list__item">SEO-����������� ����</li>
                                            </ul>
                                            <h2 class="main-title main-title_little main-title_little-white">���������: <span class="thin">������� �� ������ ����� � �������������� �������������.</span></h2>
                                            <h2 class="main-title main-title_little">amoCRM � IT-������:</h2>
                                            <ul class="main-list main-list_white">
                                                    <li class="main-list__item">�������� ��������� ������� ������, ����������, ������� ROI</li>
                                                    <li class="main-list__item">���������� � 1�-������������.</li>
                                                    <li class="main-list__item">���������� � ����������� �� ���������� ������� � ����������.</li>
                                                    <li class="main-list__item">���������� �� ������� ����������� ���������.</li>
                                                    <li class="main-list__item">���������� � ��������� ���������.</li>
                                                    <li class="main-list__item">���������������� �������������� ���������� ������� � ��������� amoCRM ��� ���.</li>
                                                        
                                                </ul>
                                                <h2 class="main-title main-title_little main-title_little-white">���������: <span class="thin">������� �� ������ ����� � �������������� �������������.</span></h2>                  
                                                 
                                </div>
                            </div>
                        </div>    
        </section> 
        <!--  �������  -->
<section class="amocrm-top"><div class="amocrm-top__slider slider-top" id="top-slider2">
    
      
    <div class="amocrm-top__slide amocrm-top__slide-1">
<div class="container">
  <div class="amocrm-top__wrap">
      <div class="desc-1" id="desc-2-1"><span class="desc-1__unvisible">������������� �������� ��������� ������ � ��������� ������ � amoCRM</span></div>
      <div class="desc-1__sub">��������� �� ������ ������ ��������</div>
  </div>
</div>
</div>        
    <div class="amocrm-top__slide amocrm-top__slide-2">
<div class="container">
  <div class="amocrm-top__wrap">
      <div class="desc-1" id="desc-2-2"><span class="desc-1__unvisible">����������� ������ �������� ��-�� ������������ ���������� � ��� � ������� ������</span></div>
      <div class="desc-1__sub">������������� � ������������� ��� ����������, �� ������� � ������</div>
  </div>
</div>
</div>        
    <div class="amocrm-top__slide amocrm-top__slide-3">
<div class="container">
  <div class="amocrm-top__wrap">
      <div class="desc-1" id="desc-2-3"><span class="desc-1__unvisible">��������� ����� �������������� ������ � �������� ��������</span></div>
      <div class="desc-1__sub">������������ �������� �� ����������</div>
  </div>
</div>
</div>  </div>
</section><!--  /������� -->
<!-- ����� -->
<section class="section-form">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-title">������ ��������� ������?</div>
                </div>
                <div class="col-md-12">
                        <form action="/mail_post.php" method="post" class="form" id="form2">
                            <div class="container-fluid">
                                    <div class="row">
                                            <div class="col-xl-4 col-sm-12">
                                              <input type="text" name="your-name" class="form-control" placeholder="���" required>
                                            </div>
                                            <div class="col-xl-4 col-sm-12">
                                              <input type="tel" name="your-phone" class="form-control" placeholder="�������" required>
                                            </div>
								<p style="display:none;"><input type="text" name="name" value=""></p>
                                            <div class="col-xl-4 col-sm-12">
                                                <div class="row">
                                                        <div class="col-xl-6 col-sm-12">
                                                                <button type="submit" class="btn form-btn">����!</button>
                                                        </div>
                                                        <div class="col-xl-6 col-sm-12">
                                                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfTqL6tOA92Y3SRrYWDoJ7wWNHEr-DFMXv6YWUgaY6DhBRmkw/viewform" target="_blank" class="btn form-btn">��������� ����</a>
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