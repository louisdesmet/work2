<?php

use Illuminate\Database\Seeder;

use App\Order;
use Carbon\Carbon;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');



        Order::insert([
            ['user_id' => 1, 'product_id' => 7, 'status' => 'active', 'date' => '2019-06-18 11:26:15', 'domain' => 'younitit.onmicrosoft.com', 'tenant' => '6b1ddc37-008c-4db7-973a-18ba17693ff6', 'created_at' => $now, 'updated_at' => $now],
        ]);



//        Order::insert([
//            ['user_id' => 1, 'product_id' => 1, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 2, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 2, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 3, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 4, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 5, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 6, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 7, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 8, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 9, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 10, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 11, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 12, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 13, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 14, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 15, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 16, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 17, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 18, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 19, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 20, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 21, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 22, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 23, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 24, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 25, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 26, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 27, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 28, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 29, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 30, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 31, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 32, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 33, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 34, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 35, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 36, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 37, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 38, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 39, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 40, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 41, 'created_at' => $now, 'updated_at' => $now],
//            ['user_id' => 1, 'product_id' => 42, 'created_at' => $now, 'updated_at' => $now],
//
//        ]);
    }
}
