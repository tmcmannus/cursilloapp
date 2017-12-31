<?php

namespace App\Http\Controllers\pastorControllers;
use App\Http\Controllers\Controller;
use DB;

use Illuminate\Http\Request;

class PastorApp extends Controller
{
    public function pastordashboard() {
        // Collection of Sponsor/Pilgrim pairs
        $sponsor_pilgrim_pairs = DB::table('pilgrim_info')
            ->join('sponsor_info', 'pilgrim_info.sponsor_id', '=', 'sponsor_info.sponsor_id')
            ->select('pilgrim_info.pilgrim_id',
                'pilgrim_info.fullname as PI_fullname',
                'sponsor_info.sponsor_id as sponsor_id',
                'sponsor_info.fullname as SP_fullname'
            )
            ->get();

        return view('pastor/pastordashboard')->with(compact('sponsor_pilgrim_pairs'));

    }
    public function pastorapp (Request $request)
    {
        $pilgrim_id = $request->query('pilgrim_id');
        $sponsor_id = $request->query('sponsor_id');
        $pilgrim_info = DB::table('pilgrim_info','pilgrim_info.fullname as PI_fullname','pilgrim_info.reasontoattend as PI_reasontoattend')
            ->where('pilgrim_id', $pilgrim_id)
            ->first();
        $sponsor_info = DB::table('sponsor_info','sponsor_info.fullname as SP_fullname','sponsor_info.goodcandidateexplanation as SP_goodcandidatereason')
            ->where('sponsor_id', $sponsor_id)
            ->first();

        return view('pastor/pastorapp')->with(compact('pilgrim_info', 'sponsor_info'));

    }

    public function pastorappsuccess ()
    {

         $success_data = DB::table('pastor_info')
            ->join('pilgrim_info', 'pastor_info.pilgrim_id', '=', 'pilgrim_info.pilgrim_id')
            ->join('sponsor_info', 'pilgrim_info.sponsor_id', '=', 'sponsor_info.sponsor_id')
            ->select(
                 'pilgrim_info.pilgrim_id',
                 'pilgrim_info.fullname as PI_fullname',
                 'pilgrim_info.phone as PI_phone',
                 'pilgrim_info.email as PI_email',
                 'sponsor_info.email as SP_email',
                 'sponsor_info.phone as SP_phone',
                 'sponsor_info.fullname as SP_fullname',
                 'pastor_info.email as PA_email',
                 'pastor_info.phone as PA_phone',
                 'pastor_info.fullname as PA_fullname')
                 ->first();

             return view('pastor/pastorappsuccess')->with(compact('success_data'));



    }

    public function RegistrarPilgrimList() {
        // Collection of Sponsor/Pilgrim pairs
        $pilgrim_pairs = DB::table('pilgrim_info')
            ->join('pastor_info', 'pastor_info.pilgrim_id', '=', 'pilgrim_info.pilgrim_id')->where('pastor_info.approved', 1)
            ->select('pilgrim_info.pilgrim_id',
                'pilgrim_info.fullname as PI_fullname'

            )
            ->get();

        return view('admin')->with(compact('pilgrim_pairs'));

    }



}
