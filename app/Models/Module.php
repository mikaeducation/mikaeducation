<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Module extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'module_id';
    protected $guarded = [];
    public $incrementing = true;
    protected $keyType = 'int';

    public function subjects()
    {
        return $this->hasMany(ModuleSubject::class, 'module_id', 'module_id');
    }

    protected $casts = [
        'module_point' => 'array',
        
        'module_publish_date' => 'date',
        'module_status' => 'boolean',
        'module_type' => 'boolean',
        'module_introduce' => 'boolean',
        'module_asessment' => 'boolean',
        'module_practice' => 'boolean',
    ];

    public function getRouteKeyName()
    {
        return 'module_id';
    }

    public function assessments()
    {
        return $this->hasMany(ModuleAsessment::class, 'module_id', 'module_id');
    }

    protected static function booted(): void
    {
        static::creating(function (Module $module) {
            if (empty($module->module_publisher)) {
                $module->module_publisher = $module->module_publisher_name ?? 'Mika Education';
            }
        });

        static::updating(function (Module $module) {
            if (empty($module->module_publisher)) {
                $module->module_publisher = $module->module_publisher_name ?? 'Mika Education';
            }
        });
    }

    // 1. Accessor untuk Teks Level (Otomatis dipanggil $module->level_text)
    public function getLevelTextAttribute()
    {
        return match ($this->module_level) {
            1 => 'Dasar',
            2 => 'Dasar-Menengah',
            3 => 'Menengah',
            4 => 'Menengah-Tinggi',
            5 => 'Tinggi',
            default => 'Tidak Diketahui',
        };
    }

    // 2. Accessor untuk Teks Tipe
    public function getTypeTextAttribute()
    {
        return $this->module_type ? 'Berulang' : 'Tidak Berulang';
    }

    // 3. Accessor untuk Teks Status
    public function getStatusTextAttribute()
    {
        return $this->module_status ? 'Tersedia' : 'Tidak Tersedia';
    }

    // 4. Accessor untuk Format Tanggal (Bahasa Indo)
    public function getPublishDateFormattedAttribute()
    {
        return \Carbon\Carbon::parse($this->module_publish_date)->translatedFormat('d F Y');
    }

    // 5. Accessor untuk Sertifikat
    public function getCertificateTextAttribute()
    {
        return $this->module_certificate ? 'Sertifikat Kelulusan' : 'Tidak ada Sertifikat';
    }

}
