<?php

use Illuminate\Database\Seeder;
use App\Supplier;
use App\Ingredient;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $suppliers = collect([
        //     ['name' => 'Pearl Produce', 'type' => 'food'],
        //     ['name' => 'Costco Farms', 'type' => 'food'],
        //     ['name' => 'Mr. Meats', 'type' => 'food'],
        //     ['name' => 'Dairy Delight', 'type' => 'food'],
        //     ['name' => 'Marks Cutlery', 'type' => 'food'],
        // ]);

        // $suppliers->each(function ($supplier) {
        //     Supplier::create($supplier);
        // });

        factory(Supplier::class, 10)->create()->each(function ($supplier) {
            $ingredient = factory(Ingredient::class)->make();
            $supplier->ingredient()->save($ingredient);
        });
    }
}
