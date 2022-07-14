<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kozmeticar extends Model
{
    protected $fillable = [
        'adresu', 'studio', 'cena','ime','prezime','telefon','brend',
    ];
    use HasFactory;
    public function rezervacijas(){
        return $this->hasMany(Rezervacija::class);
    }
}
