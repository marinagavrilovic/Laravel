<?php

namespace Database\Seeders;
use App\Models\Kozmeticar;
use App\Models\User;
use App\Models\Rezervacija;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Kozmeticar::truncate();
        User::factory(3)->create();
        $user = User::factory()->create();
        $k =  Kozmeticar::create([
            "studio"=>"Helena",
            "ime"=>"Helena",
            "prezime"=>"Antic",
            "adresa"=>"Kumodraska 2 Beograd",
            "cena"=>"70e",
            "telefon"=>"06513335678",
            "brend"=>"Huda",
        ]);

        $array=explode(" ",$user->name);
        $prezime = $array[1];
        $ime = $array[0];
        Rezervacija::create([
            "ime"=>$ime,
            "prezime"=> $prezime,
            "datum_zakazivanja"=>"2022-08-08",
            "vreme"=>"20:00",
            "studio"=> "Helena",
            "kozmeticar_id"=> $k->id,
            "user_id"=> $user->id,
        ]);
    }
}
