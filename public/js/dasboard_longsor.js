var kelembapan = 0;
var pergerakan_tanah = 1;

function updatechart() {
    $.ajax({
        url: 'api/DataKelembapan',
        success: function (data) {
            var a = data.data_kelembapan;
            kelembapan = a[0];
        }
    });
    $.ajax({
        url: 'api/DataPergeseranTanah',
        success: function (data) {
            var c = data.data_pergeseran_tanah;
            pergerakan_tanah = c[0];
        }
    });

    var b = 0;
    var d = 'MEMUAT.....';

    if (kelembapan >= 50) {
        b = 70; // 70 = siaga
        d = 'SIAGA';
    }
    if (kelembapan < 50 && pergerakan_tanah < 1) {
        b = 35; // 35 = aman
        d = 'AMAN';
    }
    if (pergerakan_tanah > 1) {
        b = 100; // 100 = waspada 
        d = 'WASPADA'
    }
    chart.updateOptions({
        series: [b],
        labels: [d],
    })
}


var b = 0;
var d = 'MEMUAT.....';


var options = {
    series: [b],
    chart: {
        height: 350,
        type: 'radialBar',
        toolbar: {
            show: true
        }
    },
    plotOptions: {
        radialBar: {
            startAngle: -135,
            endAngle: 225,
            hollow: {
                margin: 0,
                size: '70%',
                background: '#fff',
                image: undefined,
                imageOffsetX: 0,
                imageOffsetY: 0,
                position: 'front',
                dropShadow: {
                    enabled: true,
                    top: 3,
                    left: 0,
                    blur: 4,
                    opacity: 0.24
                }
            },
            track: {
                background: '#fff',
                strokeWidth: '67%',
                margin: 0, // margin is in pixels
                dropShadow: {
                    enabled: true,
                    top: -3,
                    left: 0,
                    blur: 4,
                    opacity: 0.35
                }
            },

            dataLabels: {
                show: true,
                name: {
                    offsetY: -10,
                    show: true,
                    color: '#888',
                    fontSize: '17px'
                },
                value: {
                    formatter: function (val) {
                        return parseInt(val);
                    },
                    color: '#111',
                    fontSize: '36px',
                    show: true,
                }
            }
        }
    },
    fill: {
        colors: '#6f0000',
        type: 'gradient',
        gradient: {
            shade: 'dark',
            type: 'horizontal',
            shadeIntensity: 0.5,
            gradientToColors: ['#dbd939'],

            inverseColors: true,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 100]
        }
    },
    stroke: {
        lineCap: 'round'
    },
    labels: [d],
};

var chart = new ApexCharts(document.querySelector("#chart2"), options);
chart.render();
// setTimeout(updatechart, 1000);
setInterval(updatechart, 1000);
