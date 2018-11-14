<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>
    <div class="text-center" style="background-color:#717fe0; padding:5% 5%">
      <h2 style="color:white;">
    PETITSTORE</h2>
    </div>

    <div class="container mt-5">
      <p>Siparişiniz Başarı ile Alındı.</p>
      <p><a href="{{route('shop.index')}}">https://petitstore.web.tr</a> </p>
      <p>Sipariş Numaranız : {{$product_sale[0]->sale_package}}</p>
      <table class="table">
        <thead>
          <tr>
            <th>Kod</th>
            <th>İsim</th>
            <th>Beden</th>
            <th>Renk</th>
            <th>Adet</th>
            <th>Tutar</th>
          </tr>
        </thead>
        <tbody>
          @foreach($product_sale as $sale)
          <tr>
            <td>{{$sale->product_human_id}}</td>
            <td>{{$sale->product_name}}</td>
            <td>{{ $sale->size->attribute_long }}</td>
            <td>{{ $sale->color->attribute_long }}</td>
            <td>{{ $sale->sale_quantity }}</td>
            <td>{{ $sale->sale_price }}</td>
            <td></td>
          </tr>
        @endforeach
        </tbody>
      </table>
      <h5>Kargo Bilgileri</h5>
      <p>Ülke : {{$adress->country}} </p>
      <p>Şehir : {{$adress->city}} </p>
      <p>Adres : {{$adress->adress}} </p>
      <p>İyi Günler</p>
    </div>
  </body>
</html>
