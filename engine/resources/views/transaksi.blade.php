<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('Partials.head')
    </head>
    <body class="transaksi">
        <div class="container-fluid">
            <div class="row blue-gradient">
                <div class="col-8 p-2 border-right border-white">
                    <a href="{{ url('tipe') }}" class="float-left pl-3 pr-3"><img src="images/arrow-left.png" height="32"></a>
                    <h3 class="text-center mb-0 text-white">RODEO CAR WASH</h3>
                </div>
                <div class="col-4 p-2 border-left border-white">
                    <h3 class="text-center mb-0  text-white">DAFTAR PESANAN</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-8 p-3 border border-grey col-custom-1">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane animated slow fadeIn active show" id="terlaris" style="">  
                            <div class="row">
                                <div class="col-3 mb-4 list-item">
                                    <a href="{{ url('#') }}" class="shadow position-relative">
                                        <div class="info-price">Rp. 100.000</div>
                                        <div class="box-image">
                                            <img src="images/service/CARWASH-ultra-healthy.png">
                                        </div>
                                        <div class="info-item">
                                            <h4 class="text-center p-1 blue-text">Carwash Ultra Healthy</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 mb-4 list-item">
                                    <a href="{{ url('#') }}" class="shadow position-relative">
                                        <div class="info-price">Rp. 70.000</div>
                                        <div class="box-image">
                                            <img src="images/service/CARWASH-healthy.png">
                                        </div>
                                        <div class="info-item">
                                            <h4 class="text-center p-1 blue-text">Carwash Healthy</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 mb-4 list-item">
                                    <a href="{{ url('#') }}" class="shadow position-relative">
                                        <div class="info-price">Rp. 50.000</div>
                                        <div class="box-image">
                                            <img src="images/service/CARWASH-deluxe.png">
                                        </div>
                                        <div class="info-item">
                                            <h4 class="text-center p-1 blue-text">Carwash Deluxe</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 mb-4 list-item">
                                    <a href="{{ url('#') }}" class="shadow position-relative">
                                        <div class="info-price">Rp. 200.000</div>
                                        <div class="box-image">
                                            <img src="images/service/nano-ceramic-svc.png">
                                        </div>
                                        <div class="info-item">
                                            <h4 class="text-center p-1 blue-text">Nano Ceramic</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane animated slow fadeIn" id="carwash">
                            <div class="row">
                                <div class="col-3 mb-4 list-item">
                                    <a href="{{ url('#') }}" class="shadow position-relative">
                                        <div class="info-price">Rp. 40.000</div>
                                        <div class="box-image">
                                            <img src="images/service/CARWASH-reguler.png">
                                        </div>
                                        <div class="info-item">
                                            <h4 class="text-center p-1 blue-text">Carwash Reguler</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 mb-4 list-item">
                                    <a href="{{ url('#') }}" class="shadow position-relative">
                                        <div class="info-price">Rp. 50.000</div>
                                        <div class="box-image">
                                            <img src="images/service/CARWASH-deluxe.png">
                                        </div>
                                        <div class="info-item">
                                            <h4 class="text-center p-1 blue-text">Carwash Deluxe</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 mb-4 list-item">
                                    <a href="{{ url('#') }}" class="shadow position-relative">
                                        <div class="info-price">Rp. 60.000</div>
                                        <div class="box-image">
                                            <img src="images/service/CARWASH-ultra.png">
                                        </div>
                                        <div class="info-item">
                                            <h4 class="text-center p-1 blue-text">Carwash Ultra</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 mb-4 list-item">
                                    <a href="{{ url('#') }}" class="shadow position-relative">
                                        <div class="info-price">Rp. 70.000</div>
                                        <div class="box-image">
                                            <img src="images/service/CARWASH-healthy.png">
                                        </div>
                                        <div class="info-item">
                                            <h4 class="text-center p-1 blue-text">Carwash Healthy</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 mb-4 list-item">
                                    <a href="{{ url('#') }}" class="shadow position-relative">
                                        <div class="info-price">Rp. 90.000</div>
                                        <div class="box-image">
                                            <img src="images/service/CARWASH-deluxe-healthy.png">
                                        </div>
                                        <div class="info-item">
                                            <h4 class="text-center p-1 blue-text">Carwash Deluxe Healthy</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 mb-4 list-item">
                                    <a href="{{ url('#') }}" class="shadow position-relative">
                                        <div class="info-price">Rp. 100.000</div>
                                        <div class="box-image">
                                            <img src="images/service/CARWASH-ultra-healthy.png">
                                        </div>
                                        <div class="info-item">
                                            <h4 class="text-center p-1 blue-text">Carwash Ultra Healthy</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane animated slow fadeIn" id="carcare">
                            <div class="row">
                                <div class="col-3 mb-4 list-item">
                                    <a href="{{ url('#') }}" class="shadow position-relative">
                                        <div class="info-price">Rp. 100.000</div>
                                        <div class="box-image">
                                            <img src="images/service/total-detailing-svc.png">
                                        </div>
                                        <div class="info-item">
                                            <h4 class="text-center p-1 blue-text">Total Detailing</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 mb-4 list-item">
                                    <a href="{{ url('#') }}" class="shadow position-relative">
                                        <div class="info-price">Rp. 150.000</div>
                                        <div class="box-image">
                                            <img src="images/service/nitro-seal-svc.png">
                                        </div>
                                        <div class="info-item">
                                            <h4 class="text-center p-1 blue-text">Nitro Seal</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 mb-4 list-item">
                                    <a href="{{ url('#') }}" class="shadow position-relative">
                                        <div class="info-price">Rp. 200.000</div>
                                        <div class="box-image">
                                            <img src="images/service/nano-ceramic-svc.png">
                                        </div>
                                        <div class="info-item">
                                            <h4 class="text-center p-1 blue-text">Nano Ceramic</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-4 p-0 border border-grey position-relative">
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
                                    <td><a href="#" class="delete btn-danger"><i class="fas fa-trash text-white"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="quantity">1</span>
                                    </td>
                                    <td>Nano Ceramic</td>
                                    <td><span class="price">Rp. 200.000</span></td>
                                    <td><a href="#" class="delete btn-danger"><i class="fas fa-trash text-white"></i></a></td>
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
                    </div>
                </div>
            </div>
            <div class="row fixed-bottom ml-0 mr-0 background-white row-bottom-custom">
                <div class="col-8 pl-0 pr-0 border border-grey main-tabs-docs">
                    <ul class="nav nav-mtd tabs-info z-depth-1 row ml-0 mr-0" role="tablist">
                        <li class="nav-item col-4 pl-0 pr-0">
                            <a class="nav-link waves-light waves-effect waves-light active text-white " href="#terlaris" role="tab" data-toggle="tab"><h4 class="text-center mb-0">TERLARIS</h4></a>
                        </li>
                        <li class="nav-item col-4 pl-0 pr-0">
                            <a class="nav-link waves-light waves-effect waves-light text-white" href="#carwash" role="tab" data-toggle="tab"><h4 class="text-center mb-0">CAR WASH</h4></a>
                        </li>
                        <li class="nav-item col-4 pl-0 pr-0">
                            <a class="nav-link waves-light waves-effect waves-light text-white" href="#carcare" role="tab" data-toggle="tab"><h4 class="text-center mb-0">CAR CARE</h4></a>
                        </li>
                    </ul>
                </div>
                <div class="col-4 p-0 border border-grey text-center">
                    <!--<button type="submit" class="btn btn-primary btn-custom-2">PESAN</button>-->
                    <a href="{{ url('terimakasih') }}" class="btn btn-primary btn-custom-2 blue-gradient">PESAN</a>
                </div>
            </div>
        </div>
        @include('Partials.footer')
    </body>
</html>
