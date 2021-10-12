@inject('assets', 'App\Assets\Assets')
<!DOCTYPE html>
<html lang="ja">

<head>
 <meta content="width=device-width, initial-scale=1" name="viewport">
 {{ $assets->getAssets() }}
</head>

<body>
 <div id="app">
  @yield('content')
 </div>
</body>

<script src="{{ mix('js/app.js') }}"></script>

</html>
