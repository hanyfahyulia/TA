var a = [0, 0, 0, 0, 0, 0, 0, 0, 0]

$.ajax({
    url: 'api/DataWaterLevel',
    success: function (data) {
        // a = data.data_kelembapan[0];
        a[0] = data.data_water_level[0];
        a[1] = data.data_water_level[1];
        a[2] = data.data_water_level[2];
        a[3] = data.data_water_level[3];
        a[4] = data.data_water_level[4];
        a[5] = data.data_water_level[5];
        a[6] = data.data_water_level[6];
        a[7] = data.data_water_level[7];
        a[8] = data.data_water_level[8];

        // document.getElementById("real-kelembapan").innerHTML = data.data_kelembapan;

    }
});

function updatechart() {
    $.ajax({
        url: 'api/DataWaterLevel',
        success: function (data) {
            // a = data.data_kelembapan[0];
            a[0] = data.data_water_level[0];
            a[1] = data.data_water_level[1];
            a[2] = data.data_water_level[2];
            a[3] = data.data_water_level[3];
            a[4] = data.data_water_level[4];
            a[5] = data.data_water_level[5];
            a[6] = data.data_water_level[6];
            a[7] = data.data_water_level[7];
            a[8] = data.data_water_level[8];

            // document.getElementById("real-kelembapan").innerHTML = data.data_kelembapan;

        }
    });
    $.ajax({
        url: 'api/DataKetinggian',
        success: function (data) {
            var b = data.data_ultrasonik;
            document.getElementById("real-ketinggian").innerHTML = b[0];
        }
    });
    chart.updateSeries([{
        data: a
    }])
}
$.ajax({
    url: 'api/overviewketinggian',
    success: function (data) {
        var rata = data.kebanyakan;
        var sedikit = data.kurang;
        var banyak = data.lebih;
        document.getElementById("average-ketinggian").innerHTML = rata;
        document.getElementById("minimal-ketinggian").innerHTML = sedikit;
        document.getElementById("maksimal-ketinggian").innerHTML = banyak;
    }
});

var options = {
    series: [{
        name: 'series1',
        data: a
    }],

    chart: {
        height: 350,
        type: 'area'
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'smooth'
    },
    xaxis: {
        // type: 'datetime',
        categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
    },
    // tooltip: {
    //     x: {
    //         format: 'dd/MM/yy HH:mm'
    //     },
    // },
};



var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();
setTimeout(updatechart, 3000);
setInterval(updatechart, 3000);
