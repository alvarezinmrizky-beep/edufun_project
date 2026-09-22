<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function student()
    {
        return $this->hasOne(Student::class);
    }

    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }

    public function quizResults()
    {
        return $this->hasMany(QuizResult::class);
    }

    public function learningProgress()
    {
        return $this->hasMany(LearningProgress::class);
    }

    public function badges()
    {
        return $this->belongsToMany(
            Badge::class,
            'student_badges'
        )->withPivot('earned_at')
         ->withTimestamps();
    }
}