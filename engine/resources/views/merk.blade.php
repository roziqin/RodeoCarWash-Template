<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('Partials.head')
    </head>
    <body>
        <div class="row background-blue-1 position-relative mb-5"">
            <div class="col-12 p-2 position-absolute abs-custom">
                <a href="{{ url('/') }}" class="float-left pl-3 pr-3"><img src="images/arrow-left.png" height="32"></a>
            </div>
            <div class="col-12 pt-2 pb-2">
                <h1 class="text-center text-white font-weight-bold mb-0">SILAHKAN PILIH MERK KENDARAAN ANDA</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-3 mb-4 list-item">
                    <a href="{{ url('tipe') }}" class="shadow">
                        <div class="box-image">
                            <img src="images/car/toyota.png">
                        </div>
                        <div class="info-item">
                            <h4 class="text-center p-1">TOYOTA</h4>
                        </div>
                    </a>
                </div>
                <div class="col-3 mb-4 list-item">
                    <a href="{{ url('tipe') }}" class="shadow">
                        <div class="box-image">
                            <img src="images/car/daihatsu.png">
                        </div>
                        <div class="info-item">
                            <h4 class="text-center p-1">DAIHATSU</h4>
                        </div>
                    </a>
                </div>
                <div class="col-3 mb-4 list-item">
                    <a href="{{ url('tipe') }}" class="shadow">
                        <div class="box-image">
                            <img src="images/car/honda.png">
                        </div>
                        <div class="info-item">
                            <h4 class="text-center p-1">HONDA</h4>
                        </div>
                    </a>
                </div>
                <div class="col-3 mb-4 list-item">
                    <a href="{{ url('tipe') }}" class="shadow">
                        <div class="box-image">
                            <img src="images/car/mitsubishi.png">
                        </div>
                        <div class="info-item">
                            <h4 class="text-center p-1">MITSUBISHI</h4>
                        </div>
                    </a>
                </div>
                <div class="col-3 mb-4 list-item">
                    <a href="{{ url('tipe') }}" class="shadow">
                        <div class="box-image">
                            <img src="images/car/nissan.png">
                        </div>
                        <div class="info-item">
                            <h4 class="text-center p-1">NISSAN</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @include('Partials.footer')
    </body>
</html>
