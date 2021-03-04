//Project:	sQuare - Responsive Bootstrap 4 Template
//Primary use:	sQuare - Responsive Bootstrap 4 Template
$(function() {
    "use strict";    
    initDonutChart();
    MorrisArea();
    Jknob();    
});

//======
function initDonutChart() {
    Morris.Donut({
        element: 'donut_chart',
        data: [{
                label: 'Tablet',
                value: 15
            }, {
                label: 'Desktops',
                value: 45
            }, {
                label: 'Mobile',
                value: 40
            }
        ],
        colors: ['#3aaaec', '#7868da', '#fb4364'],
        formatter: function(y) {
            return y + '%'
        }
    });
}

//======
function MorrisArea() {

    Morris.Area({
        element: 'm_area_chart2',
        data: [{
                period: '2012',
                SiteA: 10,
                SiteB: 0,

            }, {
                period: '2013',
                SiteA: 126,
                SiteB: 78,

            }, {
                period: '2014',
                SiteA: 78,
                SiteB: 58,

            }, {
                period: '2015',
                SiteA: 89,
                SiteB: 185,

            }, {
                period: '2016',
                SiteA: 175,
                SiteB: 124,

            }, {
                period: '2017',
                SiteA: 126,
                SiteB: 102  ,

            }
        ],
        xkey: 'period',
        ykeys: ['SiteA', 'SiteB'],
        labels: ['Site A', 'Site B'],
        pointSize: 0,
        fillOpacity: 0.4,
        pointStrokeColors: ['#2CA8FF', '#18ce0f'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 1,
        smooth: false,
        hideHover: 'auto',
        lineColors: ['#2CA8FF', '#18ce0f'],
        resize: true

    });
    
    Morris.Area({
        element: 'm_area_chart',
        data: [{
                period: '2011',
                iphone: 22,
                ipad: 5,
                itouch: 55
            },{
                period: '2012',
                iphone: 33,
                ipad: 11,
                itouch: 155
            },{
                period: '2013',
                iphone: 17,
                ipad: 23,
                itouch: 55
            },{
                period: '2014',
                iphone: 55,
                ipad: 17,
                itouch: 55
            }, {
                period: '2015',
                iphone: 78,
                ipad: 98,
                itouch: 140
            }, {
                period: '2016',
                iphone: 59,
                ipad: 78,
                itouch: 85
            },{
                period: '2017',
                iphone: 170,
                ipad: 156,
                itouch: 120
            }
        ],
        xkey: 'period',
        ykeys: ['iphone', 'ipad', 'itouch'],
        labels: ['iPhone', 'iPad', 'iPod Touch'],
        pointSize: 1,
        fillOpacity: 0,
        pointStrokeColors: ['#222222', '#72c2ff', '#ffc107'],
        behaveLikeLine: true,
        gridLineColor: '#f6f6f6',
        lineWidth: 1,
        hideHover: 'auto',
        lineColors: ['#222222', '#72c2ff', '#ffc107'],
        resize: true
    
    });
}

//======
function Jknob() {
    $('.knob').knob({
        draw: function() {
            // "tron" case
            if (this.$.data('skin') == 'tron') {

                var a = this.angle(this.cv) // Angle
                    ,
                    sa = this.startAngle // Previous start angle
                    ,
                    sat = this.startAngle // Start angle
                    ,
                    ea // Previous end angle
                    , eat = sat + a // End angle
                    ,
                    r = true;

                this.g.lineWidth = this.lineWidth;

                this.o.cursor &&
                    (sat = eat - 0.3) &&
                    (eat = eat + 0.3);

                if (this.o.displayPrevious) {
                    ea = this.startAngle + this.angle(this.value);
                    this.o.cursor &&
                        (sa = ea - 0.3) &&
                        (ea = ea + 0.3);
                    this.g.beginPath();
                    this.g.strokeStyle = this.previousColor;
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                    this.g.stroke();
                }

                this.g.beginPath();
                this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
                this.g.stroke();

                this.g.lineWidth = 2;
                this.g.beginPath();
                this.g.strokeStyle = this.o.fgColor;
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                this.g.stroke();

                return false;
            }
        }
    });
}

$('#sparkline16').sparkline([155, 161, 170, 205, 198, 245, 279, 301, 423], {
    type: 'line',
    width: '100%',
    height: '390',
    chartRangeMax:100,
    resize: true,
    lineColor: '#84b3df',
    fillColor: '#d2e7fb',
    highlightLineColor: 'rgba(0,0,0,.1)',
    highlightSpotColor: 'rgba(0,0,0,.2)',
});

$('#sparkline16').sparkline([4, 5, 7, 5, 10, 12, 22, 32, 41, 32], {
    type: 'line',
    width: '100%',
    height: '290',
    chartRangeMax: 100,
    lineColor: '#8f8ff0',
    fillColor: '#b5b5ea',
    composite: true,
    resize: true,
    highlightLineColor: 'rgba(0,0,0,.1)',
    highlightSpotColor: 'rgba(0,0,0,.2)',
});

//======
$(window).on('scroll',function() {
    $('.card .sparkline').each(function() {
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow + 400) {
            $(this).addClass("pullUp");
        }
    });
});
//======

