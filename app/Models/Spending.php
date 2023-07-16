<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spending extends Model
{
    protected $fillable = [
        'congressperson_id',
        'value',
        'month',
    ];

    protected $primaryKey = 'id';

    public function deputy()
    {
        return $this->belongsTo(Deputy::class, 'congressperson_id', 'id');
    }
}
