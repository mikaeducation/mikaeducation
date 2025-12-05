<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleSubject extends Model
{
    use HasFactory;
    protected $table = 'module_subject';
    protected $primaryKey = 'subject_id';
    protected $guarded = [];
    public $timestamps = false;

    public function submodules()
    {
        return $this->hasMany(SubmoduleSubject::class, 'subject_id', 'subject_id');
    }

    protected static function booted(): void
    {
        static::deleting(function (ModuleSubject $subject) {
            $subject->submodules()->each(function ($submodule) {
                $submodule->delete();
            });
        });
    }
}
