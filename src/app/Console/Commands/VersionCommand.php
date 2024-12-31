<?php

namespace Moztopia\Commands\Console\Commands;

use Illuminate\Console\Command;

class VersionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    protected $signature = 'moztopia:version';

    /**
     * The console command description.
     *
     * @var string
     */

    protected $description = 'Prints the version of the moztopia/commands package';

    /**
     * Execute the console command.
     *
     * @return int
     */

    public function handle()
    {
        $version = '1.0.0';

        $this->info('Moztopia Commands version: ' . $version);

        return 0;
    }
}
