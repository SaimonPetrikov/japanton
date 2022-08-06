<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;
    protected $table = 'parts';

    protected $fillable = [
        "name_ru",
        "name_en",
        "sticker_fields",
        "sort"
    ];
}
