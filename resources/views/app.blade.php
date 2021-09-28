@inject('assets', 'App\Assets\Assets')
<!DOCTYPE html>
<html lang="ja">

<head>
 <script src="{{ mix('js/app.js') }}"></script>
 {{ $assets->getAssets() }}
</head>

<body>
 <div id="app">
  @yield('content')
 </div>

</body>

</html>
