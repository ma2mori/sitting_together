<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Index;

class IndexController extends Controller
{

	public function showIndex(){

		$shops = Index::select()
		->join('rates','rates.id','=','shops.id')
		->get();

		return view('index',[
			'shops' => $shops,
		]);

	}

}
