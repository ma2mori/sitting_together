@extends('app')
@section('content')
 @auth
 <p>ログイン済み</p>
 <form method="POST" action="{{route('logout')}}">
  @csrf
  <button>ログアウト</button>
 </form>
 @endauth
 @guest
 <p>ゲストさん</p>
 <a href="{{ route('login') }}">ログイン</a>
 @endguest
 <p>Vueコンポーネント</p>
 <index-rate></index-rate>
 
 <section>
  @foreach ($shops as $s)
   <pre>
    {{ $s->id . '::' . $s->mens }}/{{ $s->womens }}
   </pre>
   <div style="display: none;">
    <?print_r($s)?>
   </div>
  @endforeach
 </section>
@endsection
