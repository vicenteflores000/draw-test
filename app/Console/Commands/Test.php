<?php

namespace App\Console\Commands;

use App\Models\AgendaRecurso;
use App\Models\Oficina;
use Illuminate\Console\Command;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:test';

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
        $recurso = new AgendaRecurso(['author_id' => 69, 'status' => 133]);

        $oficina = Oficina::find(1);
        $oficina->recursos()->save($recurso);
        $b = AgendaRecurso::all();

        foreach ($b as $a) {
            print_r($a->modelo_type);
        }
    }
}
