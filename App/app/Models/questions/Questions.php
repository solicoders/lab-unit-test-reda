<?php

namespace App\Models\Questions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $fillable = [
        'question',
        'reponse',
        'test_id'
    ];
    use HasFactory;
}
