<?php

namespace App\Handlers;

use App\Services\QuickSortService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoggerHandler implements LoggerHandlerInterface
{

    public function handle(Request $request, QuickSortService $sort_service):void
    {
        $start_time = Carbon::now();
        Log::info('Started on '.$start_time);

//        $this->app->make('');

        $array = [1, 2, 3, 5, 6, 8, 1, 12, 15, 18, 1, 2, 3, 4, 6];
        $sort_service->sort($array);





        $memory = memory_get_usage();
        Log::debug('Amount of used memory: '.$memory.' bytes');

        $end_time = Carbon::now();
        Log::info('Ended on '.$end_time);
    }
}
