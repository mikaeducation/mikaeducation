<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgressHistory extends Model
{
    use HasFactory;

    protected $table = 'progress_history';
    protected $primaryKey = 'history_id'; 

    protected $fillable = [
        'progress_id',
        'user_id',
        'module_id',
        'module_part',
        'page_path',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function progressTracking()
    {
        // Pastikan 'progress_id' adalah foreign key di tabel progress_history yang merujuk ke primary key progress_id di progress_tracking
        return $this->belongsTo(ProgressTracking::class, 'progress_id', 'progress_id');
    }
}

