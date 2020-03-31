<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\Console\Migrations\MigrateCommand;
use Illuminate\Support\Facades\DB;
use Stripe\Product;

class MigrateWhenDbReady extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate:when-ready';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Waits until Db is connected to migrate';

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
        for($i = 0; $i<20; $i++) {
            try {
                $result = DB::reconnect();
                if($result) {
                    $this->info('Connected to DB! Proceeding with migration!');
                    $this->info(\Artisan::call('migrate:fresh', ['--seed' => 'true']));
                    $this->info(\Artisan::call('stripe:setup'));
                    break;
                }
            } catch(\Exception $exception) {
                $this->info($exception->getMessage());
                $this->info('Failed to connect to DB trying again in ' . $i . ' seconds.');
                sleep($i);
            }
        }
    }
}
