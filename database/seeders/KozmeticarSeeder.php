<?php

namespace Database\Seeders;

use App\Models\Kozmeticar;
use Illuminate\Database\Seeder;

class KozmeticarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kozmeticar::create([
            "studio"=>"Vanity",
            "ime"=>"Tijana",
            "prezime"=>"Vasic",
            "adresa"=>"Bulevar Zorana Djindjica 23 Beograd",
            "cena"=>"55e",
            "telefon"=>"06512345111",
            "brend"=>"Ardell",
        ]);

        Kozmeticar::create([
            "studio"=>"JelenaRox",
            "ime"=>"Jelena",
            "prezime"=>"Roksandic",
            "adresa"=>"Bulevar Kralja Aleksandra 13 Beograd",
            "cena"=>"65e",
            "telefon"=>"06512345333",
            "brend"=>"Blush",
        ]);
    }
}
