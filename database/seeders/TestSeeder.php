<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Federal_entity;
use App\Models\Municipality;
use App\Models\Locality;
use App\Models\Settlements;
use App\Models\ZipCode;

use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $test = Federal_entity::create([
            'key' => '9',
            'name' => 'Ciudad de Mexico',
            
        ]);
        $test = Municipality::create([
            'key' => '10',
            'name' => 'Ciudad de Mexico',
            
        ]);
        $test = Locality::create([
            'key' => '1',
            'name' => 'Ciudad de Mexico',
            
        ]);
        $test = Settlements::create([
            'key' => '82',
            'name' => 'Santa Fe',
            'zone_type' => 'Urbano',
            'settlement_type' => 'Pueblo',
        ]);
        $test = ZipCode::create([
            'zip_code' => '01210',
            'localities_id' => 1,
            'federal_entity_id' => 9,
            'settlements_id' => 82,
            'municipalities_id' => 10,
        ]);
    }
}
