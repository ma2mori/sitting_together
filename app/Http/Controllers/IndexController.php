<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Index;

class IndexController extends Controller
{

	public function showIndex()
	{

		$dt_from = new \Carbon\Carbon();
		$dt_from->startOfMonth();

		$dt_to = new \Carbon\Carbon();
		$dt_to->endOfMonth();

		$shops = Index::select()
			->join('rates', 'rates.id', '=', 'shops.id')
			->whereBetween('rates.updated_at', [$dt_from, $dt_to])
			->get();

		return view('index', [
			'shops' => $shops,
		]);
	}
}
