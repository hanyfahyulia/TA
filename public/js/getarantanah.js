var a = [0, 0, 0, 0, 0, 0, 0, 0, 0]

$.ajax({
    url: 'api/DataPergeseranTanah',
    success: function (data) {
        // a = data.data_kelembapan[0];
        a[0] = data.data_pergeseran_tanah[0];
        a[1] = data.data_pergeseran_tanah[1];
        a[2] = data.data_pergeseran_tanah[2];
        a[3] = data.data_pergeseran_tanah[3];
        a[4] = data.data_pergeseran_tanah[4];
        a[5] = data.data_pergeseran_tanah[5];
        a[6] = data.data_pergeseran_tanah[6];
        a[7] = data.data_pergeseran_tanah[7];
        a[8] = data.data_pergeseran_tanah[8];
        // document.getElementById("real-kelembapan").innerHTML = data.data_kelembapan;

    }
});

function updatechart() {
    $.ajax({
        url: 'api/DataPergeseranTanah',
        success: function (data) {
            // a = data.data_kelembapan[0];
            a[0] = data.data_pergeseran_tanah[0];
            a[1] = data.data_pergeseran_tanah[1];
            a[2] = data.data_pergeseran_tanah[2];
            a[3] = data.data_pergeseran_tanah[3];
            a[4] = data.data_pergeseran_tanah[4];
            a[5] = data.data_pergeseran_tanah[5];
            a[6] = data.data_pergeseran_tanah[6];
            a[7] = data.data_pergeseran_tanah[7];
            a[8] = data.data_pergeseran_tanah[8];
            // document.getElementById("real-kelembapan").innerHTML = data.data_kelembapan;

        }
    });
    $.ajax({
        url: 'api/DataKelembapan',
        success: function (data) {
            var b = data.data_kelembapan;
            document.getElementById("real-kelembapan").innerHTML = b[0];
        }
    });
    chart.updateSeries([{
        data: a
    }])

}
$.ajax({
    url: 'api/overviewkelembapan',
    success: function (data) {
        var average = data.rata;
        var minimal = data.minimal;
        var maksimal = data.maksimal;
        document.getElementById("average-kelembapan").innerHTML = average;
        document.getElementById("minimal-kelembapan").innerHTML = minimal;
        document.getElementById("maksimal-kelembapan").innerHTML = maksimal;
    }
});

var options = {
    series: [{
        name: 'series1',
        data: a
        // }, {
        //     name: 'series2',
        //     data: a
        // }, {
        //     name: 'series3',
        //     data: a
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


// var options = {
//     series: [{
//         name: "Desktops",
//         data: a

//     }],
//     chart: {
//         height: 350,
//         type: 'line',
//         zoom: {
//             enabled: false
//         }
//     },
//     dataLabels: {
//         enabled: false
//     },
//     stroke: {
//         curve: 'straight'
//     },
//     title: {
//         text: 'Grafik Getaran Tanah',
//         align: 'left',
//         style: {
//             color: '#000'
//         },
//     },
//     grid: {
//         row: {
//             colors: ['#C0C0C0', 'transparent'], // takes an array which will be repeated on columns
//             opacity: 0.5
//         },
//     },
//     xaxis: {
//         categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
//         labels: {
//             style: {
//                 colors: ['#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000', '#000'],
//             },
//         },
//     },
//     yaxis: {
//         labels: {
//             style: {
//                 colors: ['#000']
//             },
//         },
//     }
// };

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();
setTimeout(updatechart, 1000);
setInterval(updatechart, 3000);
