<?php

use Illuminate\Database\Seeder;

use App\Price;
use Carbon\Carbon;

class PricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');

        Price::insert([
            //Office 365 unmanaged
            ['product_option_id' => 1, 'billing' => 'monthly', 'level' => 1, 'price' => '3.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 1, 'billing' => 'monthly', 'level' => 2, 'price' => '2.88', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 1, 'billing' => 'monthly', 'level' => 3, 'price' => '2.88', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 1, 'billing' => 'monthly', 'level' => 4, 'price' => '2.83', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 1, 'billing' => 'yearly', 'level' => 1, 'price' => '40.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 1, 'billing' => 'yearly', 'level' => 2, 'price' => '34.56', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 1, 'billing' => 'yearly', 'level' => 3, 'price' => '34.56', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 1, 'billing' => 'yearly', 'level' => 4, 'price' => '33.96', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 2, 'billing' => 'monthly', 'level' => 1, 'price' => '6.70', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 2, 'billing' => 'monthly', 'level' => 2, 'price' => '5.76', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 2, 'billing' => 'monthly', 'level' => 3, 'price' => '5.76', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 2, 'billing' => 'monthly', 'level' => 4, 'price' => '5.70', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 2, 'billing' => 'yearly', 'level' => 1, 'price' => '80.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 2, 'billing' => 'yearly', 'level' => 2, 'price' => '69.12', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 2, 'billing' => 'yearly', 'level' => 3, 'price' => '69.12', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 2, 'billing' => 'yearly', 'level' => 4, 'price' => '68.40', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 3, 'billing' => 'monthly', 'level' => 1, 'price' => '4.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 3, 'billing' => 'monthly', 'level' => 2, 'price' => '3.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 3, 'billing' => 'monthly', 'level' => 3, 'price' => '3.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 3, 'billing' => 'monthly', 'level' => 4, 'price' => '3.52', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 3, 'billing' => 'yearly', 'level' => 1, 'price' => '50.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 3, 'billing' => 'yearly', 'level' => 2, 'price' => '43.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 3, 'billing' => 'yearly', 'level' => 3, 'price' => '43.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 3, 'billing' => 'yearly', 'level' => 4, 'price' => '42.24', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 4, 'billing' => 'monthly', 'level' => 1, 'price' => '8.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 4, 'billing' => 'monthly', 'level' => 2, 'price' => '7.49', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 4, 'billing' => 'monthly', 'level' => 3, 'price' => '7.49', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 4, 'billing' => 'monthly', 'level' => 4, 'price' => '7.42', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 4, 'billing' => 'yearly', 'level' => 1, 'price' => '105.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 4, 'billing' => 'yearly', 'level' => 2, 'price' => '89.88', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 4, 'billing' => 'yearly', 'level' => 3, 'price' => '89.88', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 4, 'billing' => 'yearly', 'level' => 4, 'price' => '89.04', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 5, 'billing' => 'monthly', 'level' => 1, 'price' => '10.50', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 5, 'billing' => 'monthly', 'level' => 2, 'price' => '8.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 5, 'billing' => 'monthly', 'level' => 3, 'price' => '8.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 5, 'billing' => 'monthly', 'level' => 4, 'price' => '8.79', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 5, 'billing' => 'yearly', 'level' => 1, 'price' => '127.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 5, 'billing' => 'yearly', 'level' => 2, 'price' => '106.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 5, 'billing' => 'yearly', 'level' => 3, 'price' => '106.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 5, 'billing' => 'yearly', 'level' => 4, 'price' => '105.48', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 6, 'billing' => 'monthly', 'level' => 1, 'price' => '6.70', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 6, 'billing' => 'monthly', 'level' => 2, 'price' => '5.75', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 6, 'billing' => 'monthly', 'level' => 3, 'price' => '5.75', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 6, 'billing' => 'monthly', 'level' => 4, 'price' => '5.70', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 6, 'billing' => 'yearly', 'level' => 1, 'price' => '81.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 6, 'billing' => 'yearly', 'level' => 2, 'price' => '69.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 6, 'billing' => 'yearly', 'level' => 3, 'price' => '69.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 6, 'billing' => 'yearly', 'level' => 4, 'price' => '68.40', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 7, 'billing' => 'monthly', 'level' => 1, 'price' => '19.70', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 7, 'billing' => 'monthly', 'level' => 2, 'price' => '16.70', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 7, 'billing' => 'monthly', 'level' => 3, 'price' => '16.70', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 7, 'billing' => 'monthly', 'level' => 4, 'price' => '16.55', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 7, 'billing' => 'yearly', 'level' => 1, 'price' => '236.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 7, 'billing' => 'yearly', 'level' => 2, 'price' => '200.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 7, 'billing' => 'yearly', 'level' => 3, 'price' => '200.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 7, 'billing' => 'yearly', 'level' => 4, 'price' => '198.60', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 8, 'billing' => 'monthly', 'level' => 1, 'price' => '12.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 8, 'billing' => 'monthly', 'level' => 2, 'price' => '10.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 8, 'billing' => 'monthly', 'level' => 3, 'price' => '10.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 8, 'billing' => 'monthly', 'level' => 4, 'price' => '10.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 8, 'billing' => 'yearly', 'level' => 1, 'price' => '154.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 8, 'billing' => 'yearly', 'level' => 2, 'price' => '130.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 8, 'billing' => 'yearly', 'level' => 3, 'price' => '130.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 8, 'billing' => 'yearly', 'level' => 4, 'price' => '129.60', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 9, 'billing' => 'monthly', 'level' => 1, 'price' => '16.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 9, 'billing' => 'monthly', 'level' => 2, 'price' => '15.45', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 9, 'billing' => 'monthly', 'level' => 3, 'price' => '15.45', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 9, 'billing' => 'monthly', 'level' => 4, 'price' => '15.45', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 9, 'billing' => 'yearly', 'level' => 1, 'price' => '202.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 9, 'billing' => 'yearly', 'level' => 2, 'price' => '185.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 9, 'billing' => 'yearly', 'level' => 3, 'price' => '185.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 9, 'billing' => 'yearly', 'level' => 4, 'price' => '185.40', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 10, 'billing' => 'monthly', 'level' => 1, 'price' => '31.30', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 10, 'billing' => 'monthly', 'level' => 2, 'price' => '27.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 10, 'billing' => 'monthly', 'level' => 3, 'price' => '27.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 10, 'billing' => 'monthly', 'level' => 4, 'price' => '27.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 10, 'billing' => 'yearly', 'level' => 1, 'price' => '375.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 10, 'billing' => 'yearly', 'level' => 2, 'price' => '334.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 10, 'billing' => 'yearly', 'level' => 3, 'price' => '334.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 10, 'billing' => 'yearly', 'level' => 4, 'price' => '334.80', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 11, 'billing' => 'monthly', 'level' => 1, 'price' => '58.10', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 11, 'billing' => 'monthly', 'level' => 2, 'price' => '51.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 11, 'billing' => 'monthly', 'level' => 3, 'price' => '51.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 11, 'billing' => 'monthly', 'level' => 4, 'price' => '51.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 11, 'billing' => 'yearly', 'level' => 1, 'price' => '697.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 11, 'billing' => 'yearly', 'level' => 2, 'price' => '622.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 11, 'billing' => 'yearly', 'level' => 3, 'price' => '622.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 11, 'billing' => 'yearly', 'level' => 4, 'price' => '622.80', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 12, 'billing' => 'monthly', 'level' => 1, 'price' => '5.10', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 12, 'billing' => 'monthly', 'level' => 2, 'price' => '4.30', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 12, 'billing' => 'monthly', 'level' => 3, 'price' => '4.30', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 12, 'billing' => 'monthly', 'level' => 4, 'price' => '4.30', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 12, 'billing' => 'yearly', 'level' => 1, 'price' => '61.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 12, 'billing' => 'yearly', 'level' => 2, 'price' => '51.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 12, 'billing' => 'yearly', 'level' => 3, 'price' => '51.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 12, 'billing' => 'yearly', 'level' => 4, 'price' => '51.60', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 13, 'billing' => 'monthly', 'level' => 1, 'price' => '4.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 13, 'billing' => 'monthly', 'level' => 2, 'price' => '3.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 13, 'billing' => 'monthly', 'level' => 3, 'price' => '3.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 13, 'billing' => 'monthly', 'level' => 4, 'price' => '3.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 13, 'billing' => 'yearly', 'level' => 1, 'price' => '50.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 13, 'billing' => 'yearly', 'level' => 2, 'price' => '43.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 13, 'billing' => 'yearly', 'level' => 3, 'price' => '43.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 13, 'billing' => 'yearly', 'level' => 4, 'price' => '43.20', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 14, 'billing' => 'monthly', 'level' => 1, 'price' => '4.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 14, 'billing' => 'monthly', 'level' => 2, 'price' => '4.05', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 14, 'billing' => 'monthly', 'level' => 3, 'price' => '4.05', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 14, 'billing' => 'monthly', 'level' => 4, 'price' => '4.05', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 14, 'billing' => 'yearly', 'level' => 1, 'price' => '152.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 14, 'billing' => 'yearly', 'level' => 2, 'price' => '127.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 14, 'billing' => 'yearly', 'level' => 3, 'price' => '127.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 14, 'billing' => 'yearly', 'level' => 4, 'price' => '127.20', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 15, 'billing' => 'monthly', 'level' => 1, 'price' => '4.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 15, 'billing' => 'monthly', 'level' => 2, 'price' => '3.65', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 15, 'billing' => 'monthly', 'level' => 3, 'price' => '3.65', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 15, 'billing' => 'monthly', 'level' => 4, 'price' => '3.65', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 15, 'billing' => 'yearly', 'level' => 1, 'price' => '50.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 15, 'billing' => 'yearly', 'level' => 2, 'price' => '43.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 15, 'billing' => 'yearly', 'level' => 3, 'price' => '43.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 15, 'billing' => 'yearly', 'level' => 4, 'price' => '43.80', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 16, 'billing' => 'monthly', 'level' => 1, 'price' => '8.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 16, 'billing' => 'monthly', 'level' => 2, 'price' => '7.05', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 16, 'billing' => 'monthly', 'level' => 3, 'price' => '7.05', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 16, 'billing' => 'monthly', 'level' => 4, 'price' => '7.05', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 16, 'billing' => 'yearly', 'level' => 1, 'price' => '100.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 16, 'billing' => 'yearly', 'level' => 2, 'price' => '84.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 16, 'billing' => 'yearly', 'level' => 3, 'price' => '84.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 16, 'billing' => 'yearly', 'level' => 4, 'price' => '84.60', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 17, 'billing' => 'monthly', 'level' => 1, 'price' => '25.30', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 17, 'billing' => 'monthly', 'level' => 2, 'price' => '21.35', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 17, 'billing' => 'monthly', 'level' => 3, 'price' => '21.35', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 17, 'billing' => 'monthly', 'level' => 4, 'price' => '21.35', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 17, 'billing' => 'yearly', 'level' => 1, 'price' => '303.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 17, 'billing' => 'yearly', 'level' => 2, 'price' => '256.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 17, 'billing' => 'yearly', 'level' => 3, 'price' => '256.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 17, 'billing' => 'yearly', 'level' => 4, 'price' => '256.20', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 18, 'billing' => 'monthly', 'level' => 1, 'price' => '5.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 18, 'billing' => 'monthly', 'level' => 2, 'price' => '5.10', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 18, 'billing' => 'monthly', 'level' => 3, 'price' => '5.10', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 18, 'billing' => 'monthly', 'level' => 4, 'price' => '5.10', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 18, 'billing' => 'yearly', 'level' => 1, 'price' => '70.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 18, 'billing' => 'yearly', 'level' => 2, 'price' => '61.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 18, 'billing' => 'yearly', 'level' => 3, 'price' => '61.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 18, 'billing' => 'yearly', 'level' => 4, 'price' => '61.20', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 19, 'billing' => 'monthly', 'level' => 1, 'price' => '46.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 19, 'billing' => 'monthly', 'level' => 2, 'price' => '39.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 19, 'billing' => 'monthly', 'level' => 3, 'price' => '39.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 19, 'billing' => 'monthly', 'level' => 4, 'price' => '39.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 19, 'billing' => 'yearly', 'level' => 1, 'price' => '556.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 19, 'billing' => 'yearly', 'level' => 2, 'price' => '477.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 19, 'billing' => 'yearly', 'level' => 3, 'price' => '477.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 19, 'billing' => 'yearly', 'level' => 4, 'price' => '477.60', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 20, 'billing' => 'monthly', 'level' => 1, 'price' => '1.70', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 20, 'billing' => 'monthly', 'level' => 2, 'price' => '1.53', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 20, 'billing' => 'monthly', 'level' => 3, 'price' => '1.53', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 20, 'billing' => 'monthly', 'level' => 4, 'price' => '1.53', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 20, 'billing' => 'yearly', 'level' => 1, 'price' => '20.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 20, 'billing' => 'yearly', 'level' => 2, 'price' => '18.36', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 20, 'billing' => 'yearly', 'level' => 3, 'price' => '18.36', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 20, 'billing' => 'yearly', 'level' => 4, 'price' => '18.36', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 21, 'billing' => 'monthly', 'level' => 1, 'price' => '4.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 21, 'billing' => 'monthly', 'level' => 2, 'price' => '4.05', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 21, 'billing' => 'monthly', 'level' => 3, 'price' => '4.05', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 21, 'billing' => 'monthly', 'level' => 4, 'price' => '4.05', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 21, 'billing' => 'yearly', 'level' => 1, 'price' => '55.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 21, 'billing' => 'yearly', 'level' => 2, 'price' => '48.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 21, 'billing' => 'yearly', 'level' => 3, 'price' => '48.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 21, 'billing' => 'yearly', 'level' => 4, 'price' => '48.60', 'created_at' => $now, 'updated_at' => $now],




            //office 365 managed
            ['product_option_id' => 22, 'billing' => 'monthly', 'level' => 1, 'price' => '4.50', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 22, 'billing' => 'monthly', 'level' => 2, 'price' => '3.70', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 22, 'billing' => 'monthly', 'level' => 3, 'price' => '3.70', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 22, 'billing' => 'monthly', 'level' => 4, 'price' => '3.70', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 22, 'billing' => 'yearly', 'level' => 1, 'price' => '54.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 22, 'billing' => 'yearly', 'level' => 2, 'price' => '44.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 22, 'billing' => 'yearly', 'level' => 3, 'price' => '44.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 22, 'billing' => 'yearly', 'level' => 4, 'price' => '44.40', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 23, 'billing' => 'monthly', 'level' => 1, 'price' => '7.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 23, 'billing' => 'monthly', 'level' => 2, 'price' => '6.50', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 23, 'billing' => 'monthly', 'level' => 3, 'price' => '6.50', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 23, 'billing' => 'monthly', 'level' => 4, 'price' => '6.50', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 23, 'billing' => 'yearly', 'level' => 1, 'price' => '93.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 23, 'billing' => 'yearly', 'level' => 2, 'price' => '78.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 23, 'billing' => 'yearly', 'level' => 3, 'price' => '78.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 23, 'billing' => 'yearly', 'level' => 4, 'price' => '78.00', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 24, 'billing' => 'monthly', 'level' => 1, 'price' => '5.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 24, 'billing' => 'monthly', 'level' => 2, 'price' => '4.50', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 24, 'billing' => 'monthly', 'level' => 3, 'price' => '4.50', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 24, 'billing' => 'monthly', 'level' => 4, 'price' => '4.50', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 24, 'billing' => 'yearly', 'level' => 1, 'price' => '64.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 24, 'billing' => 'yearly', 'level' => 2, 'price' => '54.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 24, 'billing' => 'yearly', 'level' => 3, 'price' => '54.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 24, 'billing' => 'yearly', 'level' => 4, 'price' => '54.00', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 25, 'billing' => 'monthly', 'level' => 1, 'price' => '8.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 25, 'billing' => 'monthly', 'level' => 2, 'price' => '7.92', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 25, 'billing' => 'monthly', 'level' => 3, 'price' => '7.92', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 25, 'billing' => 'monthly', 'level' => 4, 'price' => '7.92', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 25, 'billing' => 'yearly', 'level' => 1, 'price' => '105.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 25, 'billing' => 'yearly', 'level' => 2, 'price' => '95.04', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 25, 'billing' => 'yearly', 'level' => 3, 'price' => '95.04', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 25, 'billing' => 'yearly', 'level' => 4, 'price' => '95.04', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 26, 'billing' => 'monthly', 'level' => 1, 'price' => '12.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 26, 'billing' => 'monthly', 'level' => 2, 'price' => '10.50', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 26, 'billing' => 'monthly', 'level' => 3, 'price' => '10.50', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 26, 'billing' => 'monthly', 'level' => 4, 'price' => '10.50', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 26, 'billing' => 'yearly', 'level' => 1, 'price' => '154.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 26, 'billing' => 'yearly', 'level' => 2, 'price' => '126.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 26, 'billing' => 'yearly', 'level' => 3, 'price' => '126.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 26, 'billing' => 'yearly', 'level' => 4, 'price' => '126.00', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 27, 'billing' => 'monthly', 'level' => 1, 'price' => '8.10', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 27, 'billing' => 'monthly', 'level' => 2, 'price' => '6.75', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 27, 'billing' => 'monthly', 'level' => 3, 'price' => '6.75', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 27, 'billing' => 'monthly', 'level' => 4, 'price' => '6.75', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 27, 'billing' => 'yearly', 'level' => 1, 'price' => '97.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 27, 'billing' => 'yearly', 'level' => 2, 'price' => '81.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 27, 'billing' => 'yearly', 'level' => 3, 'price' => '81.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 27, 'billing' => 'yearly', 'level' => 4, 'price' => '81.00', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 28, 'billing' => 'monthly', 'level' => 1, 'price' => '21.30', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 28, 'billing' => 'monthly', 'level' => 2, 'price' => '17.73', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 28, 'billing' => 'monthly', 'level' => 3, 'price' => '17.73', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 28, 'billing' => 'monthly', 'level' => 4, 'price' => '17.73', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 28, 'billing' => 'yearly', 'level' => 1, 'price' => '255.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 28, 'billing' => 'yearly', 'level' => 2, 'price' => '212.76', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 28, 'billing' => 'yearly', 'level' => 3, 'price' => '212.76', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 28, 'billing' => 'yearly', 'level' => 4, 'price' => '212.76', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 29, 'billing' => 'monthly', 'level' => 1, 'price' => '14.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 29, 'billing' => 'monthly', 'level' => 2, 'price' => '12.33', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 29, 'billing' => 'monthly', 'level' => 3, 'price' => '12.33', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 29, 'billing' => 'monthly', 'level' => 4, 'price' => '12.33', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 29, 'billing' => 'yearly', 'level' => 1, 'price' => '178.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 29, 'billing' => 'yearly', 'level' => 2, 'price' => '147.96', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 29, 'billing' => 'yearly', 'level' => 3, 'price' => '147.96', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 29, 'billing' => 'yearly', 'level' => 4, 'price' => '147.96', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 30, 'billing' => 'monthly', 'level' => 1, 'price' => '16.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 30, 'billing' => 'monthly', 'level' => 2, 'price' => '15.45', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 30, 'billing' => 'monthly', 'level' => 3, 'price' => '15.45', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 30, 'billing' => 'monthly', 'level' => 4, 'price' => '15.45', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 30, 'billing' => 'yearly', 'level' => 1, 'price' => '202.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 30, 'billing' => 'yearly', 'level' => 2, 'price' => '185.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 30, 'billing' => 'yearly', 'level' => 3, 'price' => '185.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 30, 'billing' => 'yearly', 'level' => 4, 'price' => '185.40', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 31, 'billing' => 'monthly', 'level' => 1, 'price' => '31.30', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 31, 'billing' => 'monthly', 'level' => 2, 'price' => '27.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 31, 'billing' => 'monthly', 'level' => 3, 'price' => '27.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 31, 'billing' => 'monthly', 'level' => 4, 'price' => '27.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 31, 'billing' => 'yearly', 'level' => 1, 'price' => '375.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 31, 'billing' => 'yearly', 'level' => 2, 'price' => '334.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 31, 'billing' => 'yearly', 'level' => 3, 'price' => '334.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 31, 'billing' => 'yearly', 'level' => 4, 'price' => '334.80', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 32, 'billing' => 'monthly', 'level' => 1, 'price' => '58.10', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 32, 'billing' => 'monthly', 'level' => 2, 'price' => '51.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 32, 'billing' => 'monthly', 'level' => 3, 'price' => '51.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 32, 'billing' => 'monthly', 'level' => 4, 'price' => '51.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 32, 'billing' => 'yearly', 'level' => 1, 'price' => '697.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 32, 'billing' => 'yearly', 'level' => 2, 'price' => '622.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 32, 'billing' => 'yearly', 'level' => 3, 'price' => '622.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 32, 'billing' => 'yearly', 'level' => 4, 'price' => '622.80', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 33, 'billing' => 'monthly', 'level' => 1, 'price' => '5.10', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 33, 'billing' => 'monthly', 'level' => 2, 'price' => '4.30', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 33, 'billing' => 'monthly', 'level' => 3, 'price' => '4.30', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 33, 'billing' => 'monthly', 'level' => 4, 'price' => '4.30', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 33, 'billing' => 'yearly', 'level' => 1, 'price' => '61.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 33, 'billing' => 'yearly', 'level' => 2, 'price' => '51.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 33, 'billing' => 'yearly', 'level' => 3, 'price' => '51.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 33, 'billing' => 'yearly', 'level' => 4, 'price' => '51.60', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 34, 'billing' => 'monthly', 'level' => 1, 'price' => '4.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 34, 'billing' => 'monthly', 'level' => 2, 'price' => '3.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 34, 'billing' => 'monthly', 'level' => 3, 'price' => '3.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 34, 'billing' => 'monthly', 'level' => 4, 'price' => '3.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 34, 'billing' => 'yearly', 'level' => 1, 'price' => '50.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 34, 'billing' => 'yearly', 'level' => 2, 'price' => '43.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 34, 'billing' => 'yearly', 'level' => 3, 'price' => '43.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 34, 'billing' => 'yearly', 'level' => 4, 'price' => '43.20', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 35, 'billing' => 'monthly', 'level' => 1, 'price' => '12.70', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 35, 'billing' => 'monthly', 'level' => 2, 'price' => '10.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 35, 'billing' => 'monthly', 'level' => 3, 'price' => '10.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 35, 'billing' => 'monthly', 'level' => 4, 'price' => '10.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 35, 'billing' => 'yearly', 'level' => 1, 'price' => '152.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 35, 'billing' => 'yearly', 'level' => 2, 'price' => '127.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 35, 'billing' => 'yearly', 'level' => 3, 'price' => '127.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 35, 'billing' => 'yearly', 'level' => 4, 'price' => '127.20', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 36, 'billing' => 'monthly', 'level' => 1, 'price' => '4.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 36, 'billing' => 'monthly', 'level' => 2, 'price' => '3.65', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 36, 'billing' => 'monthly', 'level' => 3, 'price' => '3.65', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 36, 'billing' => 'monthly', 'level' => 4, 'price' => '3.65', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 36, 'billing' => 'yearly', 'level' => 1, 'price' => '50.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 36, 'billing' => 'yearly', 'level' => 2, 'price' => '43.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 36, 'billing' => 'yearly', 'level' => 3, 'price' => '43.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 36, 'billing' => 'yearly', 'level' => 4, 'price' => '43.80', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 37, 'billing' => 'monthly', 'level' => 1, 'price' => '8.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 37, 'billing' => 'monthly', 'level' => 2, 'price' => '7.05', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 37, 'billing' => 'monthly', 'level' => 3, 'price' => '7.05', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 37, 'billing' => 'monthly', 'level' => 4, 'price' => '7.05', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 37, 'billing' => 'yearly', 'level' => 1, 'price' => '100.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 37, 'billing' => 'yearly', 'level' => 2, 'price' => '84.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 37, 'billing' => 'yearly', 'level' => 3, 'price' => '84.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 37, 'billing' => 'yearly', 'level' => 4, 'price' => '84.60', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 38, 'billing' => 'monthly', 'level' => 1, 'price' => '25.30', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 38, 'billing' => 'monthly', 'level' => 2, 'price' => '21.35', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 38, 'billing' => 'monthly', 'level' => 3, 'price' => '21.35', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 38, 'billing' => 'monthly', 'level' => 4, 'price' => '21.35', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 38, 'billing' => 'yearly', 'level' => 1, 'price' => '303.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 38, 'billing' => 'yearly', 'level' => 2, 'price' => '256.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 38, 'billing' => 'yearly', 'level' => 3, 'price' => '256.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 38, 'billing' => 'yearly', 'level' => 4, 'price' => '256.20', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 39, 'billing' => 'monthly', 'level' => 1, 'price' => '5.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 39, 'billing' => 'monthly', 'level' => 2, 'price' => '5.10', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 39, 'billing' => 'monthly', 'level' => 3, 'price' => '5.10', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 39, 'billing' => 'monthly', 'level' => 4, 'price' => '5.10', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 39, 'billing' => 'yearly', 'level' => 1, 'price' => '70.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 39, 'billing' => 'yearly', 'level' => 2, 'price' => '61.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 39, 'billing' => 'yearly', 'level' => 3, 'price' => '61.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 39, 'billing' => 'yearly', 'level' => 4, 'price' => '61.20', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 40, 'billing' => 'monthly', 'level' => 1, 'price' => '46.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 40, 'billing' => 'monthly', 'level' => 2, 'price' => '39.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 40, 'billing' => 'monthly', 'level' => 3, 'price' => '39.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 40, 'billing' => 'monthly', 'level' => 4, 'price' => '39.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 40, 'billing' => 'yearly', 'level' => 1, 'price' => '556.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 40, 'billing' => 'yearly', 'level' => 2, 'price' => '477.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 40, 'billing' => 'yearly', 'level' => 3, 'price' => '477.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 40, 'billing' => 'yearly', 'level' => 4, 'price' => '477.60', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 41, 'billing' => 'monthly', 'level' => 1, 'price' => '1.70', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 41, 'billing' => 'monthly', 'level' => 2, 'price' => '1.53', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 41, 'billing' => 'monthly', 'level' => 3, 'price' => '1.53', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 41, 'billing' => 'monthly', 'level' => 4, 'price' => '1.53', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 41, 'billing' => 'yearly', 'level' => 1, 'price' => '20.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 41, 'billing' => 'yearly', 'level' => 2, 'price' => '18.36', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 41, 'billing' => 'yearly', 'level' => 3, 'price' => '18.36', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 41, 'billing' => 'yearly', 'level' => 4, 'price' => '18.36', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 42, 'billing' => 'monthly', 'level' => 1, 'price' => '4.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 42, 'billing' => 'monthly', 'level' => 2, 'price' => '4.05', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 42, 'billing' => 'monthly', 'level' => 3, 'price' => '4.05', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 42, 'billing' => 'monthly', 'level' => 4, 'price' => '4.05', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 42, 'billing' => 'yearly', 'level' => 1, 'price' => '100.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 42, 'billing' => 'yearly', 'level' => 2, 'price' => '48.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 42, 'billing' => 'yearly', 'level' => 3, 'price' => '48.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 42, 'billing' => 'yearly', 'level' => 4, 'price' => '48.60', 'created_at' => $now, 'updated_at' => $now],

            //microsoft 365

            ['product_option_id' => 43, 'billing' => 'monthly', 'level' => 1, 'price' => '16.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 43, 'billing' => 'monthly', 'level' => 2, 'price' => '14.49', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 43, 'billing' => 'monthly', 'level' => 3, 'price' => '14.49', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 43, 'billing' => 'monthly', 'level' => 4, 'price' => '14.49', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 43, 'billing' => 'yearly', 'level' => 1, 'price' => '202.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 43, 'billing' => 'yearly', 'level' => 2, 'price' => '185.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 43, 'billing' => 'yearly', 'level' => 3, 'price' => '185.40', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 43, 'billing' => 'yearly', 'level' => 4, 'price' => '185.40', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 44, 'billing' => 'monthly', 'level' => 1, 'price' => '31.30', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 44, 'billing' => 'monthly', 'level' => 2, 'price' => '27.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 44, 'billing' => 'monthly', 'level' => 3, 'price' => '27.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 44, 'billing' => 'monthly', 'level' => 4, 'price' => '27.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 44, 'billing' => 'yearly', 'level' => 1, 'price' => '375.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 44, 'billing' => 'yearly', 'level' => 2, 'price' => '334.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 44, 'billing' => 'yearly', 'level' => 3, 'price' => '334.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 44, 'billing' => 'yearly', 'level' => 4, 'price' => '334.80', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 45, 'billing' => 'monthly', 'level' => 1, 'price' => '58.10', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 45, 'billing' => 'monthly', 'level' => 2, 'price' => '51.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 45, 'billing' => 'monthly', 'level' => 3, 'price' => '51.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 45, 'billing' => 'monthly', 'level' => 4, 'price' => '51.90', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 45, 'billing' => 'yearly', 'level' => 1, 'price' => '697.20', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 45, 'billing' => 'yearly', 'level' => 2, 'price' => '622.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 45, 'billing' => 'yearly', 'level' => 3, 'price' => '622.80', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 45, 'billing' => 'yearly', 'level' => 4, 'price' => '622.80', 'created_at' => $now, 'updated_at' => $now],

            //cloud server

            ['product_option_id' => 46, 'billing' => 'monthly', 'level' => 1, 'price' => '12.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 46, 'billing' => 'monthly', 'level' => 2, 'price' => '12.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 46, 'billing' => 'monthly', 'level' => 3, 'price' => '12.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 46, 'billing' => 'monthly', 'level' => 4, 'price' => '12.00', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 47, 'billing' => 'monthly', 'level' => 1, 'price' => '9.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 47, 'billing' => 'monthly', 'level' => 2, 'price' => '9.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 47, 'billing' => 'monthly', 'level' => 3, 'price' => '9.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 47, 'billing' => 'monthly', 'level' => 4, 'price' => '9.00', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 48, 'billing' => 'monthly', 'level' => 1, 'price' => '0.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 48, 'billing' => 'monthly', 'level' => 2, 'price' => '0.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 48, 'billing' => 'monthly', 'level' => 3, 'price' => '0.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 48, 'billing' => 'monthly', 'level' => 4, 'price' => '0.60', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 49, 'billing' => 'monthly', 'level' => 1, 'price' => '0.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 49, 'billing' => 'monthly', 'level' => 2, 'price' => '0.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 49, 'billing' => 'monthly', 'level' => 3, 'price' => '0.60', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 49, 'billing' => 'monthly', 'level' => 4, 'price' => '0.60', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 50, 'billing' => 'monthly', 'level' => 1, 'price' => '6.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 50, 'billing' => 'monthly', 'level' => 2, 'price' => '6.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 50, 'billing' => 'monthly', 'level' => 3, 'price' => '6.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 50, 'billing' => 'monthly', 'level' => 4, 'price' => '6.00', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 51, 'billing' => 'monthly', 'level' => 1, 'price' => '6.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 51, 'billing' => 'monthly', 'level' => 2, 'price' => '6.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 51, 'billing' => 'monthly', 'level' => 3, 'price' => '6.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 51, 'billing' => 'monthly', 'level' => 4, 'price' => '6.00', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 52, 'billing' => 'monthly', 'level' => 1, 'price' => '30.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 52, 'billing' => 'monthly', 'level' => 2, 'price' => '30.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 52, 'billing' => 'monthly', 'level' => 3, 'price' => '30.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 52, 'billing' => 'monthly', 'level' => 4, 'price' => '30.00', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 53, 'billing' => 'monthly', 'level' => 1, 'price' => '5.50', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 53, 'billing' => 'monthly', 'level' => 2, 'price' => '5.50', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 53, 'billing' => 'monthly', 'level' => 3, 'price' => '5.50', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 53, 'billing' => 'monthly', 'level' => 4, 'price' => '5.50', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 54, 'billing' => 'monthly', 'level' => 1, 'price' => '15.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 54, 'billing' => 'monthly', 'level' => 2, 'price' => '13.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 54, 'billing' => 'monthly', 'level' => 3, 'price' => '13.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 54, 'billing' => 'monthly', 'level' => 4, 'price' => '13.00', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 55, 'billing' => 'monthly', 'level' => 1, 'price' => '19.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 55, 'billing' => 'monthly', 'level' => 2, 'price' => '17.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 55, 'billing' => 'monthly', 'level' => 3, 'price' => '17.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 55, 'billing' => 'monthly', 'level' => 4, 'price' => '17.00', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 56, 'billing' => 'monthly', 'level' => 1, 'price' => '7.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 56, 'billing' => 'monthly', 'level' => 2, 'price' => '6.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 56, 'billing' => 'monthly', 'level' => 3, 'price' => '6.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 56, 'billing' => 'monthly', 'level' => 4, 'price' => '6.00', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 57, 'billing' => 'monthly', 'level' => 1, 'price' => '7.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 57, 'billing' => 'monthly', 'level' => 2, 'price' => '6.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 57, 'billing' => 'monthly', 'level' => 3, 'price' => '6.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 57, 'billing' => 'monthly', 'level' => 4, 'price' => '6.00', 'created_at' => $now, 'updated_at' => $now],

            ['product_option_id' => 58, 'billing' => 'monthly', 'level' => 1, 'price' => '4.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 58, 'billing' => 'monthly', 'level' => 2, 'price' => '3.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 58, 'billing' => 'monthly', 'level' => 3, 'price' => '3.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_option_id' => 58, 'billing' => 'monthly', 'level' => 4, 'price' => '3.00', 'created_at' => $now, 'updated_at' => $now],
        ]);

        Price::insert([
            //webhosting performance
            ['product_id' => 29, 'billing' => 'monthly', 'level' => 1, 'price' => '8.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 29, 'billing' => 'monthly', 'level' => 2, 'price' => '4.50', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 29, 'billing' => 'monthly', 'level' => 3, 'price' => '4.50', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 29, 'billing' => 'monthly', 'level' => 4, 'price' => '4.50', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 29, 'billing' => 'yearly', 'level' => 1, 'price' => '96.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 29, 'billing' => 'yearly', 'level' => 2, 'price' => '54.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 29, 'billing' => 'yearly', 'level' => 3, 'price' => '54.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 29, 'billing' => 'yearly', 'level' => 4, 'price' => '54.00', 'created_at' => $now, 'updated_at' => $now],
        ]);

        Price::insert([
            //office esd
            ['product_id' => 1, 'level' => 1, 'price' => '57.02', 'lang' => 'nl', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 1, 'level' => 2, 'price' => '48.90', 'lang' => 'nl', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 1, 'level' => 3, 'price' => '48.90', 'lang' => 'nl', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 1, 'level' => 4, 'price' => '48.90', 'lang' => 'nl', 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 2, 'level' => 1, 'price' => '81.81', 'lang' => 'nl', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 2, 'level' => 2, 'price' => '68.04', 'lang' => 'nl', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 2, 'level' => 3, 'price' => '68.04', 'lang' => 'nl', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 2, 'level' => 4, 'price' => '68.04', 'lang' => 'nl', 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 3, 'level' => 1, 'price' => '129.00', 'lang' => 'nl', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 3, 'level' => 2, 'price' => '105.90', 'lang' => 'nl', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 3, 'level' => 3, 'price' => '105.90', 'lang' => 'nl', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 3, 'level' => 4, 'price' => '105.90', 'lang' => 'nl', 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 4, 'level' => 1, 'price' => '249.00', 'lang' => 'nl', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 4, 'level' => 2, 'price' => '199.50', 'lang' => 'nl', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 4, 'level' => 3, 'price' => '199.50', 'lang' => 'nl', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 4, 'level' => 4, 'price' => '199.50', 'lang' => 'nl', 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 5, 'level' => 1, 'price' => '123.14', 'lang' => 'nl', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 5, 'level' => 2, 'price' => '103.99', 'lang' => 'nl', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 5, 'level' => 3, 'price' => '103.99', 'lang' => 'nl', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 5, 'level' => 4, 'price' => '103.99', 'lang' => 'nl', 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 5, 'level' => 1, 'price' => '110.84', 'lang' => 'fr', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 5, 'level' => 2, 'price' => '110.84', 'lang' => 'fr', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 5, 'level' => 3, 'price' => '110.84', 'lang' => 'fr', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 5, 'level' => 4, 'price' => '110.84', 'lang' => 'fr', 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 6, 'level' => 1, 'price' => '230.58', 'lang' => 'nl', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 6, 'level' => 2, 'price' => '174.53', 'lang' => 'nl', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 6, 'level' => 3, 'price' => '174.53', 'lang' => 'nl', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 6, 'level' => 4, 'price' => '174.53', 'lang' => 'nl', 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 6, 'level' => 1, 'price' => '174.53', 'lang' => 'fr', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 6, 'level' => 2, 'price' => '174.53', 'lang' => 'fr', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 6, 'level' => 3, 'price' => '174.53', 'lang' => 'fr', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 6, 'level' => 4, 'price' => '174.53', 'lang' => 'fr', 'created_at' => $now, 'updated_at' => $now],
        ]);

        Price::insert([
            //acronis
            ['product_id' => 13, 'level' => 1, 'price' => '41.31', 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 13, 'level' => 2, 'price' => '32.70', 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 13, 'level' => 3, 'price' => '32.70', 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 13, 'level' => 4, 'price' => '32.70', 'users' => 1, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 13, 'level' => 1, 'price' => '66.11', 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 13, 'level' => 2, 'price' => '52.50', 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 13, 'level' => 3, 'price' => '52.50', 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 13, 'level' => 4, 'price' => '52.50', 'users' => 3, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 13, 'level' => 1, 'price' => '82.64', 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 13, 'level' => 2, 'price' => '65.50', 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 13, 'level' => 3, 'price' => '65.50', 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 13, 'level' => 4, 'price' => '65.50', 'users' => 5, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 14, 'level' => 1, 'price' => '82.64', 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 14, 'level' => 2, 'price' => '65.50', 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 14, 'level' => 3, 'price' => '65.50', 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 14, 'level' => 4, 'price' => '65.50', 'users' => 1, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 14, 'level' => 1, 'price' => '123.96', 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 14, 'level' => 2, 'price' => '98.00', 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 14, 'level' => 3, 'price' => '98.00', 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 14, 'level' => 4, 'price' => '98.00', 'users' => 3, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 14, 'level' => 1, 'price' => '132.22', 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 14, 'level' => 2, 'price' => '104.00', 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 14, 'level' => 3, 'price' => '104.00', 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 14, 'level' => 4, 'price' => '104.00', 'users' => 5, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 15, 'level' => 1, 'price' => '41.31', 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 15, 'level' => 2, 'price' => '32.70', 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 15, 'level' => 3, 'price' => '32.70', 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 15, 'level' => 4, 'price' => '32.70', 'users' => 1, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 15, 'level' => 1, 'price' => '66.11', 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 15, 'level' => 2, 'price' => '52.50', 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 15, 'level' => 3, 'price' => '52.50', 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 15, 'level' => 4, 'price' => '52.50', 'users' => 3, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 15, 'level' => 1, 'price' => '82.64', 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 15, 'level' => 2, 'price' => '65.50', 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 15, 'level' => 3, 'price' => '65.50', 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 15, 'level' => 4, 'price' => '65.50', 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
        ]);

        Price::insert([
            //gdata anti business windows
            ['product_id' => 16, 'level' => 1, 'price' => '36.00', 'system' => 'windows', 'users' => 5, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 2, 'price' => '22.77', 'system' => 'windows', 'users' => 5, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 3, 'price' => '22.77', 'system' => 'windows', 'users' => 5, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 4, 'price' => '22.77', 'system' => 'windows', 'users' => 5, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 16, 'level' => 1, 'price' => '54.00', 'system' => 'windows', 'users' => 5, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 2, 'price' => '34.16', 'system' => 'windows', 'users' => 5, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 3, 'price' => '34.16', 'system' => 'windows', 'users' => 5, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 4, 'price' => '34.16', 'system' => 'windows', 'users' => 5, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 16, 'level' => 1, 'price' => '72.00', 'system' => 'windows', 'users' => 5, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 2, 'price' => '45.54', 'system' => 'windows', 'users' => 5, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 3, 'price' => '45.54', 'system' => 'windows', 'users' => 5, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 4, 'price' => '45.54', 'system' => 'windows', 'users' => 5, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 16, 'level' => 1, 'price' => '32.00', 'system' => 'windows', 'users' => 10, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 2, 'price' => '20.24', 'system' => 'windows', 'users' => 10, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 3, 'price' => '20.24', 'system' => 'windows', 'users' => 10, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 4, 'price' => '20.24', 'system' => 'windows', 'users' => 10, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 16, 'level' => 1, 'price' => '48.00', 'system' => 'windows', 'users' => 10, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 2, 'price' => '30.36', 'system' => 'windows', 'users' => 10, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 3, 'price' => '30.36', 'system' => 'windows', 'users' => 10, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 4, 'price' => '30.36', 'system' => 'windows', 'users' => 10, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 16, 'level' => 1, 'price' => '64.00', 'system' => 'windows', 'users' => 10, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 2, 'price' => '40.48', 'system' => 'windows', 'users' => 10, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 3, 'price' => '40.48', 'system' => 'windows', 'users' => 10, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 4, 'price' => '40.48', 'system' => 'windows', 'users' => 10, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 16, 'level' => 1, 'price' => '29.00', 'system' => 'windows', 'users' => 25, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 2, 'price' => '18.34', 'system' => 'windows', 'users' => 25, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 3, 'price' => '18.34', 'system' => 'windows', 'users' => 25, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 4, 'price' => '18.34', 'system' => 'windows', 'users' => 25, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 16, 'level' => 1, 'price' => '43.50', 'system' => 'windows', 'users' => 25, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 2, 'price' => '27.51', 'system' => 'windows', 'users' => 25, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 3, 'price' => '27.51', 'system' => 'windows', 'users' => 25, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 4, 'price' => '27.51', 'system' => 'windows', 'users' => 25, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 16, 'level' => 1, 'price' => '58.00', 'system' => 'windows', 'users' => 25, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 2, 'price' => '36.69', 'system' => 'windows', 'users' => 25, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 3, 'price' => '36.69', 'system' => 'windows', 'users' => 25, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 4, 'price' => '36.69', 'system' => 'windows', 'users' => 25, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 16, 'level' => 1, 'price' => '25.00', 'system' => 'windows', 'users' => 50, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 2, 'price' => '15.81', 'system' => 'windows', 'users' => 50, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 3, 'price' => '15.81', 'system' => 'windows', 'users' => 50, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 4, 'price' => '15.81', 'system' => 'windows', 'users' => 50, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 16, 'level' => 1, 'price' => '37.50', 'system' => 'windows', 'users' => 50, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 2, 'price' => '23.72', 'system' => 'windows', 'users' => 50, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 3, 'price' => '23.72', 'system' => 'windows', 'users' => 50, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 4, 'price' => '23.72', 'system' => 'windows', 'users' => 50, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 16, 'level' => 1, 'price' => '50.00', 'system' => 'windows', 'users' => 50, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 2, 'price' => '31.63', 'system' => 'windows', 'users' => 50, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 3, 'price' => '31.63', 'system' => 'windows', 'users' => 50, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 4, 'price' => '31.63', 'system' => 'windows', 'users' => 50, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 16, 'level' => 1, 'price' => '22.00', 'system' => 'windows', 'users' => 100, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 2, 'price' => '13.92', 'system' => 'windows', 'users' => 100, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 3, 'price' => '13.92', 'system' => 'windows', 'users' => 100, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 4, 'price' => '13.92', 'system' => 'windows', 'users' => 100, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 16, 'level' => 1, 'price' => '33.00', 'system' => 'windows', 'users' => 100, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 2, 'price' => '20.87', 'system' => 'windows', 'users' => 100, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 3, 'price' => '20.87', 'system' => 'windows', 'users' => 100, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 4, 'price' => '20.87', 'system' => 'windows', 'users' => 100, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 16, 'level' => 1, 'price' => '44.00', 'system' => 'windows', 'users' => 100, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 2, 'price' => '27.83', 'system' => 'windows', 'users' => 100, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 3, 'price' => '27.83', 'system' => 'windows', 'users' => 100, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 4, 'price' => '27.83', 'system' => 'windows', 'users' => 100, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 16, 'level' => 1, 'price' => '20.00', 'system' => 'windows', 'users' => 250, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 2, 'price' => '12.65', 'system' => 'windows', 'users' => 250, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 3, 'price' => '12.65', 'system' => 'windows', 'users' => 250, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 4, 'price' => '12.65', 'system' => 'windows', 'users' => 250, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 16, 'level' => 1, 'price' => '30.00', 'system' => 'windows', 'users' => 250, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 2, 'price' => '18.98', 'system' => 'windows', 'users' => 250, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 3, 'price' => '18.98', 'system' => 'windows', 'users' => 250, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 4, 'price' => '18.98', 'system' => 'windows', 'users' => 250, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 16, 'level' => 1, 'price' => '40.00', 'system' => 'windows', 'users' => 250, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 2, 'price' => '25.30', 'system' => 'windows', 'users' => 250, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 3, 'price' => '25.30', 'system' => 'windows', 'users' => 250, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 4, 'price' => '25.30', 'system' => 'windows', 'users' => 250, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 16, 'level' => 1, 'price' => '18.00', 'system' => 'windows', 'users' => 500, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 2, 'price' => '11.39', 'system' => 'windows', 'users' => 500, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 3, 'price' => '11.39', 'system' => 'windows', 'users' => 500, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 4, 'price' => '11.39', 'system' => 'windows', 'users' => 500, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 16, 'level' => 1, 'price' => '27.00', 'system' => 'windows', 'users' => 500, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 2, 'price' => '17.08', 'system' => 'windows', 'users' => 500, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 3, 'price' => '17.08', 'system' => 'windows', 'users' => 500, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 4, 'price' => '17.08', 'system' => 'windows', 'users' => 500, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 16, 'level' => 1, 'price' => '36.00', 'system' => 'windows', 'users' => 500, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 2, 'price' => '22.77', 'system' => 'windows', 'users' => 500, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 3, 'price' => '22.77', 'system' => 'windows', 'users' => 500, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 4, 'price' => '22.77', 'system' => 'windows', 'users' => 500, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 16, 'level' => 1, 'price' => '16.00', 'system' => 'windows', 'users' => 1000, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 2, 'price' => '10.12', 'system' => 'windows', 'users' => 1000, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 3, 'price' => '10.12', 'system' => 'windows', 'users' => 1000, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 4, 'price' => '10.12', 'system' => 'windows', 'users' => 1000, 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 16, 'level' => 1, 'price' => '24.00', 'system' => 'windows', 'users' => 1000, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 2, 'price' => '15.18', 'system' => 'windows', 'users' => 1000, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 3, 'price' => '15.18', 'system' => 'windows', 'users' => 1000, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 4, 'price' => '15.18', 'system' => 'windows', 'users' => 1000, 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 16, 'level' => 1, 'price' => '32.00', 'system' => 'windows', 'users' => 1000, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 2, 'price' => '20.24', 'system' => 'windows', 'users' => 1000, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 3, 'price' => '20.24', 'system' => 'windows', 'users' => 1000, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 4, 'price' => '20.24', 'system' => 'windows', 'users' => 1000, 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],

        ]);

        Price::insert([
            //gdata anti business mac
            ['product_id' => 16, 'level' => 1, 'price' => '11.19', 'system' => 'mac', 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 2, 'price' => '8.39', 'system' => 'mac', 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 3, 'price' => '8.39', 'system' => 'mac', 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 4, 'price' => '8.39', 'system' => 'mac', 'duration' => 1, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 16, 'level' => 1, 'price' => '17.48', 'system' => 'mac', 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 2, 'price' => '13.11', 'system' => 'mac', 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 3, 'price' => '13.11', 'system' => 'mac', 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 4, 'price' => '13.11', 'system' => 'mac', 'duration' => 2, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 16, 'level' => 1, 'price' => '25.40', 'system' => 'mac', 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 2, 'price' => '19.05', 'system' => 'mac', 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 3, 'price' => '19.05', 'system' => 'mac', 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 16, 'level' => 4, 'price' => '19.05', 'system' => 'mac', 'duration' => 3, 'created_at' => $now, 'updated_at' => $now],
        ]);


        Price::insert([
            //gdata anti consumer
            ['product_id' => 17, 'level' => 1, 'price' => '24.75', 'system' => 'windows', 'duration' => 1, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '15.66', 'system' => 'windows', 'duration' => 1, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '15.66', 'system' => 'windows', 'duration' => 1, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '15.66', 'system' => 'windows', 'duration' => 1, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '30.95', 'system' => 'windows', 'duration' => 1, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '19.58', 'system' => 'windows', 'duration' => 1, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '19.58', 'system' => 'windows', 'duration' => 1, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '19.58', 'system' => 'windows', 'duration' => 1, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '37.15', 'system' => 'windows', 'duration' => 1, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '23.50', 'system' => 'windows', 'duration' => 1, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '23.50', 'system' => 'windows', 'duration' => 1, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '23.50', 'system' => 'windows', 'duration' => 1, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '43.35', 'system' => 'windows', 'duration' => 1, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '27.42', 'system' => 'windows', 'duration' => 1, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '27.42', 'system' => 'windows', 'duration' => 1, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '27.42', 'system' => 'windows', 'duration' => 1, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '49.55', 'system' => 'windows', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '31.34', 'system' => 'windows', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '31.34', 'system' => 'windows', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '31.34', 'system' => 'windows', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '74.34', 'system' => 'windows', 'duration' => 1, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '47.02', 'system' => 'windows', 'duration' => 1, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '47.02', 'system' => 'windows', 'duration' => 1, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '47.02', 'system' => 'windows', 'duration' => 1, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '80.54', 'system' => 'windows', 'duration' => 1, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '50.94', 'system' => 'windows', 'duration' => 1, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '50.94', 'system' => 'windows', 'duration' => 1, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '50.94', 'system' => 'windows', 'duration' => 1, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '86.74', 'system' => 'windows', 'duration' => 1, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '54.86', 'system' => 'windows', 'duration' => 1, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '54.86', 'system' => 'windows', 'duration' => 1, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '54.86', 'system' => 'windows', 'duration' => 1, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '92.93', 'system' => 'windows', 'duration' => 1, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '58.78', 'system' => 'windows', 'duration' => 1, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '58.78', 'system' => 'windows', 'duration' => 1, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '58.78', 'system' => 'windows', 'duration' => 1, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '99.13', 'system' => 'windows', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '62.70', 'system' => 'windows', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '62.70', 'system' => 'windows', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '62.70', 'system' => 'windows', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '45.41', 'system' => 'windows', 'duration' => 2, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '28.72', 'system' => 'windows', 'duration' => 2, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '28.72', 'system' => 'windows', 'duration' => 2, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '28.72', 'system' => 'windows', 'duration' => 2, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '57.81', 'system' => 'windows', 'duration' => 2, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '36.56', 'system' => 'windows', 'duration' => 2, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '36.56', 'system' => 'windows', 'duration' => 2, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '36.56', 'system' => 'windows', 'duration' => 2, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '70.21', 'system' => 'windows', 'duration' => 2, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '44.41', 'system' => 'windows', 'duration' => 2, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '44.41', 'system' => 'windows', 'duration' => 2, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '44.41', 'system' => 'windows', 'duration' => 2, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '82.60', 'system' => 'windows', 'duration' => 2, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '52.25', 'system' => 'windows', 'duration' => 2, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '52.25', 'system' => 'windows', 'duration' => 2, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '52.25', 'system' => 'windows', 'duration' => 2, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '95.00', 'system' => 'windows', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '60.09', 'system' => 'windows', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '60.09', 'system' => 'windows', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '60.09', 'system' => 'windows', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '140.45', 'system' => 'windows', 'duration' => 2, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '88.84', 'system' => 'windows', 'duration' => 2, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '88.84', 'system' => 'windows', 'duration' => 2, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '88.84', 'system' => 'windows', 'duration' => 2, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '152.85', 'system' => 'windows', 'duration' => 2, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '96.68', 'system' => 'windows', 'duration' => 2, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '96.68', 'system' => 'windows', 'duration' => 2, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '96.68', 'system' => 'windows', 'duration' => 2, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '165.25', 'system' => 'windows', 'duration' => 2, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '104.52', 'system' => 'windows', 'duration' => 2, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '104.52', 'system' => 'windows', 'duration' => 2, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '104.52', 'system' => 'windows', 'duration' => 2, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '177.64', 'system' => 'windows', 'duration' => 2, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '112.36', 'system' => 'windows', 'duration' => 2, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '112.36', 'system' => 'windows', 'duration' => 2, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '112.36', 'system' => 'windows', 'duration' => 2, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '190.04', 'system' => 'windows', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '120.20', 'system' => 'windows', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '120.20', 'system' => 'windows', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '120.20', 'system' => 'windows', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '66.07', 'system' => 'windows', 'duration' => 3, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '41.79', 'system' => 'windows', 'duration' => 3, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '41.79', 'system' => 'windows', 'duration' => 3, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '41.79', 'system' => 'windows', 'duration' => 3, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '84.67', 'system' => 'windows', 'duration' => 3, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '53.55', 'system' => 'windows', 'duration' => 3, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '53.55', 'system' => 'windows', 'duration' => 3, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '53.55', 'system' => 'windows', 'duration' => 3, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '103.26', 'system' => 'windows', 'duration' => 3, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '65.31', 'system' => 'windows', 'duration' => 3, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '65.31', 'system' => 'windows', 'duration' => 3, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '65.31', 'system' => 'windows', 'duration' => 3, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '121.86', 'system' => 'windows', 'duration' => 3, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '77.08', 'system' => 'windows', 'duration' => 3, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '77.08', 'system' => 'windows', 'duration' => 3, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '77.08', 'system' => 'windows', 'duration' => 3, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '140.45', 'system' => 'windows', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '88.84', 'system' => 'windows', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '88.84', 'system' => 'windows', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '88.84', 'system' => 'windows', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '206.57', 'system' => 'windows', 'duration' => 3, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '130.66', 'system' => 'windows', 'duration' => 3, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '130.66', 'system' => 'windows', 'duration' => 3, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '130.66', 'system' => 'windows', 'duration' => 3, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '225.17', 'system' => 'windows', 'duration' => 3, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '142.42', 'system' => 'windows', 'duration' => 3, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '142.42', 'system' => 'windows', 'duration' => 3, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '142.42', 'system' => 'windows', 'duration' => 3, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '243.76', 'system' => 'windows', 'duration' => 3, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '154.18', 'system' => 'windows', 'duration' => 3, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '154.18', 'system' => 'windows', 'duration' => 3, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '154.18', 'system' => 'windows', 'duration' => 3, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '262.36', 'system' => 'windows', 'duration' => 3, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '165.94', 'system' => 'windows', 'duration' => 3, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '165.94', 'system' => 'windows', 'duration' => 3, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '165.94', 'system' => 'windows', 'duration' => 3, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '280.95', 'system' => 'windows', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '177.70', 'system' => 'windows', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '177.70', 'system' => 'windows', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '177.70', 'system' => 'windows', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '31.56', 'system' => 'mac', 'duration' => 1, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '23.67', 'system' => 'mac', 'duration' => 1, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '23.67', 'system' => 'mac', 'duration' => 1, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '23.67', 'system' => 'mac', 'duration' => 1, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '35.51', 'system' => 'mac', 'duration' => 1, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '26.63', 'system' => 'mac', 'duration' => 1, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '26.63', 'system' => 'mac', 'duration' => 1, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '26.63', 'system' => 'mac', 'duration' => 1, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '39.46', 'system' => 'mac', 'duration' => 1, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '29.60', 'system' => 'mac', 'duration' => 1, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '29.60', 'system' => 'mac', 'duration' => 1, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '29.60', 'system' => 'mac', 'duration' => 1, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '43.41', 'system' => 'mac', 'duration' => 1, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '32.56', 'system' => 'mac', 'duration' => 1, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '32.56', 'system' => 'mac', 'duration' => 1, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '32.56', 'system' => 'mac', 'duration' => 1, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '47.36', 'system' => 'mac', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '35.52', 'system' => 'mac', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '35.52', 'system' => 'mac', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '35.52', 'system' => 'mac', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '82.91', 'system' => 'mac', 'duration' => 1, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '62.18', 'system' => 'mac', 'duration' => 1, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '62.18', 'system' => 'mac', 'duration' => 1, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '62.18', 'system' => 'mac', 'duration' => 1, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '86.86', 'system' => 'mac', 'duration' => 1, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '65.15', 'system' => 'mac', 'duration' => 1, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '65.15', 'system' => 'mac', 'duration' => 1, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '65.15', 'system' => 'mac', 'duration' => 1, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '90.81', 'system' => 'mac', 'duration' => 1, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '68.11', 'system' => 'mac', 'duration' => 1, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '68.11', 'system' => 'mac', 'duration' => 1, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '68.11', 'system' => 'mac', 'duration' => 1, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '94.76', 'system' => 'mac', 'duration' => 1, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '71.07', 'system' => 'mac', 'duration' => 1, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '71.07', 'system' => 'mac', 'duration' => 1, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '71.07', 'system' => 'mac', 'duration' => 1, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '98.71', 'system' => 'mac', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '74.03', 'system' => 'mac', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '74.03', 'system' => 'mac', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '74.03', 'system' => 'mac', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '47.36', 'system' => 'mac', 'duration' => 2, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '35.52', 'system' => 'mac', 'duration' => 2, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '35.52', 'system' => 'mac', 'duration' => 2, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '35.52', 'system' => 'mac', 'duration' => 2, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '55.26', 'system' => 'mac', 'duration' => 2, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '41.45', 'system' => 'mac', 'duration' => 2, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '41.45', 'system' => 'mac', 'duration' => 2, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '41.45', 'system' => 'mac', 'duration' => 2, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '63.16', 'system' => 'mac', 'duration' => 2, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '47.37', 'system' => 'mac', 'duration' => 2, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '47.37', 'system' => 'mac', 'duration' => 2, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '47.37', 'system' => 'mac', 'duration' => 2, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '71.06', 'system' => 'mac', 'duration' => 2, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '53.30', 'system' => 'mac', 'duration' => 2, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '53.30', 'system' => 'mac', 'duration' => 2, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '53.30', 'system' => 'mac', 'duration' => 2, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '78.96', 'system' => 'mac', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '59.22', 'system' => 'mac', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '59.22', 'system' => 'mac', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '59.22', 'system' => 'mac', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '146.11', 'system' => 'mac', 'duration' => 2, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '109.58', 'system' => 'mac', 'duration' => 2, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '109.58', 'system' => 'mac', 'duration' => 2, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '109.58', 'system' => 'mac', 'duration' => 2, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '154.01', 'system' => 'mac', 'duration' => 2, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '115.51', 'system' => 'mac', 'duration' => 2, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '115.51', 'system' => 'mac', 'duration' => 2, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '115.51', 'system' => 'mac', 'duration' => 2, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '161.91', 'system' => 'mac', 'duration' => 2, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '121.43', 'system' => 'mac', 'duration' => 2, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '121.43', 'system' => 'mac', 'duration' => 2, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '121.43', 'system' => 'mac', 'duration' => 2, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '169.81', 'system' => 'mac', 'duration' => 2, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '127.36', 'system' => 'mac', 'duration' => 2, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '127.36', 'system' => 'mac', 'duration' => 2, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '127.36', 'system' => 'mac', 'duration' => 2, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '177.71', 'system' => 'mac', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '133.28', 'system' => 'mac', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '133.28', 'system' => 'mac', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '133.28', 'system' => 'mac', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '63.16', 'system' => 'mac', 'duration' => 3, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '47.37', 'system' => 'mac', 'duration' => 3, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '47.37', 'system' => 'mac', 'duration' => 3, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '47.37', 'system' => 'mac', 'duration' => 3, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '75.01', 'system' => 'mac', 'duration' => 3, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '56.26', 'system' => 'mac', 'duration' => 3, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '56.26', 'system' => 'mac', 'duration' => 3, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '56.26', 'system' => 'mac', 'duration' => 3, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '86.86', 'system' => 'mac', 'duration' => 3, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '65.15', 'system' => 'mac', 'duration' => 3, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '65.15', 'system' => 'mac', 'duration' => 3, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '65.15', 'system' => 'mac', 'duration' => 3, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '98.71', 'system' => 'mac', 'duration' => 3, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '74.03', 'system' => 'mac', 'duration' => 3, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '74.03', 'system' => 'mac', 'duration' => 3, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '74.03', 'system' => 'mac', 'duration' => 3, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '110.56', 'system' => 'mac', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '82.92', 'system' => 'mac', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '82.92', 'system' => 'mac', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '82.92', 'system' => 'mac', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '209.31', 'system' => 'mac', 'duration' => 3, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '156.98', 'system' => 'mac', 'duration' => 3, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '156.98', 'system' => 'mac', 'duration' => 3, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '156.98', 'system' => 'mac', 'duration' => 3, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '221.16', 'system' => 'mac', 'duration' => 3, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '165.87', 'system' => 'mac', 'duration' => 3, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '165.87', 'system' => 'mac', 'duration' => 3, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '165.87', 'system' => 'mac', 'duration' => 3, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '233.01', 'system' => 'mac', 'duration' => 3, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '174.76', 'system' => 'mac', 'duration' => 3, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '174.76', 'system' => 'mac', 'duration' => 3, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '174.76', 'system' => 'mac', 'duration' => 3, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '244.86', 'system' => 'mac', 'duration' => 3, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '183.65', 'system' => 'mac', 'duration' => 3, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '183.65', 'system' => 'mac', 'duration' => 3, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '183.65', 'system' => 'mac', 'duration' => 3, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 17, 'level' => 1, 'price' => '256.71', 'system' => 'mac', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 2, 'price' => '192.53', 'system' => 'mac', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 3, 'price' => '192.53', 'system' => 'mac', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 17, 'level' => 4, 'price' => '192.53', 'system' => 'mac', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
        ]);

        Price::insert([
            //gdata client security
            ['product_id' => 18, 'level' => 1, 'price' => '39.60', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 2, 'price' => '25.05', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 3, 'price' => '25.05', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 4, 'price' => '25.05', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 18, 'level' => 1, 'price' => '35.20', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 2, 'price' => '22.26', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 3, 'price' => '22.26', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 4, 'price' => '22.26', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 18, 'level' => 1, 'price' => '31.90', 'duration' => 1, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 2, 'price' => '20.18', 'duration' => 1, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 3, 'price' => '20.18', 'duration' => 1, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 4, 'price' => '20.18', 'duration' => 1, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 18, 'level' => 1, 'price' => '27.50', 'duration' => 1, 'users' => 50, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 2, 'price' => '17.39', 'duration' => 1, 'users' => 50, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 3, 'price' => '17.39', 'duration' => 1, 'users' => 50, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 4, 'price' => '17.39', 'duration' => 1, 'users' => 50, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 18, 'level' => 1, 'price' => '24.20', 'duration' => 1, 'users' => 100, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 2, 'price' => '15.31', 'duration' => 1, 'users' => 100, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 3, 'price' => '15.31', 'duration' => 1, 'users' => 100, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 4, 'price' => '15.31', 'duration' => 1, 'users' => 100, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 18, 'level' => 1, 'price' => '22.00', 'duration' => 1, 'users' => 250, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 2, 'price' => '13.92', 'duration' => 1, 'users' => 250, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 3, 'price' => '13.92', 'duration' => 1, 'users' => 250, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 4, 'price' => '13.92', 'duration' => 1, 'users' => 250, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 18, 'level' => 1, 'price' => '19.80', 'duration' => 1, 'users' => 500, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 2, 'price' => '12.52', 'duration' => 1, 'users' => 500, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 3, 'price' => '12.52', 'duration' => 1, 'users' => 500, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 4, 'price' => '12.52', 'duration' => 1, 'users' => 500, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 18, 'level' => 1, 'price' => '17.60', 'duration' => 1, 'users' => 1000, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 2, 'price' => '11.13', 'duration' => 1, 'users' => 1000, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 3, 'price' => '11.13', 'duration' => 1, 'users' => 1000, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 4, 'price' => '11.13', 'duration' => 1, 'users' => 1000, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 18, 'level' => 1, 'price' => '59.40', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 2, 'price' => '37.57', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 3, 'price' => '37.57', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 4, 'price' => '37.57', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 18, 'level' => 1, 'price' => '52.80', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 2, 'price' => '33.40', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 3, 'price' => '33.40', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 4, 'price' => '33.40', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 18, 'level' => 1, 'price' => '47.85', 'duration' => 2, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 2, 'price' => '30.27', 'duration' => 2, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 3, 'price' => '30.27', 'duration' => 2, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 4, 'price' => '30.27', 'duration' => 2, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 18, 'level' => 1, 'price' => '41.25', 'duration' => 2, 'users' => 50, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 2, 'price' => '26.09', 'duration' => 2, 'users' => 50, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 3, 'price' => '26.09', 'duration' => 2, 'users' => 50, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 4, 'price' => '26.09', 'duration' => 2, 'users' => 50, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 18, 'level' => 1, 'price' => '36.30', 'duration' => 2, 'users' => 100, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 2, 'price' => '22.96', 'duration' => 2, 'users' => 100, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 3, 'price' => '22.96', 'duration' => 2, 'users' => 100, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 4, 'price' => '22.96', 'duration' => 2, 'users' => 100, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 18, 'level' => 1, 'price' => '33.00', 'duration' => 2, 'users' => 250, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 2, 'price' => '20.87', 'duration' => 2, 'users' => 250, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 3, 'price' => '20.87', 'duration' => 2, 'users' => 250, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 4, 'price' => '20.87', 'duration' => 2, 'users' => 250, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 18, 'level' => 1, 'price' => '29.70', 'duration' => 2, 'users' => 500, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 2, 'price' => '18.79', 'duration' => 2, 'users' => 500, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 3, 'price' => '18.79', 'duration' => 2, 'users' => 500, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 4, 'price' => '18.79', 'duration' => 2, 'users' => 500, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 18, 'level' => 1, 'price' => '26.40', 'duration' => 2, 'users' => 1000, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 2, 'price' => '16.70', 'duration' => 2, 'users' => 1000, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 3, 'price' => '16.70', 'duration' => 2, 'users' => 1000, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 4, 'price' => '16.70', 'duration' => 2, 'users' => 1000, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 18, 'level' => 1, 'price' => '79.20', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 2, 'price' => '50.09', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 3, 'price' => '50.09', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 4, 'price' => '50.09', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 18, 'level' => 1, 'price' => '70.40', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 2, 'price' => '44.53', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 3, 'price' => '44.53', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 4, 'price' => '44.53', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 18, 'level' => 1, 'price' => '63.80', 'duration' => 3, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 2, 'price' => '40.35', 'duration' => 3, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 3, 'price' => '40.35', 'duration' => 3, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 4, 'price' => '40.35', 'duration' => 3, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 18, 'level' => 1, 'price' => '55.00', 'duration' => 3, 'users' => 50, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 2, 'price' => '34.79', 'duration' => 3, 'users' => 50, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 3, 'price' => '34.79', 'duration' => 3, 'users' => 50, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 4, 'price' => '34.79', 'duration' => 3, 'users' => 50, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 18, 'level' => 1, 'price' => '48.40', 'duration' => 3, 'users' => 100, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 2, 'price' => '30.61', 'duration' => 3, 'users' => 100, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 3, 'price' => '30.61', 'duration' => 3, 'users' => 100, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 4, 'price' => '30.61', 'duration' => 3, 'users' => 100, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 18, 'level' => 1, 'price' => '44.00', 'duration' => 3, 'users' => 250, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 2, 'price' => '27.83', 'duration' => 3, 'users' => 250, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 3, 'price' => '27.83', 'duration' => 3, 'users' => 250, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 4, 'price' => '27.83', 'duration' => 3, 'users' => 250, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 18, 'level' => 1, 'price' => '39.60', 'duration' => 3, 'users' => 500, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 2, 'price' => '25.05', 'duration' => 3, 'users' => 500, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 3, 'price' => '25.05', 'duration' => 3, 'users' => 500, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 4, 'price' => '25.05', 'duration' => 3, 'users' => 500, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 18, 'level' => 1, 'price' => '35.20', 'duration' => 3, 'users' => 1000, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 2, 'price' => '22.26', 'duration' => 3, 'users' => 1000, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 3, 'price' => '22.26', 'duration' => 3, 'users' => 1000, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 18, 'level' => 4, 'price' => '22.26', 'duration' => 3, 'users' => 1000, 'created_at' => $now, 'updated_at' => $now],





            //gdata endpoint protection
            ['product_id' => 19, 'level' => 1, 'price' => '43.20', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 2, 'price' => '27.32', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 3, 'price' => '27.32', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 4, 'price' => '27.32', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 19, 'level' => 1, 'price' => '38.40', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 2, 'price' => '24.29', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 3, 'price' => '24.29', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 4, 'price' => '24.29', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 19, 'level' => 1, 'price' => '34.80', 'duration' => 1, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 2, 'price' => '22.01', 'duration' => 1, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 3, 'price' => '22.01', 'duration' => 1, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 4, 'price' => '22.01', 'duration' => 1, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 19, 'level' => 1, 'price' => '30.00', 'duration' => 1, 'users' => 50, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 2, 'price' => '18.98', 'duration' => 1, 'users' => 50, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 3, 'price' => '18.98', 'duration' => 1, 'users' => 50, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 4, 'price' => '18.98', 'duration' => 1, 'users' => 50, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 19, 'level' => 1, 'price' => '26.40', 'duration' => 1, 'users' => 100, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 2, 'price' => '16.70', 'duration' => 1, 'users' => 100, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 3, 'price' => '16.70', 'duration' => 1, 'users' => 100, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 4, 'price' => '16.70', 'duration' => 1, 'users' => 100, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 19, 'level' => 1, 'price' => '24.00', 'duration' => 1, 'users' => 250, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 2, 'price' => '15.18', 'duration' => 1, 'users' => 250, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 3, 'price' => '15.18', 'duration' => 1, 'users' => 250, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 4, 'price' => '15.18', 'duration' => 1, 'users' => 250, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 19, 'level' => 1, 'price' => '21.60', 'duration' => 1, 'users' => 500, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 2, 'price' => '13.66', 'duration' => 1, 'users' => 500, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 3, 'price' => '13.66', 'duration' => 1, 'users' => 500, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 4, 'price' => '13.66', 'duration' => 1, 'users' => 500, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 19, 'level' => 1, 'price' => '19.20', 'duration' => 1, 'users' => 1000, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 2, 'price' => '12.14', 'duration' => 1, 'users' => 1000, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 3, 'price' => '12.14', 'duration' => 1, 'users' => 1000, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 4, 'price' => '12.14', 'duration' => 1, 'users' => 1000, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 19, 'level' => 1, 'price' => '64.80', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 2, 'price' => '40.99', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 3, 'price' => '40.99', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 4, 'price' => '40.99', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 19, 'level' => 1, 'price' => '57.60', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 2, 'price' => '36.43', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 3, 'price' => '36.43', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 4, 'price' => '36.43', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 19, 'level' => 1, 'price' => '52.20', 'duration' => 2, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 2, 'price' => '33.02', 'duration' => 2, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 3, 'price' => '33.02', 'duration' => 2, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 4, 'price' => '33.02', 'duration' => 2, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 19, 'level' => 1, 'price' => '45.00', 'duration' => 2, 'users' => 50, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 2, 'price' => '28.46', 'duration' => 2, 'users' => 50, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 3, 'price' => '28.46', 'duration' => 2, 'users' => 50, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 4, 'price' => '28.46', 'duration' => 2, 'users' => 50, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 19, 'level' => 1, 'price' => '39.60', 'duration' => 2, 'users' => 100, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 2, 'price' => '25.05', 'duration' => 2, 'users' => 100, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 3, 'price' => '25.05', 'duration' => 2, 'users' => 100, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 4, 'price' => '25.05', 'duration' => 2, 'users' => 100, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 19, 'level' => 1, 'price' => '36.00', 'duration' => 2, 'users' => 250, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 2, 'price' => '22.77', 'duration' => 2, 'users' => 250, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 3, 'price' => '22.77', 'duration' => 2, 'users' => 250, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 4, 'price' => '22.77', 'duration' => 2, 'users' => 250, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 19, 'level' => 1, 'price' => '32.40', 'duration' => 2, 'users' => 500, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 2, 'price' => '20.49', 'duration' => 2, 'users' => 500, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 3, 'price' => '20.49', 'duration' => 2, 'users' => 500, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 4, 'price' => '20.49', 'duration' => 2, 'users' => 500, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 19, 'level' => 1, 'price' => '28.80', 'duration' => 2, 'users' => 1000, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 2, 'price' => '18.22', 'duration' => 2, 'users' => 1000, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 3, 'price' => '18.22', 'duration' => 2, 'users' => 1000, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 4, 'price' => '18.22', 'duration' => 2, 'users' => 1000, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 19, 'level' => 1, 'price' => '86.40', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 2, 'price' => '54.65', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 3, 'price' => '54.65', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 4, 'price' => '54.65', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 19, 'level' => 1, 'price' => '76.80', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 2, 'price' => '48.58', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 3, 'price' => '48.58', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 4, 'price' => '48.58', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 19, 'level' => 1, 'price' => '69.60', 'duration' => 3, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 2, 'price' => '44.02', 'duration' => 3, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 3, 'price' => '44.02', 'duration' => 3, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 4, 'price' => '44.02', 'duration' => 3, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 19, 'level' => 1, 'price' => '60.00', 'duration' => 3, 'users' => 50, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 2, 'price' => '37.95', 'duration' => 3, 'users' => 50, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 3, 'price' => '37.95', 'duration' => 3, 'users' => 50, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 4, 'price' => '37.95', 'duration' => 3, 'users' => 50, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 19, 'level' => 1, 'price' => '52.80', 'duration' => 3, 'users' => 100, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 2, 'price' => '33.40', 'duration' => 3, 'users' => 100, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 3, 'price' => '33.40', 'duration' => 3, 'users' => 100, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 4, 'price' => '33.40', 'duration' => 3, 'users' => 100, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 19, 'level' => 1, 'price' => '48.00', 'duration' => 3, 'users' => 250, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 2, 'price' => '30.36', 'duration' => 3, 'users' => 250, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 3, 'price' => '30.36', 'duration' => 3, 'users' => 250, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 4, 'price' => '30.36', 'duration' => 3, 'users' => 250, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 19, 'level' => 1, 'price' => '43.20', 'duration' => 3, 'users' => 500, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 2, 'price' => '27.32', 'duration' => 3, 'users' => 500, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 3, 'price' => '27.32', 'duration' => 3, 'users' => 500, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 4, 'price' => '27.32', 'duration' => 3, 'users' => 500, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 19, 'level' => 1, 'price' => '38.40', 'duration' => 3, 'users' => 1000, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 2, 'price' => '24.29', 'duration' => 3, 'users' => 1000, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 3, 'price' => '24.29', 'duration' => 3, 'users' => 1000, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 19, 'level' => 4, 'price' => '24.29', 'duration' => 3, 'users' => 1000, 'created_at' => $now, 'updated_at' => $now],

            //gdata internet security
            ['product_id' => 20, 'level' => 1, 'price' => '33.02', 'duration' => 1, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 2, 'price' => '20.88', 'duration' => 1, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 3, 'price' => '20.88', 'duration' => 1, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 4, 'price' => '20.88', 'duration' => 1, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 20, 'level' => 1, 'price' => '41.28', 'duration' => 1, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 2, 'price' => '26.11', 'duration' => 1, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 3, 'price' => '26.11', 'duration' => 1, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 4, 'price' => '26.11', 'duration' => 1, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 20, 'level' => 1, 'price' => '49.55', 'duration' => 1, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 2, 'price' => '31.34', 'duration' => 1, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 3, 'price' => '31.34', 'duration' => 1, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 4, 'price' => '31.34', 'duration' => 1, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 20, 'level' => 1, 'price' => '57.81', 'duration' => 1, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 2, 'price' => '36.56', 'duration' => 1, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 3, 'price' => '36.56', 'duration' => 1, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 4, 'price' => '36.56', 'duration' => 1, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 20, 'level' => 1, 'price' => '66.07', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 2, 'price' => '41.79', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 3, 'price' => '41.79', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 4, 'price' => '41.79', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 20, 'level' => 1, 'price' => '99.13', 'duration' => 1, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 2, 'price' => '62.70', 'duration' => 1, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 3, 'price' => '62.70', 'duration' => 1, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 4, 'price' => '62.70', 'duration' => 1, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 20, 'level' => 1, 'price' => '107.40', 'duration' => 1, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 2, 'price' => '67.93', 'duration' => 1, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 3, 'price' => '67.93', 'duration' => 1, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 4, 'price' => '67.93', 'duration' => 1, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 20, 'level' => 1, 'price' => '115.66', 'duration' => 1, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 2, 'price' => '73.16', 'duration' => 1, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 3, 'price' => '73.16', 'duration' => 1, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 4, 'price' => '73.16', 'duration' => 1, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 20, 'level' => 1, 'price' => '123.93', 'duration' => 1, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 2, 'price' => '78.38', 'duration' => 1, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 3, 'price' => '78.38', 'duration' => 1, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 4, 'price' => '78.38', 'duration' => 1, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 20, 'level' => 1, 'price' => '132.19', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 2, 'price' => '83.61', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 3, 'price' => '83.61', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 4, 'price' => '83.61', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 20, 'level' => 1, 'price' => '57.81', 'duration' => 2, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 2, 'price' => '36.56', 'duration' => 2, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 3, 'price' => '36.56', 'duration' => 2, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 4, 'price' => '36.56', 'duration' => 2, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 20, 'level' => 1, 'price' => '74.34', 'duration' => 2, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 2, 'price' => '47.02', 'duration' => 2, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 3, 'price' => '47.02', 'duration' => 2, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 4, 'price' => '47.02', 'duration' => 2, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 20, 'level' => 1, 'price' => '90.87', 'duration' => 2, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 2, 'price' => '57.47', 'duration' => 2, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 3, 'price' => '57.47', 'duration' => 2, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 4, 'price' => '57.47', 'duration' => 2, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 20, 'level' => 1, 'price' => '107.40', 'duration' => 2, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 2, 'price' => '67.93', 'duration' => 2, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 3, 'price' => '67.93', 'duration' => 2, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 4, 'price' => '67.93', 'duration' => 2, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 20, 'level' => 1, 'price' => '123.93', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 2, 'price' => '78.38', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 3, 'price' => '78.38', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 4, 'price' => '78.38', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 20, 'level' => 1, 'price' => '181.78', 'duration' => 2, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 2, 'price' => '114.97', 'duration' => 2, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 3, 'price' => '114.97', 'duration' => 2, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 4, 'price' => '114.97', 'duration' => 2, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 20, 'level' => 1, 'price' => '198.31', 'duration' => 2, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 2, 'price' => '125.43', 'duration' => 2, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 3, 'price' => '125.43', 'duration' => 2, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 4, 'price' => '125.43', 'duration' => 2, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 20, 'level' => 1, 'price' => '214.83', 'duration' => 2, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 2, 'price' => '135.88', 'duration' => 2, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 3, 'price' => '135.88', 'duration' => 2, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 4, 'price' => '135.88', 'duration' => 2, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 20, 'level' => 1, 'price' => '231.36', 'duration' => 2, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 2, 'price' => '146.34', 'duration' => 2, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 3, 'price' => '146.34', 'duration' => 2, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 4, 'price' => '146.34', 'duration' => 2, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 20, 'level' => 1, 'price' => '247.89', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 2, 'price' => '156.79', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 3, 'price' => '156.79', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 4, 'price' => '156.79', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 20, 'level' => 1, 'price' => '82.60', 'duration' => 3, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 2, 'price' => '52.25', 'duration' => 3, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 3, 'price' => '52.25', 'duration' => 3, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 4, 'price' => '52.25', 'duration' => 3, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 20, 'level' => 1, 'price' => '107.40', 'duration' => 3, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 2, 'price' => '67.93', 'duration' => 3, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 3, 'price' => '67.93', 'duration' => 3, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 4, 'price' => '67.93', 'duration' => 3, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 20, 'level' => 1, 'price' => '132.19', 'duration' => 3, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 2, 'price' => '83.61', 'duration' => 3, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 3, 'price' => '83.61', 'duration' => 3, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 4, 'price' => '83.61', 'duration' => 3, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 20, 'level' => 1, 'price' => '156.98', 'duration' => 3, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 2, 'price' => '99.29', 'duration' => 3, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 3, 'price' => '99.29', 'duration' => 3, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 4, 'price' => '99.29', 'duration' => 3, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 20, 'level' => 1, 'price' => '181.78', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 2, 'price' => '114.97', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 3, 'price' => '114.97', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 4, 'price' => '114.97', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 20, 'level' => 1, 'price' => '264.42', 'duration' => 3, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 2, 'price' => '167.25', 'duration' => 3, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 3, 'price' => '167.25', 'duration' => 3, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 4, 'price' => '167.25', 'duration' => 3, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 20, 'level' => 1, 'price' => '289.21', 'duration' => 3, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 2, 'price' => '182.93', 'duration' => 3, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 3, 'price' => '182.93', 'duration' => 3, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 4, 'price' => '182.93', 'duration' => 3, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 20, 'level' => 1, 'price' => '314.01', 'duration' => 3, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 2, 'price' => '198.61', 'duration' => 3, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 3, 'price' => '198.61', 'duration' => 3, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 4, 'price' => '198.61', 'duration' => 3, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 20, 'level' => 1, 'price' => '338.80', 'duration' => 3, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 2, 'price' => '214.29', 'duration' => 3, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 3, 'price' => '214.29', 'duration' => 3, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 4, 'price' => '214.29', 'duration' => 3, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 20, 'level' => 1, 'price' => '363.60', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 2, 'price' => '229.97', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 3, 'price' => '229.97', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 20, 'level' => 4, 'price' => '229.97', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],

            //gdata total protection
            ['product_id' => 21, 'level' => 1, 'price' => '41.28', 'duration' => 1, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 2, 'price' => '26.11', 'duration' => 1, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 3, 'price' => '26.11', 'duration' => 1, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 4, 'price' => '26.11', 'duration' => 1, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 21, 'level' => 1, 'price' => '49.55', 'duration' => 1, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 2, 'price' => '31.34', 'duration' => 1, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 3, 'price' => '31.34', 'duration' => 1, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 4, 'price' => '31.34', 'duration' => 1, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 21, 'level' => 1, 'price' => '57.81', 'duration' => 1, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 2, 'price' => '36.56', 'duration' => 1, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 3, 'price' => '36.56', 'duration' => 1, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 4, 'price' => '36.56', 'duration' => 1, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 21, 'level' => 1, 'price' => '66.07', 'duration' => 1, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 2, 'price' => '41.79', 'duration' => 1, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 3, 'price' => '41.79', 'duration' => 1, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 4, 'price' => '41.79', 'duration' => 1, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 21, 'level' => 1, 'price' => '74.34', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 2, 'price' => '47.02', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 3, 'price' => '47.02', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 4, 'price' => '47.02', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 21, 'level' => 1, 'price' => '115.66', 'duration' => 1, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 2, 'price' => '73.16', 'duration' => 1, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 3, 'price' => '73.16', 'duration' => 1, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 4, 'price' => '73.16', 'duration' => 1, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 21, 'level' => 1, 'price' => '123.93', 'duration' => 1, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 2, 'price' => '78.38', 'duration' => 1, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 3, 'price' => '78.38', 'duration' => 1, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 4, 'price' => '78.38', 'duration' => 1, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 21, 'level' => 1, 'price' => '132.19', 'duration' => 1, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 2, 'price' => '83.61', 'duration' => 1, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 3, 'price' => '83.61', 'duration' => 1, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 4, 'price' => '83.61', 'duration' => 1, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 21, 'level' => 1, 'price' => '140.45', 'duration' => 1, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 2, 'price' => '88.84', 'duration' => 1, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 3, 'price' => '88.84', 'duration' => 1, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 4, 'price' => '88.84', 'duration' => 1, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 21, 'level' => 1, 'price' => '148.72', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 2, 'price' => '94.06', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 3, 'price' => '94.06', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 4, 'price' => '94.06', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 21, 'level' => 1, 'price' => '74.34', 'duration' => 2, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 2, 'price' => '47.02', 'duration' => 2, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 3, 'price' => '47.02', 'duration' => 2, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 4, 'price' => '47.02', 'duration' => 2, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 21, 'level' => 1, 'price' => '90.87', 'duration' => 2, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 2, 'price' => '57.47', 'duration' => 2, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 3, 'price' => '57.47', 'duration' => 2, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 4, 'price' => '57.47', 'duration' => 2, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 21, 'level' => 1, 'price' => '107.40', 'duration' => 2, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 2, 'price' => '67.93', 'duration' => 2, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 3, 'price' => '67.93', 'duration' => 2, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 4, 'price' => '67.93', 'duration' => 2, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 21, 'level' => 1, 'price' => '123.93', 'duration' => 2, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 2, 'price' => '78.38', 'duration' => 2, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 3, 'price' => '78.38', 'duration' => 2, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 4, 'price' => '78.38', 'duration' => 2, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 21, 'level' => 1, 'price' => '140.45', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 2, 'price' => '88.84', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 3, 'price' => '88.84', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 4, 'price' => '88.84', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 21, 'level' => 1, 'price' => '214.83', 'duration' => 2, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 2, 'price' => '135.88', 'duration' => 2, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 3, 'price' => '135.88', 'duration' => 2, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 4, 'price' => '135.88', 'duration' => 2, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 21, 'level' => 1, 'price' => '231.36', 'duration' => 2, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 2, 'price' => '146.34', 'duration' => 2, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 3, 'price' => '146.34', 'duration' => 2, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 4, 'price' => '146.34', 'duration' => 2, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 21, 'level' => 1, 'price' => '247.89', 'duration' => 2, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 2, 'price' => '156.79', 'duration' => 2, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 3, 'price' => '156.79', 'duration' => 2, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 4, 'price' => '156.79', 'duration' => 2, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 21, 'level' => 1, 'price' => '264.42', 'duration' => 2, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 2, 'price' => '167.25', 'duration' => 2, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 3, 'price' => '167.25', 'duration' => 2, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 4, 'price' => '167.25', 'duration' => 2, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 21, 'level' => 1, 'price' => '280.95', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 2, 'price' => '177.70', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 3, 'price' => '177.70', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 4, 'price' => '177.70', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 21, 'level' => 1, 'price' => '107.40', 'duration' => 3, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 2, 'price' => '67.93', 'duration' => 3, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 3, 'price' => '67.93', 'duration' => 3, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 4, 'price' => '67.93', 'duration' => 3, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 21, 'level' => 1, 'price' => '132.19', 'duration' => 3, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 2, 'price' => '83.61', 'duration' => 3, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 3, 'price' => '83.61', 'duration' => 3, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 4, 'price' => '83.61', 'duration' => 3, 'users' => 2, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 21, 'level' => 1, 'price' => '156.98', 'duration' => 3, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 2, 'price' => '99.29', 'duration' => 3, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 3, 'price' => '99.29', 'duration' => 3, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 4, 'price' => '99.29', 'duration' => 3, 'users' => 3, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 21, 'level' => 1, 'price' => '181.78', 'duration' => 3, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 2, 'price' => '114.97', 'duration' => 3, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 3, 'price' => '114.97', 'duration' => 3, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 4, 'price' => '114.97', 'duration' => 3, 'users' => 4, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 21, 'level' => 1, 'price' => '206.57', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 2, 'price' => '130.66', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 3, 'price' => '130.66', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 4, 'price' => '130.66', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 21, 'level' => 1, 'price' => '314.01', 'duration' => 3, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 2, 'price' => '198.61', 'duration' => 3, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 3, 'price' => '198.61', 'duration' => 3, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 4, 'price' => '198.61', 'duration' => 3, 'users' => 6, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 21, 'level' => 1, 'price' => '338.80', 'duration' => 3, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 2, 'price' => '214.29', 'duration' => 3, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 3, 'price' => '214.29', 'duration' => 3, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 4, 'price' => '214.29', 'duration' => 3, 'users' => 7, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 21, 'level' => 1, 'price' => '363.60', 'duration' => 3, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 2, 'price' => '229.97', 'duration' => 3, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 3, 'price' => '229.97', 'duration' => 3, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 4, 'price' => '229.97', 'duration' => 3, 'users' => 8, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 21, 'level' => 1, 'price' => '388.39', 'duration' => 3, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 2, 'price' => '245.66', 'duration' => 3, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 3, 'price' => '245.66', 'duration' => 3, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 4, 'price' => '245.66', 'duration' => 3, 'users' => 9, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 21, 'level' => 1, 'price' => '413.18', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 2, 'price' => '261.34', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 3, 'price' => '261.34', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 21, 'level' => 4, 'price' => '261.34', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],

            //bullguard antivirus
            ['product_id' => 22, 'level' => 1, 'price' => '24.75', 'duration' => 1, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 2, 'price' => '13.29', 'duration' => 1, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 3, 'price' => '13.29', 'duration' => 1, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 4, 'price' => '13.29', 'duration' => 1, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 22, 'level' => 1, 'price' => '39.62', 'duration' => 2, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 2, 'price' => '22.78', 'duration' => 2, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 3, 'price' => '22.78', 'duration' => 2, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 4, 'price' => '22.78', 'duration' => 2, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 22, 'level' => 1, 'price' => '49.54', 'duration' => 3, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 2, 'price' => '28.48', 'duration' => 3, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 3, 'price' => '28.48', 'duration' => 3, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 4, 'price' => '28.48', 'duration' => 3, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 22, 'level' => 1, 'price' => '68.17', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 2, 'price' => '48.69', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 3, 'price' => '48.69', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 4, 'price' => '48.69', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 22, 'level' => 1, 'price' => '109.06', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 2, 'price' => '77.90', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 3, 'price' => '77.90', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 4, 'price' => '77.90', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 22, 'level' => 1, 'price' => '136.36', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 2, 'price' => '97.40', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 3, 'price' => '97.40', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 4, 'price' => '97.40', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 22, 'level' => 1, 'price' => '57.25', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 2, 'price' => '40.89', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 3, 'price' => '40.89', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 4, 'price' => '40.89', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 22, 'level' => 1, 'price' => '91.66', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 2, 'price' => '65.47', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 3, 'price' => '65.47', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 4, 'price' => '65.47', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 22, 'level' => 1, 'price' => '114.60', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 2, 'price' => '81.86', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 3, 'price' => '81.86', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 4, 'price' => '81.86', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 22, 'level' => 1, 'price' => '84.15', 'duration' => 1, 'users' => 15, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 2, 'price' => '60.11', 'duration' => 1, 'users' => 15, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 3, 'price' => '60.11', 'duration' => 1, 'users' => 15, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 4, 'price' => '60.11', 'duration' => 1, 'users' => 15, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 22, 'level' => 1, 'price' => '134.74', 'duration' => 2, 'users' => 15, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 2, 'price' => '96.24', 'duration' => 2, 'users' => 15, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 3, 'price' => '96.24', 'duration' => 2, 'users' => 15, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 4, 'price' => '96.24', 'duration' => 2, 'users' => 15, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 22, 'level' => 1, 'price' => '168.46', 'duration' => 3, 'users' => 15, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 2, 'price' => '120.33', 'duration' => 3, 'users' => 15, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 3, 'price' => '120.33', 'duration' => 3, 'users' => 15, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 4, 'price' => '120.33', 'duration' => 3, 'users' => 15, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 22, 'level' => 1, 'price' => '109.97', 'duration' => 1, 'users' => 20, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 2, 'price' => '78.55', 'duration' => 1, 'users' => 20, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 3, 'price' => '78.55', 'duration' => 1, 'users' => 20, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 4, 'price' => '78.55', 'duration' => 1, 'users' => 20, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 22, 'level' => 1, 'price' => '153.09', 'duration' => 2, 'users' => 20, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 2, 'price' => '109.35', 'duration' => 2, 'users' => 20, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 3, 'price' => '109.35', 'duration' => 2, 'users' => 20, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 4, 'price' => '109.35', 'duration' => 2, 'users' => 20, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 22, 'level' => 1, 'price' => '220.12', 'duration' => 3, 'users' => 20, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 2, 'price' => '157.23', 'duration' => 3, 'users' => 20, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 3, 'price' => '157.23', 'duration' => 3, 'users' => 20, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 4, 'price' => '157.23', 'duration' => 3, 'users' => 20, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 22, 'level' => 1, 'price' => '134.71', 'duration' => 1, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 2, 'price' => '96.22', 'duration' => 1, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 3, 'price' => '96.22', 'duration' => 1, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 4, 'price' => '96.22', 'duration' => 1, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 22, 'level' => 1, 'price' => '215.67', 'duration' => 2, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 2, 'price' => '154.05', 'duration' => 2, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 3, 'price' => '154.05', 'duration' => 2, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 4, 'price' => '154.05', 'duration' => 2, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 22, 'level' => 1, 'price' => '269.65', 'duration' => 3, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 2, 'price' => '192.61', 'duration' => 3, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 3, 'price' => '192.61', 'duration' => 3, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 4, 'price' => '192.61', 'duration' => 3, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 22, 'level' => 1, 'price' => '158.42', 'duration' => 1, 'users' => 30, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 2, 'price' => '113.16', 'duration' => 1, 'users' => 30, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 3, 'price' => '113.16', 'duration' => 1, 'users' => 30, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 4, 'price' => '113.16', 'duration' => 1, 'users' => 30, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 22, 'level' => 1, 'price' => '253.64', 'duration' => 2, 'users' => 30, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 2, 'price' => '181.17', 'duration' => 2, 'users' => 30, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 3, 'price' => '181.17', 'duration' => 2, 'users' => 30, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 4, 'price' => '181.17', 'duration' => 2, 'users' => 30, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 22, 'level' => 1, 'price' => '317.10', 'duration' => 3, 'users' => 30, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 2, 'price' => '226.50', 'duration' => 3, 'users' => 30, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 3, 'price' => '226.50', 'duration' => 3, 'users' => 30, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 22, 'level' => 4, 'price' => '226.50', 'duration' => 3, 'users' => 30, 'created_at' => $now, 'updated_at' => $now],



            //bullguard internet security
            ['product_id' => 23, 'level' => 1, 'price' => '24.75', 'duration' => 1, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 2, 'price' => '11.21', 'duration' => 1, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 3, 'price' => '11.21', 'duration' => 1, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 4, 'price' => '11.21', 'duration' => 1, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 23, 'level' => 1, 'price' => '39.63', 'duration' => 2, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 2, 'price' => '17.94', 'duration' => 2, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 3, 'price' => '17.94', 'duration' => 2, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 4, 'price' => '17.94', 'duration' => 2, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 23, 'level' => 1, 'price' => '49.54', 'duration' => 3, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 2, 'price' => '22.53', 'duration' => 3, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 3, 'price' => '22.53', 'duration' => 3, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 4, 'price' => '22.53', 'duration' => 3, 'users' => 1, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 23, 'level' => 1, 'price' => '69.38', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 2, 'price' => '39.89', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 3, 'price' => '39.89', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 4, 'price' => '39.89', 'duration' => 1, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 23, 'level' => 1, 'price' => '111.53', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 2, 'price' => '64.13', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 3, 'price' => '64.13', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 4, 'price' => '64.13', 'duration' => 2, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 23, 'level' => 1, 'price' => '138.80', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 2, 'price' => '79.81', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 3, 'price' => '79.81', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 4, 'price' => '79.81', 'duration' => 3, 'users' => 5, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 23, 'level' => 1, 'price' => '116.49', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 2, 'price' => '66.10', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 3, 'price' => '66.10', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 4, 'price' => '66.10', 'duration' => 1, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 23, 'level' => 1, 'price' => '186.74', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 2, 'price' => '105.60', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 3, 'price' => '105.60', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 4, 'price' => '105.60', 'duration' => 2, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 23, 'level' => 1, 'price' => '233.02', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 2, 'price' => '132.24', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 3, 'price' => '132.24', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 4, 'price' => '132.24', 'duration' => 3, 'users' => 10, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 23, 'level' => 1, 'price' => '136.02', 'duration' => 1, 'users' => 15, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 2, 'price' => '97.16', 'duration' => 1, 'users' => 15, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 3, 'price' => '97.16', 'duration' => 1, 'users' => 15, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 4, 'price' => '97.16', 'duration' => 1, 'users' => 15, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 23, 'level' => 1, 'price' => '217.32', 'duration' => 2, 'users' => 15, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 2, 'price' => '155.23', 'duration' => 2, 'users' => 15, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 3, 'price' => '155.23', 'duration' => 2, 'users' => 15, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 4, 'price' => '155.23', 'duration' => 2, 'users' => 15, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 23, 'level' => 1, 'price' => '272.14', 'duration' => 3, 'users' => 15, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 2, 'price' => '194.39', 'duration' => 3, 'users' => 15, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 3, 'price' => '194.39', 'duration' => 3, 'users' => 15, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 4, 'price' => '194.39', 'duration' => 3, 'users' => 15, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 23, 'level' => 1, 'price' => '177.74', 'duration' => 1, 'users' => 20, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 2, 'price' => '126.96', 'duration' => 1, 'users' => 20, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 3, 'price' => '126.96', 'duration' => 1, 'users' => 20, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 4, 'price' => '126.96', 'duration' => 1, 'users' => 20, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 23, 'level' => 1, 'price' => '283.96', 'duration' => 2, 'users' => 20, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 2, 'price' => '202.83', 'duration' => 2, 'users' => 20, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 3, 'price' => '202.83', 'duration' => 2, 'users' => 20, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 4, 'price' => '202.83', 'duration' => 2, 'users' => 20, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 23, 'level' => 1, 'price' => '355.61', 'duration' => 3, 'users' => 20, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 2, 'price' => '254.01', 'duration' => 3, 'users' => 20, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 3, 'price' => '254.01', 'duration' => 3, 'users' => 20, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 4, 'price' => '254.01', 'duration' => 3, 'users' => 20, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 23, 'level' => 1, 'price' => '217.72', 'duration' => 1, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 2, 'price' => '155.52', 'duration' => 1, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 3, 'price' => '155.52', 'duration' => 1, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 4, 'price' => '155.52', 'duration' => 1, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 23, 'level' => 1, 'price' => '347.85', 'duration' => 2, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 2, 'price' => '248.47', 'duration' => 2, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 3, 'price' => '248.47', 'duration' => 2, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 4, 'price' => '248.47', 'duration' => 2, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 23, 'level' => 1, 'price' => '435.59', 'duration' => 3, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 2, 'price' => '311.16', 'duration' => 3, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 3, 'price' => '311.16', 'duration' => 3, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 4, 'price' => '311.16', 'duration' => 3, 'users' => 25, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 23, 'level' => 1, 'price' => '256.06', 'duration' => 1, 'users' => 30, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 2, 'price' => '182.90', 'duration' => 1, 'users' => 30, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 3, 'price' => '182.90', 'duration' => 1, 'users' => 30, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 4, 'price' => '182.90', 'duration' => 1, 'users' => 30, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 23, 'level' => 1, 'price' => '409.08', 'duration' => 2, 'users' => 30, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 2, 'price' => '292.20', 'duration' => 2, 'users' => 30, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 3, 'price' => '292.20', 'duration' => 2, 'users' => 30, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 4, 'price' => '292.20', 'duration' => 2, 'users' => 30, 'created_at' => $now, 'updated_at' => $now],

            ['product_id' => 23, 'level' => 1, 'price' => '512.28', 'duration' => 3, 'users' => 30, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 2, 'price' => '365.92', 'duration' => 3, 'users' => 30, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 3, 'price' => '365.92', 'duration' => 3, 'users' => 30, 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 23, 'level' => 4, 'price' => '365.92', 'duration' => 3, 'users' => 30, 'created_at' => $now, 'updated_at' => $now],

        ]);

        Price::insert([
            //nomadesk
            ['product_id' => 11, 'level' => 1, 'price' => '10.00', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 11, 'level' => 2, 'price' => '7.65', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 11, 'level' => 3, 'price' => '7.65', 'created_at' => $now, 'updated_at' => $now],
            ['product_id' => 11, 'level' => 4, 'price' => '7.65', 'created_at' => $now, 'updated_at' => $now],
        ]);





    }
}
