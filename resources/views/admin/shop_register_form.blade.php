@extends('layouts.app')
@section('content')
<div style="color: white">
	<ul>
		@foreach ($shops as $shop)
			<li>
				<div>{{$shop->shop_id}}</div>
				<div>{{$shop->code}}</div>
				<div>{{$shop->area_id}}</div>
				<div>{{$shop->area}}</div>
				<div>{{$shop->name}}</div>
				<div>{{$shop->url}}</div>
				<div>{{$shop->tel}}</div>
				<div>{{$shop->access}}</div>
				<div>{{$shop->business_hours}}</div>
				<div>{{$shop->mens_charge}}</div>
				<div>{{$shop->price_weekdays_per10m}}</div>
				<div>{{$shop->price_holiday_per10m}}</div>
			</li>
		@endforeach
	</ul>
</div>
@endsection
