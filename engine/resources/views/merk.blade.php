<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('Partials.head')
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 p-2">
                    <a href="{{ url('/') }}" class="float-left pl-3 pr-3"><img src="images/arrow-left.png" height="32"></a>
                </div>
                <div class="col-12 pt-3 pb-5">
                    <h1 class="text-center">SILAHKAN PILIH MERK KENDARAAN ANDA</h1>
                </div>
            </div>
            <div class="row">
                <?php
                for ($i=0; $i < 18 ; $i++) { 
                ?>
                    <div class="col-3 col-md-2 mb-4 list-item">
                        <a href="{{ url('tipe') }}">
                            <img src="images/logo.png">
                            <div class="info-item">
                                <h5 class="text-center p-1">Nama Merk</h5>
                            </div>
                        </a>
                    </div>
                <?php
                }

                ?>
            </div>
        </div>
        @include('Partials.footer')
    </body>
</html>
