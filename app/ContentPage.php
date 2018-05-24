<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentPage extends Model
{
    protected $table = 'content_pages';

    protected $fillable = [
       'gjsid', 'assets','css','styles','html','components'
  ];
}
