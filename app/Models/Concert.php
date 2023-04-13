<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concert extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
