<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigCity extends Model
{
    use HasFactory;

    protected $table = "config_city";

    protected $fillable = ['parameter', 'description', 'index'];
}
