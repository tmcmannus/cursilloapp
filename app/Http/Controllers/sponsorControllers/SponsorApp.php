<?php

namespace App\Http\Controllers\sponsorControllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
class SponsorApp extends Controller
{
    public function sponsorapp ()
    {
       return view('sponsor/sponsorapp');

    }

    public function sponsorappsuccess (Request $request, $sponsorId)
    {

   
       $sponsorInfo = DB::table('sponsor_info')->where('sponsor_info.sponsor_id', $sponsorId)->first();
       return view('sponsor/sponsorappsuccess')->with(compact('sponsorInfo'));

    }
}
