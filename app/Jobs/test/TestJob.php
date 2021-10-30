<?php

namespace App\Jobs\test;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class TestJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $tries = 3;
    public $timeout = 30;

    public function __construct()
    {
        $this->queue = 'high';
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        return 'mohammad';
    }
}
