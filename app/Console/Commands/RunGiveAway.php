<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Traits\TransactionTrait;

class RunGiveAway extends Command
{
    use TransactionTrait;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:giveaway_schedule';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $this->run_data_giveaway();
    }
}
