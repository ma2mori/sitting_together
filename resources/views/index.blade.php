@extends('app')
@section('content')
<section>
 <h2>以下はVueコンポーネントです</h2>
 <foo-bar></foo-bar>
</section>
 @foreach ($shops as $s)
  <pre>
   {{ $s->id . ':' . $s->mens }}/{{ $s->id . ':' . $s->womens }}
  </pre>
 @endforeach
@endsection
