<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'student_id',
        'title',
        'procent',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
