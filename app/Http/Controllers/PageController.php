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
        $trains = Train::whereDate('date', '>=', $currentDate)->orderBy('date', 'asc')->get();
        return view('app', compact('trains'));
    }
}
