<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Lavabo en cerámica',
            'description' => 'Lavabo sobre encimera ovalado para baño de diseño en cerámica',
            'price' => '8497.23',
            'stock' => '5',
        ]);
        Product::create([
            'name' => 'Sanitario de Cerámica',
            'description' => 'Sanitario de Cerámica Dica con Asiento',
            'price' => '2249.00',
            'stock' => '4',
        ]);
        Product::create([
            'name' => 'Tina de baño Akor',
            'description' => 'Tina de baño Akor con Llave FS001N',
            'price' => '6523.50',
            'stock' => '2',
        ]);
    }
}
