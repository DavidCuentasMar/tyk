<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'name' => 'Camilo Correa',
            'email' => 'camilocorrea@camilocorrea.com',
            'password' =>  Hash::make('camilocorrea@camilocorrea.com'),
            'type' => 'Seller',
            'n_sales' => 0,
        ]);
        DB::table('user')->insert([
            'name' => 'Bruce Wayne',
            'email' => 'brucewayne@brucewayne.com',
            'password' => Hash::make('brucewayne@brucewayne.com'),
            'type' => 'Both',
            'n_sales' => 0,
        ]);
        DB::table('user')->insert([
            'name' => 'Steve Rogers',
            'email' => 'steverogers@steverogers.com',
            'password' => Hash::make('steverogers@steverogers.com'),
            'type' => 'Customer',
            'n_sales' => 0,

        ]);
        DB::table('user')->insert([
            'name' => 'Natasha Romanoff',
            'email' => 'natasharomanoff@natasharomanoff',
            'password' => Hash::make('natasharomanoff@natasharomanoff'),
            'type' => 'Both',
            'n_sales' => 0,

        ]);
        DB::table('user')->insert([
            'name' => 'Juan Valdez',
            'email' => 'juanvaldez@juanvaldez.com',
            'password' => Hash::make('juanvaldez@juanvaldez.com'),
            'type' => 'Customer',
            'n_sales' => 0,
        ]);
    }
}
