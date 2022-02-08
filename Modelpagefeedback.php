<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelpagefeedback extends Model
{
    use HasFactory;
    protected $table="feedbacks";
    protected $primaryKey="customer_id"; 
}
