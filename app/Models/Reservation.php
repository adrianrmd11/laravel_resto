<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'guest_total',
        'date',
        'time',
        'note',
        'table_id', // jangan lupa tambahkan field ini juga
    ];

    public function table()
    {
        return $this->belongsTo(Table::class);
    }
}
