<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agency extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'agency_code',
        'name',
        'description',
        'address',
    ];
}
