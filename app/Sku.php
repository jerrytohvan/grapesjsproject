<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sku extends Model
{
    protected $table = 'skus_list';

    protected $fillable = [
      'sku_name','price'
];
}
