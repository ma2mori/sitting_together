@inject('assets', 'App\Assets\Assets')
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
	{{ $assets->getAssets() }}
	<script src="https://unpkg.com/vue@next"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146473273-12">
	</script>
	<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-146473273-12');
	</script>

</head>

<body>
	<header>
		<a class="top" href="{{ route('/') }}">TOP</a>
		@auth
			<a class="mypage" href="{{ route('mypage.edit-profile') }}">MYPAGE</a>
			<form method="POST" action="{{ route('logout') }}">
				@csrf
				<button class="login-btn out">LOGOUT</button>
			</form>
		@endauth
		@guest
			<a class="login-btn" href="{{ route('login') }}">LOGIN</a>
		@endguest
	</header>
	<div id="app">
		@yield('content')
	</div>
</body>

{{-- <script src="{{ mix('js/app.js') }}"></script> --}}

</html>
