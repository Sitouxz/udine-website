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

    public function environment() {
        $responses = DB::select("select * from response where type = 'E'");
        return view('pages.environment', ['responses' => $responses, 'title' => 'Environemnt']);
    }

    public function service() {
        $responses = DB::select("select * from response where type = 'S'");
        return view('pages.service', ['responses' => $responses, 'title' => 'Service']);
    }
    
    public function food() {
        $responses = DB::select("select * from response where type = 'F'");
        return view('pages.food', ['responses' => $responses, 'title' => 'Food']);
    }
}