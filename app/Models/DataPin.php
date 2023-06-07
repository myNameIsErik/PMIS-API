<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPin extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'data_pin';

    protected $fillable = [
        'pin_formulir'
    ];

    public function invoice()
    {
        return $this->hasOne(Invoice::class, 'pin', 'id');
    }
}
