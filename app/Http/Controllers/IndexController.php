<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Index;

class IndexController extends Controller
{

	public function showIndex(){

		$shops = Index::select()
		->join('rates','rates.id','=','shops.id')
		->where('rates.updated_at','>=',date('Y-m-01 00:00:00'))
		->get();

		return view('index',[
			'shops' => $shops,
		]);

	}

}
