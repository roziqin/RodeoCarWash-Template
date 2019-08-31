<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('Partials.head')
    </head>
    <body>
        <div class="container-fluid">
            <div class="row blue-gradient position-relative mb-5">
                <div class="p-2 position-absolute abs-custom">
                    <a href="{{ url('/') }}" class="float-left pl-3 pr-3"><h2><i class="fa fa-arrow-left text-white"></i></h2></a>
                </div>
                <div class="col-12 pt-2 pb-2">
                    <h1 class="text-center text-white mb-0">SILAHKAN PILIH MERK KENDARAAN ANDA</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 slow fadeIn animated">
                    <a href="{{ url('tipe') }}" class=" position-relative">
                        <div class="card custom mb-2 text-center mb-5">
                            <img src="images/car/toyota.png">
                            <div class="card-body">
                                <h5 class="card-title">Toyota</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 slow fadeIn animated">
                    <a href="{{ url('tipe') }}" class=" position-relative">
                        <div class="card custom mb-2 text-center mb-5">
                            <img src="images/car/daihatsu.png">
                            <div class="card-body">
                                <h5 class="card-title">Daihatsu</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 slow fadeIn animated">
                    <a href="{{ url('tipe') }}" class=" position-relative">
                        <div class="card custom mb-2 text-center mb-5">
                            <img src="images/car/honda.png">
                            <div class="card-body">
                                <h5 class="card-title">Honda</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 slow fadeIn animated">
                    <a href="{{ url('tipe') }}" class=" position-relative">
                        <div class="card custom mb-2 text-center mb-5">
                            <img src="images/car/mitsubishi.png">
                            <div class="card-body">
                                <h5 class="card-title">Mitsubishi</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 slow fadeIn animated">
                    <a href="{{ url('tipe') }}" class=" position-relative">
                        <div class="card custom mb-2 text-center mb-5">
                            <img src="images/car/nissan.png">
                            <div class="card-body">
                                <h5 class="card-title">Nissan</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @include('Partials.footer')
    </body>
</html>
