<?php

namespace App\Console\Commands;

use App\Models\Scraper;
use App\Models\Telegram;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class SendNumber extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scraper:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     */
    public function handle()
    {
        $number = Scraper::getNumber();
        $telegram = new Telegram();
        $telegram->sendMessage($number);
        return 'success';
    }
}
