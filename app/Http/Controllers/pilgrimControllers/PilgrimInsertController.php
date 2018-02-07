<?php

namespace App\Http\Controllers\pilgrimControllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class PilgrimInsertController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req)
    {
      $fullname = $req->input('fullname');
      $address = $req->input('address');
      $aptsuite = $req->input('aptsuite');
      $city = $req->input('city');
      $state = $req->input('state');
      $zip = $req->input('zip');
      $phone = $req->input('phone');
      $bestcalltime = $req->input('bestcalltime');
      $email = $req->input('email');
      $over18 = $req->input('over18');
      $occupation = $req->input('occupation');
      $tagname = $req->input('tagname');
      $maritalstatus = $req->input('maritalstatus', ['single', 'married', 'separated', 'divorced', 'widowed']);
      $marriagepartner = $req->input('marriagepartner');
      $homechurch = $req->input('homechurch');
      $homechurchcity = $req->input('homechurchcity');
      $homechurchpastor = $req->input('homechurchpastor');
      $homechurchpastoremail = $req->input('homechurchpastoremail');
      $homechurchattendance = $req->input('homechurchattendance');
      $specialneeds = $req->input('specialneeds');
      $reasontoattend = $req->input('reasontoattend');
      $signed = $req->input('signed');
      $datesigned = $req->input('datesigned');
      $sponsor_id = $req->input('sponsor');



      $data = array(
        'fullname'=>$fullname,
        'address'=>$address,
        'aptsuite'=>$aptsuite,
        'city'=>$city,
        'state'=>$state,
        'zip'=>$zip,
        'phone'=>$phone,
        'bestcalltime'=>$bestcalltime,
        'email'=>$email,
        'over18'=>$over18,
        'occupation'=>$occupation,
        'tagname'=>$tagname,
        'maritalstatus'=>$maritalstatus,
        'marriagepartner'=>$marriagepartner,
        'homechurch'=>$homechurch,
        'homechurchcity'=>$homechurchcity,
        'homechurchpastor'=>$homechurchpastor,
        'homechurchpastoremail'=>$homechurchpastoremail,
        'homechurchattendance'=>$homechurchattendance,
        'specialneeds'=>$specialneeds,
        'reasontoattend'=>$reasontoattend,
        'signed'=>$signed,
        'datesigned'=>$datesigned,
        'sponsor_id'=>$sponsor_id
      );
  $id = DB::table('pilgrim_info')->insertGetId($data);
    return redirect("pilgrim/pilgrimappsuccess/{$id}");
    }
}
