<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'banks';

    protected $fillable = [
        'nama',
        'alamat',
        'norek',
        'anrek',
        'currency',
        'swift_code'
    ];

    public function invoices()
    {
        return $this->hasOne(Invoice::class, 'bank', 'id');
    }
}
