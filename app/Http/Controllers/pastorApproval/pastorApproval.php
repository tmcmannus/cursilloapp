<?php

namespace App\Http\Controllers\pilgrimControllers;
use App\Http\Controllers\Controller;
use DB;

use Illuminate\Http\Request;

class pastorApproval extends Controller
{



    public function applicationApprove (Request $request, $pastor_id)
{

    $print_data = DB::table('pastor_info', 'pastor_info.sponsor_id', '=', 'sponsor_info.sponsor_id')
        ->join('pilgrim_info', 'pastor_info.pilgrim_id', '=', 'pilgrim_info.pilgrim_id')
        ->join('sponsor_info', 'pilgrim_info.sponsor_id', '=', 'sponsor_info.sponsor_id')

        ->select(
          //Pilgrim Info Select
        'pilgrim_info.pilgrim_id',
        'pilgrim_info.fullname as PI_fullname',
        'pilgrim_info.address as PI_address',
        'pilgrim_info.city as PI_city',
        'pilgrim_info.state as PI_state',
        'pilgrim_info.zip as PI_zip'
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
            //Sponsor Info Select
        'sponsor_info.fullname as SP_fullname',
        'sponsor_info.address as SP_fullname',
        'sponsor_info.city as SP_city',
        'sponsor_info.state as SP_state',
        'sponsor_info.zip as SP_zip',
        'sponsor_info.email as SP_email',
        'sponsor_info.phone as SP_phone',
        'sponsor_info.bestcalltime as SP_bestcalltime',
        'sponsor_info.applicantname as SP_applicantname',
        'sponsor_info.baptizedlutheran as SP_baptisedlutheran',
        'sponsor_info.hadcursillospousediscussion as SP_hadcursillospousediscussion',
        'sponsor_info.bothspouseattending as SP_bothspouseattending',
        'sponsor_info.singlespouseexplanation as SP_singlespouseexplanation',
        'sponsor_info.cursilloattitude as SP_cursilloattitude',
        'sponsor_info.plantosupport as SP_plantusupport',
        'sponsor_info.otherapplicantinfo as SP_otherapplicantinfo',
        'sponsor_info.goodcandidatereason as SP_goodcandidatereason',
        'sponsor_info.applicantexpectations as SP_applicantexpectations',
        'sponsor_info.signed as SP_signed',
        'sponsor_info.datesigned as SP_datesigned',
              //Pastor Info Select
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
        ->first();

    return view('admin/applicationdashboard')->with(compact('print_data'));
}

}
