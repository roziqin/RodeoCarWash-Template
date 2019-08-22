<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('Partials.head')
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 pt-5">
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <div class="mr-5"><img src="images/logo.png"></div>
                        <h1 class="display-4 text-center">Rodeo Car Wash</h1>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col">
                    <form>
                        <div class="form-group text-center">
                            <label class="label-custom-1" for="kodebooking" >SCAN KODE BOOKING<br>ANDA DISINI</label>
                            <input type="text" class="form-control form-custom-1 text-center" id="kodebooking" placeholder="Kode Booking">
                        </div>
                        <!--<button type="submit" class="btn btn-warning btn-custom-1">CETAK</button>-->
                        <a href="{{ url('print') }}" target="_blank" class="btn btn-warning btn-custom-1">CETAK</a>
                    </form>
                </div>
                <div class="col-md-auto ml-2 mr-2">
                    <div class="d-flex align-items-sm-center float-left text-custom-1"><span>Atau</span></div>
                    <div class="line-vertical bg-secondary"></div>
                </div>
                <div class="col">
                    <div class="d-flex align-items-sm-center h100">
                        <a href="{{ url('merk') }}" class="btn-info link-custom-1 text-center">LANJUTKAN</a>
                    </div>
                </div>
            </div>
        </div>
        @include('Partials.footer')
    </body>
</html>
