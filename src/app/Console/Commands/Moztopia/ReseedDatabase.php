<?php

namespace Moztopia\LaravelCommands\Console\Commands\Moztopia;

use Illuminate\Console\Command;

class ReseedDatabase extends Command
{
    protected $signature = 'db:reseed';
    protected $description = 'Wipe the database, migrate, seed, and clear everything';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        if ($this->confirm('This will wipe the database, run migrations, seed the database, and clear all caches. Do you wish to continue?', true)) {
            $this->call('db:wipe');
            $this->call('migrate');
            $this->call('db:seed');
            $this->call('clear:everything');

            $this->info('Database reseeded and caches cleared successfully!');
        } else {
            $this->info('Operation cancelled.');
        }
    }
}
