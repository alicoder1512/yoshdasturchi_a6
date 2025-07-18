<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'student_id',
        'name',
        'photo',
        'position',
        'start_count',
        'comment',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
