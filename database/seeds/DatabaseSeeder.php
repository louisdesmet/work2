<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(VendorsTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(DomainsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(ProductOptionsTableSeeder::class);
        $this->call(OrderDetailsTableSeeder::class);
        $this->call(PricesTableSeeder::class);
        $this->call(ProductKeysTableSeeder::class);
    }
}
