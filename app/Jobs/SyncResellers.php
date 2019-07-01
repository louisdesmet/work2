<?php

namespace App\Jobs;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\DB;

class SyncResellers implements ShouldQueue
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
        $whmcsUsers = DB::connection('whmcs_cloudhighway')->table('tblclients')
            ->select('tblclients.id', 'tblclients.firstname', 'tblclients.lastname', 'tblclients.email', 'fieldid', 'relid', 'value', 'clients.email AS subemail')
            ->leftJoin('tblcustomfieldsvalues', 'tblclients.id', '=', 'tblcustomfieldsvalues.value')
            ->leftJoin('tblclients AS clients', 'tblcustomfieldsvalues.relid', '=', 'clients.id')
            ->where('fieldid', 4)
            ->whereRaw('tblclients.id != tblcustomfieldsvalues.relid')
            ->get();

        foreach($whmcsUsers as $index => $whmcsUser) {
            $reseller = User::where('email', $whmcsUser->email)->first();
            $user = User::where('email', $whmcsUser->subemail)->first();

            if(!$user) {
                dd($whmcsUser->subemail);
            }
            $reseller->users()->attach($user);
        }
    }
}
