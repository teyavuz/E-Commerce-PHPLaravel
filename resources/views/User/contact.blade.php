<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
      rel="stylesheet"
    />

    <title>Sixteen Clothing - Contact Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
  </head>

  <body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
      <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{url('home')}}"
            ><h2>Arrival <em>Merch</em></h2></a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarResponsive"
            aria-controls="navbarResponsive"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{url('redirect')}}"
                  >Anasayfa
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('redirectproduct')}}">Ürünlerimiz</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('about')}}">Hakkımızda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('contact')}}">İletişim</a>
              </li>
              <li class="nav-item">
              @if (Route::has('login'))
                
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('showcart')}}">
                        <i class="fas fa-shopping-cart"></i>Sepet[]</a>
                       </li>
                   

                        <x-app-layout>

                        </x-app-layout>
                       
                    @else
                        <li><a class="nav-link" href="{{ route('login') }}">Giriş Yap</a></li>

                        @if (Route::has('register'))
                            <li><a class="nav-link" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Kayıt Ol</a></li>
                        @endif
                    @endauth
                
            @endif
            </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading contact-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Arrival Merch</h4>
              <h2>iletişim içinde kalalım</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="find-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Haritada Yerimiz</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div id="map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d752.2935386968205!2d28.988015847451965!3d41.04332046518347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab7c8cd42564f%3A0x258f9ed90d1a0963!2sJuan%20Valdez!5e0!3m2!1str!2str!4v1650581485948!5m2!1str!2str"
                width="100%"
                height="330px"
                frameborder="0"
                style="border: 0"
                allowfullscreen
              ></iframe>
            </div>
          </div>
          <div class="col-md-4">
            <div class="left-content">
              <h4>Ofisimiz</h4>
              <p>
                Harbiye, Cumhuriyet Cd. No:46, 34367 Şişli/İstanbul
                <br />
                +90 (535) 970 17 16
              </p>
              <ul class="social-icons">
                <li>
                  <a class="facebook" href="#"
                    ><i class="fa fa-facebook"></i
                  ></a>
                </li>
                <li>
                  <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="instagram" href="#"
                    ><i class="fa fa-instagram"></i
                  ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="happy-clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Mutlu Partnerler</h2>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-clients owl-carousel">
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="1" />
              </div>

              <div class="client-item">
                <img src="assets/images/client-02.png" alt="2" />
              </div>

              <div class="client-item">
                <img src="assets/images/client-03.png" alt="3" />
              </div>

              <div class="client-item">
                <img src="assets/images/client-04.png" alt="4" />
              </div>

              <div class="client-item">
                <img src="assets/images/client-05.png" alt="5" />
              </div>

              <div class="client-item">
                <img src="assets/images/client-06.png" alt="6" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>Hakkımızda</h6>
            <p class="text-justify">
              Arrival Merch ailesi olarak bir topluluk oluşturmak ve size en
              güzel ürünleri en uygun fiyata ulaştırarak tarzınızı Arrival stili
              ile güçlendirmeyi hedefliyoruz! Bizimle iletişime geçerek aklınıza
              takılanları sorabilirsiniz.
            </p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Hızlı Ulaşım</h6>
            <ul class="footer-links">
              <li><a href="about.html">Hakkımızda</a></li>
              <li><a href="contact.html">İletişims</a></li>
              <li><a href="products.html">Ürünlerimiz</a></li>
            </ul>
          </div>
        </div>
        <hr />
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li>
                <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                <a class="instagram" href="#"
                  ><i class="fa fa-instagram"></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language="text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t) {
        //declaring the array outside of the
        if (!cleared[t.id]) {
          // function makes it static and global
          cleared[t.id] = 1; // you could use true and false, but that's more typing
          t.value = ""; // with more chance of typos
          t.style.color = "#fff";
        }
      }
    </script>
  </body>
</html>
