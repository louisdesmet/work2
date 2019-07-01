<?php

namespace App\Jobs;

use App\User;
use Couchbase\WildcardSearchQuery;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SyncUsers implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $whmcsUsers = DB::connection('whmcs_cloudhighway')->table('tblclients')->get();
        $data = array();
        foreach($whmcsUsers as $whmcsUser) {
            array_push($data, array(
                'name' => $whmcsUser->firstname . ' ' . $whmcsUser->lastname,
                'last_name' => $whmcsUser->lastname,
                'first_name' => $whmcsUser->firstname,
                'company' => $whmcsUser->companyname,
                'city' => $whmcsUser->city,
                'postal_code' => $whmcsUser->postcode,
                'country' => $whmcsUser->country,
                'phonenumber' => $whmcsUser->phonenumber,
                'email' => $whmcsUser->email,
                'password' => Hash::make('kankerjood')//$whmcsUser->password
            ));
        }
        User::insert($data);
    }
}
