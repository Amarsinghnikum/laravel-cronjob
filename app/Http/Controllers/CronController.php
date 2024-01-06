<?php

namespace App\Http\Controllers;

use App\Console\Commands\DailyQuote;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class CronController extends Controller
{
    /**
     * Resend attachment.
     *
     * @param  Request  $request
     * @return Response
     */
    // public function dailyQuote(Request $request)
    // {
    //     DailyQuote::dispatch();
    // }

    public function dailyQuote()
    {
        Artisan::call('schedule:run');
        // DailyQuote::dispatch();
        echo 'Sent successfully';
        //add other stuff like a success view
    }
}