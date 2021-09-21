@inject('AssetsAdmin', 'App\Assets\Assets')
<!DOCTYPE html>
<html lang="ja">

<head>
 <script src="{{ mix('js/app.js') }}"></script>
 {{ AssetsAdmin->getAssets() }}
</head>

<body>
 <div id="app">
  @yield('content')
 </div>

</body>

</html>
