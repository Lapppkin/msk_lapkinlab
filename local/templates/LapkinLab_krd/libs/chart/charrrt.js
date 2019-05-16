jQuery(document).ready(function(){
	var seq = 0,
	  delays = 30,
	  durations = 800;
	var chart = new Chartist.Line('.ct-chart', {
		  labels: [ null, "Декабрь", "Январь", "Февраль", "Март", "Апрель",
		  "Май", "Июнь", "Июль", "Август", null],
		  series: [

		  {
			name: 'stage-1',
			data: [
			  {meta: '0', value: 0 },
			  {meta: 'description3', value: null},
			  {meta: 'description3', value: null},
			  {meta: 'description3', value: null},
		      {meta: 'description3', value: null},
			  {meta: 'description3', value: null},
			  {meta: 'description3', value: null},
			  {meta: 'description3', value: null},
			  {meta: 'description3', value: null},
			  {meta: 'description3', value: null},
			  {meta: 'description3', value: null}
		  ]
		  }
		  ,
		  {
			name: 'stage-2',
			data: [
			  {meta: 'description2', value: null},
			  {meta: '5', value: 0 },
		      {meta: '12', value: 5 },
			  {meta: '23', value: 12 },
			  {meta: '32', value: 22 },
			  {meta: 'description3', value: null},
			  {meta: 'description3', value: null},
			  {meta: 'description3', value: null},
			  {meta: 'description3', value: null},
			  {meta: 'description3', value: null},
			  {meta: 'description3', value: null}
		  ]
		  },{
			name: 'stage-3',
			data: [
			  {meta: 'description2', value: null},
			  {meta: 'description3', value: null},
		      {meta: 'description3', value: null},
			  {meta: 'description3', value: null},
			  {meta: '40', value: 22 },
			  {meta: '45', value: 35 },
			  {meta: '50', value: 42 },
			  {meta: '64', value: 58 },
			  {meta: 'description3', value: null},
			  {meta: 'description3', value: null},
			  {meta: 'description3', value: null}
		  ]
		  },
		  {
			name: 'stage-4',
			data: [
			  {meta: 'description', value: null},
			  {meta: 'description', value: null},
			  {meta: 'description', value: null},
			  {meta: 'description', value: null},
			  {meta: 'description', value: null},
			  {meta: 'description', value: null},
			  {meta: 'description', value: null},
			  {meta: '85', value: 58 },
			  {meta: '85', value: 68 },
			  {meta: '90', value: 78 },
			  {meta: '100', value: 88 + 10 }
		  ]
		  }
		  ]

		}, {
		fullWidth: true,
		height: 240,
		axisX: {offset: 40,position: 'end',labelOffset: {x: 0,y: 15},
		showLabel: true,
		showGrid: true,
		labelInterpolationFnc: Chartist.noop,
		scaleMinSpace: 60,
		onlyInteger: false
  },
	axisY: { type: Chartist.FixedScaleAxis,high: 100,low: 0,onlyInteger: true, referenceValue:100, ticks: [0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100]},
	showArea: true,
	chartPadding: {
		right: 20,
		left: 10
	},
	plugins: [
		Chartist.plugins.tooltip()
	  ]
});

chart.on('created', function() {
  seq = 0;
});
chart.on('draw', function(data) {
	 seq++;
  if(data.type === 'line' || data.type === 'area') {
    data.element.animate({
	opacity: {
        begin: seq * delays,
        dur: durations,
        from: 0,
        to: 1,
        easing: 'easeOutCubic'
      }
    });
  } else if (data.type === 'point') {
    data.element.animate({
      x1: {
        begin: seq * delays,
        dur: durations,
        from: data.x - 10,
        to: data.x,
        easing: 'easeOutCubic'
      },
      opacity: {
        begin: seq * delays,
        dur: durations,
        from: 0,
        to: 1,
        easing: 'easeOutCubic'
      }
    });
  }
});

function circle_1() {
		var val = parseInt(10);
		var $circle = $('#circle_one');
		var angle = 0;
		if (isNaN(val)) {
			val = 100;
		}
		else {
		var r = $circle.attr('r');
		var c = Math.PI*(r*2);

		if (val < 0) { val = 0;}
		if (val > 100) { val = 100;}

		var pct = ((100-val)/100)*c;
		}
		$circle.css({ strokeDashoffset: pct}).css("stroke", "hsl("+ parseInt(120 - (pct/360*100)) + ", 100%, 34%)");

		var percent_number_step = $.animateNumber.numberStepFactories.append('%')
		$('#percent_one').animateNumber(
		  {
			number: val,
			easing: 'easeInQuad',
			numberStep: percent_number_step
		  },
		  1000
		);
	}

function circle_2() {
		var val = parseInt(25);
		var $circle = $('#circle_two');
		var angle = 0;
		if (isNaN(val)) {
			val = 100;
		}
		else {
		var r = $circle.attr('r');
		var c = Math.PI*(r*2);

		if (val < 0) { val = 0;}
		if (val > 100) { val = 100;}

		var pct = ((100-val)/100)*c;
		}
		$circle.css({ strokeDashoffset: pct}).css("stroke", "hsl("+ parseInt(120 - (pct/360*100)) + ", 100%, 34%)");

		var percent_number_step = $.animateNumber.numberStepFactories.append('%')
		$('#percent_two').animateNumber(
		  {
			number: val,
			easing: 'easeInQuad',
			numberStep: percent_number_step
		  },
		  1000
		);
	}
function circle_3() {
		var val = parseInt(43);
		var $circle = $('#circle_three');
		var angle = 0;
		if (isNaN(val)) {
			val = 100;
		}
		else {
		var r = $circle.attr('r');
		var c = Math.PI*(r*2);

		if (val < 0) { val = 0;}
		if (val > 100) { val = 100;}

		var pct = ((100-val)/100)*c;
		}
		$circle.css({ strokeDashoffset: pct}).css("stroke", "hsl("+ parseInt(120 - (pct/360*100)) + ", 100%, 34%)");
		var percent_number_step = $.animateNumber.numberStepFactories.append('%')
		$('#percent_three').animateNumber(
		  {
			number: val,
			easing: 'easeInQuad',
			numberStep: percent_number_step
		  },
		  1000
		);
	}
function circle_4() {
		var val = parseInt(75);
		var $circle = $('#circle_four');
		var angle = 0;
		if (isNaN(val)) {
			val = 100;
		}
		else {
		var r = $circle.attr('r');
		var c = Math.PI*(r*2);

		if (val < 0) { val = 0;}
		if (val > 100) { val = 100;}

		var pct = ((100-val)/100)*c;
		}
		$circle.css({ strokeDashoffset: pct}).css("stroke", "hsl("+ parseInt(120 - (pct/360*100)) + ", 100%, 34%)");
		var percent_number_step = $.animateNumber.numberStepFactories.append('%')
		$('#percent_four').animateNumber(
		  {
			number: val,
			easing: 'easeInQuad',
			numberStep: percent_number_step
		  },
		  1000
		);
	}
function circle_5() {
		var val = parseInt(90);
		var $circle = $('#circle_five');
		var angle = 0;
		if (isNaN(val)) {
			val = 100;
		}
		else {
		var r = $circle.attr('r');
		var c = Math.PI*(r*2);

		if (val < 0) { val = 0;}
		if (val > 100) { val = 100;}

		var pct = ((100-val)/100)*c;
		}
		$circle.css({ strokeDashoffset: pct}).css("stroke", "hsl("+ parseInt(120 - (pct/360*100)) + ", 100%, 34%)");
		var percent_number_step = $.animateNumber.numberStepFactories.append('%')
		$('#percent_five').animateNumber(
		  {
			number: val,
			easing: 'easeInQuad',
			numberStep: percent_number_step
		  },
		  1000
		);
	}
jQuery('.raschet_seo').viewportChecker({
		callbackFunction: function(){
		 chart.update();
		},offset: 1
	});

jQuery('.block_percent').viewportChecker({
		classToAdd: 'animate',
		callbackFunction: function(){
			circle_1(),
			circle_2(),
			circle_3(),
			circle_4(),
			circle_5();

		},offset: 100
	});
  });

