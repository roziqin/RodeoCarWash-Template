<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('Partials.head')
    </head>
    <body class="">
        <!-- Main navigation -->
        <header>
          <!-- Full Page Intro -->
          <div class="view jarallax custom fadeIn animated" style="background-image: url('images/bg-carwash.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <!-- Mask & flexbox options-->
            <div class="mask rgba-gradient-green d-flex justify-content-center align-items-center">
              <!-- Content -->
              <div class="container">
                <!--Grid row-->
                <div class="row">
                  <!--Grid column-->
                  <div class="col-md-6 white-text text-center text-md-left mt-xl-5 mb-5 fadeInLeft">
                    <h1 class="h1-responsive font-weight-bold mt-sm-5 fadeInLeft animated delay-03s">Terima Kasih</h1>
                    <hr class="hr-light fadeInLeft animated delay-06s">
                    <h5 class="mb-4 fadeInLeft animated delay-09s">Silahkan ambil struk<br>dan tunjukkan pada kasir saat pembayaran.</h5>
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </div>
              <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
          </div>
          <!-- Full Page Intro -->
        </header>
        <!-- Main navigation -->
        @include('Partials.footer')
        <script type="text/javascript">
            
               setInterval(function(){ 
                document.location.href="{{ url('/') }}";
              }, 3000);
        </script>
    </body>
</html>
