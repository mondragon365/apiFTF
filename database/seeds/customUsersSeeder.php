<?php

use Illuminate\Database\Seeder;

class customUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\customUser::class, 100)->create();
    }
}
