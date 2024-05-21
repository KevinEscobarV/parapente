<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Enums\CivilStatus;
use App\Enums\DocumentType;
use App\Enums\RH;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'surname',
        'birthday',
        'rh',
        'license',
        'document_type',
        'document_number',
        'civil_status',
        'phone_one',
        'phone_two',
        'address',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'document_type' => DocumentType::class,
        'civil_status' => CivilStatus::class,
        'rh' => RH::class,
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the name role attribute.
     */
    public function getNameRoleAttribute(): string
    {
        return $this->roles->pluck('display_name')->join(', ');
    }

    /**
     * Get the phone_one masked attribute.
     */
    public function getPhoneOneMaskedAttribute(): string
    {
        return sprintf(
            '+%s %s %s %s',
            substr($this->phone_one, 0, 2),
            substr($this->phone_one, 2, 3),
            substr($this->phone_one, 5, 3),
            substr($this->phone_one, 8)
        );
    }

    /**
     * Get the phone_two masked attribute.
     */
    public function getPhoneTwoMaskedAttribute(): string
    {
        if (!$this->phone_two) return '';
        return sprintf(
            '+%s %s %s %s',
            substr($this->phone_two, 0, 2),
            substr($this->phone_two, 2, 3),
            substr($this->phone_two, 5, 3),
            substr($this->phone_two, 8)
        );
    }

    /**
     * Scope a query to only include buyers that match the search.
     * 
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  string  $search
     * @return void
     */
    public function scopeSearch(Builder $query, string $search): void
    {
        if ($search)
            $query->where('name', 'like', "%$search%")
                ->orWhere('surname', 'like', "%$search%")
                ->orWhere('email', 'like', "%$search%")
                ->orWhere('document_number', 'like', "%$search%");
    }

    /**
     * Scope a query to sort buyers by the specified column.
     * 
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  string  $column
     * @param  bool  $asc
     * @return void
     */
    public function scopeSort(Builder $query, string $column = null, bool $asc): void
    {
        if ($column) $query->orderBy($column, $asc ? 'asc' : 'desc');
    }

    /**
     * Scope a query to only include buyers that are trashed.
     * 
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  bool  $onlyTrash
     * @return void
     */
    public function scopeTrash(Builder $query, bool $onlyTrash): void
    {
        if ($onlyTrash) $query->onlyTrashed();
    }
}
