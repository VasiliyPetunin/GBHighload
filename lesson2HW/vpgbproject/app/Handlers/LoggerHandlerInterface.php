<?php

namespace App\Handlers;

use App\Services\QuickSortService;
use Illuminate\Http\Request;

interface LoggerHandlerInterface
{
    public function handle(Request $request, QuickSortService $service):void;
}
