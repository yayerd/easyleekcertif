<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    // public function users()
    // {
    //     return $this->hasOne(User::class);
    // }

    public function plats()
    {
        return $this->hasMany(Plat::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
