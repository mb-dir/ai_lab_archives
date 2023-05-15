<?php

namespace App\Models;

use App\Models\Country;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'continent',
        'period',
        'description',
        'price',
        'img',
    ];
    public function country(){
        return $this->belongsTo(Country::class);
    }
}
