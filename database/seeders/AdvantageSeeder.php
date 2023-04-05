<?php

namespace Database\Seeders;

use App\Models\Advantage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdvantageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $advantages = [
            ['name' => 'Advantage 1'],
            ['name' => 'Advantage 2'],
            ['name' => 'Advantage 3'],
            ['name' => 'Advantage 4'],
            ['name' => 'Advantage 5'],
            ['name' => 'Advantage 6'],
            ['name' => 'Advantage 7'],
            ['name' => 'Advantage 8'],
            ['name' => 'Advantage 9'],
            ['name' => 'Advantage 10'],
        ];
        Advantage::insert($advantages);
    }
}
