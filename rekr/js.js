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

function createPDF() {
    var svg = '';
    if (document.getElementById("ChartId") != null) {
        svg = document.getElementById("ChartId").innerHTML;
    }
    if (svg)
        svg = svg.replace(/\r?\n|\r/g, '').trim();
    var pdfData = document.getElementById('root');
    html2canvas(pdfData, {
        onrendered: function(canvas) {
            var contentWidth = canvas.width;
            var contentHeight = canvas.height;
            var pageHeight = contentWidth / 592.28 * 841.89;
            var leftHeight = contentHeight;
            var position = 0;
            //a4 format [595.28,841.89]       
            var imgWidth = 595.28;
            var imgHeight = 592.28 / contentWidth * contentHeight;
            var ctx = canvas.getContext('2d');
            canvg(canvas, svg, {
                offsetX: 10,
                offsetY: 660,
                ignoreMouse: true,
                ignoreAnimation: true,
                ignoreClear: true,
                ignoreDimensions: true
            });
            var pageData = new Image();
            pageData = canvas.toDataURL('image/jpeg', 1.0);
            var pdf = new jsPDF('l', 'pt', 'a4', true);
            if (leftHeight < pageHeight) {
                pdf.addImage(pageData, 'JPEG', 100, 20, imgWidth, imgHeight);

            } else {
                console.log('page 2');
                while (leftHeight > 0) {
                    pdf.addImage(pageData, 'JPEG', 0, position, imgWidth, imgHeight)
                    leftHeight -= pageHeight;
                    position -= 841.89;
                    if (leftHeight > 0) {
                        pdf.addPage();
                    }
                }
            }
            Data = new Date();
            Year = Data.getFullYear();
            Month = Data.getMonth();
            Day = Data.getDate();
            Hour = Data.getHours();
            Minutes = Data.getMinutes();
            Seconds = Data.getSeconds();
            pdf.save('Калькулятор_от_LapkinLab__'+Day+'_'+Month+'_'+Year+'__'+Hour+'_'+Minutes+'_'+Seconds+'.pdf');
        }
    });
}

$(document).ready(function(){
        var k = 0;

	$("#trigger2").click(function(){

		var i1 = document.getElementById("i1").value;
        var i2 = document.getElementById("i2").value;
        var i3 = document.getElementById("i3").value;
        var i4 = document.getElementById("i4").value;
        var i5 = document.getElementById("i5").value;
        var i6 = document.getElementById("i6").value;
        var i7 = document.getElementById("i7").value;
        var i8 = document.getElementById("i8").value;
        var i9 = document.getElementById("i9").value;
        var i10 = document.getElementById("i10").value;
        var i11 = document.getElementById("i11").value;
        var i12 = document.getElementById("i12").value;
        var i13 = document.getElementById("i13").value;
        var i14 = document.getElementById("i14").value;
        var i15 = document.getElementById("i15").value;
        var i16 = document.getElementById("i16").value;
        var i17 = document.getElementById("i17").value;
        var i18 = document.getElementById("i18").value;
        var i19 = document.getElementById("i19").value;
        var i20 = document.getElementById("i20").value;
        var i21 = document.getElementById("i21").value;
        var i22 = document.getElementById("i22").value;
        var i23 = document.getElementById("i23").value;
        var i24 = document.getElementById("i24").value;
        var i25 = document.getElementById("i25").value;
        var i26 = document.getElementById("i26").value;
        var i27 = document.getElementById("i27").value;
        var i28 = document.getElementById("i28").value;
        var i29 = document.getElementById("i29").value;
        var i30 = document.getElementById("i30").value;
        var i31 = document.getElementById("i31").value;
        var i32 = document.getElementById("i32").value;
        var i33 = document.getElementById("i33").value;
        var i34 = document.getElementById("i34").value;
        var i35 = document.getElementById("i35").value;
        var i36 = document.getElementById("i36").value;
        var i37 = document.getElementById("i37").value;
        var i38 = document.getElementById("i38").value;
        var i39 = document.getElementById("i39").value;
        var i40 = document.getElementById("i40").value;
        var i41 = document.getElementById("i41").value;
        var i42 = document.getElementById("i42").value;
        var i43 = document.getElementById("i43").value;
        var i44 = document.getElementById("i44").value;
        var i45 = document.getElementById("i45").value;
        var i46 = document.getElementById("i46").value;
        var i47 = document.getElementById("i47").value;
        var i48 = document.getElementById("i48").value;

    if(i1 != ""){

        i10 = i13 / i7 * 100;
        document.getElementById("i10").value = i10.toFixed()+"%";

        i16 = i1 / i13;
        document.getElementById("i16").value = i16.toFixed(2)+" руб";

        i22 = (i13*i19)/100;
        document.getElementById("i22").value = i22.toFixed();

        i25 = i1 / i22;
        document.getElementById("i25").value = i25.toFixed(2)+" руб";

        i31 = (i22*i28)/100;
        document.getElementById("i31").value = i31.toFixed();

        i34 = i1 / i31;
        document.getElementById("i34").value = i34.toFixed(2)+" руб";

        i37 = i31/22;
        document.getElementById("i37").value = i37.toFixed();

        i43 = i31*i40;
        document.getElementById("i43").value = i43.toFixed(2)+" руб";

        i46 = ((i43-i1)/i1)*100;
        document.getElementById("i46").value = i46.toFixed()+" %";
    }


    if(i2 != ""){
        i11 = i14 / i8 * 100;
        document.getElementById("i11").value = i11.toFixed()+"%";

        i17 = i2 / i14;
        document.getElementById("i17").value = i17.toFixed(2)+" руб";

        i23 = (i14*i20)/100;
        document.getElementById("i23").value = i23.toFixed();

        i26 = i2 / i23;
        document.getElementById("i26").value = i26.toFixed(2)+" руб";

        i32 = (i23*i29)/100;
        document.getElementById("i32").value = i32.toFixed();

        i35 = i2 / i32;
        document.getElementById("i35").value = i35.toFixed(2)+" руб";

        i38 = i32/22;
        document.getElementById("i38").value = i38.toFixed();

        i44 = i32*i41;
        document.getElementById("i44").value = i44.toFixed(2)+" руб";

        i47 = ((i44-i2)/i2)*100;
        document.getElementById("i47").value = i47.toFixed()+" %";
    }


    if(i3 != ""){
        if(k == 0){
            k = 1;
            i3 = i3 * 6;
            document.getElementById("i3").value = i3.toFixed();
        }
        i9 = i6 * 0.5;
        document.getElementById("i9").value = i9.toFixed();

        i15 = i9 * i12 / 100;
        document.getElementById("i15").value = i15.toFixed();

        i18 = i3 / i15;
        document.getElementById("i18").value = i18.toFixed(2)+" руб";

        i24 = (i15*i21)/100;
        document.getElementById("i24").value = i24.toFixed();

        i27 = i3 / i24;
        document.getElementById("i27").value = i27.toFixed(2)+" руб";

        i33 = (i24*i30)/100;
        document.getElementById("i33").value = i33.toFixed();

        i36 = i3 / i33;
        document.getElementById("i36").value = i36.toFixed(2)+" руб";

        i39 = i33/22;
        document.getElementById("i39").value = i39.toFixed();

        i45 = i33*i42;
        document.getElementById("i45").value = i45.toFixed(2)+" руб";

        i48 = ((i45-i3)/i3)*100;
        document.getElementById("i48").value = i48.toFixed()+" %";
    }

    return false;
  });



    $("#trigger1").click(function(){
 

        createPDF();

        return false;

    });
});