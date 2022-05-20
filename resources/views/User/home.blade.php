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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

    <title>Arrival Merch</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!--


-->

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
                <a class="nav-link" href="#"
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
                        <i class="fas fa-shopping-cart"></i>Sepet[{{$count}}]</a>
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


      @if(session()->has('message'))

<div class="alert alert-success">

<button type="button" class="close" data-dismiss="alert"></button>

{{session()->get('message')}}
</div>

@endif

    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content"></div>
        </div>
        <div class="banner-item-02">
          <div class="text-content"></div>
        </div>
        <div class="banner-item-03">
          <div class="text-content"></div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    
    @include('user.product')

    
    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2><em>Arrival Merch</em> Hakkında</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Arrival Merch Ailesi</h4>
              <p>
                Arrival Merch ailesi olarak bir topluluk oluşturmak ve size en
                güzel ürünleri en uygun fiyata ulaştırarak tarzınızı Arrival
                stili ile güçlendirmeyi hedefliyoruz! Bizimle
                <a rel="nofollow" href="/contact.html"> iletişime</a>
                geçerek aklınıza takılanları sorabilirsiniz.
              </p>

              <a href="about.html" class="filled-button">Daha fazlası için</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-image.jpg" alt="" />
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
              <li><a href="contact.html">İletişim</a></li>
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
                <a class="instagram" href="#"><i class="fa fa-instagram"></i></a>
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
