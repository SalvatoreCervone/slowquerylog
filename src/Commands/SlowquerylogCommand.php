<?php

namespace salvatorecervone\Slowquerylog\Commands;

use Illuminate\Console\Command;

class SlowquerylogCommand extends Command
{
    public $signature = 'slowquerylog';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
