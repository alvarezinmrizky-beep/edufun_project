<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id',
        'title',
        'description',
        'content',
        'image',
        'video_url',
        'class',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

    public function learningProgress()
    {
        return $this->hasMany(LearningProgress::class);
    }
}