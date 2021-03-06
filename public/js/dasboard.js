var ketinggian = 0;
var water_level = 0;

function updatechartB() {
    $.ajax({
        url: 'api/DataKetinggian',
        success: function (data) {
            var E = data.data_ultrasonik;
            ketinggian = E[0];
        }
    });
    $.ajax({
        url: 'api/DataWaterLevel',
        success: function (data) {
            var F = data.data_water_level;
            water_level = F[0];
        }
    });

    var G = 0;
    var H = 'MEMUAT.....';

    if (ketinggian < 25) {
        G = 70; // 70 = siaga
        H = 'SIAGA';
    }
    if (ketinggian > 25 && water_level < 200) {
        G = 35; // 35 = aman
        H = 'AMAN';
    }
    if (ketinggian < 25 && water_level > 200) {
        G = 100; // 100 = waspada 
        H = 'WASPADA'
    }
    chartB.updateOptions({
        series: [G],
        labels: [H],
    })
}

var G = 0;
var H = 'MEMUAT.....';

var optionsB = {
    series: [G],
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
    labels: [H],
};

var chartB = new ApexCharts(document.querySelector("#chart"), optionsB);
chartB.render();
setInterval(updatechartB, 1000);
