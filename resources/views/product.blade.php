<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Molisana product</title>
  </head>
  <body>
    @include('components.header')

      <div class="product-details">

        <h4>{{$pastaArray[$idProduct - 1]["titolo"]}} </h4>
        <img class="img-h" src="{{$pastaArray[$idProduct - 1]["src-h"]}} " alt=""> <br>
        <img  class="img-p" src="{{$pastaArray[$idProduct - 1]["src-p"]}} " alt="">
        <div class="container">
          <p>{!!$pastaArray[$idProduct - 1]["descrizione"]!!}</p>
        </div>

      </div>
      <div class="container">
        @include('components.footer')
      </div>
  </body>
</html>
