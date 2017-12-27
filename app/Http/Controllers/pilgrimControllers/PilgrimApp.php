<?php

namespace App\Http\Controllers\pilgrimControllers;
use App\Http\Controllers\Controller;
use DB;

use Illuminate\Http\Request;

class PilgrimApp extends Controller
{
    public function pilgrimapp ()
    {
        $sponsors = DB::table('sponsor_info')->get()->pluck('fullname', 'sponsor_id');

        return view('pilgrim/pilgrimapp')->with(compact('sponsors'));

    }

    public function pilgrimappsuccess (Request $request, $sponsor_id)
    {



      $success_data = DB::table('pilgrim_info')
          ->join('sponsor_info', 'pilgrim_info.sponsor_id', 'sponsor_info.sponsor_id')
          ->select('pilgrim_info.pilgrim_id', 'pilgrim_info.fullname',  'sponsor_info.fullname', $sponsor_id)
          ->get();

      return view('pilgrim/pilgrimappsuccess')->with(compact('$success_data'));
  }


  //$pilgrimInfo = DB::table('pilgrim_info')->where('pilgrim_info.pilgrim_id', $pilgrimId)->first();
  // return view('pilgrim/pilgrimappsuccess')->with(compact('pilgrimInfo'));




}