/*VectorMap Init*/

$(function() {
	"use strict";
	var mapData = {
			"US": 298,
			"SA": 200,
			"AU": 760,
			"IN": 2000000,
			"GB": 120,
		};
	
	if( $('#world-map-markers').length > 0 ){
		$('#world-map-markers').vectorMap(
		{
			map: 'world_mill_en',
			backgroundColor: 'transparent',
			borderColor: '#fff',
			borderOpacity: 0.25,
			borderWidth: 0,
			color: '#e6e6e6',
			regionStyle : {
				initial : {
				  fill : '#f4f4f4'
				}
			  },

			markerStyle: {
			  initial: {
							r: 5,
							'fill': '#fff',
							'fill-opacity':1,
							'stroke': '#000',
							'stroke-width' : 1,
							'stroke-opacity': 0.4
						},
				},
		   
			markers : [{
				latLng : [21.00, 78.00],
				name : 'INDIA : 350'
			  
			  },
			  {
				latLng : [-33.00, 151.00],
				name : 'Australia : 250'
				
			  },
			  {
				latLng : [36.77, -119.41],
				name : 'USA : 250'
			  
			  },
			  {
				latLng : [55.37, -3.41],
				name : 'UK   : 250'
			  
			  },
			  {
				latLng : [25.20, 55.27],
				name : 'UAE : 250'
			  
			  }],

			series: {
				regions: [{
					values: {
						"US": '#49c5b6',
						"SA": '#667add',
						"AU": '#50d38a',
						"IN": '#60bafd',
						"GB": '#ff758e',
					},
					attribute: 'fill'
				}]
			},
			hoverOpacity: null,
			normalizeFunction: 'linear',
			zoomOnScroll: false,
			scaleColors: ['#000000', '#000000'],
			selectedColor: '#000000',
			selectedRegions: [],
			enableZoom: false,
			hoverColor: '#fff',
		});
	}

	if( $('#india').length > 0 ){
	$('#india').vectorMap({
			map : 'in_mill',
			backgroundColor : 'transparent',
			regionStyle : {
				initial : {
					fill : '#f4f4f4'
				}
			}
		});
	}	

	if( $('#usa').length > 0 ){
		$('#usa').vectorMap({
			map : 'us_aea_en',
			backgroundColor : 'transparent',
			regionStyle : {
				initial : {
					fill : '#f4f4f4'
				}
			}
		});
	}        
		   
	if( $('#australia').length > 0 ){        
		$('#australia').vectorMap({
			map : 'au_mill',
			backgroundColor : 'transparent',
			regionStyle : {
				initial : {
					fill : '#f4f4f4'
				}
			}
		});
	}	
	 
	if( $('#uk').length > 0 ){ 
		$('#uk').vectorMap({
			map : 'uk_mill_en',
			backgroundColor : 'transparent',
			regionStyle : {
				initial : {
					fill : '#f4f4f4'
				}
			}
		});
	}	
});

