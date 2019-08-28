<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('Partials.head')
    </head>
    <body>

        <!-- Main navigation -->
        <header>
          <!-- Full Page Intro -->
          <div class="view jarallax custom fadeIn animated" style="background-image: url('images/bg-carwash.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <!-- Mask & flexbox options-->
            <div class="mask rgba-gradient-green d-flex justify-content-center align-items-center">
              <!-- Content -->
              <div class="container">
                <!--Grid row-->
                <div class="row justify-content-center">
                    <div class="col-8">
                        <section class="form-elegant slow bounceInDown animated">
                            <div class="card bg-transparant" style="">
                              <div class="card-body mx-4">

                                    <div class="row delay-2s fadeIn animated">
                                        <div class="col-12">
                                            <div class="align-items-center">
                                                <div class="text-center"><img src="images/logo.png" class="m-lr-auto"></div>
                                                <h1 class="display-4 text-center text-white mt-2">Rodeo Car Wash</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="md-form delay-2s fadeIn animated">
                                            <input type="text" id="kodebooking" class="form-control text-white">
                                            <label for="kodebooking" class=" text-white" >KODE BOOKING</label>
                                        </div>

                                        <div class="text-center mb-3 delay-2s fadeIn animated">
                                            <a href="{{ url('print') }}" target="_blank" class="btn blue-gradient btn-block btn-rounded z-depth-1a waves-effect waves-light">Cetak</a>
                                            <span class="d-block mt-0 mb-3 text-white">Atau</span>
                                            <a href="{{ url('merk') }}" class="btn purple-gradient btn-block btn-rounded z-depth-1a waves-effect waves-light">Booking Baru</a>
                                            <!-- <a href="{{ url('print') }}" target="_blank" class="btn btn-success btn-custom-1 shadow">CETAK</a> -->
                                        </div>
                                    </form>  

                                </div>
                            </div>
                        </section>  
                    
                    </div>
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
        <?php /*
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                        <section class="form-elegant slow bounceInDown animated">
                            <div class="card" style="margin-top: 12vh">
                              <div class="card-body mx-4">

                                    <div class="row delay-2s fadeIn animated">
                                        <div class="col-12">
                                            <div class="align-items-center">
                                                <div class="text-center"><img src="images/logo.png"></div>
                                                <h1 class="display-4 text-center blue-text mt-2">Rodeo Car Wash</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="md-form delay-2s fadeIn animated">
                                            <input type="text" id="kodebooking" class="form-control">
                                            <label for="kodebooking" >KODE BOOKING</label>
                                        </div>

                                        <div class="text-center mb-3 delay-2s fadeIn animated">
                                            <a href="{{ url('print') }}" target="_blank" class="btn blue-gradient btn-block btn-rounded z-depth-1a waves-effect waves-light">Cetak</a>
                                            <span class="d-block mt-0 mb-3">Atau</span>
                                            <a href="{{ url('merk') }}" class="btn purple-gradient btn-block btn-rounded z-depth-1a waves-effect waves-light">Booking Baru</a>
                                            <!-- <a href="{{ url('print') }}" target="_blank" class="btn btn-success btn-custom-1 shadow">CETAK</a> -->
                                        </div>
                                    </form>  

                                </div>
                            </div>
                        </section>  
                    
                </div>
            </div>
        </div>
        */?>
        @include('Partials.footer')
    </body>
</html>
