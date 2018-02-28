<?php

use Illuminate\Database\Seeder;

class DescriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Description::class, 300)->create();
    }
}
