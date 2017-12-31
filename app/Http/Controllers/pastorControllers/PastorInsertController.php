<?php

namespace App\Http\Controllers\pastorControllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class PastorInsertController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req)
    {
      $fullname = $req->input('fullname');
      $churchname = $req->input('churchname');
      $address = $req->input('address');
      $city = $req->input('city');
      $state = $req->input('state');
      $zip = $req->input('zip');
      $phone = $req->input('phone');
      $email = $req->input('email');
      $goodcandidateexplanation = $req->input('goodcandidateexplanation');
      $signed = $req->input('signed');
      $date = $req->input('date');
      $approved = $req->input('approved');
      $pilgrim_id = $req->input('pilgrimID');
      $sponsor_id = $req->input('sponsorID');





      $data = array(
        'fullname'=>$fullname,
        'churchname'=>$churchname,
        'address'=>$address,
        'city'=>$city,
        'state'=>$state,
        'zip'=>$zip,
        'phone'=>$phone,
        'email'=>$email,
        'goodcandidateexplanation'=>$goodcandidateexplanation,
        'signed'=>$signed,
        'date'=>$date,
        'approved'=>$approved,
        'pilgrim_id'=>$pilgrim_id,
        'sponsor_id'=>$sponsor_id

      );
      $id = DB::table('pastor_info')->insertGetId($data);
        return redirect("pastor/pastorappsuccess/{$id}");
    }
}
