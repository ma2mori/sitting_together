@inject('assets', 'App\Assets\Assets')
<!DOCTYPE html>
<html lang="ja">

<head>
 {{ $assets->getAssets() }}
</head>

<body>
 <div id="app">
  @yield('content')
 </div>
 <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>
