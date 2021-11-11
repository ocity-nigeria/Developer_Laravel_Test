<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Actions\NotifyAdminAction;
use App\Jobs\Middleware\RateLimited;

class MealRequestJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $request;
    public $i;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($request, $i)
    {
        $this->request = $request;
        $this->i = $i;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = (new NotifyAdminAction)->call($this->request, $this->i);
        dd($data);
    }

    
    /**
     * Get the middleware the job should pass through.
     *
     * @return array
     */
    public function middleware()
    {
        return [new RateLimited('RateLimit')];
    }
}
