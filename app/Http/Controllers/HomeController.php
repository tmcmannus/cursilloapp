<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Collection of Sponsor/Pilgrim pairs
        $sponsor_pilgrim_pairs = DB::table('pilgrim_info')
            ->join('sponsor_info', 'pilgrim_info.sponsor_id', '=', 'sponsor_info.sponsor_id')
            ->select('pilgrim_info.pilgrim_id',
                'pilgrim_info.fullname as PI_fullname',
                'sponsor_info.sponsor_id as sponsor_id',
                'sponsor_info.fullname as SP_fullname'
            )
            ->get();

        return view('pastor/pastordashboard')->with(compact('sponsor_pilgrim_pairs'));
    }
}
