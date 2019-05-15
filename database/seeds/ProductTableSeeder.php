<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'name' => 'Arroz',
            'owner_id' => '1',
            'img_url' => 'https://enbalance.com.mx/sites/default/files/field/image/header_52.jpg',
            'stock' => 1,
            'price' => 1000,
        ]);
        DB::table('product')->insert([
            'name' => 'Aguacate',
            'owner_id' => '2',
            'img_url' => 'https://imgcdn.larepublica.co/i/336/2017/08/14081102/Aguacate-Hass.jpg',
            'stock' => 2,
            'price' => 2000,
        ]);
        DB::table('product')->insert([
            'name' => 'Leche',
            'owner_id' => '1',
            'stock' => 3,
            'price' => 3000,
        ]);
        DB::table('product')->insert([
            'name' => 'Carne',
            'owner_id' => '4',
            'stock' => 4,
            'price' => 4000,
        ]);
        DB::table('product')->insert([
            'name' => 'Fresa',
            'owner_id' => '4',
            'stock' => 5,
            'price' => 5000,
        ]);
        DB::table('product')->insert([
            'name' => 'Naranja',
            'owner_id' => '1',
            'stock' => 6,
            'price' => 6000,
        ]);
        DB::table('product')->insert([
            'name' => 'Corozo',
            'owner_id' => '2',
            'stock' => 7,
            'price' => 7000,
        ]);
        DB::table('product')->insert([
            'name' => 'Banana',
            'owner_id' => '4',
            'stock' => 8,
            'price' => 8000,
        ]);
        DB::table('product')->insert([
            'name' => 'Mango',
            'owner_id' => '4',
            'stock' => 9,
            'price' => 9000,
        ]);
        DB::table('product')->insert([
            'name' => 'Uva',
            'owner_id' => '2',
            'img_url' => 'https://http2.mlstatic.com/plantas-de-uva-red-globe-isabella-italia-D_NQ_NP_972314-MCO27319751214_052018-F.jpg',
            'stock' => 10,
            'price' => 10000,
        ]);
    }
}
