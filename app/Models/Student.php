<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=['st_name','st_father_phone','st_mother_phone','st_identity','st_date_of_birth'];
    use HasFactory;
}
