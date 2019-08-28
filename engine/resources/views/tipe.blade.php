<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('Partials.head')
    </head>
    <body>
        <div class="row blue-gradient position-relative mb-5">
            <div class="col-12 p-2 position-absolute abs-custom">
                <a href="{{ url('merk') }}" class="float-left pl-3 pr-3"><h2><i class="fa fa-arrow-left text-white"></i></h2></a>
            </div>
            <div class="col-12 pt-2 pb-2">
                <h1 class="text-center text-white mb-0">SILAHKAN PILIH TIPE KENDARAAN ANDA</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-3 mb-4 list-item slow fadeIn animated">
                    <a href="{{ url('transaksi') }}" class="shadow">
                        <div class="box-image">
                            <img src="images/car/fortuner.png">
                        </div>
                        <div class="info-item">
                            <h4 class="text-center p-1 blue-text">Fortuner</h4>
                        </div>
                    </a>
                </div>
                <div class="col-3 mb-4 list-item slow fadeIn animated">
                    <a href="{{ url('transaksi') }}" class="shadow">
                        <div class="box-image">
                            <img src="images/car/innova.png">
                        </div>
                        <div class="info-item">
                            <h4 class="text-center p-1 blue-text">Innova</h4>
                        </div>
                    </a>
                </div>
                <div class="col-3 mb-4 list-item slow fadeIn animated">
                    <a href="{{ url('transaksi') }}" class="shadow">
                        <div class="box-image">
                            <img src="images/car/agya.png">
                        </div>
                        <div class="info-item">
                            <h4 class="text-center p-1 blue-text">Agya</h4>
                        </div>
                    </a>
                </div>
                <div class="col-3 mb-4 list-item slow fadeIn animated">
                    <a href="{{ url('transaksi') }}" class="shadow">
                        <div class="box-image">
                            <img src="images/car/calya.png">
                        </div>
                        <div class="info-item">
                            <h4 class="text-center p-1 blue-text">Calya</h4>
                        </div>
                    </a>
                </div>
                <div class="col-3 mb-4 list-item slow fadeIn animated">
                    <a href="{{ url('transaksi') }}" class="shadow">
                        <div class="box-image">
                            <img src="images/car/rush.png">
                        </div>
                        <div class="info-item">
                            <h4 class="text-center p-1 blue-text">Rush</h4>
                        </div>
                    </a>
                </div>
                <div class="col-3 mb-4 list-item slow fadeIn animated">
                    <a href="{{ url('transaksi') }}" class="shadow">
                        <div class="box-image">
                            <img src="images/car/avanza.png">
                        </div>
                        <div class="info-item">
                            <h4 class="text-center p-1 blue-text">Avanza</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @include('Partials.footer')
    </body>
</html>
