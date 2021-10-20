@inject('assets', 'App\Assets\Assets')
<!DOCTYPE html>
<html lang="ja">

<head>
 <meta content="width=device-width, initial-scale=1" name="viewport">
 {{ $assets->getAssets() }}
</head>

<body>
 <header>
  <a href="{{route('/')}}">top</a>
  @auth
  <a href="{{ route('mypage.edit-profile') }}">mypage</a>
  <form method="POST" action="{{ route('logout') }}">
   @csrf
   <button>ログアウト</button>
  </form>
  @endauth
  @guest
   <a href="{{ route('login') }}">ログイン</a>
  @endguest
 </header>
 <div id="app">
  @yield('content')
 </div>
</body>

<script src="{{ mix('js/app.js') }}"></script>

</html>
