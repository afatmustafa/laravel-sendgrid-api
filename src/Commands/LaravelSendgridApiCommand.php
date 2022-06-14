<?php

namespace Afatmustafa\LaravelSendgridApi\Commands;

use Illuminate\Console\Command;

class LaravelSendgridApiCommand extends Command
{
    public $signature = 'laravel-sendgrid-api';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
