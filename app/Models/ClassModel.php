<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;

class ClassModel extends Model
{
    use HasFactory;
    protected $table = 'classes';

    protected $fillable = [
        'class_name',
        'class_numeric',
        'teacher_name',
        'class_description',
        
    ];

}
