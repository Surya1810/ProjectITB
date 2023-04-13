<?php

namespace Database\Seeders;

use App\Models\Equipment;
use Illuminate\Database\Seeder;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eqt = Equipment::create([
            'item' => 'Sepatu Futsal Nike',
            'image' => 'sepatu_futsal_nike.jpeg',
            'category' => 'alat',
            'price' => '50.000',
        ]);
        $eqt = Equipment::create([
            'item' => 'Bola Futsal Specs',
            'image' => 'bola_specs.jpg',
            'category' => 'alat',
            'price' => '50.000',
        ]);
        $eqt = Equipment::create([
            'item' => 'Raket',
            'image' => 'raket.jpg',
            'category' => 'alat',
            'price' => '50.000',
        ]);
        $eqt = Equipment::create([
            'item' => 'Jersey Manchester United',
            'image' => 'jersey_mu.jpg',
            'category' => 'pakaian',
            'price' => '50.000',
        ]);
        $eqt = Equipment::create([
            'item' => 'kok',
            'image' => 'kok.jpg',
            'category' => 'alat',
            'price' => '50.000',
        ]);
        // $eqt = Equipment::create([
        //     'item' => 'Sepatu Futsal Specs',
        //     'image' => '',
        //     'category' => 'alat',
        //     'price' => '50.000',s
        // ]);
    }
}
