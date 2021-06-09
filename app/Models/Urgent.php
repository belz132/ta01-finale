<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urgent extends Model
{
    use HasFactory;
    // protected $table = "urgents";

    public function dosen() {
        return $this->belongsTo('App\Models\Dosen');
    }
}
