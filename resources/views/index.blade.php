@extends('app')
@section('content')
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
