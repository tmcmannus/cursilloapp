@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADMIN Dashboard</div>

                <div class="panel-body">
                  <ul>
                  @foreach($reg_pairs as $pair)
                         <h3 style="font-size:18px;font-weight:bold;">Approved Applications</h3>
                        <li style="list-style:none">  <a href="/admin/applicationreport?pilgrim_id={{$pair->PI_ID}}">{{$pair->PI_fullname}}</a></li>

                  @endforeach
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
