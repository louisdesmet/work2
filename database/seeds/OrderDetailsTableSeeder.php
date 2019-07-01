<?php

use Illuminate\Database\Seeder;

use App\OrderDetail;
use Carbon\Carbon;

class OrderDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');

        OrderDetail::insert([
            ['order_id' => 1, 'product_option_id' => 1, 'amount' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['order_id' => 1, 'product_option_id' => 8, 'amount' => 7, 'created_at' => $now, 'updated_at' => $now],
        ]);

//        OrderDetail::insert([
//            ['order_id' => 8, 'product_option_id' => 1, 'amount' => 1, 'created_at' => $now, 'updated_at' => $now],
//            ['order_id' => 8, 'product_option_id' => 2, 'amount' => 1, 'created_at' => $now, 'updated_at' => $now],
//            ['order_id' => 8, 'product_option_id' => 3, 'amount' => 1, 'created_at' => $now, 'updated_at' => $now],
//            ['order_id' => 8, 'product_option_id' => 4, 'amount' => 1, 'created_at' => $now, 'updated_at' => $now],
//            ['order_id' => 8, 'product_option_id' => 5, 'amount' => 1, 'created_at' => $now, 'updated_at' => $now],
//            ['order_id' => 8, 'product_option_id' => 6, 'amount' => 1, 'created_at' => $now, 'updated_at' => $now],
//            ['order_id' => 8, 'product_option_id' => 7, 'amount' => 1, 'created_at' => $now, 'updated_at' => $now],
//            ['order_id' => 8, 'product_option_id' => 8, 'amount' => 1, 'created_at' => $now, 'updated_at' => $now],
//            ['order_id' => 8, 'product_option_id' => 9, 'amount' => 1, 'created_at' => $now, 'updated_at' => $now],
//            ['order_id' => 8, 'product_option_id' => 10, 'amount' => 1, 'created_at' => $now, 'updated_at' => $now],
//            ['order_id' => 8, 'product_option_id' => 11, 'amount' => 1, 'created_at' => $now, 'updated_at' => $now],
//            ['order_id' => 8, 'product_option_id' => 12, 'amount' => 1, 'created_at' => $now, 'updated_at' => $now],
//            ['order_id' => 8, 'product_option_id' => 13, 'amount' => 1, 'created_at' => $now, 'updated_at' => $now],
//            ['order_id' => 8, 'product_option_id' => 14, 'amount' => 1, 'created_at' => $now, 'updated_at' => $now],
//            ['order_id' => 8, 'product_option_id' => 15, 'amount' => 1, 'created_at' => $now, 'updated_at' => $now],
//            ['order_id' => 8, 'product_option_id' => 16, 'amount' => 1, 'created_at' => $now, 'updated_at' => $now],
//            ['order_id' => 8, 'product_option_id' => 17, 'amount' => 1, 'created_at' => $now, 'updated_at' => $now],
//            ['order_id' => 8, 'product_option_id' => 18, 'amount' => 1, 'created_at' => $now, 'updated_at' => $now],
//            ['order_id' => 8, 'product_option_id' => 19, 'amount' => 1, 'created_at' => $now, 'updated_at' => $now],
//            ['order_id' => 8, 'product_option_id' => 20, 'amount' => 1, 'created_at' => $now, 'updated_at' => $now],
//            ['order_id' => 8, 'product_option_id' => 21, 'amount' => 1, 'created_at' => $now, 'updated_at' => $now],
//        ]);
    }
}
