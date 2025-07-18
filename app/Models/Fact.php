<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fact extends Model
{
    protected $fillable = [
        'student_id',
        'title',
        'count',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
