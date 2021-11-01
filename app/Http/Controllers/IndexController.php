<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Index;
use Illuminate\Support\Carbon;

class IndexController extends Controller
{

	public function showIndex(){

		$span = Carbon::today()->subDay(10);

		$shops = Index::select()
		->join('rates','rates.id','=','shops.id')
		->where('rates.updated_at','>=',$span)
		->get();

		return view('index',[
			'shops' => $shops,
		]);

	}

}
