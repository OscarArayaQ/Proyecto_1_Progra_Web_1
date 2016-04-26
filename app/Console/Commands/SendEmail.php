<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class SendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sms:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'enviado description';

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
        $correo = rand(5, 500);
        $correo2 = 'oscar'.strval($correo).'@correo.com';
        DB::table('usuarios')->insert(
            array('nombre' => 'Oscar', 'contrasenna' => 'adcd7048512e64b48da55b027577886ee5a36350',
                'correo' => $correo2));
    }
}