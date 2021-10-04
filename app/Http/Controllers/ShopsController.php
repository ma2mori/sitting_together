<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Index;

class ShopsController extends Controller
{

 public function showShopDetail(Request $request){

  $request->flash();
  $shop_id = $request->route()->parameter('shop-id');
  $shop_detail = Index::where('shop_id',$shop_id)->get();

  if(!$shop_id || $shop_detail->isEmpty() == true){
   return redirect('/');
  }

  return view('shops.shop_detail',[
   'shop_detail' => $shop_detail,
  ]);

 }

}
