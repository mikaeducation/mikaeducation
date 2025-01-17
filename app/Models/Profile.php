<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * 
 *
 * @property int $id
 * @property string $phone
 * @property string|null $username
 * @property string $first_name
 * @property string $last_name
 * @property string $birth_place
 * @property string $birth_date
 * @property string $address
 * @property string $occupation
 * @property string $institution
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Profile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile query()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereBirthDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereBirthPlace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereInstitution($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereOccupation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUsername($value)
 * @mixin \Eloquent
 */
class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'first_name',
        'last_name',
        'birth_place',
        'birth_date',
        'address',
        'occupation',
        'institution',
    ];

    /**
     * Relasi ke model User berdasarkan kolom 'phone'.
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'phone', 'phone'); //dibuat seperti ini agar nama class Profile tidak bentrok dengan namespace Symfony
    }
}
