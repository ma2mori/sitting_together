@extends('app')
@section('content')
 @auth
 <p>ログイン済み</p>
 @endauth
 @guest
 <p>ゲスト</p>
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
