<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Rate;
use App\Http\Controllers\Controller;

class RatesController extends Controller
{
 /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  str  $code
  * @return \Illuminate\Http\Response
  */
 public function update(Request $request, $id)
 {
  $rate = Rate::find($id);
  $rate->mens = $request->mens;
  $rate->womens = $request->womens;
  $rate->save();
  return redirect('api/rates/'.$id);
 }
}
