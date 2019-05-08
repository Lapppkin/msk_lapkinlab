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

$(document).ready(function(){

	$("#trigger-get").click(function(){

		document.getElementById("foocalc").value="";
	  	var text_set = "";
	  	var text_kolvo = "";

	  	var i = 1;
	  	var arr = new Array();

	  	var summa_chasov = 0;
	  	var summa_chasov2 = 0;
	  	var summa_chasov3 = 0;
	  	var itogo = 0;
	  	var itogo2 = 0;
	  	var itogo3 = 0;
	  	var itogo_all = 0;
	  	var summa_rubli = 1000;
	  	var koef = 1;
	  	var set = 0;


			while (i < 68){
			  	if ($("#checkbox-"+i).prop("checked") == true){
			  		arr.push([i]);
			  	}
		  	i++;
		  	}

		  	if ($("#radio-seo-1").prop("checked") == true){
		  		arr.push([70]);
		  	}
		  	if ($("#radio-seo-2").prop("checked") == true){
		  		arr.push([71]);
		  	}
		  	if ($("#radio-seo-3").prop("checked") == true){
		  		arr.push([72]);
		  	}
		  	if ($("#radio-seo-4").prop("checked") == true){
		  		arr.push([73]);
		  	}

		  	arr.forEach(function(entry) {

			   if(entry == 1){
			   		document.getElementById("foocalc").value+="\n������.������";
			   		text_set+="\n������.������";
			   		set = set + 1;
			   }
			   if(entry == 2){
			   		document.getElementById("foocalc").value+="\nGoogle.Adwords";
			   		text_set+="\nGoogle.Adwords";
			   		set = set + 1;
			   }

			   if(entry == 70){
			   		document.getElementById("foocalc").value+="\n���������� �������� ���� - �� 200";
			   		text_kolvo="���������� �������� ���� - �� 200";
			   		koef = 1;
			   }
			   if(entry == 71){
			   		document.getElementById("foocalc").value+="\n���������� �������� ���� - �� 1000";
			   		text_kolvo="���������� �������� ���� - �� 1000";
			   		koef = 1.5;
			   }
			   if(entry == 72){
			   		document.getElementById("foocalc").value+="\n���������� �������� ���� - �� 3000";
			   		text_kolvo="���������� �������� ���� - �� 3000";
			   		koef = 2;
			   }
			   if(entry == 73){
			   		document.getElementById("foocalc").value+="\n���������� �������� ���� - ����� 3000";
			   		text_kolvo="���������� �������� ���� - ����� 3000";
			   		koef = 3;
			   }


			   if(entry == 3){
			   		document.getElementById("foocalc").value+="\n���������� ����� ��������� �������� � ����������� ������� ���������";
			   		summa_chasov = summa_chasov + 1;
			   }
			   if(entry == 4){
			   		document.getElementById("foocalc").value+="\n���� �������� ����";
			   		summa_chasov = summa_chasov + 4;
			   }
			   if(entry == 5){
			   		document.getElementById("foocalc").value+="\n������ �����-����";
			   		summa_chasov = summa_chasov + 1;
			   }
			   // if(entry == 6){
			   // 		summa_chasov = summa_chasov + 0.35;
			   // }
			   if(entry == 7){
			   		document.getElementById("foocalc").value+="\n�����-���������";
			   		summa_chasov = summa_chasov + 0.35;
			   }
			   if(entry == 8){
			   		document.getElementById("foocalc").value+="\n������������� �������� �� �������";
			   		summa_chasov = summa_chasov + 0.35;
			   }
			   if(entry == 9){
			   		document.getElementById("foocalc").value+="\n�������� ��������� ���������� ��������";
			   		summa_chasov = summa_chasov + 0.5;
			   }
			   if(entry == 10){
			   		document.getElementById("foocalc").value+="\n�������� ��������-����������� ����������";
			   		summa_chasov = summa_chasov + 2.35;
			   }
			   if(entry == 11){
			   		document.getElementById("foocalc").value+="\n��������� �������������";
			   		summa_chasov = summa_chasov + 0.2;
			   }
			   if(entry == 12){
			   		document.getElementById("foocalc").value+="\n��������� ������� ������";
			   		summa_chasov = summa_chasov + 0.2;
			   }
			   if(entry == 13){
			   		document.getElementById("foocalc").value+="\n��������� ������������ ������";
			   		summa_chasov = summa_chasov + 0.2;
			   }
			   if(entry == 14){
			   		document.getElementById("foocalc").value+="\n��������� ������� ��������";
			   		summa_chasov = summa_chasov + 0.35;
			   }
			   if(entry == 15){
			   		document.getElementById("foocalc").value+="\n��������� ���������";
			   		summa_chasov = summa_chasov + 0.35;
			   }
			   if(entry == 16){
			   		document.getElementById("foocalc").value+="\nUTM-��������";
			   		summa_chasov = summa_chasov + 0.35;
			   }
			   if(entry == 17){
			   		document.getElementById("foocalc").value+="\n������� �� �������� (��������� �� ��������)";
			   		summa_chasov = summa_chasov + 0.5;
			   }
			   if(entry == 18){
			   		document.getElementById("foocalc").value+="\n��������� �� ����������";
			   		summa_chasov = summa_chasov + 0.5;
			   }
			   if(entry == 19){
			   		document.getElementById("foocalc").value+="\n���������� ����� ��������� ��������";
			   		summa_chasov = summa_chasov + 0.5;
			   }
			   if(entry == 20){
			   		document.getElementById("foocalc").value+="\n������ ������� ��������� � ����������� �������� ����������";
			   		summa_chasov = summa_chasov + 0.5;
			   }
			   if(entry == 21){
			   		document.getElementById("foocalc").value+="\n������ ������ ���������� (����� ���/���������/���� ����������, ������ �������� ����)";
			   		summa_chasov = summa_chasov + 0.5;
			   }
			   if(entry == 22){
			   		document.getElementById("foocalc").value+="\n�������� ��������� ���������� ��������";
			   		summa_chasov = summa_chasov + 0.5;
			   }
			   if(entry == 23){
			   		document.getElementById("foocalc").value+="\n�������� ��������-����������� ����������";
			   		summa_chasov = summa_chasov + 1;
			   }
			   if(entry == 24){
			   		document.getElementById("foocalc").value+="\n�������� ����������� ����������";
			   		summa_chasov = summa_chasov + 1;
			   }
			   if(entry == 25){
			   		document.getElementById("foocalc").value+="\n��������� �������������";
			   		summa_chasov = summa_chasov + 0.2;
			   }
			   if(entry == 26){
			   		document.getElementById("foocalc").value+="\n��������� ������� ������";
			   		summa_chasov = summa_chasov + 0.2;
			   }
			   if(entry == 27){
			   		document.getElementById("foocalc").value+="\n��������� ������� ��������";
			   		summa_chasov = summa_chasov + 0.2;
			   }
			   if(entry == 28){
			   		document.getElementById("foocalc").value+="\n��������� ���������";
			   		summa_chasov = summa_chasov + 0.2;
			   }
			   if(entry == 29){
			   		document.getElementById("foocalc").value+="\nUTM-��������";
			   		summa_chasov = summa_chasov + 0.2;
			   }
			   if(entry == 30){
			   		document.getElementById("foocalc").value+="\n������� �� �������� (��������� �� ��������)";
			   		summa_chasov = summa_chasov + 0.5;
			   }
			   if(entry == 31){
			   		document.getElementById("foocalc").value+="\n���������� ����� ��������, ���������� ��������� ������";
			   		summa_chasov = summa_chasov + 0.2;
			   }
			   if(entry == 32){
			   		document.getElementById("foocalc").value+="\n��������� �� ����������";
			   		summa_chasov = summa_chasov + 0.5;
			   }
			   if(entry == 33){
			   		document.getElementById("foocalc").value+="\n���������� ����� ��������� ��������";
			   		summa_chasov = summa_chasov + 0.5;
			   }
			   if(entry == 34){
			   		document.getElementById("foocalc").value+="\n������ ������� ��������� � ����������� ������� ������� ���������";
			   		summa_chasov = summa_chasov + 0.5;
			   }
			   if(entry == 35){
			   		document.getElementById("foocalc").value+="\n��������� ����� ���������";
			   		summa_chasov = summa_chasov + 0.2;
			   }
			   if(entry == 36){
			   		document.getElementById("foocalc").value+="\n�������� �������� ������ ��";
			   		summa_chasov = summa_chasov + 1;
			   }
			   if(entry == 37){
			   		document.getElementById("foocalc").value+="\n������ ��������� ������������/������������";
			   		summa_chasov = summa_chasov + 0.2;
			   }
			   if(entry == 38){
			   		document.getElementById("foocalc").value+="\n��������� ������� ������";
			   		summa_chasov = summa_chasov + 0.2;
			   }
			   if(entry == 39){
			   		document.getElementById("foocalc").value+="\n�������� �������������� ��������� ��� ����������";
			   		summa_chasov = summa_chasov + 0.2;
			   }
			   if(entry == 40){
			   		document.getElementById("foocalc").value+="\n��������� ������������� ������";
			   		summa_chasov = summa_chasov + 0.2;
			   }
			   if(entry == 41){
			   		document.getElementById("foocalc").value+="\n�������� ������������� ����������";
			   		summa_chasov = summa_chasov + 0.5;
			   }
			   if(entry == 42){
			   		document.getElementById("foocalc").value+="\n��������� ���������� ������� �� �����";
			   		summa_chasov = summa_chasov + 1;
			   }
			   if(entry == 43){
			   		document.getElementById("foocalc").value+="\n�������� �������� ��� ����� ���������� �������";
			   		summa_chasov = summa_chasov + 1;
			   }
			   if(entry == 44){
			   		document.getElementById("foocalc").value+="\nUTM-��������";
			   		summa_chasov = summa_chasov + 0.2;
			   }
			   if(entry == 45){
			   		document.getElementById("foocalc").value+="\n������� �� �������� (��������� �� ��������)";
			   		summa_chasov = summa_chasov + 0.5;
			   }



			   if(entry == 46){
			   		document.getElementById("foocalc").value+="\n������ ��������� ��������: ���������� �������� ����, ����� ����";
			   		summa_chasov2 = summa_chasov2 + 1;
			   }
			   if(entry == 47){
			   		document.getElementById("foocalc").value+="\n������ ������� ��������� � ����������� ������� ������� ���������";
			   		summa_chasov2 = summa_chasov2 + 1;
			   }
			   if(entry == 48){
			   		document.getElementById("foocalc").value+="\n��������� � ������������ ����������";
			   		summa_chasov2 = summa_chasov2 + 2;
			   }
			   if(entry == 49){
			   		document.getElementById("foocalc").value+="\n��������� ������� � ���������� ����������� (������������� ������, ������������ ������������� ���������)";
			   		summa_chasov2 = summa_chasov2 + 1;
			   }
			   if(entry == 50){
			   		document.getElementById("foocalc").value+="\n��������� ������� � �������������� ������������";
			   		summa_chasov2 = summa_chasov2 + 0.5;
			   }
			   if(entry == 51){
			   		document.getElementById("foocalc").value+="\n������ ���� ����������: ���������� ����� ��������";
			   		summa_chasov2 = summa_chasov2 + 1;
			   }
			   if(entry == 52){
			   		document.getElementById("foocalc").value+="\n��������� � ������������ ����������";
			   		summa_chasov2 = summa_chasov2 + 2;
			   }
			   if(entry == 53){
			   		document.getElementById("foocalc").value+="\n��������� ������� � ���������� ����������� (������������� ������, ������������ ������������� ���������)";
			   		summa_chasov2 = summa_chasov2 + 1;
			   }
			   if(entry == 54){
			   		document.getElementById("foocalc").value+="\n��������� ������� � �������������� ������������";
			   		summa_chasov2 = summa_chasov2 + 0.5;
			   }



			   if(entry == 55){
			   		document.getElementById("foocalc").value+="\n����� �����/��������";
			   		summa_chasov3 = summa_chasov3 + 1;
			   }
			   if(entry == 56){
			   		document.getElementById("foocalc").value+="\n��������� ������.�������";
			   		summa_chasov3 = summa_chasov3 + 1;
			   }
			   if(entry == 57){
			   		document.getElementById("foocalc").value+="\n��������� Google Analytics";
			   		summa_chasov3 = summa_chasov3 + 1;
			   }
			   if(entry == 58){
			   		document.getElementById("foocalc").value+="\n��������� Google Tag Manager";
			   		summa_chasov3 = summa_chasov3 + 1;
			   }
			   if(entry == 59){
			   		document.getElementById("foocalc").value+="\n��������� ������� ����� � ������.�������";
			   		summa_chasov3 = summa_chasov3 + 1;
			   }
			   if(entry == 60){
			   		document.getElementById("foocalc").value+="\n��������� ������� ����� � Google Analytics";
			   		summa_chasov3 = summa_chasov3 + 1;
			   }
			   if(entry == 61){
			   		document.getElementById("foocalc").value+="\n��������� ���� � �������������� ������������ �� �����";
			   		summa_chasov3 = summa_chasov3 + 1;
			   }
			   if(entry == 62){
			   		document.getElementById("foocalc").value+="\n���������� �������� � ��������� ��������";
			   		summa_chasov3 = summa_chasov3 + 1;
			   }
			   if(entry == 63){
			   		document.getElementById("foocalc").value+="\n�������� ����������� ������ �����";
			   		summa_chasov3 = summa_chasov3 + 1;
			   }
			   if(entry == 64){
			   		document.getElementById("foocalc").value+="\n���������� ������������ �� ��������� ��������� ���������� ������� �����";
			   		summa_chasov3 = summa_chasov3 + 2;
			   }
			   if(entry == 65){
			   		document.getElementById("foocalc").value+="\n����������� ����-��������";
			   		summa_chasov3 = summa_chasov3 + 2;
			   }
			   if(entry == 66){
			   		document.getElementById("foocalc").value+="\n����������� � ��������� �������� ��������� Roistat";
			   		summa_chasov3 = summa_chasov3 + 2;
			   }
			   if(entry == 67){
			   		document.getElementById("foocalc").value+="\n��� ������ ����������� �� ����� ������� ������";
			   		summa_chasov3 = summa_chasov3 + 1;
			   }

			});

			
			itogo  = summa_chasov  * summa_rubli * koef * set;	
			itogo2 = summa_chasov2 * summa_rubli * koef * set;
			itogo3 = summa_chasov3 * summa_rubli * koef * set;
			itogo_all = itogo + itogo2 + itogo3;

            $("#h1_itogo").html(text_set);
            $("#h2_itogo").html(text_kolvo);
			
            $("#result_itogo3").html(number_format(itogo.toFixed(), 2, ',', ' '));
			   		document.getElementById("foocalc").value+="\n��������� �� - "+number_format(itogo.toFixed(), 2, ',', ' ');
            $("#result_itogo4").html(number_format(itogo2.toFixed(), 2, ',', ' '));
			   		document.getElementById("foocalc").value+="\n������� � ����������� �� - "+number_format(itogo2.toFixed(), 2, ',', ' ');
            $("#result_itogo5").html(number_format(itogo3.toFixed(), 2, ',', ' '));
			   		document.getElementById("foocalc").value+="\n�������������� ������ - "+number_format(itogo3.toFixed(), 2, ',', ' ');

            $("#result_itogo6").html(number_format(itogo_all.toFixed(), 2, ',', ' '));
			   		document.getElementById("foocalc").value+="\n�����: "+number_format(itogo_all.toFixed(), 2, ',', ' ');

			$("#box").fadeIn(); return false;
	});
	
});