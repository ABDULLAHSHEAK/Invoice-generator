<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

   protected $fillable = [
    'first_name',
    'sure_name',
    'middle_name',
    'birth_date',
    'type',
    'duration',
    'entry_time',
    'period',
    'app_status',
    'status_date',
    'ref_number',
    'country',
    'district',
    'number',
    'issu_date',
    'exp_date',
    'img_url',
   ];

}