jQuery(document).ready(function(){
	var seq = 0,
	  delays = 30,
	  durations = 800;
	var chart = new Chartist.Line('.ct-chart2', {
		  series: [

		  {
			name: 'stage-1',
			data: [
			  {meta: '1', value: 0 },
			  {meta: '2', value: 3 },
			  {meta: '2', value: 8 },
			  {meta: 'description3', value: null},
		      {meta: 'description3', value: null},
			  {meta: 'description3', value: null},
			  {meta: 'description3', value: null},
			  {meta: 'description3', value: null},
			  {meta: 'description3', value: null},
			  {meta: 'description3', value: null},
			  {meta: 'description3', value: null}
		  ]
		  }
		  ,
		  {
			name: 'stage-2',
			data: [
			  {meta: 'description2', value: null},
			  {meta: 'description3', value: null},
			  {meta: '2', value: 8 },
		      {meta: '3', value: 15 },
			  {meta: '4', value: 22 },
			  {meta: 'description3', value: null},
			  {meta: 'description3', value: null},
			  {meta: 'description3', value: null},
			  {meta: 'description3', value: null},
			  {meta: 'description3', value: null},
			  {meta: 'description3', value: null}
		  ]
		  },
		  {
			name: 'stage-3',
			data: [
			  {meta: 'description2', value: null},
			  {meta: 'description3', value: null},
		      {meta: 'description3', value: null},
			  {meta: 'description3', value: null},
			  {meta: '6', value: 22 },
			  {meta: '6', value: 27 },
			  {meta: '7', value: 35 },
			  {meta: 'description3', value: null},
			  {meta: 'description3', value: null},
			  {meta: 'description3', value: null},
			  {meta: 'description3', value: null}
		  ]
		  },
		  {
			name: 'stage-4',
			data: [
			  {meta: 'description2', value: null},
			  {meta: 'description3', value: null},
		      {meta: 'description3', value: null},
			  {meta: 'description3', value: null},
			  {meta: 'description3', value: null},
			  {meta: 'description3', value: null},
			  {meta: '11', value: 35 },
			  {meta: '12', value: 48 },
			  {meta: '13', value: 57 },
			  {meta: 'description3', value: null},
			  {meta: 'description3', value: null}
		  ]
		  },
		  {
			name: 'stage-5',
			data: [
			  {meta: 'description', value: null},
			  {meta: 'description', value: null},
			  {meta: 'description', value: null},
			  {meta: 'description', value: null},
			  {meta: 'description', value: null},
			  {meta: 'description', value: null},
			  {meta: 'description', value: null},
			  {meta: 'description', value: null},
			  {meta: '85', value: 57 },
			  {meta: '90', value: 67 },
			  {meta: '100', value: 88 + 10 }
		  ]
		  }
		  ]

		}, {
		fullWidth: true,
		height: 280,
		axisX: {offset: 40,position: 'end',labelOffset: {x: 0,y: 15},
		showLabel: true,
		showGrid: true,
		labelInterpolationFnc: Chartist.noop,
		scaleMinSpace: 60,
		onlyInteger: false
  },
	axisY: { type: Chartist.FixedScaleAxis,high: 100,low: 0,onlyInteger: true, referenceValue:100, ticks: [0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100]},
	showArea: true,
	chartPadding: {
		right: 20,
		left: 10
	},
	plugins: [
		Chartist.plugins.tooltip()
	  ]
});

chart.on('created', function() {
  seq = 0;
});
chart.on('draw', function(data) {
	 seq++;
  if(data.type === 'line' || data.type === 'area') {
    data.element.animate({
	opacity: {
        begin: seq * delays,
        dur: durations,
        from: 0,
        to: 1,
        easing: 'easeOutCubic'
      }
    });
  } else if (data.type === 'point') {
    data.element.animate({
      x1: {
        begin: seq * delays,
        dur: durations,
        from: data.x - 10,
        to: data.x,
        easing: 'easeOutCubic'
      },
      opacity: {
        begin: seq * delays,
        dur: durations,
        from: 0,
        to: 1,
        easing: 'easeOutCubic'
      }
    });
  }
});

jQuery('.raschet_seo').viewportChecker({
		callbackFunction: function(){
		 chart.update();
		},offset: 1
	});

jQuery('.block_percent').viewportChecker({
		classToAdd: 'animate',
		callbackFunction: function(){
			circle_1(),
			circle_2(),
			circle_3(),
			circle_4(),
			circle_5();

		},offset: 100
	});
  });