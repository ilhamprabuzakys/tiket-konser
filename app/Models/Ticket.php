<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function concert()
    {
        return $this->belongsTo(Concert::class, 'concert_id', 'id');
    }
}
