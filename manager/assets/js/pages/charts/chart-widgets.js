$(function() {
    "use strict";
    MorrisChart();
    initDonutChart();
});
//======
function MorrisChart() {
    Morris.Bar({
        element: 'm_bar_chart',
        data: [{
            y: '2011',
            a: 80,
            b: 56,
            c: 89
        }, {
            y: '2012',
            a: 75,
            b: 65,
            c: 38
        }, {
            y: '2013',
            a: 59,
            b: 30,
            c: 37
        }, {
            y: '2014',
            a: 75,
            b: 65,
            c: 40
        }, {
            y: '2015',
            a: 55,
            b: 40,
            c: 45
        }, {
            y: '2016',
            a: 75,
            b: 65,
            c: 40
        }, {
            y: '2017',
            a: 87,
            b: 88,
            c: 36
        }],
        xkey: 'y',
        ykeys: ['a', 'b', 'c'],
        labels: ['A', 'B', 'C'],
        barColors: ['#313740', '#1dd1b1', '#7460ee'],
        hideHover: 'auto',
        gridLineColor: '#eef0f2',
        resize: true
    });
    Morris.Area({
        element: 'area_chart',
            data: [{
                period: '2011',
                America: 2,
                India: 0,
                Australia: 0
            }, {
                period: '2012',
                America: 31,
                India: 10,
                Australia: 5
            }, {
                period: '2013',
                America: 15,
                India: 28,
                Australia: 23
            }, {
                period: '2014',
                America: 45,
                India: 12,
                Australia: 7
            }, {
                period: '2015',
                America: 20,
                India: 32,
                Australia: 55
            }, {
                period: '2016',
                America: 39,
                India: 67,
                Australia: 20
            }, {
                period: '2017',
                America: 20,
                India: 9,
                Australia: 5
            }

        ],
        lineColors: ['#434850', '#1fe9e7', '#f44336'],
        xkey: 'period',
        ykeys: ['America', 'India', 'Australia'],
        labels: ['America', 'India', 'Australia'],
        pointSize: 2,
        lineWidth: 1,
        resize: true,
        fillOpacity: 0.3,
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        hideHover: 'auto'
    });
    Morris.Area({
        element: 'm_area_chart',
        data: [{
                period: '2011',
                Chadengle: 45,
                Damien: 75,
                Monica: 18
            }, {
                period: '2012',
                Chadengle: 130,
                Damien: 110,
                Monica: 82
            }, {
                period: '2013',
                Chadengle: 80,
                Damien: 60,
                Monica: 85
            }, {
                period: '2014',
                Chadengle: 78,
                Damien: 205,
                Monica: 135
            }, {
                period: '2015',
                Chadengle: 180,
                Damien: 124,
                Monica: 140
            }, {
                period: '2016',
                Chadengle: 105,
                Damien: 100,
                Monica: 85
            },
            {
                period: '2017',
                Chadengle: 210,
                Damien: 180,
                Monica: 120
            }
        ],
        xkey: 'period',
        ykeys: ['Chadengle', 'Damien', 'Monica'],
        labels: ['Chadengle', 'Damien', 'Monica'],
        pointSize: 1,
        fillOpacity: 0,
        pointStrokeColors: ['#7868da', '#fb4364', '#3aaaec'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 1,
        hideHover: 'auto',
        lineColors: ['#7868da', '#fb4364', '#3aaaec'],
        resize: true

    });
}
function initDonutChart() {
    Morris.Donut({
        element: 'donut_chart',
        data: [{
                label: 'Chrome',
                value: 37
            }, {
                label: 'Firefox',
                value: 30
            }, {
                label: 'Safari',
                value: 18
            }, {
                label: 'Opera',
                value: 12
            },
            {
                label: 'Other',
                value: 3
            }
        ],
        colors: ['#7868da', '#3aaaec', '#fb4364', '#ffb21e', '#282824'],
        formatter: function(y) {
            return y + '%'
        }
    });
}

$(function() {
	"use strict";
	var mapData = {
			"US": 298,			
            "AU": 760,
            "CA": 870,
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
				  fill : '#ebebeb'
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
		   
            markers: [
                { latLng: [37.09,-95.71], name: 'America' },                
                { latLng: [-25.27, 133.77], name: 'Australia' },
                { latLng: [56.13,-106.34], name: 'Canada' },
                { latLng: [20.59,78.96], name: 'India' },
                { latLng: [55.37,-3.43], name: 'United Kingdom' },
            ],

			series: {
				regions: [{
					values: {
						"US": '#bdf3f5',						
						"AU": '#f9f1d8',
						"IN": '#ffd4c3',
                        "GB": '#e0eff5',
                        "CA": '#efebf4',
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
});
$(function () {
    $('#world-map-markers2').vectorMap({
        map : 'world_mill_en',
        scaleColors : ['#ea6c9c', '#ea6c9c'],
        normalizeFunction : 'polynomial',
        hoverOpacity : 0.7,
        hoverColor : false,
        regionStyle : {
            initial : {
                fill : '#e0e0e0'
            }
        },
         markerStyle: {
            initial: {
                r: 15,
                'fill': '#313740',
                'fill-opacity': 0.9,
                'stroke': '#fff',
                'stroke-width' : 5,
                'stroke-opacity': 0.5
            },

            hover: {
                'stroke': '#fff',
                'fill-opacity': 1,
                'stroke-width': 5
            }
        },
        backgroundColor : 'transparent',
        markers: [
            { latLng: [37.09,-95.71], name: 'America' },
            { latLng: [51.16,10.45], name: 'Germany' },
            { latLng: [-25.27, 133.77], name: 'Australia' },
            { latLng: [56.13,-106.34], name: 'Canada' },
            { latLng: [20.59,78.96], name: 'India' },
            { latLng: [55.37,-3.43], name: 'United Kingdom' },
        ]
    });
});