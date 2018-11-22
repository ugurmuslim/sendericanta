<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->

<title>@yield('title') ŞEN DERİ ÇANTA</title>
<meta charset="UTF-8">
<meta name="description" content="Şen Deri Çanta kaliteli ürünleri ucuza bulabildiğiniz bir platformdur. Giyim , Aksesuar, Çanta kategorilerinde 100'den fazla ürün sizi bekliyor.">
<meta name="keywords" content="çanta satış, e-ticaret, kemer satış, çanta tamir, kemer tamir, çanta, kemer, valiz, valiz tamir,uygun fiyat valiz, uygun fiyat çanta,
çanta tasarım, kemer tasarım, valiz tasarım">
<meta name="viewport" content="width=device-width, initial-scale=1">
@include('shop::partials._shopping_head')
@yield('shop_styles')
</head>
<body>
  @yield('content')

  @yield('shop_scripts')
  @include('shop::partials._cart_panel_delete_javascript')


  {{-- Laravel Mix - JS File --}}
  {{-- <script src="{{ mix('js/shop.js') }}"></script> --}}
</body>
</html>
