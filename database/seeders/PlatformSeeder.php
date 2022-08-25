<?php

namespace Database\Seeders;

use App\Models\Platform;
use Illuminate\Database\Seeder;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Platform::truncate();
        $Platform = [
        ['name' => 'Mobile games', 'slug' => 'mobile-games'],
        ['name' => 'Console games', 'slug' => 'console-games'],
        ['name' => 'PC games', 'slug' => 'pc-games']
        ];

        foreach ($Platform as $key => $value) {
            Platform::create($value);
        }
    }
}
