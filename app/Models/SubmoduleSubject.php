<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\ModuleSubject;
use App\Models\SubmoduleQuizzes;
use App\Models\SubmodulePopupQuestion;
use Illuminate\Support\Facades\Storage;

class SubmoduleSubject extends Model
{
    use HasFactory;

    protected $table = 'submodule_subject';
    protected $primaryKey = 'submoduleSubject_id';
    protected $guarded = [];
    public $timestamps = true;

    protected $casts = [
        'submoduleSubject_file' => 'array',
        'submoduleSubject_quiz' => 'boolean',
    ];

    public function subject()
    {
        return $this->belongsTo(ModuleSubject::class, 'subject_id', 'subject_id');
    }
    
    // Relasi ke Quiz
    public function quizzes()
    {
        // Panggil class SubmoduleQuizzes yang baru
        return $this->hasMany(SubmoduleQuizzes::class, 'submoduleSubject_id', 'submoduleSubject_id');
    }
    
    public function popupQuestions()
    {
        return $this->hasMany(SubmodulePopupQuestion::class, 'submoduleSubject_id', 'submoduleSubject_id');
    }


    public function getSubmoduleSubjectUrlAttribute($value)
    {
        if (!$value) return null;

        if (str_starts_with($value, 'http')) {
            return $value;
        }
        /** @var \Illuminate\Filesystem\FilesystemAdapter $disk */        
        $disk = Storage::disk('s3');

        return $disk->url($value);
    }

    protected static function booted(): void
    {
        static::deleting(function (SubmoduleSubject $submodule) {
            $submodule->quizzes()->delete();            
            $submodule->popupQuestions()->delete();
        });
    }
}