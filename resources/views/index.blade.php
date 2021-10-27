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
         <b>♂</b>
         <b class="cnt">{{ $s->mens }}</b>
        </span>
        <span class="women">
         <b>♀</b>
         <b class="cnt">{{ $s->womens }}</b>
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
