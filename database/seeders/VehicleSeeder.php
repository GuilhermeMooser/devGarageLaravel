<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vehicle;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehicle::create([
            'name' => 'Red Death',
            'year' => '2024',
            'model' => 'v8',
            'mark' => 'McLaren',
            'photo' => 'https://i.pinimg.com/originals/40/ca/67/40ca6785e1ee3751b34dbc593de0ee54.jpg',
            'characteristics' => 'Fast, reliable, and a pleasure to drive',
            'type' => Vehicle::TYPE_CAR,
            'price' => 243000,
            'user_id' => 1,
        ]);

        Vehicle::create([
            'name' => 'German Demon',
            'year' => '2024',
            'model' => '2023',
            'mark' => 'BMW',
            'photo' => 'https://images.unsplash.com/flagged/photo-1553505192-acca7d4509be?ixlib=rb-4.0.3',
            'characteristics' => 'Fast, reliable, and a pleasure to drive',
            'type' => Vehicle::TYPE_CAR,
            'price' => 133000,
            'user_id' => 1,
        ]);

        Vehicle::create([
            'name' => 'Green Porsche',
            'year' => '2024',
            'model' => 'Green',
            'mark' => 'Porsche',
            'photo' => 'https://i.ytimg.com/vi/UjkcHEiGROQ/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLAwLNisebMFO0MJg2_qBKzVNn_wHg',
            'characteristics' => 'Fast, reliable, and a pleasure to drive',
            'type' => Vehicle::TYPE_CAR,
            'price' => 433000,
            'user_id' => 1,
        ]);

        Vehicle::create([
            'name' => 'Green Porsche',
            'year' => '2024',
            'model' => 'Green',
            'mark' => 'Porsche',
            'photo' => 'https://i.ytimg.com/vi/UjkcHEiGROQ/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLAwLNisebMFO0MJg2_qBKzVNn_wHg',
            'characteristics' => 'Fast, reliable, and a pleasure to drive',
            'type' => Vehicle::TYPE_CAR,
            'price' => 433000,
            'user_id' => 1,
        ]);

        Vehicle::create([
            'name' => 'Speed Slayer',
            'year' => '2024',
            'model' => '2024',
            'mark' => 'BMW',
            'photo' => 'https://i0.wp.com/thegarage.com.br/wp-content/uploads/2021/11/bmw-310-shibuya-garage-a-venda-sao-paulo-sp-for-sale-the-garage-classicos-a-carros-antigos-9-scaled.jpg?fit=2560,1709&ssl=1',
            'characteristics' => 'Fast, reliable, and a pleasure to drive',
            'type' => Vehicle::TYPE_MOTORCYCLE,
            'price' => 33000,
            'user_id' => 1,
        ]);
    }
}
