<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Dashboard Template · Bootstrap v5.0</title>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>


    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">



    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .kotak {
            background-color: #C0C0C0;
            color: #000000;
            width: 400px;
            height: 40px;
            margin: auto;
            text-align: center;
        }

        .panjang {
            background-color: #ffffff;
            color: #000000;
            width: 400px;
            height: 150px;
            margin: auto;
            text-align: center;


        }

    </style>



    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style>
    .bg-sidebar {

        background-color: #C0C0C0;
        /* position : absolute;
        left: 0;
        top: 0;
        /* width : 80%; */
        /* height:100vh;
        justify-content: column;
        align-items: center;
        z-index: -1;
        transitions:all 1s; */ 
        
        
    }
/* nav ul.slide{
    transform:translateX(0); */

/* } */
</style>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Universitas Sebelas Maret</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="logout">Sign out</a>
            </li>
        </ul>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-sidebar sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="/home">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tanahlongsor">
                                <!-- <span data-feather="file"></span> -->
                                <img src="gambar/landslide.png" style="float:left;width:28px;height:28px">

                                <b>Tanah Longsor</b>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/banjir">
                                <!-- <span data-feather="cloud-rain"></span> -->
                                <img src="gambar/flood.png" style="float:left;width:28px;height:28px">
                                Banjir
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/profile">
                                <span data-feather="users"></span>
                                Profile
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>


        </div>

    </div>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="row">
            <div class="col-sm-6 col-md-5 col-lg-6">
                <h3 style="text-align:center;font-weight:bold; margin-top:40px">Kelembapan Tanah</h3>
                <h3 style="text-align:center; font-size: 100px;"id="real-kelembapan">80</h3>

            </div>
            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                <h3 style="text-align:center;font-weight:bold;margin-top :40px">Overview</h3>
                <div class="panjang">
                    <div class="w3-Gray ">
                        <!-- <h7 style= "text-align: center; color:#ffffff;">Nilai Rata- Rata Perbulan</h7> -->
                        <div class="w3-container w3-green w3-center w3-margin-top w3-round-xlarge" style="width:25%">20%
                        </div>
                        <!-- <h7 style= "text-align: center; color : #fffff;">Nilai Maximal Dalam Satu Bulan Terakhir</h7> -->
                        <div class="w3-container w3-red w3-center w3-margin-top w3-round-xlarge" style="width:50%">50%
                        </div>
                        <!-- <h7 style= "text-align: center ; color:#ffffff;">Nilai Manimal Dalam Satu Bulan Terakhir</h7> -->
                        <div class="w3-container w3-blue w3-margin-top w3-round-xlarge" style="width:75%">75%</div>
                    </div><br>
                    <svg width=15>
                        <rect width="15" height="15" style="fill:#4caf50" /></svg>
                    <span style="line-height: 10px; vertical-align:top;">Average</span>
                    <svg width=15>
                        <rect width="15" height="15" style="fill:#f44336" /></svg>
                    <span style="line-height: 10px; vertical-align:top;">Min/Bulan</span>
                    <svg width=15>
                        <rect width="15" height="15" style="fill:#2196f3" /></svg>
                    <span style="line-height: 10px; vertical-align:top;">Max/Bulan</span>
                </div>

            </div>

            <h3 style="text-align:center;font-weight:Bold;">Pergeseran Tanah </h3>
            <div id="chart"></div>
    </main>

    <script src="js/getarantanah.js"></script>
    <script>
                $.ajax({
                url: 'api/DataKelembapan',
                success: function(data) {
                var a = data.data_kelembapan;
                var len = a.length-1;
                document.getElementById("real-kelembapan").innerHTML = a[len];
                }
            });
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="dashboard.js">
    </script>
    <!-- <script src="bootstrap.bundle.min.js"></script> -->
</body>

</html>
