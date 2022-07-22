<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'cars';

    protected $fillable = [
        "manufacturer_id",
        "model_id",
        "body_id",
        "engine_id",
        "transmission_id",
        "mileage",
        "headlight",
        "taillight",
        "marriage",
        "notes",
        "notes_zibiz",
        "images",
        "videos",
        "user_id",
        "body_no",
        "engine_no",
        "in_the_way",
        "retail",
        "small",
        "archive",
        "sticker_notes",
        "manager_id",
        "documents",
        "provider_id",
        "provider_engine_price"
    ];
}
