<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('Partials.head')
    </head>
    <body class="home background-blue-1">
        <div class="container">
            <div class="box p-5 shadow">
                <div class="row">
                    <div class="col-12 pt-3">
                        <div class="d-flex flex-row justify-content-center align-items-center">
                            <div ><img src="images/logo.png"></div>
                        </div>
                    </div>
                    <div class="col-12 pt-5 text-center">
                        <h1>TERIMA KASIH<br>SILAHKAN AMBIL STRUK<br>DAN TUNJUKKAN PADA KASIR SAAT PEMBAYARAN</h1>

                    </div>
                </div>
            </div>
        </div>
        @include('Partials.footer')
        <script type="text/javascript">
            
               setInterval(function(){ 
                document.location.href="{{ url('/') }}";
              }, 3000);
        </script>
    </body>
</html>
