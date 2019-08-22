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
                    </div>
                </div>
                <div class="col-12 pt-5 text-center">
                    <h1>TERIMA KASIH<br>SILAHKAN AMBIL STRUK<br>DAN TUNJUKKAN PADA KASIR SAAT PEMBAYARAN</h1>

                </div>
            </div>
        </div>
        @include('Partials.footer')
    </body>
</html>
