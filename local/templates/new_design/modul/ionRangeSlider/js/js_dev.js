$(document).ready(function(){

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


    // var i;
    // for(i=0;i<=5;i++){
    //     var radId="radio-"+i;
    //     alert(radId);/*выводит "1ques" и "2ques"*/
    //     alert($("#radio-"+i).prop("checked"));
    // }

    // var i;
    // for(i=0;i<=5;i++){
    //     $("#radio-"+i).onchange = e => { alert(e.target.value); };
    // };

    document.getElementById("radio-1").onchange = e => { $("#range1").data("ionRangeSlider").update({"disable": false}); };
    document.getElementById("radio-2").onchange = e => { $("#range1").data("ionRangeSlider").update({"disable": false}); };
    document.getElementById("radio-3").onchange = e => { $("#range1").data("ionRangeSlider").update({"disable": false}); };
    document.getElementById("radio-4").onchange = e => { $("#range1").data("ionRangeSlider").update({"disable": false}); };
    document.getElementById("radio-5").onchange = e => { $("#range1").data("ionRangeSlider").update({"disable": false}); };


  //document.getElementById("radio-1").value="";

    $(function(){
        $("#range1").ionRangeSlider({
        grid: true,
        disable: true,
        from: 0,
        values: [
            "Не указано", "Да", "Нет", "Затрудняюсь ответить"
        ],
        onChange: function (data) {
          $("#range2").data("ionRangeSlider").update({"disable": false});
              var $result = $("#result_1");
               if(data.from == '0'){$result.html("Не указано" );}
               if(data.from == '1'){$result.html("Да (+ 15 000 рублей)" );}
               if(data.from == '2'){$result.html("Нет" );}
               if(data.from == '3'){$result.html("Затрудняюсь ответить" );}
        }
        });

        $("#range2").ionRangeSlider({
        grid: true,
        disable: true,
        from: 0,
        values: [
            "Не указано", "Да", "Нет", "Затрудняюсь ответить"
        ],
        onChange: function (data) {
          $("#range3").data("ionRangeSlider").update({"disable": false});
              var $result = $("#result_2");
               if(data.from == '0'){$result.html("Не указано" );}
               if(data.from == '1'){$result.html("Да (+ 3 000 рублей)" );}
               if(data.from == '2'){$result.html("Нет" );}
               if(data.from == '3'){$result.html("Затрудняюсь ответить" );}
        }
        });


        $("#range3").ionRangeSlider({
        grid: true,
        disable: true,
        from: 0,
        values: [
            "Не указано", "Да", "Нет", "Затрудняюсь ответить"
        ],
        onChange: function (data) {
          $("#range4").data("ionRangeSlider").update({"disable": false});
              var $result = $("#result_3");
               if(data.from == '0'){$result.html("Не указано" );}
               if(data.from == '1'){$result.html("Да (+ 5 000 рублей)" );}
               if(data.from == '2'){$result.html("Нет" );}
               if(data.from == '3'){$result.html("Затрудняюсь ответить" );}
        }
        });


        $("#range4").ionRangeSlider({
        grid: true,
        disable: true,
        from: 0,
        values: [
            "Не указано", "Да", "Нет", "Затрудняюсь ответить"
        ],
        onChange: function (data) {
          $("#range5").data("ionRangeSlider").update({"disable": false});
              var $result = $("#result_4");
               if(data.from == '0'){$result.html("Не указано" );}
               if(data.from == '1'){$result.html("Да (+ 4 500 рублей)" );}
               if(data.from == '2'){$result.html("Нет" );}
               if(data.from == '3'){$result.html("Затрудняюсь ответить" );}
        }
        });


        $("#range5").ionRangeSlider({
        grid: true,
        disable: true,
        from: 0,
        values: [
            "Не указано", "Да", "Нет", "Затрудняюсь ответить"
        ],
        onChange: function (data) {
          $("#range6").data("ionRangeSlider").update({"disable": false});
              var $result = $("#result_5");
               if(data.from == '0'){$result.html("Не указано" );}
               if(data.from == '1'){$result.html("Да (+ 5 000 рублей)" );}
               if(data.from == '2'){$result.html("Нет" );}
               if(data.from == '3'){$result.html("Затрудняюсь ответить" );}
        }
        });


        $("#range6").ionRangeSlider({
        grid: true,
        disable: true,
        from: 0,
        values: [
            "Не указано", "Да", "Нет", "Затрудняюсь ответить"
        ],
        onChange: function (data) {
          $("#range7").data("ionRangeSlider").update({"disable": false});
              var $result = $("#result_6");
               if(data.from == '0'){$result.html("Не указано" );}
               if(data.from == '1'){$result.html("Да (+ 5 000 рублей)" );}
               if(data.from == '2'){$result.html("Нет" );}
               if(data.from == '3'){$result.html("Затрудняюсь ответить" );}
        }
        });


        $("#range7").ionRangeSlider({
        grid: true,
        disable: true,
        from: 0,
        values: [
            "Не указано", "Да", "Нет", "Затрудняюсь ответить"
        ],
        onChange: function (data) {
          $("#range8").data("ionRangeSlider").update({"disable": false});
              var $result = $("#result_7");
               if(data.from == '0'){$result.html("Не указано" );}
               if(data.from == '1'){$result.html("Да (+ 5 000 рублей)" );}
               if(data.from == '2'){$result.html("Нет" );}
               if(data.from == '3'){$result.html("Затрудняюсь ответить" );}
        }
        });


        $("#range8").ionRangeSlider({
        grid: true,
        disable: true,
        from: 0,
        values: [
            "Не указано", "Да", "Нет", "Затрудняюсь ответить"
        ],
        onChange: function (data) {
          $("#range9").data("ionRangeSlider").update({"disable": false});
              var $result = $("#result_8");
               if(data.from == '0'){$result.html("Не указано" );}
               if(data.from == '1'){$result.html("Да (+ 3 000 рублей)" );}
               if(data.from == '2'){$result.html("Нет" );}
               if(data.from == '3'){$result.html("Затрудняюсь ответить" );}
        }
        });


        $("#range9").ionRangeSlider({
        grid: true,
        disable: true,
        from: 0,
        values: [
            "Не указано", "Да", "Нет", "Затрудняюсь ответить"
        ],
        onChange: function (data) {
          $("#range10").data("ionRangeSlider").update({"disable": false});
              var $result = $("#result_9");
               if(data.from == '0'){$result.html("Не указано" );}
               if(data.from == '1'){$result.html("Да (+ 2 000 рублей)" );}
               if(data.from == '2'){$result.html("Нет" );}
               if(data.from == '3'){$result.html("Затрудняюсь ответить" );}
        }
        });


        $("#range10").ionRangeSlider({
        grid: true,
        disable: true,
        from: 0,
        values: [
            "Не указано", "Да", "Нет", "Затрудняюсь ответить"
        ],
        onChange: function (data) {
          $("#range11").data("ionRangeSlider").update({"disable": false});
              var $result = $("#result_10");
               if(data.from == '0'){$result.html("Не указано" );}
               if(data.from == '1'){$result.html("Да (+ 3 000 рублей)" );}
               if(data.from == '2'){$result.html("Нет" );}
               if(data.from == '3'){$result.html("Затрудняюсь ответить" );}
        }
        });


        $("#range11").ionRangeSlider({
        grid: true,
        disable: true,
        from: 0,
        values: [
            "Не указано", "Да", "Нет", "Затрудняюсь ответить"
        ],
        onChange: function (data) {
          $("#range12").data("ionRangeSlider").update({"disable": false});
              var $result = $("#result_11");
               if(data.from == '0'){$result.html("Не указано" );}
               if(data.from == '1'){$result.html("Да (+ 5 000 рублей)" );}
               if(data.from == '2'){$result.html("Нет" );}
               if(data.from == '3'){$result.html("Затрудняюсь ответить" );}
        }
        });


        $("#range12").ionRangeSlider({
        grid: true,
        disable: true,
        from: 0,
        values: [
            "Не указано", "Да", "Нет", "Затрудняюсь ответить"
        ],
        onChange: function (data) {
          $("#range13").data("ionRangeSlider").update({"disable": false});
              var $result = $("#result_12");
               if(data.from == '0'){$result.html("Не указано" );}
               if(data.from == '1'){$result.html("Да (+ 2 000 рублей)" );}
               if(data.from == '2'){$result.html("Нет" );}
               if(data.from == '3'){$result.html("Затрудняюсь ответить" );}
        }
        });


        $("#range13").ionRangeSlider({
        grid: true,
        disable: true,
        from: 0,
        values: [
            "Не указано", "Да", "Нет", "Затрудняюсь ответить"
        ],
        onChange: function (data) {
          $("#range14").data("ionRangeSlider").update({"disable": false});
              var $result = $("#result_13");
               if(data.from == '0'){$result.html("Не указано" );}
               if(data.from == '1'){$result.html("Да (+ 5 000 рублей)" );}
               if(data.from == '2'){$result.html("Нет" );}
               if(data.from == '3'){$result.html("Затрудняюсь ответить" );}
        }
        });


        $("#range14").ionRangeSlider({
        grid: true,
        disable: true,
        from: 0,
        values: [
            "Не указано", "Да", "Нет", "Затрудняюсь ответить"
        ],
        onChange: function (data) {
          $("#range15").data("ionRangeSlider").update({"disable": false});
              var $result = $("#result_14");
               if(data.from == '0'){$result.html("Не указано" );}
               if(data.from == '1'){$result.html("Да (+ 5 000 рублей)" );}
               if(data.from == '2'){$result.html("Нет" );}
               if(data.from == '3'){$result.html("Затрудняюсь ответить" );}
        }
        });


        $("#range15").ionRangeSlider({
        grid: true,
        disable: true,
        from: 0,
        values: [
            "Не указано", "Да", "Нет", "Затрудняюсь ответить"
        ],
        onChange: function (data) {
          $("#range16").data("ionRangeSlider").update({"disable": false});
              var $result = $("#result_15");
               if(data.from == '0'){$result.html("Не указано" );}
               if(data.from == '1'){$result.html("Да (+ 5 000 рублей)" );}
               if(data.from == '2'){$result.html("Нет" );}
               if(data.from == '3'){$result.html("Затрудняюсь ответить" );}
        }
        });


        $("#range16").ionRangeSlider({
        grid: true,
        disable: true,
        from: 0,
        values: [
            "Не указано", "Да", "Нет", "Затрудняюсь ответить"
        ],
        onChange: function (data) {
          $("#range17").data("ionRangeSlider").update({"disable": false});
              var $result = $("#result_16");
               if(data.from == '0'){$result.html("Не указано" );}
               if(data.from == '1'){$result.html("Да (+ 3 000 рублей)" );}
               if(data.from == '2'){$result.html("Нет" );}
               if(data.from == '3'){$result.html("Затрудняюсь ответить" );}
        }
        });


        $("#range17").ionRangeSlider({
        grid: true,
        disable: true,
        from: 0,
        values: [
            "Не указано", "Да", "Нет", "Затрудняюсь ответить"
        ],
        onChange: function (data) {
          $("#range18").data("ionRangeSlider").update({"disable": false});
              var $result = $("#result_17");
               if(data.from == '0'){$result.html("Не указано" );}
               if(data.from == '1'){$result.html("Да (+ 25 000 рублей)" );}
               if(data.from == '2'){$result.html("Нет" );}
               if(data.from == '3'){$result.html("Затрудняюсь ответить" );}
        }
        });


        $("#range18").ionRangeSlider({
        grid: true,
        disable: true,
        from: 0,
        values: [
            "Не указано", "Да", "Нет", "Затрудняюсь ответить"
        ],
        onChange: function (data) {
          $("#range19").data("ionRangeSlider").update({"disable": false});
              var $result = $("#result_18");
               if(data.from == '0'){$result.html("Не указано" );}
               if(data.from == '1'){$result.html("Да (+ 20 000 рублей)" );}
               if(data.from == '2'){$result.html("Нет" );}
               if(data.from == '3'){$result.html("Затрудняюсь ответить" );}
        }
        });


        $("#range19").ionRangeSlider({
        grid: true,
        disable: true,
        from: 0,
        values: [
            "Не указано", "Да", "Нет", "Затрудняюсь ответить"
        ],
        onChange: function (data) {
          $("#range20").data("ionRangeSlider").update({"disable": false});
              var $result = $("#result_19");
               if(data.from == '0'){$result.html("Не указано" );}
               if(data.from == '1'){$result.html("Да (+ 10 000 рублей)" );}
               if(data.from == '2'){$result.html("Нет" );}
               if(data.from == '3'){$result.html("Затрудняюсь ответить" );}
        }
        });


        $("#range20").ionRangeSlider({
        grid: true,
        disable: true,
        from: 0,
        values: [
            "Не указано", "Да", "Нет", "Затрудняюсь ответить"
        ],
        onChange: function (data) {
          $("#range21").data("ionRangeSlider").update({"disable": false});
              var $result = $("#result_20");
               if(data.from == '0'){$result.html("Не указано" );}
               if(data.from == '1'){$result.html("Да (+ 3 000 рублей)" );}
               if(data.from == '2'){$result.html("Нет" );}
               if(data.from == '3'){$result.html("Затрудняюсь ответить" );}
        }
        });


        $("#range21").ionRangeSlider({
        grid: true,
        disable: true,
        from: 0,
        values: [
            "Не указано", "Да", "Нет", "Затрудняюсь ответить"
        ],
        onChange: function (data) {
          $("#range22").data("ionRangeSlider").update({"disable": false});
              var $result = $("#result_21");
               if(data.from == '0'){$result.html("Не указано" );}
               if(data.from == '1'){$result.html("Да (+ 3 000 рублей)" );}
               if(data.from == '2'){$result.html("Нет" );}
               if(data.from == '3'){$result.html("Затрудняюсь ответить" );}
        }
        });


        $("#range22").ionRangeSlider({
        grid: true,
        disable: true,
        from: 0,
        values: [
            "Не указано", "Да", "Нет", "Затрудняюсь ответить"
        ],
        onChange: function (data) {
          $("#range24").data("ionRangeSlider").update({"disable": false});
              var $result = $("#result_22");
               if(data.from == '0'){$result.html("Не указано" );}
               if(data.from == '1'){$result.html("Да (+ 10 000 рублей)" );}
               if(data.from == '2'){$result.html("Нет" );}
               if(data.from == '3'){$result.html("Затрудняюсь ответить" );}
        }
        });


        // $("#range23").ionRangeSlider({
        // grid: true,
        // disable: true,
        // from: 0,
        // values: [
        //     "Не указано", "Да", "Нет", "Затрудняюсь ответить"
        // ],
        // onChange: function (data) {
        //   $("#range24").data("ionRangeSlider").update({"disable": false});
        //       var $result = $("#result_23");
        //        if(data.from == '0'){$result.html("Не указано" );}
        //        if(data.from == '1'){$result.html("Да" );}
        //        if(data.from == '2'){$result.html("Нет" );}
        //        if(data.from == '3'){$result.html("Затрудняюсь ответить" );}
        // }
        // });


        $("#range24").ionRangeSlider({
        grid: true,
        disable: true,
        from: 0,
        values: [
            "Не указано", "Да", "Нет", "Затрудняюсь ответить"
        ],
        onChange: function (data) {
          $("#range25").data("ionRangeSlider").update({"disable": false});
              var $result = $("#result_24");
               if(data.from == '0'){$result.html("Не указано" );}
               if(data.from == '1'){$result.html("Да" );}
               if(data.from == '2'){$result.html("Нет" );}
               if(data.from == '3'){$result.html("Затрудняюсь ответить" );}
        }
        });


        $("#range25").ionRangeSlider({
        grid: true,
        disable: true,
        from: 0,
        values: [
            "Не указано", "Да", "Нет", "Затрудняюсь ответить"
        ],
        onChange: function (data) {
          $("#range26").data("ionRangeSlider").update({"disable": false});
              var $result = $("#result_25");
               if(data.from == '0'){$result.html("Не указано" );}
               if(data.from == '1'){$result.html("Да (+ 10 000 рублей)" );}
               if(data.from == '2'){$result.html("Нет" );}
               if(data.from == '3'){$result.html("Затрудняюсь ответить" );}
        }
        });


        $("#range26").ionRangeSlider({
        grid: true,
        disable: true,
        from: 0,
        values: [
            "Не указано", "Да", "Нет", "Затрудняюсь ответить"
        ],
        onChange: function (data) {
          $("#range27").data("ionRangeSlider").update({"disable": false});
              var $result = $("#result_26");
               if(data.from == '0'){$result.html("Не указано" );}
               if(data.from == '1'){$result.html("Да (+ 10 000 рублей)" );}
               if(data.from == '2'){$result.html("Нет" );}
               if(data.from == '3'){$result.html("Затрудняюсь ответить" );}
        }
        });


        $("#range27").ionRangeSlider({
        grid: true,
        disable: true,
        from: 0,
        values: [
            "Не указано", "Да", "Нет", "Затрудняюсь ответить"
        ],
        onChange: function (data) {
          $("#range27").data("ionRangeSlider").update({"disable": false});
              var $result = $("#result_27");
               if(data.from == '0'){$result.html("Не указано" );}
               if(data.from == '1'){$result.html("Да" );}
               if(data.from == '2'){$result.html("Нет" );}
               if(data.from == '3'){$result.html("Затрудняюсь ответить" );}
        }
        });

      });


        $(document).ready(function() {
          $("#trigger").click(function() {
            var r1=$("#range1").data("ionRangeSlider");
            var r2=$("#range2").data("ionRangeSlider");
            var r3=$("#range3").data("ionRangeSlider");
            var r4=$("#range4").data("ionRangeSlider");
            var r5=$("#range5").data("ionRangeSlider");
            var r6=$("#range6").data("ionRangeSlider");
            var r7=$("#range7").data("ionRangeSlider");
            var r8=$("#range8").data("ionRangeSlider");
            var r9=$("#range9").data("ionRangeSlider");
            var r10=$("#range10").data("ionRangeSlider");
            var r11=$("#range11").data("ionRangeSlider");
            var r12=$("#range12").data("ionRangeSlider");
            var r13=$("#range13").data("ionRangeSlider");
            var r14=$("#range14").data("ionRangeSlider");
            var r15=$("#range15").data("ionRangeSlider");
            var r16=$("#range16").data("ionRangeSlider");
            var r17=$("#range17").data("ionRangeSlider");
            var r18=$("#range18").data("ionRangeSlider");
            var r19=$("#range19").data("ionRangeSlider");
            var r20=$("#range20").data("ionRangeSlider");
            var r21=$("#range21").data("ionRangeSlider");
            var r22=$("#range22").data("ionRangeSlider");
            //var r23=$("#range23").data("ionRangeSlider");
            var r24=$("#range24").data("ionRangeSlider");
            var r25=$("#range25").data("ionRangeSlider");
            var r26=$("#range26").data("ionRangeSlider");
            var r27=$("#range27").data("ionRangeSlider");

            document.getElementById("foocalc").value="";
            document.getElementById("foocalc").value+="ИНДИВИДУАЛЬНЫЙ ДИЗАЙН: "+r1.result.from_value;
            document.getElementById("foocalc").value+="\nЛОГОТИП: "+r2.result.from_value;
            document.getElementById("foocalc").value+="\nИНФОГРАФИКА: "+r3.result.from_value;
            document.getElementById("foocalc").value+="\nСЛАЙДЕР: "+r4.result.from_value;
            document.getElementById("foocalc").value+="\nАНИМАЦИЯ НА БЛОКАХ: "+r5.result.from_value;
            document.getElementById("foocalc").value+="\nЛОКАЛИЗАЦИЯ: "+r6.result.from_value;
            document.getElementById("foocalc").value+="\nОПРЕДЕЛЕНИЕ ГОРОДА: "+r7.result.from_value;
            document.getElementById("foocalc").value+="\nФОРМА ОБРАТНОЙ СВЯЗИ: "+r8.result.from_value;
            document.getElementById("foocalc").value+="\nПОЧТА ДОМЕНА: "+r9.result.from_value;
            document.getElementById("foocalc").value+="\nПОИСК ПО САЙТУ: "+r10.result.from_value;
            document.getElementById("foocalc").value+="\nРЕГИСТРАЦИЯ/АВТОРИЗАЦИЯ: "+r11.result.from_value;
            document.getElementById("foocalc").value+="\nОНЛАЙН ЧАТ: "+r12.result.from_value;
            document.getElementById("foocalc").value+="\nФОРМА ЗАКАЗА ТОВАР: "+r13.result.from_value;
            document.getElementById("foocalc").value+="\nПЛАТЕЖНАЯ СИСТЕМА: "+r14.result.from_value;
            document.getElementById("foocalc").value+="\nФИЛЬТР ТОВАРОВ/УСЛУГ: "+r15.result.from_value;
            document.getElementById("foocalc").value+="\nПОКУПКА В 1 КЛИК: "+r16.result.from_value;
            document.getElementById("foocalc").value+="\nИНТЕГРАЦИЯ С 1С: "+r17.result.from_value;
            document.getElementById("foocalc").value+="\nИНТЕГАРЦИЯ С CRM: "+r18.result.from_value;
            document.getElementById("foocalc").value+="\nАВТОЗАГРУЗКА ТОВАРОВ: "+r19.result.from_value;
            document.getElementById("foocalc").value+="\nСОЗДАНИЕ ПРОДАЮЩЕГО КОНТЕНТА: "+r20.result.from_value;
            document.getElementById("foocalc").value+="\nФОТОГАЛЕРЕЯ: "+r21.result.from_value;
            document.getElementById("foocalc").value+="\nSEO-ОПТИМИЗАЦИЯ: "+r22.result.from_value;
            //document.getElementById("foocalc").value+="\n3: "+r23.result.from_value;
            document.getElementById("foocalc").value+="\nКОНТЕКСТНАЯ РЕКЛАМА: "+r24.result.from_value;
            document.getElementById("foocalc").value+="\nАНАЛИТИКА: "+r25.result.from_value;
            document.getElementById("foocalc").value+="\nТЕХНИЧЕСКОЕ СОПРОВОЖДЕНИЕ: "+r26.result.from_value;
            document.getElementById("foocalc").value+="\nSEO ПРОДВИЖЕНИЕ: "+r27.result.from_value;


            if(r27.result.from == '1'){
              var $h5_itogo = $("#h5_itogo"); $h5_itogo.html("Итого SEO-продвижение: ");
              var $result_itogo2 = $("#result_itogo2"); $result_itogo2.html("25 000");
              var $h6_itogo = $("#h6_itogo"); $h6_itogo.html(" &#8381;/мес.");
            }else{
              var $h5_itogo = $("#h5_itogo"); $h5_itogo.html(" ");
              var $result_itogo2 = $("#result_itogo2"); $result_itogo2.html(" ");
              var $h6_itogo = $("#h6_itogo"); $h6_itogo.html(" ");
            }

            if(r24.result.from == '1'){
              var $h7_itogo = $("#h7_itogo"); $h7_itogo.html("Итого Контекстная реклама: ");
              var $result_itogo3 = $("#result_itogo3"); $result_itogo3.html("15 000");
              var $h8_itogo = $("#h8_itogo"); $h8_itogo.html(" &#8381;/мес.");
            }else{
              var $h7_itogo = $("#h7_itogo"); $h7_itogo.html(" ");
              var $result_itogo3 = $("#result_itogo3"); $result_itogo3.html(" ");
              var $h8_itogo = $("#h8_itogo"); $h8_itogo.html(" ");
            }


            if( $("#radio-1").prop("checked") == false ){ r0sum=0; }
            if( $("#radio-2").prop("checked") == false ){ r0sum=0; }
            if( $("#radio-3").prop("checked") == false ){ r0sum=0; }
            if( $("#radio-4").prop("checked") == false ){ r0sum=0; }
            if( $("#radio-5").prop("checked") == false ){ r0sum=0; }

            if(r1.result.from == '0'){r1sum=0;}
            if(r1.result.from == '1'){r1sum=15;}
            if(r1.result.from == '2'){r1sum=0;}
            if(r1.result.from == '3'){r1sum=0;}

            if(r2.result.from == '0'){r2sum=0;}
            if(r2.result.from == '1'){r2sum=3;}
            if(r2.result.from == '2'){r2sum=0;}
            if(r2.result.from == '3'){r2sum=0;}

            if(r3.result.from == '0'){r3sum=0;}
            if(r3.result.from == '1'){r3sum=5;}
            if(r3.result.from == '2'){r3sum=0;}
            if(r3.result.from == '3'){r3sum=0;}

            if(r4.result.from == '0'){r4sum=0;}
            if(r4.result.from == '1'){r4sum=4.5;}
            if(r4.result.from == '2'){r4sum=0;}
            if(r4.result.from == '3'){r4sum=0;}

            if(r5.result.from == '0'){r5sum=0;}
            if(r5.result.from == '1'){r5sum=5;}
            if(r5.result.from == '2'){r5sum=0;}
            if(r5.result.from == '3'){r5sum=0;}

            if(r6.result.from == '0'){r6sum=0;}
            if(r6.result.from == '1'){r6sum=5;}
            if(r6.result.from == '2'){r6sum=0;}
            if(r6.result.from == '3'){r6sum=0;}

            if(r7.result.from == '0'){r7sum=0;}
            if(r7.result.from == '1'){r7sum=5;}
            if(r7.result.from == '2'){r7sum=0;}
            if(r7.result.from == '3'){r7sum=0;}

            if(r8.result.from == '0'){r8sum=0;}
            if(r8.result.from == '1'){r8sum=3;}
            if(r8.result.from == '2'){r8sum=0;}
            if(r8.result.from == '3'){r8sum=0;}

            if(r9.result.from == '0'){r9sum=0;}
            if(r9.result.from == '1'){r9sum=2;}
            if(r9.result.from == '2'){r9sum=0;}
            if(r9.result.from == '3'){r9sum=0;}

            if(r10.result.from == '0'){r10sum=0;}
            if(r10.result.from == '1'){r10sum=3;}
            if(r10.result.from == '2'){r10sum=0;}
            if(r10.result.from == '3'){r10sum=0;}

            if(r11.result.from == '0'){r11sum=0;}
            if(r11.result.from == '1'){r11sum=5;}
            if(r11.result.from == '2'){r11sum=0;}
            if(r11.result.from == '3'){r11sum=0;}

            if(r12.result.from == '0'){r12sum=0;}
            if(r12.result.from == '1'){r12sum=2;}
            if(r12.result.from == '2'){r12sum=0;}
            if(r12.result.from == '3'){r12sum=0;}

            if(r13.result.from == '0'){r13sum=0;}
            if(r13.result.from == '1'){r13sum=5;}
            if(r13.result.from == '2'){r13sum=0;}
            if(r13.result.from == '3'){r13sum=0;}

            if(r14.result.from == '0'){r14sum=0;}
            if(r14.result.from == '1'){r14sum=5;}
            if(r14.result.from == '2'){r14sum=0;}
            if(r14.result.from == '3'){r14sum=0;}

            if(r15.result.from == '0'){r15sum=0;}
            if(r15.result.from == '1'){r15sum=5;}
            if(r15.result.from == '2'){r15sum=0;}
            if(r15.result.from == '3'){r15sum=0;}

            if(r16.result.from == '0'){r16sum=0;}
            if(r16.result.from == '1'){r16sum=5;}
            if(r16.result.from == '2'){r16sum=0;}
            if(r16.result.from == '3'){r16sum=0;}

            if(r17.result.from == '0'){r17sum=0;}
            if(r17.result.from == '1'){r17sum=25;}
            if(r17.result.from == '2'){r17sum=0;}
            if(r17.result.from == '3'){r17sum=0;}

            if(r18.result.from == '0'){r18sum=0;}
            if(r18.result.from == '1'){r18sum=20;}
            if(r18.result.from == '2'){r18sum=0;}
            if(r18.result.from == '3'){r18sum=0;}

            if(r19.result.from == '0'){r19sum=0;}
            if(r19.result.from == '1'){r19sum=10;}
            if(r19.result.from == '2'){r19sum=0;}
            if(r19.result.from == '3'){r19sum=0;}

            if(r20.result.from == '0'){r20sum=0;}
            if(r20.result.from == '1'){r20sum=5;}
            if(r20.result.from == '2'){r20sum=0;}
            if(r20.result.from == '3'){r20sum=0;}

            if(r21.result.from == '0'){r21sum=0;}
            if(r21.result.from == '1'){r21sum=3;}
            if(r21.result.from == '2'){r21sum=0;}
            if(r21.result.from == '3'){r21sum=0;}

            if(r22.result.from == '0'){r22sum=0;}
            if(r22.result.from == '1'){r22sum=10;}
            if(r22.result.from == '2'){r22sum=0;}
            if(r22.result.from == '3'){r22sum=0;}

            // if(r23.result.from == '0'){r23sum=0;}
            // if(r23.result.from == '1'){r23sum=0;}
            // if(r23.result.from == '2'){r23sum=0;}
            // if(r23.result.from == '3'){r23sum=0;}

            if(r24.result.from == '0'){r24sum=0;}
            if(r24.result.from == '1'){r24sum=0;}
            if(r24.result.from == '2'){r24sum=0;}
            if(r24.result.from == '3'){r24sum=0;}

            if(r25.result.from == '0'){r25sum=0;}
            if(r25.result.from == '1'){r25sum=10;}
            if(r25.result.from == '2'){r25sum=0;}
            if(r25.result.from == '3'){r25sum=0;}

            if(r26.result.from == '0'){r26sum=0;}
            if(r26.result.from == '1'){r26sum=10;}
            if(r26.result.from == '2'){r26sum=0;}
            if(r26.result.from == '3'){r26sum=0;}

            if(r27.result.from == '0'){r27sum=0;}
            if(r27.result.from == '1'){r27sum=0;}
            if(r27.result.from == '2'){r27sum=0;}
            if(r27.result.from == '3'){r27sum=0;}

            chas=r1sum+r2sum+r3sum+r4sum+r5sum+r6sum+r7sum+r8sum+r9sum+r10sum+r11sum+r12sum+r13sum+r14sum+r15sum+r16sum+r17sum+r18sum+r19sum+r20sum+r21sum+r22sum+r24sum+r25sum+r26sum+r27sum;
            sum=chas*1000;
            sum=number_format(sum, 0, ' ', ' ');

            document.getElementById("foocalc").value+="\nИтого: "+chas+ " часов - "+sum+" рублей";
            $("#result_itogo").html(""+chas+ " ч. - "+sum+" &#8381;.");

            return false;
          });

          $("#trigger").click(function() {
                  var r1=$("#range1").data("ionRangeSlider");
                  var r2=$("#range2").data("ionRangeSlider");
                  var r3=$("#range3").data("ionRangeSlider");
                  var r4=$("#range4").data("ionRangeSlider");
                  var r5=$("#range5").data("ionRangeSlider");
                  var r6=$("#range6").data("ionRangeSlider");
                  var r7=$("#range7").data("ionRangeSlider");
                  var r8=$("#range8").data("ionRangeSlider");
                  var r9=$("#range9").data("ionRangeSlider");
                  var r10=$("#range10").data("ionRangeSlider");
                  var r11=$("#range11").data("ionRangeSlider");
                  var r12=$("#range12").data("ionRangeSlider");
                  var r13=$("#range13").data("ionRangeSlider");
                  var r14=$("#range14").data("ionRangeSlider");
                  var r15=$("#range15").data("ionRangeSlider");
                  var r16=$("#range16").data("ionRangeSlider");
                  var r17=$("#range17").data("ionRangeSlider");
                  var r18=$("#range18").data("ionRangeSlider");
                  var r19=$("#range19").data("ionRangeSlider");
                  var r20=$("#range20").data("ionRangeSlider");
                  var r21=$("#range21").data("ionRangeSlider");
                  var r22=$("#range22").data("ionRangeSlider");
                  //var r23=$("#range23").data("ionRangeSlider");
                  var r24=$("#range24").data("ionRangeSlider");
                  var r25=$("#range25").data("ionRangeSlider");
                  var r26=$("#range26").data("ionRangeSlider");
                  var r27=$("#range27").data("ionRangeSlider");

                  if( $("#radio-1").prop("checked") == false ){ $("#radd").addClass("error_red"); }else{ $("#radd").removeClass("error_red");}
                  if( $("#radio-2").prop("checked") == false ){ $("#radd").addClass("error_red"); }else{ $("#radd").removeClass("error_red");}
                  if( $("#radio-3").prop("checked") == false ){ $("#radd").addClass("error_red"); }else{ $("#radd").removeClass("error_red");}
                  if( $("#radio-4").prop("checked") == false ){ $("#radd").addClass("error_red"); }else{ $("#radd").removeClass("error_red");}
                  if( $("#radio-5").prop("checked") == false ){ $("#radd").addClass("error_red"); }else{ $("#radd").removeClass("error_red");}


                  if(r1.result.from == '0'){$("#range1_l").addClass("error_red");}else{ $("#range1_l").removeClass("error_red");}
                  if(r2.result.from == '0'){$("#range2_l").addClass("error_red");}else{ $("#range2_l").removeClass("error_red");}
                  if(r3.result.from == '0'){$("#range3_l").addClass("error_red");}else{ $("#range3_l").removeClass("error_red");}
                  if(r4.result.from == '0'){$("#range4_l").addClass("error_red");}else{ $("#range4_l").removeClass("error_red");}
                  if(r5.result.from == '0'){$("#range5_l").addClass("error_red");}else{ $("#range5_l").removeClass("error_red");}
                  if(r6.result.from == '0'){$("#range6_l").addClass("error_red");}else{ $("#range6_l").removeClass("error_red");}
                  if(r7.result.from == '0'){$("#range7_l").addClass("error_red");}else{ $("#range7_l").removeClass("error_red");}
                  if(r8.result.from == '0'){$("#range8_l").addClass("error_red");}else{ $("#range8_l").removeClass("error_red");}
                  if(r9.result.from == '0'){$("#range9_l").addClass("error_red");}else{ $("#range9_l").removeClass("error_red");}
                  if(r10.result.from == '0'){$("#range10_l").addClass("error_red");}else{ $("#range10_l").removeClass("error_red");}
                  if(r11.result.from == '0'){$("#range11_l").addClass("error_red");}else{ $("#range11_l").removeClass("error_red");}
                  if(r12.result.from == '0'){$("#range12_l").addClass("error_red");}else{ $("#range12_l").removeClass("error_red");}
                  if(r13.result.from == '0'){$("#range13_l").addClass("error_red");}else{ $("#range13_l").removeClass("error_red");}
                  if(r14.result.from == '0'){$("#range14_l").addClass("error_red");}else{ $("#range14_l").removeClass("error_red");}
                  if(r15.result.from == '0'){$("#range15_l").addClass("error_red");}else{ $("#range15_l").removeClass("error_red");}
                  if(r16.result.from == '0'){$("#range16_l").addClass("error_red");}else{ $("#range16_l").removeClass("error_red");}
                  if(r17.result.from == '0'){$("#range17_l").addClass("error_red");}else{ $("#range17_l").removeClass("error_red");}
                  if(r18.result.from == '0'){$("#range18_l").addClass("error_red");}else{ $("#range18_l").removeClass("error_red");}
                  if(r19.result.from == '0'){$("#range19_l").addClass("error_red");}else{ $("#range19_l").removeClass("error_red");}
                  if(r20.result.from == '0'){$("#range20_l").addClass("error_red");}else{ $("#range20_l").removeClass("error_red");}
                  if(r21.result.from == '0'){$("#range21_l").addClass("error_red");}else{ $("#range21_l").removeClass("error_red");}
                  if(r22.result.from == '0'){$("#range22_l").addClass("error_red");}else{ $("#range22_l").removeClass("error_red");}
                  //if(r23.result.from == '0'){$("#range23_l").addClass("error_red");}else{ $("#range23_l").removeClass("error_red");}
                  if(r24.result.from == '0'){$("#range24_l").addClass("error_red");}else{ $("#range24_l").removeClass("error_red");}
                  if(r25.result.from == '0'){$("#range25_l").addClass("error_red");}else{ $("#range25_l").removeClass("error_red");}
                  if(r26.result.from == '0'){$("#range26_l").addClass("error_red");}else{ $("#range26_l").removeClass("error_red");}
                  if(r27.result.from == '0'){$("#range27_l").addClass("error_red");}else{ $("#range27_l").removeClass("error_red");}

                                    if(r1.result.from > '0'){
                                       $("#box").fadeIn(); return false;
                                    }else{
                                      alert("Заполнены не все поля!");
                                      var scrollTop = $('#cccallk').offset().top;$(document).scrollTop(scrollTop);
                                    }
          });
        });
});
