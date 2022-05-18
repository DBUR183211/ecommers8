<?php

namespace App\Models;
use App\Http\controllers\productcontroller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;
class product extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'unit',
        'price',
        'quantity',

    ];
}
