@extends('layouts.app')
@section('content')
 <section class="shops-wrap">
  <ul>
   @foreach ($shops as $s)
    <li>
     <a href="{{ route('shop',$s->id) }}">
      <div class="rate-wrap">
       <p class="rates">
        <span class="men">
         Mens:<b>{{ $s->mens }}</b>
        </span>
        <span class="women">
         Womens:<b>{{ $s->womens }}</b>
        </span>
       </p>
       <p class="name">{{ $s->name }}</p>
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
