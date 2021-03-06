<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ItemTableSeeder::class);
        $this->call(PickerTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(CartTableSeeder::class);
        $this->call(Order_tableTableSeeder::class);
    }
}
