@extends('app')
@section('content')
 <section>
  @foreach ($shops as $s)
   <foo-bar :prop-sample-price='@json($s->code)'></foo-bar>
  @endforeach
 </section>
@endsection
