<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Molisana homepage</title>
  </head>
  <body>
    @include('components.header')
    <div class="type-pasta">
      <div class="container">
        <h2>le lunghe</h2>
        @foreach ($pastaArray as $id => $pasta)
          @if($pasta['tipo'] === 'lunga')
            <a href="/product/{{$id + 1}}"><img class="poster" src="{{$pasta['src']}}" alt=""></a>
          @endif
        @endforeach

        <h2>le corte</h2>
        @foreach ($pastaArray as $id => $pasta)
          @if($pasta['tipo'] === 'corta')
            <a href="/product/{{$id + 1}}"><img class="poster" src="{{$pasta['src']}}" alt=""></a>
          @endif
        @endforeach

        <h2>le cortissime</h2>
        @foreach ($pastaArray as $id => $pasta)
          @if($pasta['tipo'] === 'cortissima')
            <a href="/product/{{$id + 1}}"><img class="poster" src="{{$pasta['src']}}" alt=""></a>
          @endif
        @endforeach
      </div>
    </div>

    @include('components.footer')

  </body>
</html>
