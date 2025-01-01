<?php

namespace App\Console\Commands\Moztopia;

use Illuminate\Console\Command;

class ClearEverything extends Command
{
    protected $signature = 'clear:everything';
    protected $description = 'Clear all caches, views, and config';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->call('cache:clear');
        $this->call('route:clear');
        $this->call('config:clear');
        $this->call('view:clear');
        $this->call('clear-compiled');
        $this->call('config:cache');
        $this->call('route:cache');
        $this->call('view:cache');
        $this->call('optimize');
    }
}
