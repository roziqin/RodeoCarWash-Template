<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('Partials.head')
    </head>
    <body>
        <div class="container-fluid mb-5">
            <div class="row blue-gradient position-relative">
                <div class="p-2 position-absolute abs-custom">
                    <a href="{{ url('merk') }}" class="float-left pl-3 pr-3"><h4><i class="fa fa-arrow-left text-white"></i></h4></a>
                </div>
                <div class="col-12 pt-2 pb-2">
                    <h1 class="text-center text-white mb-0">SILAHKAN PILIH TIPE KENDARAAN ANDA</h1>
                </div>
            </div>
            <div class="row bg-black-trans pt-1 pb-1">
                <div class="col-md-12 position-relative">
                    <div class="runningtext full">
                        <h5>Promosikan usaha/produk anda di sini dengan menggunakan iklan running text. Promosikan usaha/produk anda di sini dengan menggunakan iklan running text. </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 slow fadeIn animated">
                    <a href="{{ url('transaksi') }}" class=" position-relative">
                        <div class="card custom mb-2 text-center mb-5">
                            <img src="images/car/fortuner.png">
                            <div class="card-body">
                                <h5 class="card-title">Fortuner</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 slow fadeIn animated">
                    <a href="{{ url('transaksi') }}" class=" position-relative">
                        <div class="card custom mb-2 text-center mb-5">
                            <img src="images/car/innova.png">
                            <div class="card-body">
                                <h5 class="card-title">Innova</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 slow fadeIn animated">
                    <a href="{{ url('transaksi') }}" class=" position-relative">
                        <div class="card custom mb-2 text-center mb-5">
                            <img src="images/car/agya.png">
                            <div class="card-body">
                                <h5 class="card-title">Agya</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 slow fadeIn animated">
                    <a href="{{ url('transaksi') }}" class=" position-relative">
                        <div class="card custom mb-2 text-center mb-5">
                            <img src="images/car/calya.png">
                            <div class="card-body">
                                <h5 class="card-title">Calya</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 slow fadeIn animated">
                    <a href="{{ url('transaksi') }}" class=" position-relative">
                        <div class="card custom mb-2 text-center mb-5">
                            <img src="images/car/rush.png">
                            <div class="card-body">
                                <h5 class="card-title">Rush</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 slow fadeIn animated">
                    <a href="{{ url('transaksi') }}" class=" position-relative">
                        <div class="card custom mb-2 text-center mb-5">
                            <img src="images/car/avanza.png">
                            <div class="card-body">
                                <h5 class="card-title">Avanza</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @include('Partials.footer')
    </body>
</html>
