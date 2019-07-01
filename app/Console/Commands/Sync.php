<?php

namespace App\Console\Commands;

use App\Jobs\SyncResellers;
use App\Jobs\SyncUsers;
use Illuminate\Console\Command;

class Sync extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync everything from whmcs.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        SyncUsers::withChain([
            new SyncResellers()
        ])->dispatch();

        $this->info('Successfully imported all users and linked the resellers from cloudhighway whmcs.');

    }
}
