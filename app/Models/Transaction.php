<?php

namespace App\Models;

use App\Models\Coffee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';
    protected $guarded = ['id'];

    public function coffee()
    {
        return $this->belongsTo(Coffee::class, 'coffee_id', 'id');
    }
}
