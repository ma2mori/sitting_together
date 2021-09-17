@foreach ($shops as $s)
 <pre>
  {{ $s->id.':'.$s->mens }}/{{ $s->id.':'.$s->womens }}
 </pre>
@endforeach
