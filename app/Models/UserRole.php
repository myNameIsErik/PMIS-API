<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'user_role';

    protected $fillable = [
        'role'
    ];

    public function users()
    {
        return $this->hasOne(User::class, 'role_id', 'id');
    }
}
