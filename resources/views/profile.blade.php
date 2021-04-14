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
    


    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/templatemo-style.css" />

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

    </style>


    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style>
.bg-sidebar {
   
   background-color: #C0C0C0;

}

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
                            <a class="nav-link" href="/home">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tanahlongsor">
                                <!-- <span data-feather="file"></span> -->
                                <img src="gambar/landslide.png" style="float:left;width:28px;height:28px">

                                Tanah Longsor
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
                                <b>Profile</b>
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>


        </div>

    </div>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="columns-bg">
            <!-- Logo & Intro -->
            <section id="logo" class="tm-section-logo">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 offset-sm-0 col-md-6 offset-md-6">
                            <div class="tm-site-name-container">
                                <div class="tm-site-name-container-inner">
                                    <h1 class="text-uppercase tm-text-primary tm-site-name">
                                        Sided
                                    </h1>
                                    <p class="tm-text-primary tm-site-description">
                                        SISTEM DETEKSI DINI BENCANA TANAH LONGSOR DAN BANJIR BERBASIS IOT (INTERNET OF
                                        THINGS)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Intro -->
            <section id="intro" class="tm-p-1-section-1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="tm-section-text-container">
                                <i class="tm-text-white">
                                    <p class="mb-0">
                                        Sistem pendeteksi dan peringatan dini bencana-bencana alam yang terjadi di
                                        Indonesia berbasis Internet of Things (IoT), diharapkan dapat memberikan solusi
                                        dalam memberikan tindakan secara cepat dalam upaya penanggulangan bencana alam,
                                        sehingga dapat dilakukan upaya tindakan dan penanggulangan resiko akibat bencana
                                        alam secara cepat dan akurat dan nantinya juga dapat diintegrasikan dengan
                                        sistem lainnya dengan konsep smart city.</p>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Our Place -->
            <section id="our_place">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 col-lg-6 tm-section-image-container tm-img-left-container">
                            <img src="gambar/IOT.jpg" alt="Image" class="img-fluid" />
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="tm-section-text-container-2">
                                <h2 class="tm-text-primary tm-section-title-mb tm-sm-bg-white-alpha">
                                    IOT
                                </h2>
                                <div class="tm-text-gray">
                                    <!-- <p class="mb-4">
                  	Sided Bootstrap v4.2.1 template has 3 HTML pages. <a href="index.html">Index</a>, <a href="page-2.html">Page 2</a> and <a href="page-3.html">Page 3</a>.
                    You may share this Sided template or <a rel="nofollow" href="https://www.facebook.com/templatemo">our templatemo page</a> to your friends. Pellentesque commodo malesuada est.
                    </p> -->
                                    <p class="mb-0">
                                        Internet of Things adalah suatu konsep dimana objek tertentu punya kemampuan
                                        untuk mentransfer data lewat jaringan tanpa memerlukan adanya interaksi dari
                                        manusia ke manusia ataupun dari manusia ke perangkat komputer. Internet of
                                        Things leih sering disebut dengan singkatannya yaitu IoT. IoT ini sudah
                                        berkembang pesat mulai dari konvergensi teknologi nirkabel,
                                        micro-electromechanical systems (MEMS), dan juga Internet.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Fusce, Section 4 -->
            <section id="section_4" class="tm-section-4">
                <div class="container-fluid">
                    <div class="row flex-column-reverse flex-lg-row">
                        <div class="col-md-12 col-lg-6 tm-text-left-container">
                            <div class="tm-section-text-container-3 tm-bg-white-alpha h-100">
                                <h2 class="tm-text-accent tm-section-title-mb">
                                    Banjir dan Tanah Longsor
                                </h2>
                                <p class="mb-0">
                                    Banjir adalah kejadian alam di mana suatu daerah atau daratan yang biasanya kering
                                    menjadi terendam air. Tanah longsor adalah peristiwa geologi di mana terjadi
                                    pergerakan tanah seperti jatuhnya bebatuan atau gumpalan besar tanah.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 tm-section-image-container tm-img-right-container">
                            <img src="gambar/336982647.jpg" alt="Image" class="img-fluid tm-img-right" />
                        </div>
                    </div>
                </div>
            </section>

            <!-- Beautiful Rollovers -->
            <section id="gallery">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 col-lg-6 tm-section-image-container tm-img-left-container">
                            <img src="gambar/banjir2.jpg" alt="Image" class="img-fluid" />
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="tm-section-text-container-2">
                                <h2 class="tm-text-primary tm-section-title-mb tm-sm-bg-white-alpha">
                                    Our Team
                                </h2>
                                <div class="tm-text-gray">
                                    <!-- <p class="mb-4">
                  	Sided Bootstrap v4.2.1 template has 3 HTML pages. <a href="index.html">Index</a>, <a href="page-2.html">Page 2</a> and <a href="page-3.html">Page 3</a>.
                    You may share this Sided template or <a rel="nofollow" href="https://www.facebook.com/templatemo">our templatemo page</a> to your friends. Pellentesque commodo malesuada est.
                    </p> -->
                                    <p class="mb-0">
                                        Hanifah Yulia (Mahasiswa Teknik Elektro)
                                    </p>
                                    <p class="mb-0">
                                        Subuh Pramono S.T.,M.T. (Dosen Pembimbing 1)
                                    </p>
                                    <p class="mb-0">
                                        Sutrisno S.T.,M.Sc,Ph.D. (Dosen Pembimbing 2)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- <div class="col-12">
              <div class="grid">
                <figure class="effect-duke mb-3">
                  <img
                    src="img/forty_image_11.jpg"
                    alt="Image"
                    class="img-fluid"
                  />
                  <figcaption>
                    <h2>Messy <span>Duke</span></h2>
                    <p>When he looks at the sky, he feels to run.</p>
                    <a href="#">View more</a>
                  </figcaption>
                </figure>
                <figure class="effect-duke">
                  <img
                    src="img/forty_image_12.jpg"
                    alt="Image"
                    class="img-fluid"
                  />
                  <figcaption>
                    <h2>Messy <span>Duke</span></h2>
                    <p>When he looks at the sky, he feels to run.</p>
                    <a href="page-2.html">View more</a>
                  </figcaption>
                </figure>
                <figure class="effect-duke mb-3">
                  <img
                    src="img/forty_image_13.jpg"
                    alt="Image"
                    class="img-fluid"
                  />
                  <figcaption>
                    <h2>Messy <span>Duke</span></h2>
                    <p>When he looks at the sky, he feels to run.</p>
                    <a href="#">View more</a>
                  </figcaption>
                </figure>
                <figure class="effect-duke">
                  <img
                    src="img/forty_image_14.jpg"
                    alt="Image"
                    class="img-fluid"
                  />
                  <figcaption>
                    <h2>Messy <span>Duke</span></h2>
                    <p>When he looks at the sky, he feels to run.</p>
                    <a href="#">View more</a>
                  </figcaption>
                </figure>
              </div>
            </div>

            <div class="col-md-6 tm-section-col-4">
              <div class="tm-section-text-container-4">
                <p class="tm-text-secondary mb-0">
                  Description text for beautiful rollovers using text color code
                  #999 for this line. Quisque pharetra mauris in libero vaius
                  tristique.
                </p> -->

            <!-- Contact -->
            <!-- <section id="contact" class="tm-section-contact">
        <div class="row tm-contact-section">
          <div class="col-md-6 px-0">
            <div class="tm-bg-white-alpha tm-contact-left">
              <div class="media mb-5">
                <a href="#" class="tm-contact-link">
                  <span class="tm-contact-icon-container">
                    <span class="tm-contact-icon-container-inner">
                      <i class="fas fa-phone tm-contact-icon tm-phone-icon"></i>
                    </span>
                  </span>
                  <span class="media-body"> 010-020-0340 </span>
                </a>
              </div>
              <div class="media mb-5">
                <a href="mailto:" class="tm-contact-link">
                  <span class="tm-contact-icon-container">
                    <span class="tm-contact-icon-container-inner">
                      <i class="fas fa-envelope tm-contact-icon"></i>
                    </span>
                  </span>
                  <span class="media-body"> info@company.com </span>
                </a>
              </div>
              <div class="media">
                <a href="" class="tm-contact-link">
                  <span class="tm-contact-icon-container">
                    <span class="tm-contact-icon-container-inner">
                      <i class="fas fa-map-marker-alt tm-contact-icon"></i>
                    </span>
                  </span>
                  <span class="media-body">
                    6120 Suspendisse ultricies<br />Scelerisque tellus, ID
                    10260<br />Magna aliquet porttitor
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 px-0">
            <div class="tm-contact-form-container">
              <form action="index.html" method="POST" class="tm-contact-form">
                <div class="form-group">
                  <input
                    type="text"
                    id="contact_name"
                    name="contact_name"
                    class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
                    placeholder="Your Name"
                    required
                  />
                </div>
                <div class="form-group">
                  <input
                    type="email"
                    id="contact_email"
                    name="contact_email"
                    class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
                    placeholder="Email"
                    required
                  />
                </div>
                <div class="form-group">
                  <textarea
                    rows="4"
                    id="contact_message"
                    name="contact_message"
                    class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
                    placeholder="Message"
                    required
                  ></textarea>
                </div>
                <div class="text-right">
                  <button type="submit" class="btn tm-btn-submit rounded-0">
                    Send
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section> -->

            <!-- <section id="outro">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="tm-section-text-container-5 tm-text-white">
                <p>
                  Fusce a porttitor augue. Phasellus nec faucibus erat, vitae
                  sagittis arcu. Quisque viverra dui purus, at rutrum nibh
                  suscipit ut.
                </p>
                <i
                  >&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing
                  elit. Duis cursus ac mauris maximus auctor.&rdquo;</i
                >
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="tm-section-text-container-6">
                <a class="tm-social-icon-container">
                  <span class="tm-social-icon-container-inner">
                    <i class="fab fa-facebook-f"></i>
                  </span>
                </a>
                <a class="tm-social-icon-container">
                  <span class="tm-social-icon-container-inner">
                    <i class="fab fa-twitter"></i>
                  </span>
                </a>
                <a class="tm-social-icon-container">
                  <span class="tm-social-icon-container-inner">
                    <i class="fab fa-instagram"></i>
                  </span>
                </a>
                <a class="tm-social-icon-container">
                  <span class="tm-social-icon-container-inner">
                    <i class="fab fa-google-plus-g"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="row">
            <footer class="col-sm-12 col-md-6 offset-md-6 px-md-0">
              <p class="tm-copyright-text mb-0 tm-text-primary">
                <-- Copyright &copy; 2019 Company Name  -->

            <!-- - Design: <a rel="nofollow" href="https://www.facebook.com/templatemo">TemplateMo</a> -->
            <!-- </p>
            </footer>
          </div>
        </div>
      </section> --> -->
        </div>
    </main>

    <script src="bootstrap.bundle.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="dashboard.js"></script>
</body>

</html>
