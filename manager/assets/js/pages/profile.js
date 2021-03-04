$(function() {
    "use strict";
    MorrisArea();
});
function MorrisArea() {
    Morris.Area({
        element: 'm_area_chart',
        data: [{
                period: '2011',
                Earnings: 45,
                Sales: 75,
                
            }, {
                period: '2012',
                Earnings: 130,
                Sales: 110,
                
            }, {
                period: '2013',
                Earnings: 80,
                Sales: 60,
            
            }, {
                period: '2014',
                Earnings: 78,
                Sales: 205,
            
            }, {
                period: '2015',
                Earnings: 180,
                Sales: 45,
                
            }, {
                period: '2016',
                Earnings: 75,
                Sales: 174,
            
            },
            {
                period: '2017',
                Earnings: 210,
                Sales: 100,
            
            }
        ],
        xkey: 'period',
        ykeys: ['Earnings', 'Sales'],
        labels: ['Earnings', 'Sales'],
        pointSize: 2,
        fillOpacity: 0.1,
        pointStrokeColors: ['#191f28', '#ebebeb'],
        behaveLikeLine: true,
        gridLineColor: 'none',
        lineWidth: 1,
        hideHover: 'auto',
        lineColors: ['#191f28', '#ebebeb'],
        resize: true,
        axes:'',   
    });
}

$(function () {
    $('.knob').knob({
        draw: function () {
            // "tron" case
            if (this.$.data('skin') == 'tron') {

                var a = this.angle(this.cv)  // Angle
                    , sa = this.startAngle          // Previous start angle
                    , sat = this.startAngle         // Start angle
                    , ea                            // Previous end angle
                    , eat = sat + a                 // End angle
                    , r = true;

                this.g.lineWidth = this.lineWidth;

                this.o.cursor
                    && (sat = eat - 0.3)
                    && (eat = eat + 0.3);

                if (this.o.displayPrevious) {
                    ea = this.startAngle + this.angle(this.value);
                    this.o.cursor
                        && (sa = ea - 0.3)
                        && (ea = ea + 0.3);
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
});