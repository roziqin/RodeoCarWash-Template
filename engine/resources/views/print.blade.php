<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    @include('Partials.head')
  <script type="text/javascript">
    window.setTimeout(function() {
      window.close();
    },1000)
  </script>
  </head>

  <body onLoad="window.print()" style="font-size: 12px;">
    <div class="wrapper">
      <h3 class="text-center">BOOKING</h3>
      <img src="images/qrcode.png" style="margin: 0 auto 10px; display: block; width: 120px; height: auto;">
      <p class="text-center mb-0">--- POSJS0708190006 ---</p>
      <p class="text-center">07 August 2019</p>
      <table  width="100%" border="0" >
        <tr>
          <td width="80">Jam Pesan</td>
          <td  align="right">11.30</td>
        </tr>
        <tr>
          <td>Jam Masuk</td>
          <td  align="right">11.30</td>
        </tr>
        <tr>
          <td>NOPOL</td>
          <td  align="right">N 1456 AA</td>
        </tr>
        <tr>
          <td>Kendaraan</td>
          <td  align="right">Daihatsu | Ayla</td>
        </tr>
        <tr>
          <td colspan="2"><hr class="custom-1"></td>
        </tr>
        <tr>
          <td>1x</td>
          <td  align="right">GLASS CLEANING</td>
        </tr>
        <tr>
          <td>1x</td>
          <td  align="right">SNOW WASH PLUS MAX</td>
        </tr>
      </table>
</div>
</body>
</html>
