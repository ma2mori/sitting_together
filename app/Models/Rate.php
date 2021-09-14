<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
 use HasFactory;

 protected $table = 'rates';

 protected $fillable = [
  'id',
  'shop_id',
  'code',
  'mens',
  'womens',
  ];

}
