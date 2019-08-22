<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('Partials.head')
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-8 p-2 border border-dark">
                    <a href="{{ url('tipe') }}" class="float-left pl-3 pr-3"><img src="images/arrow-left.png" height="32"></a>
                    <h3 class="text-center mb-0">RODEO CAR WASH</h3>
                </div>
                <div class="col-4 p-2 border border-dark">
                    <h3 class="text-center mb-0">DAFTAR PESANAN</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-8 p-3 border border-dark col-custom-1">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active show" id="terlaris" style="">  
                            <div class="row">
                            <?php
                            for ($i=0; $i < 18 ; $i++) { 
                            ?>
                                <div class="col-3 col-md-2 mb-4 list-item">
                                    <a href="{{ url('#') }}">
                                        <img src="images/logo.png">
                                        <div class="info-item">
                                            <h5 class="text-center p-1">Nama Jasa</h5>
                                        </div>
                                    </a>
                                </div>
                            <?php
                            }

                            ?>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="carwash">
                            <div class="row">
                            <?php
                            for ($i=0; $i < 12 ; $i++) { 
                            ?>
                                <div class="col-3 col-md-2 mb-4 list-item">
                                    <a href="{{ url('#') }}">
                                        <img src="images/logo.png">
                                        <div class="info-item">
                                            <h5 class="text-center p-1">Nama Jasa</h5>
                                        </div>
                                    </a>
                                </div>
                            <?php
                            }

                            ?>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="carcare">
                            <div class="row">
                            <?php
                            for ($i=0; $i < 21 ; $i++) { 
                            ?>
                                <div class="col-3 col-md-2 mb-4 list-item">
                                    <a href="{{ url('#') }}">
                                        <img src="images/logo.png">
                                        <div class="info-item">
                                            <h5 class="text-center p-1">Nama Jasa</h5>
                                        </div>
                                    </a>
                                </div>
                            <?php
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-4 p-0 border border-dark position-relative">
                    <div class="row m-0  col-custom-2">
                        <div class="col-12 p-3">
                            <div class="form-group text-center">
                                <input type="text" class="form-control form-custom-1 text-center" id="platnomor" placeholder="MASUKKAN PLAT NOMOR">
                            </div>
                            <table class="table table-custom-1 list-item">
                                <?php
                                for ($i=0; $i < 10 ; $i++) { 
                                ?>
                                    <tr>
                                        <td>
                                            <div class="form-group text-center">
                                                <input type="text" class="form-control text-center" id="jumlah" value="10">
                                            </div>
                                        </td>
                                        <td>Keterangan Jasa</td>
                                        <td><span class="price">Rp. 100.000</span></td>
                                    </tr>

                                <?php
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                    <div class="row m-0 position-absolute row-custom-1">
                        <div class="col-12 pl-0 pr-0">
                            <table class="table table-custom-1">
                                <tr>
                                    <td><h4 class="mb-0">Total</h4></td>
                                    <td><h4 class="mb-0"><b>Rp. 100.000</b></h4></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row fixed-bottom ml-0 mr-0 background-white row-bottom-custom">
                <div class="col-8 pl-0 pr-0 border border-dark">
                    <ul class="nav nav-tabs row ml-0 mr-0" role="tablist">
                        <li class="nav-item col-4 pl-0 pr-0">
                            <a class="nav-link active" href="#terlaris" role="tab" data-toggle="tab"><h4 class="text-center mb-0">TERLARIS</h4></a>
                        </li>
                        <li class="nav-item col-4 pl-0 pr-0">
                            <a class="nav-link" href="#carwash" role="tab" data-toggle="tab"><h4 class="text-center mb-0">CAR WASH</h4></a>
                        </li>
                        <li class="nav-item col-4 pl-0 pr-0">
                            <a class="nav-link" href="#carcare" role="tab" data-toggle="tab"><h4 class="text-center mb-0">CAR CARE</h4></a>
                        </li>
                    </ul>
                </div>
                <div class="col-4 p-0 border border-dark">
                    <!--<button type="submit" class="btn btn-primary btn-custom-2">PESAN</button>-->
                    <a href="{{ url('terimakasih') }}" class="btn btn-primary btn-custom-2">PESAN</a>
                </div>
            </div>
        </div>
        @include('Partials.footer')
    </body>
</html>
