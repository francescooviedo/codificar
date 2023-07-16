<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deputy extends Model
{
    protected $table = 'deputies';
    protected $fillable = ['id', 'nome'];
    public function spendings()
    {
        return $this->hasMany(Spending::class, 'congressperson_id');
    }
}
