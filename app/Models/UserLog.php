<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLog extends Model
{
    use HasFactory;

    protected $table = 'user_log';

    protected $fillable = [
        'user_id',
        'log_type',         // jenis log: completion, certificate, response
        'related_id',   // id dari progress atau message terkait
        'text_log',         // isi pesan notifikasi
        'is_read',
    ];

    protected $casts = [
        'is_read' => 'boolean',
    ];
}
