<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Index;

class AdminController extends Controller
{
	public function __construct()
	{
		$this->middleware('admin');
	}

	public function index()
	{
		return view('admin.index');
	}

	public function showShopRegisterForm()
	{
		$shops = Index::all();
		return view('admin.shop_register_form',$shops);
	}

}
