<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgressTracking extends Model
{
    use HasFactory;

    protected $table = 'progress_tracking';
    protected $primaryKey = 'progress_id';

    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'module_id',
        'current_part',
        'percent_done',
        'is_completed',
        'last_visited_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function module()
    {
        return $this->belongsTo(Module::class, 'module_id', 'module_id');
    }

    public function progressHistory()
    {
        // Pastikan foreign key di tabel progress_history merujuk ke progress_id di progress_tracking
        return $this->hasMany(ProgressHistory::class, 'progress_id', 'progress_id');
    }
}

