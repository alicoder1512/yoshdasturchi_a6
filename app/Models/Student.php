<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name', 
        'photo',
        'job',
        'about',
        'birthday',
        'website',
        'phone',
        'city',
        'degree',
        'email',
        'telegram_username',
    ];


    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public function facts()
    {
        return $this->hasMany(Fact::class);
    }
    
    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }
}
