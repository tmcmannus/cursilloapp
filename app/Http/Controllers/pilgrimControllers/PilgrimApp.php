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

    public function pilgrimappsuccess (Request $request, $pilgrimId)
    {
      $pilgrimInfo = DB::table('pilgrim_info')->where('pilgrim_info.pilgrim_id', $pilgrimId)->first();
       return view('pilgrim/pilgrimappsuccess')->with(compact('pilgrimInfo'));

  }










}
