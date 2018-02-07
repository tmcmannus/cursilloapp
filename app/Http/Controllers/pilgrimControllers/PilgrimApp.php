<?php

namespace App\Http\Controllers\pilgrimControllers;
use App\Http\Controllers\Controller;
use DB;

use Illuminate\Http\Request;

class PilgrimApp extends Controller
{
  public function pilgrimdashboard() {


      return view('pilgrim/pilgrim-dashboard');
}


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
            'pilgrim_info.address as PI_address',
            'pilgrim_info.aptsuite as PI_aptsuite',
            'pilgrim_info.city as PI_city',
            'pilgrim_info.state as PI_state',
            'pilgrim_info.zip as PI_zip',
            'pilgrim_info.phone as PI_phone',
            'pilgrim_info.bestcalltime as PI_bestcalltime',
            'pilgrim_info.email as PI_email',
            'pilgrim_info.over18 as PI_over18',
            'pilgrim_info.occupation as PI_occupation',
            'pilgrim_info.tagname as PI_tagname',
            'pilgrim_info.maritalstatus as PI_maritalstatus',
            'pilgrim_info.marriagepartner as PI_marriagepartner',
            'pilgrim_info.homechurch as PI_homechurch',
            'pilgrim_info.homechurchcity as PI_homechurchcity',
            'pilgrim_info.homechurchpastor as PI_homechurchpastor',
            'pilgrim_info.homechurchpastoremail as PI_homechurchpastoremail',
            'pilgrim_info.homechurchattendance as PI_homechurchattendance',
            'pilgrim_info.specialneeds as PI_specialneeds',
            'pilgrim_info.reasontoattend as PI_reasontoattend',
            'pilgrim_info.signed as PI_signed',
            'pilgrim_info.datesigned as PI_datesigned',
            'sponsor_info.email as SP_email',
            'sponsor_info.phone as SP_phone',

            'sponsor_info.fullname as SP_fullname')->first();



        return view('pilgrim/pilgrimappsuccess')->with(compact('success_data'));
    }









}
