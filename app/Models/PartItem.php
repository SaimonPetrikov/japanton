<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartItem extends Model
{
    use HasFactory;

    protected $table = 'part_items';

    protected $fillable = [
        "parent_id",
        "name_ru",
        "name_en",
        "name_jp",
        "type",
        "weight",
        "price",
        "sort",
        "car_type",
        "options",
        "code"
    ];
}
