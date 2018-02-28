<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Contact::class, 50)->create()->each(function ($u) {
            $u->member()->save(factory(App\Member::class)->make());
        });
    }
}