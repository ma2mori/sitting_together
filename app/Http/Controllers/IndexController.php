<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Index;

class IndexController extends Controller
{

	public function showIndex(){

		$shops = Index::all();

		return view('index',[
			$shops => $shops,
		]);

	}

}
