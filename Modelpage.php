<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelpage extends Model
{
    use HasFactory;
    protected $table="client";
    protected $primaryKey="customer_id"; 
}
