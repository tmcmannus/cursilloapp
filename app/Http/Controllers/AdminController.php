<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Collection of Sponsor/Pilgrim pairs
        $reg_pairs = DB::table('pilgrim_info')
            ->join('sponsor_info', 'pilgrim_info.sponsor_id', '=', 'sponsor_info.sponsor_id')
            ->select('pilgrim_info.pilgrim_id',
                'pilgrim_info.fullname as PI_fullname',
                'sponsor_info.sponsor_id as sponsor_id',
                'sponsor_info.fullname as SP_fullname'
            )
            ->get();

        return view('/admin')->with(compact('reg_pairs'));
    }





}
