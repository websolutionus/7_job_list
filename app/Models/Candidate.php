<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'cv', 'full_name', 'image',
    'title', 'experience_id', 'website', 'birth_date', 'gender',
    'marital_status', 'profession_id', 'status', 'bio'];
}
