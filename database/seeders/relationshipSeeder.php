<?php

namespace Database\Seeders;

use App\Models\catergory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class relationshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            ['name' => 'catergory 1'],
            ['name' => 'catergory 2'],
            ['name' => 'catergory 3'],
            ['name' => 'catergory 4'],
            ['name' => 'catergory 5'],
            ['name' => 'catergory 6'],
            ['name' => 'catergory 7'],
            ['name' => 'catergory 8'],
            ['name' => 'catergory 9'],
            ['name' => 'catergory 10'],
        ];

        foreach ($array as  $value) {
            catergory::create($value);
        }
    }
}
