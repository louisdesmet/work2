<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(array(
            'first_name'    => 'Louis',
            'last_name'     => 'De Smet',
            'name'          => 'Louis De Smet',
            'company'       => 'smettah',
            'address'       => 'kongostraat 46',
            'state'         => 'Oost-vlaanderen',
            'city'          => 'Gent',
            'postal_code'   => '9000',
            'country'       => 'Belgium',
            'phonenumber'   => '0477447789',
            'email'         => 'info@louis.be',
            'password'      => Hash::make('kankerjood'),
        ));
        User::create(array(
            'first_name'    => 'Bert',
            'last_name'     => 'De Vlaminck',
            'name'          => 'Bert De Vlaminck',
            'company'       => 'smettah',
            'address'       => 'kongostraat 46',
            'state'         => 'Oost-vlaanderen',
            'city'          => 'Gent',
            'postal_code'   => '9000',
            'country'       => 'Belgium',
            'phonenumber'   => '0477447789',
            'email'         => 'info@bert.be',
            'password'      => Hash::make('kankerjood'),
        ));
        User::create(array(
            'first_name'    => 'Simon',
            'last_name'     => 'Van Overbergen',
            'name'          => 'Simon Van Overbergen',
            'company'       => 'smettah',
            'address'       => 'kongostraat 46',
            'state'         => 'Oost-vlaanderen',
            'city'          => 'Gent',
            'postal_code'   => '9000',
            'country'       => 'Belgium',
            'phonenumber'   => '0477447789',
            'email'         => 'info@simon.be',
            'password'      => Hash::make('kankerjood'),
        ));
        User::create(array(
            'first_name'    => 'Sarah',
            'last_name'     => 'Ventiel',
            'name'          => 'Sarah Ventiel',
            'company'       => 'smettah',
            'address'       => 'kongostraat 46',
            'state'         => 'Oost-vlaanderen',
            'city'          => 'Gent',
            'postal_code'   => '9000',
            'country'       => 'Belgium',
            'phonenumber'   => '0477447789',
            'email'         => 'info@sarah.be',
            'password'      => Hash::make('kankerjood'),
        ));
        User::create(array(
            'first_name'    => 'Evelien',
            'last_name'     => 'Zoprana',
            'name'          => 'Evelien Zoprana',
            'company'       => 'smettah',
            'address'       => 'kongostraat 46',
            'state'         => 'Oost-vlaanderen',
            'city'          => 'Gent',
            'postal_code'   => '9000',
            'country'       => 'Belgium',
            'phonenumber'   => '0477447789',
            'email'         => 'info@evelien.be',
            'password'      => Hash::make('kankerjood'),
        ));
        $reseller = User::find(1);
        $reseller->users()->attach([2, 3, 4, 5]);
    }
}
