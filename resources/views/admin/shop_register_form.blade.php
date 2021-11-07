@extends('layouts.app')
@section('content')
<div style="color: white">
	<ul class="shop-list">
		<li>
			<div>shop_id</div>
			<div>code</div>
			<div>area_id</div>
			<div>area</div>
			<div>name</div>
			<div>url</div>
			<div>tel</div>
			<div>access</div>
			<div>business_hours</div>
			<div>mens_charge</div>
			<div>price_weekdays_per10m</div>
			<div>price_holiday_per10m</div>
		</li>
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
