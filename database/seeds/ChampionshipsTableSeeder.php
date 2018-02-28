<?php

use Illuminate\Database\Seeder;

class ChampionshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Championship::class, 2)->create()->each(function(App\Championship $championship){
            $championship->members()->attach([
               1 => ['place' => rand(10,30),'score' => rand(10,30),'r1' => rand(10,30),'r2' => rand(10,30),'r3' => rand(10,30),'bw' => rand(10,30),'bh' => rand(10,30),'category_id' => rand(1,5)],
               2 => ['place' => rand(10,30),'score' => rand(10,30),'r1' => rand(10,30),'r2' => rand(10,30),'r3' => rand(10,30),'bw' => rand(10,30),'bh' => rand(10,30),'category_id' => rand(1,5)],
               3 => ['place' => rand(10,30),'score' => rand(10,30),'r1' => rand(10,30),'r2' => rand(10,30),'r3' => rand(10,30),'bw' => rand(10,30),'bh' => rand(10,30),'category_id' => rand(1,5)],
               4 => ['place' => rand(10,30),'score' => rand(10,30),'r1' => rand(10,30),'r2' => rand(10,30),'r3' => rand(10,30),'bw' => rand(10,30),'bh' => rand(10,30),'category_id' => rand(1,5)],
               5 => ['place' => rand(10,30),'score' => rand(10,30),'r1' => rand(10,30),'r2' => rand(10,30),'r3' => rand(10,30),'bw' => rand(10,30),'bh' => rand(10,30),'category_id' => rand(1,5)],
               6 => ['place' => rand(10,30),'score' => rand(10,30),'r1' => rand(10,30),'r2' => rand(10,30),'r3' => rand(10,30),'bw' => rand(10,30),'bh' => rand(10,30),'category_id' => rand(1,5)],
               7 => ['place' => rand(10,30),'score' => rand(10,30),'r1' => rand(10,30),'r2' => rand(10,30),'r3' => rand(10,30),'bw' => rand(10,30),'bh' => rand(10,30),'category_id' => rand(1,5)],
               8 => ['place' => rand(10,30),'score' => rand(10,30),'r1' => rand(10,30),'r2' => rand(10,30),'r3' => rand(10,30),'bw' => rand(10,30),'bh' => rand(10,30),'category_id' => rand(1,5)],
               9 => ['place' => rand(10,30),'score' => rand(10,30),'r1' => rand(10,30),'r2' => rand(10,30),'r3' => rand(10,30),'bw' => rand(10,30),'bh' => rand(10,30),'category_id' => rand(1,5)],
               10 => ['place' => rand(10,30),'score' => rand(10,30),'r1' => rand(10,30),'r2' => rand(10,30),'r3' => rand(10,30),'bw' => rand(10,30),'bh' => rand(10,30),'category_id' => rand(1,5)],
               11 => ['place' => rand(10,30),'score' => rand(10,30),'r1' => rand(10,30),'r2' => rand(10,30),'r3' => rand(10,30),'bw' => rand(10,30),'bh' => rand(10,30),'category_id' => rand(1,5)],
               12 => ['place' => rand(10,30),'score' => rand(10,30),'r1' => rand(10,30),'r2' => rand(10,30),'r3' => rand(10,30),'bw' => rand(10,30),'bh' => rand(10,30),'category_id' => rand(1,5)]
            ]);
        });
    }
}
