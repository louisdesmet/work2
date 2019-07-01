<?php

use Illuminate\Database\Seeder;

use App\Domain;
use Carbon\Carbon;

class DomainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');

        Domain::insert([
            ['user_id' => 1, 'name' => 'louisdesmet.be', 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => 1, 'name' => 'vanjola.com', 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => 1, 'name' => 'pierla.nl', 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => 1, 'name' => 'zegma.be', 'created_at' => $now, 'updated_at' => $now],
            ['user_id' => 1, 'name' => 'starrate.com', 'created_at' => $now, 'updated_at' => $now]
        ]);
    }
}
