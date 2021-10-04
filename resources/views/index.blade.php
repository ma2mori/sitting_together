@extends('layouts.app')
@section('content')
 @auth
  <p>ログイン済み</p>
  <form method="POST" action="{{ route('logout') }}">
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
  <ul>
   @foreach ($shops as $s)
    <li>
     <a href="{{ route('shop',$s->id) }}">
      <div>
       <p>{{ $s->code }}</p>
       <p>
        <span>
         Mens:<b>{{ $s->mens }}</b>
        </span>
        <span>
         Womens:<b>{{ $s->womens }}</b>
        </span>
       </p>
      </div>
     </a>
    </li>
    <div style="display: none;">
     <?print_r($s)?>
    </div>
   @endforeach
  </ul>
 </section>
@endsection
