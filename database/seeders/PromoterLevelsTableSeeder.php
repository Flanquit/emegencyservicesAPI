<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PromoterLevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('promoterlevels')->insert([
            'levelId' => '1',
            'LevelTitle' => 'level1',
        ]);
    
        DB::table('promoterlevels')->insert([
            'levelId' => '3',
            'levelTitle' => 'level3',
        ]);

        DB::table('promoterlevels')->insert([
            'levelId' => '2',
            'levelTitle' => 'level2',
        ]);

        DB::table('promoterlevels')->insert([
            'levelId' => '4',
            'levelTitle' => 'level4',
        ]);
    }
}
