<?php

namespace App\Http\Controllers;

use App\Models\Response;
use App\Http\Requests\StoreResponseRequest;
use App\Http\Requests\UpdateResponseRequest;
use Illuminate\Support\Facades\DB;

class ResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eresponses = DB::select("select * from response where type = 'E' ORDER BY RAND() LIMIT 3");
        $sresponses = DB::select("select * from response where type = 'S' ORDER BY RAND() LIMIT 3");
        $fresponses = DB::select("select * from response where type = 'F' ORDER BY RAND() LIMIT 3");
        
        
        
        return view('index', [
            'eresponses' => $eresponses,
            'sresponses' => $sresponses,
            'fresponses' => $fresponses,
            'title' => 'Home',
        ]);
    }

    public function overall() {
        // get count where rating = 1
        $firstStar = DB::select("select count(*) as count from response where rating = 1");
        // get count where rating = 2
        $secondStar = DB::select("select count(*) as count from response where rating = 2");
        // get count where rating = 3
        $thirdStar = DB::select("select count(*) as count from response where rating = 3");
        // get count where rating = 4
        $fourthStar = DB::select("select count(*) as count from response where rating = 4");
        // get count where rating = 5
        $fifthStar = DB::select("select count(*) as count from response where rating = 5");

        // count all ratings
        $total = DB::select("select count(*) as count from response");

        // average of all ratings and round to 2 decimal places
        $average = DB::select("select avg(rating) as average from response");
        $average = (string)$average[0]->average;
        $average = substr($average, 0, -3);
        
        return view('pages.overall', [
            'firstStar' => $firstStar[0]->count,
            'secondStar' => $secondStar[0]->count,
            'thirdStar' => $thirdStar[0]->count,
            'fourthStar' => $fourthStar[0]->count,
            'fifthStar' => $fifthStar[0]->count,
            'total' => $total[0]->count,
            'average' => $average,
            'title' => 'Overall Rating'
        ]);
    }

    public function environment() {
        $responses = DB::select("select * from response where type = 'E'");
        return view('pages.environment', ['responses' => $responses, 'title' => 'Environment']);
    }

    public function service() {
        $responses = DB::select("select * from response where type = 'S'");
        return view('pages.service', ['responses' => $responses, 'title' => 'Service']);
    }
    
    public function food() {
        $responses = DB::select("select * from response where type = 'F'");
        return view('pages.food', ['responses' => $responses, 'title' => 'Food']);
    }

    public function best() {
        $responses = DB::select("select * from response where type = 'F'");
        return view('pages.best', ['responses' => $responses, 'title' => 'Best Menu']);
    }
}