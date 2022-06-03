<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigPostcode extends Model
{
    use HasFactory;

    protected $table = "config_postcode";

    protected $fillable = ['parameter', 'description', 'index'];
}
