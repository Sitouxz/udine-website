<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()    
    {
        $quotes = DB::select("select * from quote order by RAND() LIMIT 1");
        View::share('quotes', $quotes);

        $eaverageRating = DB::select("select avg(rating) as averageRating from response where type = 'E'");
        // convert to string and remove last characters
        $eaverageRating = (string)$eaverageRating[0]->averageRating;
        $eaverageRating = substr($eaverageRating, 0, -3);
        $saverageRating = DB::select("select avg(rating) as averageRating from response where type = 'S'");
        $saverageRating = (string)$saverageRating[0]->averageRating;
        $saverageRating = substr($saverageRating, 0, -3);
        $faverageRating = DB::select("select avg(rating) as averageRating from response where type = 'F'");
        $faverageRating = (string)$faverageRating[0]->averageRating;
        $faverageRating = substr($faverageRating, 0, -3);

        View::share('eaverageRating', $eaverageRating);
        View::share('saverageRating', $saverageRating);
        View::share('faverageRating', $faverageRating);
        
    }    
}