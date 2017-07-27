<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $primaryKey = 'id';
    protected $table = 'products';
    protected $fillable = [
        'name', 'short', 'body',
    ];
}
