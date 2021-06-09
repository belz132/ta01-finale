<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function urgent() {
        return $this->hasOne('App\Models\Urgent');
    }

    public function jurusan() {
        return $this->belongsTo('App\Models\Jurusan');
    }
}
