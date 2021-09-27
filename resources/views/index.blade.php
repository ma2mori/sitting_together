@extends('app')
@section('content')
 <h3>Vueコンポーネント</h3>
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
