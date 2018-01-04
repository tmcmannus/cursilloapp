<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
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
      //  return view('admin');
      $reg_pairs = DB::table('pilgrim_info')
      ->join('pastor_info', 'pilgrim_info.pilgrim_id', '=', 'pastor_info.pilgrim_id')
      ->select('pilgrim_info.pilgrim_id as PI_ID',
           'pilgrim_info.fullname as PI_fullname'
           )
      ->where('pastor_info.approved', '=', 1)
           ->get();
            return view('/admin')->with(compact('reg_pairs'));
    }





}
