<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class AddRouteSidebarCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'thinhpd:blog';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add Migrate Route SideBar in Crud Blog';

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
        $commands[] = 'php artisan backpack:crud blog';

        $commands[] = 'php artisan migrate';
        $commands[] = 'php artisan backpack:base:add-custom-route "CRUD::resource(\'blog\', \'BlogCrudController\');"';
        $commands[] = 'php artisan backpack:base:add-custom-route "Route::get(\'lang/{lang}\', \'LangController@changeLang\')->name(\'lang\');"';
        $commands[] = 'php artisan backpack:base:add-sidebar-content "<li><a href=\'{{ backpack_url(\'blog\') }}\'><i class=\'fa fa-tag\'></i> <span>Blogs</span></a></li>"';
        foreach ($commands as $command)
        {
            $process = new Process($command, null, null, null, 300, null);
            $process->run(function ($type, $buffer) {
                if (Process::ERR === $type) {
                    $this->line($buffer);
                } else {
                    $this->line($buffer);
                }
            });
            // executes after the command finishes
            if (!$process->isSuccessful()) {
                throw new ProcessFailedException($process);
            }
        }
    }
}
