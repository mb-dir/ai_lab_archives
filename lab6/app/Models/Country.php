<?php

namespace App\Models;

use App\Models\Trip;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'code',
        'currency',
        'area',
        'language',
    ];
    public function trip(){
        return $this->hasMany(Trip::class);
    }
}
