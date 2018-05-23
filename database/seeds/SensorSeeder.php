<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class SensorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // OPCIO 1
        // DB::table('sensors')->insert([
        //     'temp' => 25,
        //     'humitat' => 55,
        //     'pressio' => 1000,
        //     'created_at' => Carbon::now(),
        // ]);

        // OPCIO 2 - usant factories
        // factory(App\Sensor::class,100)->create();

        
        // OPCIO 3
        Eloquent::unguard();

        $path = 'public/files/inserts.sql';
        DB::unprepared(file_get_contents($path));
       

    }
}
