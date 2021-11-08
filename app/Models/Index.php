<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
 use HasFactory;

 protected $table = 'shops';

 protected $fillable = [
  'shop_id',
  'code',
  'area_id',
  'area',
  'name',
  'url',
  'tel',
  'access',
  'business_hours',
  'mens_charge',
  'price_weekdays_per10m',
  'price_holiday_per10m',
  'image1',
 ];
}
