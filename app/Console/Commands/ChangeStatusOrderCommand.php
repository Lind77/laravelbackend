<?php

namespace App\Console\Commands;

use App\Models\Sales;
use Illuminate\Console\Command;

use function Laravel\Prompts\confirm;

class ChangeStatusOrderCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:change-status-order-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        info('Change status sale');

        $confirmed = confirm('Vamos a crear una nueva sale');

        if (!$confirmed) {
            return;
        }

        $sale =  new Sales();
    }
}
