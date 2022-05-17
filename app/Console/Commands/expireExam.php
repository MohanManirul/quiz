<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class expireExam extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'close:exam';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'After Specific Time Exam Will be Expire';

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
        // write the logic what i want to do 
        //return "Exam time is over";
        $this->info("Exam time is over");
    }
}
