<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
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
      ->select('pilgrim_info.pilgrim_id as PI_ID','pilgrim_info.fullname as PI_fullname')
      ->where('pastor_info.approved', '=', 1)
           ->get();
            return view('/admin')->with(compact('reg_pairs'));
    }

    public function printApplication (Request $request)
    {
        $pilgrim_id = $request->query('pilgrim_id');

        $application_info = DB::table('pilgrim_info')
        ->join('pastor_info', 'pastor_info.pilgrim_id', '=', 'pilgrim_info.pilgrim_id')
        ->join('sponsor_info', 'sponsor_info.sponsor_id', '=', 'pastor_info.sponsor_id')

        ->select(
                //Select Pilgrim Information Based on pilgrim_id
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
                 'pilgrim_info.homechurchattendance as PI_homechurchattendance',
                 'pilgrim_info.specialneeds as PI_specialneeds',
                 'pilgrim_info.reasontoattend as PI_reasontoattend',
                 'pilgrim_info.signed as PI_signed',
                 'pilgrim_info.datesigned as PI_datesigned',

                 //Select Sponsor Information Based on pilgrim_id
                'sponsor_info.fullname as SP_fullname',
                'sponsor_info.address as SP_address',
                'sponsor_info.city as SP_city',
                'sponsor_info.state as SP_state',
                'sponsor_info.zip as SP_zip',
                'sponsor_info.email as SP_email',
                'sponsor_info.phone as SP_phone',
                'sponsor_info.bestcalltime as SP_bestcalltime',
                'sponsor_info.applicantname as SP_applicantname',
                'sponsor_info.baptizedlutheran as SP_baptizedlutheran',
                'sponsor_info.hadcursillospousediscussion as SP_hadcursillospousediscussion',
                'sponsor_info.bothspousesattending as SP_bothspouseattending',
                'sponsor_info.singlespouseexplanation as SP_singlespouseexplanation',
                'sponsor_info.cursilloattitude as SP_cursilloattitude',
                'sponsor_info.plantosupport as SP_plantosupport',
                'sponsor_info.otherapplicantinfo as SP_otherapplicantinfo',
                'sponsor_info.goodcandidatereason as SP_goodcandidatereason',
                'sponsor_info.applicantexpectations as SP_applicantexpectations',
                'sponsor_info.signed as SP_signed',
                'sponsor_info.datesigned as SP_datesigned',

                //Select Pastor Information Based on pilgrim_id
                'pastor_info.fullname as PA_fullname',
                'pastor_info.churchname as PA_churchname',
                'pastor_info.address as PA_address',
                'pastor_info.city as PA_city',
                'pastor_info.state as PA_state',
                'pastor_info.zip as PA_zip',
                'pastor_info.phone as PA_phone',
                'pastor_info.email as PA_email',
                'pastor_info.goodcandidateexplanation as PA_goodcandidateexplanation',
                'pastor_info.signed as PA_signed',
                'pastor_info.date as PA_date')
            ->where('pilgrim_info.pilgrim_id', $pilgrim_id)
            ->first();


        return view('admin/applicationreport')->with(compact('application_info'));

    }

    public function printViewApplication (Request $request)
    {
        $pilgrim_id = $request->query('pilgrim_id');

        $application_info = DB::table('pilgrim_info')
        ->join('pastor_info', 'pastor_info.pilgrim_id', '=', 'pilgrim_info.pilgrim_id')
        ->join('sponsor_info', 'sponsor_info.sponsor_id', '=', 'pastor_info.sponsor_id')

        ->select(
                //Select Pilgrim Information Based on pilgrim_id
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
                 'pilgrim_info.homechurchattendance as PI_homechurchattendance',
                 'pilgrim_info.specialneeds as PI_specialneeds',
                 'pilgrim_info.reasontoattend as PI_reasontoattend',
                 'pilgrim_info.signed as PI_signed',
                 'pilgrim_info.datesigned as PI_datesigned',

                 //Select Sponsor Information Based on pilgrim_id
                'sponsor_info.fullname as SP_fullname',
                'sponsor_info.address as SP_address',
                'sponsor_info.city as SP_city',
                'sponsor_info.state as SP_state',
                'sponsor_info.zip as SP_zip',
                'sponsor_info.email as SP_email',
                'sponsor_info.phone as SP_phone',
                'sponsor_info.bestcalltime as SP_bestcalltime',
                'sponsor_info.applicantname as SP_applicantname',
                'sponsor_info.baptizedlutheran as SP_baptizedlutheran',
                'sponsor_info.hadcursillospousediscussion as SP_hadcursillospousediscussion',
                'sponsor_info.bothspousesattending as SP_bothspouseattending',
                'sponsor_info.singlespouseexplanation as SP_singlespouseexplanation',
                'sponsor_info.cursilloattitude as SP_cursilloattitude',
                'sponsor_info.plantosupport as SP_plantosupport',
                'sponsor_info.otherapplicantinfo as SP_otherapplicantinfo',
                'sponsor_info.goodcandidatereason as SP_goodcandidatereason',
                'sponsor_info.applicantexpectations as SP_applicantexpectations',
                'sponsor_info.signed as SP_signed',
                'sponsor_info.datesigned as SP_datesigned',

                //Select Pastor Information Based on pilgrim_id
                'pastor_info.fullname as PA_fullname',
                'pastor_info.churchname as PA_churchname',
                'pastor_info.address as PA_address',
                'pastor_info.city as PA_city',
                'pastor_info.state as PA_state',
                'pastor_info.zip as PA_zip',
                'pastor_info.phone as PA_phone',
                'pastor_info.email as PA_email',
                'pastor_info.goodcandidateexplanation as PA_goodcandidateexplanation',
                'pastor_info.signed as PA_signed',
                'pastor_info.date as PA_date')
            ->where('pilgrim_info.pilgrim_id', $pilgrim_id)
            ->first();


        return view('admin/applicationreportprint')->with(compact('application_info'));

    }

      public function delete(Request $request, $sponsor_id, $pilgrim_id)
      {
        $sponsor_id = $request->query('sponsor_id');
        $sponsor_info = DB::table('sponsor_info','sponsor_info.sponsor_id')
            ->where('sponsor_id', $sponsor_id)
            ->first();

        DB::table('pilgrim_info')
        ->where('pilgrim_info.pilgrim_id', $pilgrim_id)
        ->delete();
        DB::table('pastor_info')
        ->where('pastor_info.pilgrim_id', $pilgrim_id)
        ->delete();
        DB::table('sponsor_info')
        ->where('sponsor_info.sponsor_id', '=', $sponsor_info)
        ->delete();
        return redirect('/admin');

      }


}
