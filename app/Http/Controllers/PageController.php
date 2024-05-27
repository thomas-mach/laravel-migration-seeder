<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function app()
    {
        // $trains = Train::all();
        $currentDate = Carbon::now()->toDateString();
        $trains = Train::whereDate('data_di_partenza', '>=', $currentDate)->orderBy('data_di_partenza', 'asc')->get();
        return view('app', compact('trains'));
    }
}
