<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Einkaufliste extends Model
{
    use HasFactory;
    protected $fillable = [
        'titel', 
        'completed'
    ]; 

}
