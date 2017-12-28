<?php

namespace App\Http\Controllers\pastorControllers;
use App\Http\Controllers\Controller;
use DB;

use Illuminate\Http\Request;

class PastorApp extends Controller
{
    public function pastorapp (Request $request)
    {
        $pilgrim_id = $request->query('pilgrim_id');
        $sponsor_id = $request->query('sponsor_id');
        $pilgrim_info = DB::table('pilgrim_info')
            ->where('pilgrim_id', $pilgrim_id)
            ->first();
        $sponsor_info = DB::table('sponsor_info')
            ->where('sponsor_id', $sponsor_id)
            ->first();

        return view('pastor/pastorapp')->with(compact('pilgrim_info', 'sponsor_info'));

    }

    public function pastorappsuccess ()
    {
       return view('pastor/pastorappsuccess');

    }
}






//class PastorApp extends Controller
//{
//  public function pastorapp ()
//  {
    //  $sponsor_pilgrim_pairs = DB::table('pilgrim_info')
      //    ->join('sponsor_info', 'pilgrim_info.sponsor_id', '=', 'sponsor_info.id')
      //    ->select('pilgrim_info.pilgrim_id', 'pilgrim_info.firstname', 'sponsor_info.fullname')
      //    ->get();

    // return view('pastor/pastorapp')->with(compact('$sponsor_pilgrim_pairs'));


    //    $pilgrims = DB::table('pilgrim_info')->get()->pluck('fullname', 'pilgrim_id');

    //    return view('pastor/pastorapp')->with(compact('pilgrims'));

  //  }


  //  public function pastorappsuccess (Request $request, $pastorId)
  //  {
  //    public function pastorappsuccess (Request $request, $pastor_id)
  //    {
//
  //        $success_data = DB::table('pastor_info')
    //          ->join('pilgrim_info', 'pastor_info.pilgrim_id', '=', 'pilgrim_info.pilgrim_id')
      //        ->join('sponsor_info', 'pilgrim_info.sponsor_id', '=', 'sponsor_info.sponsor_id')
        //      ->select(
          //    'pilgrim_info.pilgrim_id',
      //        'pilgrim_info.fullname as PI_fullname',
        //      'pilgrim_info.phone as PI_phone',
        //      'pilgrim_info.email as PI_email',
        //      'sponsor_info.email as SP_email',
        //      'sponsor_info.phone as SP_phone',
        //      'sponsor_info.fullname as SP_fullname',
        //      'pastor_info.email as PA_email',
        //      'pastor_info.phone as PA_phone',
        //      'pastor_info.fullname as PA_fullname')
        //      ->first();

      //    return view('pastor/pastorappsuccess')->with(compact('success_data'));
  //    }






  //  $pastorInfo = DB::table('pastor_info')->where('pastor_info.pastor_id', $pastorId)->first();
  //  return view('pastor/pastorappsuccess')->with(compact('pastorInfo'));
//    }
//}
