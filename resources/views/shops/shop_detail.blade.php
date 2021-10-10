@extends('layouts.app')
@section('content')

<a href="{{ route('mypage.edit-profile') }}">mypage</a>

<pre>
 <?=$shop_detail->url?>
</pre>
<pre>
 <?print_r($shop_detail)?>
</pre>

@endsection
