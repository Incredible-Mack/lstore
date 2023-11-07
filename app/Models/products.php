<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $fillable = [
        "product_id","image","description","prices","product_name","stock","category","discount","perfereddiscount"
    ] ;
}
