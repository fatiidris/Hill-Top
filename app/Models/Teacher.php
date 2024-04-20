<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\ClassModel;
use App\Models\Student;

class Teacher extends Model
{
    use HasFactory;
    protected $table = 'teachers';
    protected $fillable = [
        'user_id',
        'name',
        'gender',
        'phone',
        'dateofbirth',
        'address',
        'start_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
