$(document).ready(function() {
var start_pos=$('#aside2').offset().top;
 start_pos=start_pos-35;
 $(window).scroll(function(){
  if ($(window).scrollTop()>=start_pos) {
      if ($('#aside1').hasClass()==false) $('#aside1').addClass('vizible');
  }
  else $('#aside1').removeClass('vizible');
 });
});


function number_format(number, decimals, dec_point, thousands_sep) {
  number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + (Math.round(n * k) / k)
        .toFixed(prec);
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n))
    .split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '')
    .length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1)
      .join('0');
  }
  return s.join(dec);
}

  $(function(){
    $("#range1").ionRangeSlider({
    grid: true,
    disable: true,
    from: 0,
    values: [
      "�� ������", "0-20", "21-50",
      "51-100", "101-250",
      "250-1000"
    ],
    onChange: function (data) {
      $("#range2").data("ionRangeSlider").update({"disable": false});
          var $result = $("#result_2");
           if(data.from == '0'){$result.html(" " );}
           if(data.from == '1'){$result.html("0-20" );}
           if(data.from == '2'){$result.html("21-50" );}
           if(data.from == '3'){$result.html("51-100" );}
           if(data.from == '4'){$result.html("101-250" );}
           if(data.from == '5'){$result.html("250-1000" );}
    }
    });
    $("#range2").ionRangeSlider({
    grid: true,
    disable: true,
    from: 0,
    values: [
      "�� ������", "1-10", "11-20",
      "21-50", "51-150",
      "150+"
    ],
    onChange: function (data) {
      $("#range3").data("ionRangeSlider").update({"disable": false});
          var $result = $("#result_3");
           if(data.from == '0'){$result.html(" " );}
           if(data.from == '1'){$result.html("1-10" );}
           if(data.from == '2'){$result.html("11-20" );}
           if(data.from == '3'){$result.html("21-50" );}
           if(data.from == '4'){$result.html("51-150" );}
           if(data.from == '5'){$result.html("150+" );}
    }
    });
    $("#range3").ionRangeSlider({
    grid: true,
    disable: true,
    from: 0,
    values: [
      "�� ������", "������", "�����-���������",
      "���������", "�����-��������� (����� ��� � ���)",
      "����� � ���������� ����� 1 ���. �������", "����� 2-� �������",
      "����� 4-� �������"
    ],
    onChange: function (data) {
      $("#range4").data("ionRangeSlider").update({"disable": false});
          var $result = $("#result_4");
          if(data.from == '0'){$result.html(" " );}
          if(data.from == '1'){$result.html("������" );}
          if(data.from == '2'){$result.html("�����-���������" );}
          if(data.from == '3'){$result.html("���������" );}
          if(data.from == '4'){$result.html("�����-��������� (����� ��� � ���)" );}
          if(data.from == '5'){$result.html("����� � ���������� ����� 1 ���. �������" );}
          if(data.from == '6'){$result.html("����� 2-� �������" );}
          if(data.from == '7'){$result.html("����� 4-� �������" );}
    }
    });
    $("#range4").ionRangeSlider({
    grid: true,
    disable: true,
    from: 0,
    values: [
      "�� ������", "����������� ��� �����������", "������",
      "�������", "�������",
      "������ ����� ������"
    ],
    onChange: function (data) {
      $("#range5").data("ionRangeSlider").update({"disable": false});
          var $result = $("#result_5");
           if(data.from == '0'){$result.html(" " );}
           if(data.from == '1'){$result.html("����������� ��� �����������" );}
           if(data.from == '2'){$result.html("������" );}
           if(data.from == '3'){$result.html("�������" );}
           if(data.from == '4'){$result.html("�������" );}
           if(data.from == '5'){$result.html("������ ����� ������" );}
    }
    });
    $("#range5").ionRangeSlider({
    grid: true,
    disable: true,
    from: 0,
    values: [
      "�� ������", "������ ������������", "����������� ����������� �����",
      "���� / ����������� �� �����������", "�� �����������",
      "����� ����"
    ],
    onChange: function (data) {
      $("#range16").data("ionRangeSlider").update({"disable": false});
          var $result = $("#result_6");
           if(data.from == '0'){$result.html(" " );}
           if(data.from == '1'){$result.html("������ ������������" );}
           if(data.from == '2'){$result.html("����������� ����������� �����" );}
           if(data.from == '3'){$result.html("���� / ����������� �� �����������" );}
           if(data.from == '4'){$result.html("�� �����������" );}
           if(data.from == '5'){$result.html("����� ����" );}
    }
    });
    $("#range7").ionRangeSlider({
    grid: true,
    from: 0,
    values: [
        "�� ������", "������������� ����", "���� �����", "�������� �������", "������"
    ],
    onChange: function (data) {
      $("#range1").data("ionRangeSlider").update({"disable": false});
          var $result = $("#result_1");
           if(data.from == '0'){$result.html(" " );}
           if(data.from == '1'){$result.html("������������� ����" );}
           if(data.from == '2'){$result.html("���� �����" );}
           if(data.from == '3'){$result.html("�������� �������" );}
           if(data.from == '4'){$result.html("������" );}
    }
    });
    $("#range8").ionRangeSlider({
    grid: true,
    disable: true,
    from: 0,
    values: [
        "�� ������", "��", "���"
    ],
    onChange: function (data) {
      $("#range9").data("ionRangeSlider").update({"disable": false});
          var $result = $("#result_8");
           if(data.from == '0'){$result.html(" " );}
           if(data.from == '1'){$result.html("��" );}
           if(data.from == '2'){$result.html("���" );}
    }
    });
    $("#range9").ionRangeSlider({
    grid: true,
    disable: true,
    from: 0,
    values: [
        "�� ������", "��", "���"
    ],
    onChange: function (data) {
      $("#range11").data("ionRangeSlider").update({"disable": false});
          var $result = $("#result_9");
           if(data.from == '0'){$result.html(" " );}
           if(data.from == '1'){$result.html("��" );}
           if(data.from == '2'){$result.html("���" );}
    }
    });
    $("#range10").ionRangeSlider({
    grid: true,
    disable: true,
    from: 0,
    values: [
        "�� ������", "��", "���"
    ],
    onChange: function (data) {
      $("#range12").data("ionRangeSlider").update({"disable": false});
          var $result = $("#result_10");
           if(data.from == '0'){$result.html(" " );}
           if(data.from == '1'){$result.html("��" );}
           if(data.from == '2'){$result.html("���" );}
    }
    });
    $("#range11").ionRangeSlider({
    grid: true,
    disable: true,
    from: 0,
    values: [
        "�� ������", "���� �� ����������", "���� ����������"
    ],
    onChange: function (data) {
      $("#range10").data("ionRangeSlider").update({"disable": false});
          var $result = $("#result_11");
           if(data.from == '0'){$result.html(" " );}
           if(data.from == '1'){$result.html("���� �� ����������" );}
           if(data.from == '2'){$result.html("���� ����������" );}
    }
    });
    $("#range12").ionRangeSlider({
    grid: true,
    disable: true,
    from: 0,
    values: [
        "�� ������", "��", "���"
    ],
    onChange: function (data) {
      $("#range13").data("ionRangeSlider").update({"disable": false});
          var $result = $("#result_12");
           if(data.from == '0'){$result.html(" " );}
           if(data.from == '1'){$result.html("��" );}
           if(data.from == '2'){$result.html("���" );}
    }
    });
    $("#range13").ionRangeSlider({
    grid: true,
    disable: true,
    from: 0,
    values: [
        "�� ������", "���", "��"
    ],
    onChange: function (data) {
      $("#range14").data("ionRangeSlider").update({"disable": false});
          var $result = $("#result_13");
           if(data.from == '0'){$result.html(" " );}
           if(data.from == '1'){$result.html("���" );}
           if(data.from == '2'){$result.html("��" );}
    }
    });
    $("#range14").ionRangeSlider({
    grid: true,
    disable: true,
    from: 0,
    values: [
        "�� ������", "���", "��"
    ],
    onChange: function (data) {
      $("#range14").data("ionRangeSlider").update({"disable": false});
          var $result = $("#result_14");
           if(data.from == '0'){$result.html(" " );}
           if(data.from == '1'){$result.html("���" );}
           if(data.from == '2'){$result.html("��" );}
    }
    });
    $("#range15").ionRangeSlider({
    grid: true,
    disable: true,
    from: 0,
    values: [
        "0", "1"
    ],
    onChange: function (data) {
      $("#range15").data("ionRangeSlider").update({"disable": false});
          var $result = $("#result_16");
           if(data.from == '0'){$result.html("0" );}
           if(data.from == '1'){$result.html("1" );}
    }
    });
    $("#range16").ionRangeSlider({
    grid: true,
    disable: true,
    from: 0,
    values: [
        "�� ������", "�� ���������", "���������",
        "�������", "��������� � �������"
    ],
    onChange: function (data) {
      $("#range8").data("ionRangeSlider").update({"disable": false});
          var $result = $("#result_7");
           if(data.from == '0'){$result.html(" " );}
           if(data.from == '1'){$result.html("�� ���������" );}
           if(data.from == '2'){$result.html("���������" );}
           if(data.from == '3'){$result.html("�������" );}
           if(data.from == '4'){$result.html("��������� � �������" );}
    }
    });
  });


    $(document).ready(function() {
$("A#trigger").click(function() {
var r7=$("#range7").data("ionRangeSlider");
var r1=$("#range1").data("ionRangeSlider");
var r2=$("#range2").data("ionRangeSlider");
var r3=$("#range3").data("ionRangeSlider");
var r4=$("#range4").data("ionRangeSlider");
var r5=$("#range5").data("ionRangeSlider");
var r16=$("#range16").data("ionRangeSlider");
var r8=$("#range8").data("ionRangeSlider");
var r9=$("#range9").data("ionRangeSlider");
var r10=$("#range10").data("ionRangeSlider");
var r11=$("#range11").data("ionRangeSlider");
var r12=$("#range12").data("ionRangeSlider");
var r13=$("#range13").data("ionRangeSlider");
var r14=$("#range14").data("ionRangeSlider");
document.getElementById("foocalc").value="";
           if(r7.result.from == '0'){r7sum=0;}
           if(r7.result.from == '1'){r7sum=10000;}
           if(r7.result.from == '2'){r7sum=15000;}
           if(r7.result.from == '3'){r7sum=40000;}
           if(r7.result.from == '4'){r7sum=50000;}
document.getElementById("foocalc").value+="��� �����: "+r7.result.from_value;
document.getElementById("foocalc").value+="\n���������� �������� ��������: "+r1.result.from_value;
document.getElementById("foocalc").value+="\n���������� �������� �����: "+r2.result.from_value;
           if(r3.result.from == '0'){r3sum=1;}
           if(r3.result.from == '1'){r3sum=1;}
           if(r3.result.from == '2'){r3sum=1;}
           if(r3.result.from == '3'){r3sum=1;}
           if(r3.result.from == '4'){r3sum=1;}
           if(r3.result.from == '5'){r3sum=1;}
           if(r3.result.from == '6'){r3sum=2;}
           if(r3.result.from == '7'){r3sum=4;}
document.getElementById("foocalc").value+="\n������ �����������: "+r3.result.from_value;
document.getElementById("foocalc").value+="\n������� ����������� � ��������: "+r4.result.from_value;
document.getElementById("foocalc").value+="\n������� ����������� �����: "+r5.result.from_value;
           if(r16.result.from == '0'){r16sum=0;}
           if(r16.result.from == '1'){r16sum=0;}
           if(r16.result.from == '2'){r16sum=15000;}
           if(r16.result.from == '3'){r16sum=15000;}
           if(r16.result.from == '4'){r16sum=30000;}
document.getElementById("foocalc").value+="\n����������� ������� (PPC): "+r16.result.from;
           if(r8.result.from == '0'){r8sum=0;}
           if(r8.result.from == '1'){r8sum=0;}
           if(r8.result.from == '2'){r8sum=5000;}
document.getElementById("foocalc").value+="\n���� ���� ����������?: "+r8.result.from_value;
           if(r9.result.from == '0'){r9sum=0;}
           if(r9.result.from == '1'){r9sum=0;}
           if(r9.result.from == '2'){r9sum=10000;}
document.getElementById("foocalc").value+="\n���� ���� �����������?: "+r9.result.from_value;
document.getElementById("foocalc").value+="\n������������: "+r11.result.from_value;
document.getElementById("foocalc").value+="\n���� ��� ��������?: "+r10.result.from_value;
document.getElementById("foocalc").value+="\n����������� � YANDEX-������: "+r12.result.from_value;
           if(r13.result.from == '0'){r13sum=0;}
           if(r13.result.from == '1'){r13sum=0;}
           if(r13.result.from == '2'){r13sum=5000;}
document.getElementById("foocalc").value+="\n�����-���������: "+r13.result.from_value;
           if(r14.result.from == '0'){r14sum=0;}
           if(r14.result.from == '1'){r14sum=0;}
           if(r14.result.from == '2'){r14sum=10000;}
document.getElementById("foocalc").value+="\n����������� ���������: "+r14.result.from_value;
sum=r7sum+r16sum+r8sum+r9sum+r13sum+r14sum;
sum=sum*r3sum;
sum=number_format(sum, 0, '�', ' ');
document.getElementById("foocalc").value+="\n�����: "+sum+"���/���.";
$("#result_itogo").html(sum);
      return false;
      });
       $("A#trigger").click(function() {
        $error=0;

        var r1=$("#range1").data("ionRangeSlider");
        var r2=$("#range2").data("ionRangeSlider");
        var r3=$("#range3").data("ionRangeSlider");
        var r4=$("#range4").data("ionRangeSlider");
        var r5=$("#range5").data("ionRangeSlider");
        var r16=$("#range16").data("ionRangeSlider");
        var r7=$("#range7").data("ionRangeSlider");
        var r8=$("#range8").data("ionRangeSlider");
        var r9=$("#range9").data("ionRangeSlider");
        var r10=$("#range10").data("ionRangeSlider");
        var r11=$("#range11").data("ionRangeSlider");
        var r12=$("#range12").data("ionRangeSlider");
        var r13=$("#range13").data("ionRangeSlider");
        var r14=$("#range14").data("ionRangeSlider");


        if(r7.result.from > '0'){
           $("DIV#box").fadeIn(); return false;
        }else{alert("��������� ��������� ��� ����!");
        var scrollTop = $('#cccallk').offset().top;$(document).scrollTop(scrollTop);
        }


       });
    });
