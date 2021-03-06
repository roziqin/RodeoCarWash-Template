<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('Partials.head')
    </head>
    <body class="transaksi">

        <div class="container-fluid">
            <div class="row blue-gradient position-relative mb-0">
                <div class="p-2 position-absolute abs-custom">
                    <a href="{{ url('tipe') }}" class="float-left pl-3 pr-3"><h4><i class="fa fa-arrow-left text-white"></i></h4></a>
                </div>
                <div class="col-12 pt-2 pb-2">
                    <h1 class="text-center text-white mb-0">RODEO CAR WASH</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-9 pt-0 pl-3 pr-3 pb-3 border border-grey col-custom-1 position-relative">
                    <div class="runningtext custom bg-black-trans mb-0"><h5>Running Text Iklan</h5></div>
                    <!--Carousel Wrapper-->
                    <div id="multi-item-example" class="carousel slide carousel-multi-item mt-3 animated slow fadeIn" data-ride="carousel">

                      <!--Controls-->
                      <div class="controls-top custom">
                        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
                            class="fas fa-chevron-right"></i></a>
                      </div>
                        <!--/.Controls-->

                      <!--Slides-->
                      <div class="carousel-inner" role="listbox">

                        <!--First slide-->
                        <div class="carousel-item pl-4 pr-4 active">
                            <div class="col-item col-md-3">
                                <a href="#" class="remove"><i class="fas fa-times"></i></a>
                                <a href="{{ url('#') }}" class=" position-relative">
                                    <div class="card">
                                        <img src="images/service/CARWASH-reguler.png">
                                        <div class="card-body">
                                            <h5 class="card-title mb-1">Carwash Reguler</h5>
                                            <p class="card-text">Rp. 40.000</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-item col-md-3">
                                <a href="#" class="remove"><i class="fas fa-times"></i></a>
                                <a href="{{ url('#') }}" class=" position-relative">
                                    <div class="card">
                                        <img src="images/service/CARWASH-deluxe.png">
                                        <div class="card-body">
                                            <h5 class="card-title mb-1">Carwash Deluxe</h5>
                                            <p class="card-text">Rp. 50.000</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-item col-md-3">
                                <a href="#" class="remove"><i class="fas fa-times"></i></a>
                                <a href="{{ url('#') }}" class=" position-relative">
                                    <div class="card">
                                        <img src="images/service/CARWASH-ultra.png">
                                        <div class="card-body">
                                            <h5 class="card-title mb-1">Carwash Ultra</h5>
                                            <p class="card-text">Rp. 60.000</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-item col-md-3 selected">
                                <a href="#" class="remove"><i class="fas fa-times"></i></a>
                                <a href="{{ url('#') }}" class=" position-relative">
                                    <div class="card">
                                        <img src="images/service/CARWASH-healthy.png">
                                        <div class="card-body">
                                            <h5 class="card-title mb-1">Carwash Healthy</h5>
                                            <p class="card-text">Rp. 70.000</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <!--/.First slide-->

                        <!--Second slide-->
                        <div class="carousel-item pl-5 pr-5">
                            <div class="col-item col-md-3">
                                <a href="#" class="remove"><i class="fas fa-times"></i></a>
                                <a href="{{ url('#') }}" class=" position-relative">
                                    <div class="card">
                                        <img src="images/service/CARWASH-deluxe-healthy.png">
                                        <div class="card-body">
                                            <h5 class="card-title mb-1">Carwash Deluxe Healthy</h5>
                                            <p class="card-text">Rp. 90.000</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-item col-md-3">
                                <a href="#" class="remove"><i class="fas fa-times"></i></a>
                                <a href="{{ url('#') }}" class=" position-relative">
                                    <div class="card">
                                        <img src="images/service/CARWASH-ultra-healthy.png">
                                        <div class="card-body">
                                            <h5 class="card-title mb-1">Carwash Ultra Healthy</h5>
                                            <p class="card-text">Rp. 100.000</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-item col-md-3">
                                <a href="#" class="remove"><i class="fas fa-times"></i></a>
                                <a href="{{ url('#') }}" class=" position-relative">
                                    <div class="card">
                                        <img src="images/service/CARWASH-reguler.png">
                                        <div class="card-body">
                                            <h5 class="card-title mb-1">Carwash Reguler</h5>
                                            <p class="card-text">Rp. 40.000</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-item col-md-3">
                                <a href="#" class="remove"><i class="fas fa-times"></i></a>
                                <a href="{{ url('#') }}" class=" position-relative">
                                    <div class="card">
                                        <img src="images/service/CARWASH-deluxe.png">
                                        <div class="card-body">
                                            <h5 class="card-title mb-1">Carwash Deluxe</h5>
                                            <p class="card-text">Rp. 50.000</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <!--/.Second slide-->
                      </div>
                      <!--/.Slides-->

                    </div>
                    <!--/.Carousel Wrapper-->

                    <!--Carousel Wrapper-->
                    <div id="multi-item" class="carousel slide carousel-multi-item animated slow fadeIn mb-0" data-ride="carousel">

                      <!--Controls-->
                      <div class="controls-top custom">
                        <a class="btn-floating" href="#multi-item" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                        <a class="btn-floating" href="#multi-item" data-slide="next"><i
                            class="fas fa-chevron-right"></i></a>
                      </div>
                        <!--/.Controls-->

                      <!--Slides-->
                      <div class="carousel-inner" role="listbox">

                        <!--First slide-->
                        <div class="carousel-item pl-4 pr-4 active">
                            <div class="col-item col-md-3">
                                <a href="{{ url('#') }}" class=" position-relative">
                                    <div class="card">
                                        <img src="images/service/total-detailing-svc.png">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Total Detailing</h6>
                                            <p class="card-text">Rp. 100.000</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-item col-md-3">
                                <a href="{{ url('#') }}" class=" position-relative">
                                    <div class="card">
                                        <img src="images/service/nitro-seal-svc.png">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Nitro Seal</h6>
                                            <p class="card-text">Rp. 150.000</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-item col-md-3">
                                <a href="{{ url('#') }}" class=" position-relative">
                                    <div class="card">
                                        <img src="images/service/nano-ceramic-svc.png">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Nano Ceramic</h6>
                                            <p class="card-text">Rp. 200.000</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-item col-md-3">
                                <a href="{{ url('#') }}" class=" position-relative">
                                    <div class="card">
                                        <img src="images/service/total-detailing-svc.png">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Total Detailing</h6>
                                            <p class="card-text">Rp. 100.000</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-item col-md-3">
                                <a href="{{ url('#') }}" class=" position-relative">
                                    <div class="card">
                                        <img src="images/service/nitro-seal-svc.png">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Nitro Seal</h6>
                                            <p class="card-text">Rp. 150.000</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-item col-md-3 selected">
                                <a href="#" class="remove"><i class="fas fa-times"></i></a>
                                <a href="{{ url('#') }}" class=" position-relative">
                                    <div class="card">
                                        <img src="images/service/nano-ceramic-svc.png">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Nano Ceramic</h6>
                                            <p class="card-text">Rp. 200.000</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-item col-md-3">
                                <a href="{{ url('#') }}" class=" position-relative">
                                    <div class="card">
                                        <img src="images/service/nitro-seal-svc.png">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Nitro Seal</h6>
                                            <p class="card-text">Rp. 150.000</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-item col-md-3">
                                <a href="{{ url('#') }}" class=" position-relative">
                                    <div class="card">
                                        <img src="images/service/nano-ceramic-svc.png">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Nano Ceramic</h6>
                                            <p class="card-text">Rp. 200.000</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--/.First slide-->

                        <!--Second slide-->
                        <div class="carousel-item pl-4 pr-4">
                            <div class="col-item col-md-3">
                                <a href="{{ url('#') }}" class=" position-relative">
                                    <div class="card">
                                        <img src="images/service/total-detailing-svc.png">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Total Detailing</h6>
                                            <p class="card-text">Rp. 100.000</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-item col-md-3">
                                <a href="{{ url('#') }}" class=" position-relative">
                                    <div class="card">
                                        <img src="images/service/nitro-seal-svc.png">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Nitro Seal</h6>
                                            <p class="card-text">Rp. 150.000</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-item col-md-3">
                                <a href="{{ url('#') }}" class=" position-relative">
                                    <div class="card">
                                        <img src="images/service/nano-ceramic-svc.png">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Nano Ceramic</h6>
                                            <p class="card-text">Rp. 200.000</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-item col-md-3">
                                <a href="{{ url('#') }}" class=" position-relative">
                                    <div class="card">
                                        <img src="images/service/total-detailing-svc.png">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Total Detailing</h6>
                                            <p class="card-text">Rp. 100.000</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-item col-md-3">
                                <a href="{{ url('#') }}" class=" position-relative">
                                    <div class="card">
                                        <img src="images/service/nitro-seal-svc.png">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Nitro Seal</h6>
                                            <p class="card-text">Rp. 150.000</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-item col-md-3">
                                <a href="{{ url('#') }}" class=" position-relative">
                                    <div class="card">
                                        <img src="images/service/nano-ceramic-svc.png">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Nano Ceramic</h6>
                                            <p class="card-text">Rp. 200.000</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-item col-md-3">
                                <a href="{{ url('#') }}" class=" position-relative">
                                    <div class="card">
                                        <img src="images/service/nitro-seal-svc.png">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Nitro Seal</h6>
                                            <p class="card-text">Rp. 150.000</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-item col-md-3">
                                <a href="{{ url('#') }}" class=" position-relative">
                                    <div class="card">
                                        <img src="images/service/nano-ceramic-svc.png">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">Nano Ceramic</h6>
                                            <p class="card-text">Rp. 200.000</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--/.Second slide-->
                      </div>
                      <!--/.Slides-->

                    </div>
                    <!--/.Carousel Wrapper-->
                    
                </div>

                <div class="col-3 p-0 border border-grey position-relative">
                    <div class="row m-0  col-custom-2">
                        <div class="col-12 p-3">
                            <div class="form-group text-center">
                                <input type="hidden" class="form-control form-custom-1 text-center" id="platnomor" placeholder="MASUKKAN PLAT NOMOR">
                            </div>
                            <table class="table table-custom-1 list-item-jasa">
                                <tr>
                                    <td>
                                        <span class="quantity">1</span>
                                    </td>
                                    <td>Carwash Healty</td>
                                    <td><span class="price">Rp. 70.000</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="quantity">1</span>
                                    </td>
                                    <td>Nano Ceramic</td>
                                    <td><span class="price">Rp. 200.000</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row m-0 position-absolute row-custom-1">
                        <div class="col-12 pl-0 pr-0">
                            <table class="table table-custom-1">
                                <tr>
                                    <td><h4 class="mb-0">Total</h4></td>
                                    <td><h4 class="mb-0"><b>Rp. 270.000</b></h4></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-12 pl-0 pr-0 pb-2 pt-3 text-center">
                            <button class="btn btn-primary btn-custom-2 blue-gradient" id="confirm">PESAN</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('Partials.footer')
        <script type="text/javascript">
            var url_confirm    = 'terimakasih';
            $('#confirm').on('click', function(){
                $.confirm({
                    title: 'Konfirmasi Pemesanan',
                    content: 'Apakah yakin dengan pesanan anda?',
                    buttons: {
                        confirm: {
                            text: 'Ya',
                            btnClass: 'col-md-6 btn blue-gradient',
                            action: function(){
                                window.location = url_confirm;
                            }
                        },
                        cancel: {
                            text: 'Tidak',
                            btnClass: 'col-md-6 btn ripe-malinka-gradient text-white',
                            action: function(){
                               
                            }
                            
                        }
                    }
                });
            });
        
            $('.carousel').carousel({
                interval: false
            })
        </script>
    </body>
</html>
