<?php

namespace App\Console\Commands;

use App\Traits\TransactionTrait;
use Illuminate\Console\Command;

class RunScheduleCommand extends Command
{
    use TransactionTrait;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:run_schedule_purchase';

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
       $this->run_schedule_purchase();
    }
}
