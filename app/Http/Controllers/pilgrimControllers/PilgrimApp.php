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
            ->join('sponsor_info', 'pilgrim_info.sponsor_id', '=', 'sponsor_info.sponsor_id')
            ->select(
            'pilgrim_info.pilgrim_id',
            'pilgrim_info.fullname as PI_fullname',
            'pilgrim_info.phone as PI_phone',
            'pilgrim_info.email as PI_email',
            'sponsor_info.email as SP_email',
            'sponsor_info.phone as SP_phone',
            'sponsor_info.fullname as SP_fullname')->first();
      


        return view('pilgrim/pilgrimappsuccess')->with(compact('success_data'));
    }









}
